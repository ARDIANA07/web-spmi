<?php

namespace App\Models;

use CodeIgniter\Model;

class Laporan extends Model
{
    protected $table           = 'laporan';
    protected $primaryKey      = 'id';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['laporan'];
    protected $useTimestamps   = true;
}
