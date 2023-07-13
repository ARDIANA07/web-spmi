<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPpepp extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ppepp' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'jenis' => [
                'type' => 'ENUM',
                'constraint' => ['Penetapan', 'Pelaksanaan', 'Evaluasi', 'Pengendalian', 'Peningkatan'],
                'default' => 'Penetapan',
            ],
            'kriteria' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'standar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addPrimaryKey('id_ppepp');
        $this->forge->createTable('tb_ppepp');
    }

    public function down()
    {
        $this->forge->dropTable('tb_ppepp');
    }
}
