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
        $rules = [
            'name' => 'required |min_length[3] |max_lengtt[20]',
            'email' => 'required |min_length[6] |max_length[50]|valid_email |is_unique[user.email]',
            'password' => 'required |min_length[6] |max_length[100]',
            'confpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new User();
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
    }
}
