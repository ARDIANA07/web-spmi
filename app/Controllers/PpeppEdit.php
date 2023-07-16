<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class PpeppEdit extends ResourceController
{
    public function __construct()
    {
        $this->model = new \App\Models\PpeppEditModel();
        $this->model = new \App\Models\PpeppUserModel();
    }

    public function index()
    {
        $dataPpeppEdit = new \App\Models\PpeppEditModel();
        $results = $dataPpeppEdit->joinTabelPpeppEdit();
        $data['results'] = $results;

        return view('editor/ppepp_edit', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
