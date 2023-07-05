<?php

namespace App\Models;

use CodeIgniter\Model;

class Tahun extends Model
{
    protected $table           = 'tahun';
    protected $primaryKey      = 'id_tahun';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['tahun', 'status'];
    protected $useTimestamps   = true;
}
