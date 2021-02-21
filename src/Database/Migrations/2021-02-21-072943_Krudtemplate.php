<?php

namespace Krud\Database\Migrations;

use CodeIgniter\Database\Migration;

class Krudtemplate extends Migration
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
            'template_name' => [
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
        $this->forge->createTable('krud_templates');
    }

    public function down()
    {
        $this->forge->dropTable('krud_templates');
    }
}
