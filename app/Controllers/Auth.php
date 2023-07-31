<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
}
