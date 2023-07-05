<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Pengguna extends ResourceController
{
    public function __construct()
    {
        $this->model = new \App\Models\Pengguna();
    }

    public function index()
    {
        $dataProduct = $this->model->findAll();

        return view('admin/pengguna/index', ['pengguna' => $dataProduct]);
    }


    public function show($id = null)
    {
        //
    }


    public function new()
    {
        //
    }


    public function create()
    {
        //
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

        return redirect()->to('/pengguna');
    }


    public function delete($id = null)
    {
        //
    }
}
