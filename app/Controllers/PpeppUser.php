<?php

namespace App\Controllers;

use App\Models\PpeppUser as ModelsPpeppUser;
use CodeIgniter\RESTful\ResourceController;
use App\Models\PpeppModel;
use App\Models\PpeppUserModel;


class PpeppUser extends ResourceController
{
    protected $helpers = ['custome'];

    public function __construct()
    {
        // $this->Ppepp = new PpeppModel();
        // $this->Ppeppuser = new PpeppUser();
    }

    public function index()
    {
        $dataPpeppUser = $this->model->findAll();

        return view('user/ppepp_user', ['tb_ppepp_user' => $dataPpeppUser]);
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

        $users = $this->model->importDataFromProfile();

        // Mengirim data pengguna dengan data dari tabel tb_ppepp ke halaman create tb_ppepp_user
        return view('user/ppepp_user', ['tb_ppepp_user' => $users]);
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