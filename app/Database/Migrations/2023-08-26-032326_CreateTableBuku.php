<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableBuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_buku' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'id_kategori' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'pengarang' => [
                'type'       => 'VARCHAR',
                'constraint' => '64',
            ],
            'tahun_terbit' => [
                'type'       => 'YEAR',
                'constraint' => '4',
            ],
            'isbn' => [
                'type'       => 'VARCHAR',
                'constraint' => '64',
            ],
            'stok' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'dipinjam' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'dibooking' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => '256',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
