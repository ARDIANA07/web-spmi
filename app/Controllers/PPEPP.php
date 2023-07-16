<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Ppepp extends ResourceController
{
    public function __construct()
    {
        $this->model = new \App\Models\PpeppModel();
    }

    public function index()
    {
        $dataPepp = $this->model->findAll();

        return view('admin/ppepp/index', ['tb_ppepp' => $dataPepp]);
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

        return redirect()->to('/Ppepp')->with('success', 'Ppepp created successfully');
    }


    public function edit($id = null)
    {
        $dataPengguna = $this->model->where('id', $id)->first();

        return view('admin/ppepp/edit', ['tb_ppepp' => $dataPengguna]);
    }


    public function update($id = null)
    {
        $dataPengguna = $this->request->getPost();
        $this->model->where('id', $id)->set($dataPengguna)->update();

        session()->setFlashdata('success', 'Data Berhasil di update');
        return redirect()->to('/ppepp');
    }


    public function delete($id = null)
    {
        $this->model->delete($id);

        session()->setFlashdata('success', 'Data Berhasil dihapus');
        return redirect()->to('/Ppepp');
    }
}
