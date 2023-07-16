<?php

namespace App\Controllers;

use App\Models\PpeppUser as ModelsPpeppUser;
use CodeIgniter\RESTful\ResourceController;


class PpeppUser extends ResourceController
{
    public function __construct()
    {
        $this->model = new \App\Models\PpeppUserModel();
        $this->model = new \App\Models\PpeppModel();
    }

    public function index()
    {
        $dataPpeppUser = new \App\Models\PpeppUserModel();
        $results = $dataPpeppUser->joinTabelPpepp();
        $data['results'] = $results;

        return view('user/ppepp_user', $data);
    }


    public function show($id = null)
    {
        //
    }


    public function new()
    {
        return view('user/addppepp');
    }


    public function create()
    {

        $dataPpeppUser = $this->request->getPost();
        $this->model->insert($dataPpeppUser);

        session()->setFlashdata('success', 'Data Berhasil ditambahkan');

        return redirect()->to('ppeppuser')->with('success', 'Ppepp created successfully');
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
        $this->model->delete($id);

        session()->setFlashdata('success', 'Data Berhasil dihapus');
        return redirect()->to('/ppeppuser');
    }
}
