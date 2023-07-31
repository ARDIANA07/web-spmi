<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class Register extends BaseController
{

    public function index()
    {
        helper(['form']);
        $data = [];
        return view('register', $data);
    }

    public function save()
    {
        helper(['form']);
        $model = new User();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        $model->saveUser($data);

        session()->setFlashdata('success', 'Registrasi Berhasil');
        return redirect()->to('/admin/login');
    }
}