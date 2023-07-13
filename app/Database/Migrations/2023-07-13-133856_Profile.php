<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_profile' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'prodi' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'visi' => [
                'type' => 'TEXT',
            ],
            'misi' => [
                'type' => 'TEXT',
            ],
            'tujuan' => [
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

        $this->forge->addPrimaryKey('id_profile');
        $this->forge->createTable('profile');
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}
