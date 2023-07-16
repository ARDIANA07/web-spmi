<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Profile extends ResourceController
{

    public function __construct()
    {
        $this->model = new \App\Models\Profile();
    }

    public function index()
    {
        $dataProfile = $this->model->findAll();

        return view('admin/profile/index', ['tb_profile' => $dataProfile]);
    }

    public function show($id = null)
    {
        //
    }


    public function new()
    {
        return view('admin/profile/add');
    }


    public function create()
    {
        $dataProfile = $this->request->getPost();
        $this->model->insert($dataProfile);

        session()->setFlashdata('success', 'Data Berhasil ditambahkan');

        return redirect()->to('/profile')->with('success', 'Profile created successfully');
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
