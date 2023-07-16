<?php

namespace App\Models;

use CodeIgniter\Model;

class HakAkses extends Model
{
    protected $table           = 'tb_hak_akses';
    protected $primaryKey      = 'id_hak_akses';
    protected $returnType       = 'object';
    protected $useSoftDeletes  = false;
    protected $allowedFields   = ['pengguna_id', 'akses_id'];
    protected $useTimestamps   = true;

    public function joinTabel()
    {
        $tabel2 = 'tb_pengguna';
        $tabel3 = 'tb_akses';

        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join($tabel2, 'tb_hak_akses.pengguna_id =tb_pengguna.id_pengguna');
        $builder->join($tabel3, 'tb_hak_akses.akses_id =tb_akses.id_akses');
        $results = $builder->get()->getResult();
        return $results;
    }
}
