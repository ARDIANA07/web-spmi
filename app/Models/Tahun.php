<?php

namespace App\Models;

use CodeIgniter\Model;

class Tahun extends Model
{
    protected $table           = 'tb_tahun';
    protected $primaryKey      = 'id_tahun';
    protected $returnType       = 'object';
    protected $useSoftDeletes  = false;
    protected $allowedFields   = ['tahun', 'id_status'];
    protected $useTimestamps   = true;

    public function joinTabelStatus()
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join('tb_status', 'tb_status.id_status =tb_tahun.id_status');
        $results = $builder->get()->getResult();
        return $results;
    }
}
