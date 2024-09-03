<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->getActiveUsers();

        return view('users/index', $data);
        // return $this->response->setJSON($data);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $model = new UserModel();

        // Validation rules
        $rules = [
            'username'        => 'required|min_length[8]|max_length[100]',
            'email'           => 'required|valid_email',
            'password'        => 'required|min_length[8]|max_length[255]',
            'status'          => 'required|in_list[active,inactive]',
            'confirm_password' => 'matches[password]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Hash the password
        $password = $this->request->getPost('password');

        // Save data
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'status'   => $this->request->getPost('status'),
        ];

        if ($model->save($data)) {
            return redirect()->to('/users')->with('message', 'User berhasil dibuar!');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }
}
