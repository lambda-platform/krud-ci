<?php

namespace Krud\Database\Migrations;

use CodeIgniter\Database\Migration;

class Krud extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'template' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'form' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
            'grid' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
            ],

            'actions' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ],

        ]);$this->forge->addPrimaryKey('id');
        $this->forge->createTable('krud');
    }

    public function down()
    {
        $this->forge->dropTable('krud');
    }
}
