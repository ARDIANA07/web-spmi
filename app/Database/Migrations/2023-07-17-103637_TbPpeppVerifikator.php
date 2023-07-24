<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPpeppVerifikator extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ppepp_verifikator' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'ppepp_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'ppepp_user_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'komentar' => [
                'type' => 'TEXT',
            ],
            'verif' => [
                'type' => 'ENUM',
                'constraint' => ['Ya', 'Tidak'],
                'default' => 'Ya',
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

        $this->forge->addPrimaryKey('id_ppepp_verifikator');
        $this->forge->createTable('tb_ppepp_verifikator');
    }

    public function down()
    {
        $this->forge->dropTable('tb_ppepp_verifikator');
    }
}
