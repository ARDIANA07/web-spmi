<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile extends Model
{
    protected $table           = 'tb_profile';
    protected $primaryKey      = 'id_profile';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['prodi', 'visi', 'misi', 'tujuan'];
    protected $useTimestamps   = true;
}
