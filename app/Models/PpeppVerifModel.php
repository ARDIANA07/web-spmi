<?php

namespace App\Models;

use CodeIgniter\Model;

class PpeppVerifModel extends Model
{
    protected $table           = 'tb_ppepp_verifikator';
    protected $primaryKey      = 'id_ppepp_verifikator';
    protected $returnType       = 'object';
    protected $useSoftDeletes  = false;
    protected $allowedFields   = ['ppepp_id', 'ppepp_user_id', 'komentar', 'verif'];
    protected $useTimestamps   = true;

    public function joinTabelPpeppVerif()
    {

        $tabel2 = 'tb_ppepp';
        $tabel3 = 'tb_ppepp_user';

        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join($tabel2, 'tb_ppepp_verifikator.ppepp_id =tb_ppepp.id_ppepp');
        $builder->join($tabel3, 'tb_ppepp_verifikator.ppepp_user_id =tb_ppepp_user.id_ppepp_user');
        $results = $builder->get()->getResult();
        return $results;
    }
}
