<?php

namespace App\Models;

use CodeIgniter\Model;

class PpeppModel extends Model
{
    protected $table           = 'tb_ppepp';
    protected $primaryKey      = 'id';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['jenis', 'kriteria', 'standar'];
    protected $useTimestamps   = true;
}
