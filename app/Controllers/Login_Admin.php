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

    public function process_login()
    {
        $session = session();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new User();
        $user = $model->getUserByEmail($email);

        if ($user) {
            $hashedPassword = $user['password'];
            $password = $user['password'];

            if (password_verify($password, $hashedPassword)) {
                $session->set('isLoggedIn', true);
                $session->set('email', $user['email']);
                return redirect()->to('/home'); // Ganti '/dashboard' dengan halaman setelah login berhasil
            } else {
                return redirect()->back()->with('error', 'Kata sandi salah.');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan.');
        }
    }

    public function logout()
    {
        $session = session();
        $session->remove('isLoggedIn');
        $session->remove('email');
        return redirect()->to('/login'); // Ganti '/login' dengan halaman login Anda
    }
}