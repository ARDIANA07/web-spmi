<?php

namespace App\Models;

use CodeIgniter\Model;

class PpeppUserModel extends Model
{
    protected $table           = 'tb_ppepp_user';
    protected $primaryKey      = 'id_ppepp_user';
    protected $returntype      = 'object';
    protected $useSoftDeletes  = false;
    protected $allowedFields   = ['ppepp_id', 'ketercapaian', 'file', 'link'];
    protected $useTimestamps   = true;

    public function joinTabelPpepp()
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join('tb_ppepp', 'tb_ppepp.id_ppepp =tb_ppepp_user.ppepp_id');
        $results = $builder->get()->getResult();
        return $results;
    }
}
