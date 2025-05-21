<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBookTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'penulis'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'penerbit'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],

            'tahun_terbit'=> [
                'type'       => 'YEAR',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('book');
    }

    public function down()
    {
        $this->forge->dropTable('book');
    }
}
