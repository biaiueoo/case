<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'deskripsi' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'harga'       => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'category_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
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
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
