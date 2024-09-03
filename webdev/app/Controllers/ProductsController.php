<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductsModel;

class ProductsController extends BaseController
{
    public function index()
    {
        $categoryId = $this->request->getGet('category_id');

        $model = new ProductsModel();
        $data = $model->getProductsByCategory($categoryId);

        return $this->response->setJSON($data);
    }
}
