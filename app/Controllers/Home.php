<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;

class Home extends BaseController
{
    public function index()
    {
        return view('home/index');
    }
}
