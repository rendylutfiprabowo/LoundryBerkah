<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePemasukanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pemasukan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tgl_pemasukan' => [
                'type' => 'DATE',
                'constraint' => 11,
            ],
            'jumlah_pemasukan' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => 'true',
            ]
        ]);
        $this->forge->addKey('id_pemasukan', true);
        $this->forge->createTable('pemasukan');
    }

    public function down()
    {
        $this->forge->dropTable('pemasukan');
    }
}
