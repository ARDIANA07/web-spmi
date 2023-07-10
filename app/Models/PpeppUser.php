<?php

namespace App\Models;

use CodeIgniter\Model;

class PpeppUser extends Model
{
    protected $table           = 'tb_ppepp_user';
    protected $primaryKey      = 'id';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['jenis', 'kriteria', 'standar', 'ketercapaian', 'file', 'link'];
    protected $useTimestamps   = true;
}
