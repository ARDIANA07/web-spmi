<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile extends Model
{
    protected $table           = 'profile';
    protected $primaryKey      = 'id';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['prodi', 'visi', 'misi', 'tujuan'];
    protected $useTimestamps   = true;
}
