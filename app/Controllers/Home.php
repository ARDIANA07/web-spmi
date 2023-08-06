<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;

class Home extends BaseController
{
    public function index()
    {
        $dataGrafik = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            'data' => [120, 220, 180, 280, 150, 200]
        ];

        return view('admin/home', ['dataGrafik' => $dataGrafik]);
    }
}
