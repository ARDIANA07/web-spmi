<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table           = 'products';
    protected $primaryKey      = 'id';
    protected $useSoftDeletes  = true;
    protected $allowedFields   = ['name', 'price', 'stock'];
    protected $useTimestamps   = true;
}
