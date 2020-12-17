<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datapns extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat' => [
				'type'           => 'varchar',
				'constraint'     => '100',
			],
			'created_at' => [
				'type'           => 'datetime',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'datetime',
				'null'           => true,
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('datapns');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('datapns');
	}
}
