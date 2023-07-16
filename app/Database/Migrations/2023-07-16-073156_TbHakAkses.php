<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbHakAkses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_hak_akses' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'pengguna_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'akses_id' => [
                'type' => 'INT',
                'constraint' => 5,
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

        $this->forge->addPrimaryKey('id_hak_akses');
        $this->forge->createTable('tb_hak_akses');
    }

    public function down()
    {
        $this->forge->dropTable('tb_hak_akses');
    }
}
