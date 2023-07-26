<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Akses extends ResourceController
{
    public function __construct()
    {
        $this->model = new \App\Models\HakAkses();
        $this->model = new \App\Models\Pengguna();
        $this->model = new \App\Models\AksesModel();
    }
    public function index()
    {
        $dataAkses = new \App\Models\HakAkses();
        $results = $dataAkses->joinTabel();
        $data['results'] = $results;

        return view('admin/akses/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $dataAkses = new \App\Models\HakAkses();
        $dataAkses = new \App\Models\AksesModel();
        $data['result'] = $dataAkses->find($id);

        if ($data['result']) {
            if ($id == 1) {
                return view('user/index', $data);
            } elseif ($id == 2) {
                return view('editor/index', $data);
            } elseif ($id == 3) {
                return view('verifikator/index', $data);
            }
        } else {
            return redirect('/akses');
        }
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
