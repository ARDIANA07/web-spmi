<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna extends Model
{
    protected $table           = 'tb_pengguna';
    protected $primaryKey      = 'id_pengguna';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['name', 'jabatan'];
    protected $useTimestamps   = true;
}
