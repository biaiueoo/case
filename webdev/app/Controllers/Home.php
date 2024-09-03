<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // load fungsi helper
        helper('custom');

        // input data
        $data = [10, 20, 'a', 30, 'b', 40, 50];
        $result = calculate_average($data);

        // menampilkan data ke view
        return view('mean', [
            'numeric_values' => $result['numeric'],
            'non_numeric_values' => $result['non_numeric'],
            'average' => $result['average']
        ]);
    }

    
}
