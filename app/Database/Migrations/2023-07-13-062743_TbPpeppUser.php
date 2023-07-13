<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPpeppUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ppepp_user' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'ppepp_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'ketercapaian' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'file' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'link' => [
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

        $this->forge->addPrimaryKey('id_ppepp_user');
        $this->forge->createTable('tb_ppepp_user');
    }

    public function down()
    {
        $this->forge->dropTable('tb_ppepp_user');
    }
}
