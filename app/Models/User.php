<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'user'; // Sesuaikan dengan nama tabel pengguna di database Anda
    protected $primaryKey = 'id_user'; // Sesuaikan dengan kolom kunci utama tabel
    protected $allowedFields = ['name', 'email', 'password']; // Kolom yang diperbolehkan diisi oleh pengguna

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
