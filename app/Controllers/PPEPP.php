<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Ppepp extends ResourceController
{
    public function __construct()
    {
        $this->model = new \App\Models\Profile();
    }

    public function index()
    {
        $dataPpepp = $this->model->findAll();

        return view('admin/ppepp/index', ['tb_ppepp' => $dataPpepp]);
    }


    public function show($id = null)
    {
        //
    }


    public function new()
    {
        return view('admin/ppepp/add');
    }


    public function create()
    {
        $dataPpepp = $this->request->getPost();
        $this->model->insert($dataPpepp);

        session()->setFlashdata('success', 'Data Berhasil ditambahkan');

        return redirect()->to('/ppepp')->with('success', 'Ppepp created successfully');
    }


    public function edit($id = null)
    {
        //
    }


    public function update($id = null)
    {
        //
    }


    public function delete($id = null)
    {
        //
    }
}
