<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table           = 'user';
    protected $primaryKey      = 'id_user';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['name', 'email', 'password'];
    protected $useTimestamps   = true;
}
