<?php

namespace App\Models;

use CodeIgniter\Model;

class AksesModel extends Model
{
    protected $table           = 'tb_akses';
    protected $primaryKey      = 'id_akses';
    protected $returnType       = 'object';
    protected $useSoftDeletes  = false;
    protected $allowedFields   = ['akses'];
    protected $useTimestamps   = true;
}
