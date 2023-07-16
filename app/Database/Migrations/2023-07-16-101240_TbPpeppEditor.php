<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPpeppEditor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ppepp_editor' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'ppepp_user_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'komentar' => [
                'type' => 'TEXT',
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

        $this->forge->addPrimaryKey('id_ppepp_editor');
        $this->forge->createTable('tb_ppepp_editor');
    }

    public function down()
    {
        $this->forge->dropTable('tb_ppepp_editor');
    }
}
