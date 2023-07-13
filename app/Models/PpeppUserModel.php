<?php

namespace App\Models;

use CodeIgniter\Model;

class PpeppUserModel extends Model
{
    protected $table           = 'tb_ppepp_user';
    protected $primaryKey      = 'id';
    protected $returntype      = 'object';
    protected $useSoftDeletes  = false;
    protected $allowedFields   = ['ppepp_id', 'ketercapaian', 'file', 'link'];
    protected $useTimestamps   = true;

    public function getAll()
    {
        $builder = $this->db->table('tb_ppepp_user');
        $builder->join('tb_ppepp', 'tb_ppepp.id = tb_ppepp_user.ppepp_id');
        $query = $builder->get();

        return $query->getResult();
    }
}
