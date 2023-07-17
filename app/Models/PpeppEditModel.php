<?php

namespace App\Models;

use CodeIgniter\Model;

class PpeppEditModel extends Model
{
    protected $table           = 'tb_ppepp_editor';
    protected $primaryKey      = 'id_ppepp_edit';
    protected $returnType       = 'object';
    protected $useSoftDeletes  = false;
    protected $allowedFields   = ['tahun', 'id_status'];
    protected $useTimestamps   = true;

    public function joinTabelPpeppEdit()
    {

        $tabel2 = 'tb_ppepp';
        $tabel3 = 'tb_ppepp_user';

        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join($tabel2, 'tb_ppepp_editor.ppepp_id =tb_ppepp.id_ppepp');
        $builder->join($tabel3, 'tb_ppepp_editor.ppepp_user_id =tb_ppepp_user.id_ppepp_user');
        $results = $builder->get()->getResult();
        return $results;
    }
}
