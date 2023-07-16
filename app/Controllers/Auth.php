<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Auth extends ResourceController
{
    public function __construct()
    {
        $this->model = new \App\Models\User();
    }

    public function index()
    {

        return view('auth/login');
    }

    public function loginProsess()
    {
        $data = $this->request->getPost();
        $query = $this->model->where(['name' => $data['username']]);
        $user = $query->getRow();
    }

    public function show($id = null)
    {
        //
    }


    public function new()
    {
        return view('admin/pengguna/add');
    }


    public function create()
    {
        $dataPengguna = $this->request->getPost();
        $this->model->insert($dataPengguna);

        session()->setFlashdata('success', 'Data Berhasil ditambahkan');

        return redirect()->to('/pengguna');
    }


    public function edit($id = null)
    {
        $dataPengguna = $this->model->where('id_pengguna', $id)->first();

        return view('admin/pengguna/edit', ['pengguna' => $dataPengguna]);
    }


    public function update($id = null)
    {
        $dataPengguna = $this->request->getPost();
        $this->model->where('id_pengguna', $id)->set($dataPengguna)->update();

        session()->setFlashdata('success', 'Data Berhasil di update');
        return redirect()->to('/pengguna');
    }


    public function delete($id = null)
    {
        $this->model->delete($id);

        session()->setFlashdata('success', 'Data Berhasil dihapus');
        return redirect()->to('/pengguna');
    }
}
