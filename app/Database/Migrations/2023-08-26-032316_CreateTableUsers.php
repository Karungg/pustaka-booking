<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUsers extends Migration
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
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'role' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'is_active' => [
                'type'       => 'INT',
                'constraint' => '1',
            ],
            'tanggal_input' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
