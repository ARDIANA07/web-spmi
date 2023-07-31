<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class Login_Verif extends BaseController
{

    public function index()
    {
        helper(['form']);
        $data = [];
        return view('verifikator/login', $data);
    }
    public function process()
    {
        // $rules = [
        //     'email' => 'required',
        //     'password' => 'required'
        // ];
        // $validate = $this->validate($rules);
        // if ($validate) {
        //     $email = $this->request->getPost('email');
        //     $password = $this->request->getPost('password');

        //     $userModel = new User();
        //     $user = $userModel->asObject()->where('email', $email)->first();
        //     if ($user) {
        //         if (password_verify($password, $user->password)) {
        //             session()->set([
        //                 'name' => $user->name,
        //                 'email' => $user->email,
        //                 'logged_in' => true
        //             ]);
        //             return redirect('/home');
        //         }
        //     }
        //     return redirect('/');
        // }
        // return redirect('/');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}