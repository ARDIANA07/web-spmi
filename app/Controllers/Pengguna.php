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
