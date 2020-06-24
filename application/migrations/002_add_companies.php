<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Companies extends CI_Migration
{
	 public function up()
	{
			$this->dbforge->add_field(array(
				'id' 	=> array(
						'type' 				=> 'INT',
						'constraint' 		=> 5,
						'unsigned' 			=> TRUE,
						'auto_increment' 	=> TRUE,
				),
				'name'	=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
				),
				'phone_number'	=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
						'null'				=> true,
				),
				'building_info'	=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
						'null'				=> true,
				),
				'street_address'	=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
						'null'				=> true,
				),
				'city'	=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
						'null'				=> true,
				),
				'postcode'	=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
						'null'				=> true,
				),
				'state'	=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
						'null'				=> true
				),
				'code'	=> array(
						'type' 				=> 'VARCHAR',
						'constraint' 		=> 255,
				),
				'is_delete' => array(
						'type'              => 'INT',
						'constraint'        => 1,
						'default'           => 0                              
				)
			));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('companies');
	}

	public function down()
	{
			$this->dbforge->drop_table('companies');
	}
}
?>