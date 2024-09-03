<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'unique'         => true,
            ],
            'password'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'status'      => [
                'type'           => 'ENUM',
                'constraint'     => ['active', 'inactive'],
                'default'        => 'inactive',
            ],
            'created_at'  => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
                'default'        => null,
            ],
            'updated_at'  => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
                'default'        => null,
                'on_update'      => 'CURRENT_TIMESTAMP',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');

        // Set default value for created_at using raw SQL
        $db = \Config\Database::connect();
        $db->query("ALTER TABLE users MODIFY created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
