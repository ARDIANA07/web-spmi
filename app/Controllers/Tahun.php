<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Session\Session;
use App\Models\StatusModel;


class Tahun extends ResourceController
{
    public function __construct()
    {
        $this->model = new \App\Models\Tahun();
        $this->model = new \App\Models\StatusModel();
    }

    public function index()
    {
        $dataTahun = new \App\Models\Tahun();
        $results = $dataTahun->joinTabelStatus();
        $data['results'] = $results;

        return view('admin/tahun/index', $data);
    }


    public function show($id = null)
    {
        //
    }


    public function new()
    {
        return view('admin/tahun/add');
    }


    public function create()
    {
        $dataTahun = $this->request->getPost();
        $this->model->insert($dataTahun);

        session()->setFlashdata('success', 'Data Berhasil ditambahkan');

        return redirect()->to('/tahun')->with('success', 'tahun created successfully');
    }


    public function edit($id = null)
    {
        $datatahun = $this->model->where('id', $id)->first();

        return view('admin/tahun/edit', ['tahun' => $datatahun]);
    }


    public function update($id = null)
    {
        $datatahun = $this->request->getPost();
        $this->model->where('id', $id)->set($datatahun)->update();

        session()->setFlashdata('success', 'Data Berhasil diupdate');
        return redirect()->to('/tahun');
    }
}
