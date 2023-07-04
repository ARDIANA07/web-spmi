<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tahun extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tahun' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tahun' => [
                'type' => 'ENUM',
                'constraint' => ['2020', '2021', '2022', '2023', '2024'],
                'default' => '2023',
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

        $this->forge->addKey('id_tahun');
        $this->forge->createTable('tahun');
    }

    public function down()
    {
        $this->forge->dropTable('tahun');
    }
}