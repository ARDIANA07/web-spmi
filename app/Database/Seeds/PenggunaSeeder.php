<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Ardiana Abdul',
                'jabatan' => 'Staf IT'
            ],
            [
                'name' => 'Ardi',
                'jabatan' => 'IT'
            ]
        ];

        $this->db->table('pengguna')->insertBatch($data);
    }
}
