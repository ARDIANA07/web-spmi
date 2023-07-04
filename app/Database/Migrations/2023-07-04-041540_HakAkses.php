<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HakAkses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_hakakses' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'jabatan_id' => [
                'type' => 'INT',
                'constraint' => 50,
            ],
            'akses_id' => [
                'type' => 'INT',
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

        $this->forge->addPrimaryKey('id_hakakses');
        $this->forge->createTable('hak_akses');
    }

    public function down()
    {
        //
    }
}
