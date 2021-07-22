<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Esptjb extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'no_spp' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'no_spm' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'tanggal' => [
				'type' => 'DATETIME',
			],
			'nilai' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'id_pegawai' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],
			'created_by' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_date' => [
				'type' => 'DATETIME',
			],
			'updated_by' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => TRUE,
			],
			'updated_date' => [
				'type' => 'DATETIME',
				'null' => TRUE,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('id_pegawai', 'pegawai', 'id');
		$this->forge->createTable('sptjb');
	}

	public function down()
	{
		$this->forge->dropTable('sptjb');
	}
}
