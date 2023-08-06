<?php

namespace App\Controllers;

use App\Models\User;

class Login_Admin extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        return view('admin/login', $data);
    }

    public function login_action()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = new User();
        $data = $user->asObject()->where('email', $email)->first();
        if ($data) {
            $session = session();
            if (password_verify($password, $data->password)) {
                //create session
                $login = [
                    'name' => $data['name'],
                    'email' => $data['email'],
                ];
                $session->set($login);
                return redirect()->to('/home');
            } else {
                $session->setFlashdata('msg', 'Email/Password invalid');
                return redirect()->to('admin/login');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
