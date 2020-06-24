<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Users extends CI_Migration
{
	 public function up()
	{
			$this->dbforge->add_field(array(
				'id' 				=> array(
						'type' 				=> 'INT',
						'constraint' 		=> 5,
						'unsigned' 			=> TRUE,
						'auto_increment' 	=> TRUE
				),
				'first_name'		=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
				),
				'last_name'			=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
				),
				'email'				=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
						'unique'            => TRUE
				),
				'password'			=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
				),
				'is_delete' 		=> array(
						'type'              => 'INT',
						'constraint'        => 1,
						'default'           => 0                              
				)
			));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('users');
	}

	public function down()
	{
			$this->dbforge->drop_table('users');
	}
}
?>