<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbAkses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_akses' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'akses' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
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

        $this->forge->addPrimaryKey('id_akses');
        $this->forge->createTable('tb_akses');
    }

    public function down()
    {
        $this->forge->dropTable('tb_akses');
    }
}
