<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_User_Companies extends CI_Migration
{
	 public function up()
	{
			$this->dbforge->add_field(array(
				'id' 			=> array(
						'type' 				=> 'INT',
						'constraint' 		=> 5,
						'unsigned' 			=> TRUE,
						'auto_increment' 	=> TRUE
				),
				'user_id' 		=> array(
						'type' 				=> 'INT',
						'constraint' 		=> 5,
						'unsigned' 			=> TRUE
				),
				'company_id' 	=> array(
						'type' 				=> 'INT',
						'constraint' 		=> 5,
						'unsigned' 			=> TRUE
				),
				'is_delete int(1) default 0'
			));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('user_companies');
	}

	public function down()
	{
			$this->dbforge->drop_table('user_companies');
	}
}
?>