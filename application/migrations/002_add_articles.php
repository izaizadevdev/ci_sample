<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Articles extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'article_id' => array(
				'type'			=> 'INT',
				'constaraint'		=> 11,
				'unsigned'		=> TRUE,
				'auto_increment'	=> TRUE
			),
			'title' => array(
				'type'		=> 'VARCHAR',
				'constraint'	=> 255
			),
			'body' => array(
				'type'		=> 'TEXT'
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
		
		$this->dbforge->add_key('article_id', TRUE);
		$this->dbforge->create_table('articles');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('articles');
	}
}
