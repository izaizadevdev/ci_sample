<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Users extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'user_id' => array(
				'type'			=> 'INT',
				'constaraint'		=> 11,
				'unsigned'		=> TRUE,
				'auto_increment'	=> TRUE
			),
			'username' => array(
				'type'		=> 'VARCHAR',
				'constraint'	=> 255
			),
			'password' => array(
				'type'		=> 'VARCHAR',
				'constraint'	=> 255
			),
			'email' => array(
				'type'		=> 'VARCHAR',
				'constraint'	=> 255
			),
			'is_enabled' => array(
				'type'		=> 'TINYINT',
				'constaraint'	=> 1,
				'default'		=> 1
			),
			'modified_datetime' => array(
				'type'		=> 'DATETIME',
				'default'		=> '0000-00-00 00:00:00'
			),
			'registered_datetime' => array(
				'type'		=> 'DATETIME',
				'default'		=> '0000-00-00 00:00:00'
			)
		));
		
		$this->dbforge->add_key('user_id', TRUE);
		$this->dbforge->create_table('users');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}
