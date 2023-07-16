<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table           = 'tb_status';
    protected $primaryKey      = 'id_status';
    protected $returnType       = 'object';
    protected $useSoftDeletes  = false;
    protected $allowedFields   = ['status'];
    protected $useTimestamps   = true;
}
