<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table           = 'user';
    protected $primaryKey      = 'id_user';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['name', 'email', 'password'];
    protected $useTimestamps   = true;

    //menambahkan fungsi untuk memeriksa login
    public function getByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    //menambahkan fungsi untuk menyimpan data user baru
    public function saveUser($data)
    {
        return $this->insert($data);
    }
}