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

        return view('editor/ppeppeditor', $data);
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
        $dataPpeppEdit = new \App\Models\PpeppEditModel();
        $results = $dataPpeppEdit->joinTabelPpeppEdit();
        $data['results'] = $results;

        $dataPengguna = $this->model->where('id', $id)->first();

        return view('editor/ppeppedit/edit', ['tb_ppeppeditor' => $dataPengguna, 'results' => $data]);
    }


    public function update($id = null)
    {
        $dataPengguna = $this->request->getPost();
        $this->model->where('id', $id)->set($dataPengguna)->update();

        session()->setFlashdata('success', 'Data Berhasil di update');
        return redirect()->to('/ppeppeditor');
    }

    public function delete($id = null)
    {
        //
    }
}
