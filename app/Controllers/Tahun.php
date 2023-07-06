<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Session\Session;


class Tahun extends ResourceController
{
    public function __construct()
    {
        $this->model = new \App\Models\Tahun();
    }

    public function index()
    {
        $dataTahun = $this->model->findAll();

        return view('admin/tahun/index', ['tahun' => $dataTahun]);
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

        //flash message
        session()->setFlashdata('message', 'Post Berhasil Disimpan');



        return redirect()->to('/tahun')->with('success', 'tahun created successfully');
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
        $this->model->delete($id);

        return redirect()->to('/pengguna');
    }
}
