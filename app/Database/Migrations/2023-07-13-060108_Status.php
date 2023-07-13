<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Status extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_status' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['Aktif', 'Non-Aktif'],
                'default' => 'Aktif',
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

        $this->forge->addKey('id_status');
        $this->forge->createTable('status');
    }

    public function down()
    {
        $this->forge->dropTable('tahun');
    }
}
