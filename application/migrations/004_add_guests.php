<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Guests extends CI_Migration
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
                        'company_id' 	=> array(
                                        'type' 				=> 'INT',
                                        'constraint' 		=> 5,
                                        'unsigned' 			=> TRUE
                        ),
                        'email_address' => array(
                                'type' 				=> 'VARCHAR',
                                'constraint' 		=> 255,
                                'null'              => true
                        ),
                        'visitor_name' => array(
                                'type' 				=> 'VARCHAR',
                                'constraint' 		=> 255,
                        ),
                        'phone_number' => array(
                                'type' 				=> 'VARCHAR',
                                'constraint' 		=> 255,
                        ),
                        'body_temperature' => array(
                                'type' 				=> 'DECIMAL',
                                'constraint' 		=> '10,2',
                                'default'           => 0.00
                        ),
                        'type' => array(
                                'type'              => 'INT',
                                'constraint'        => 1,
                                'default'           => 0                              
                        ),
                        'time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                        'is_delete' => array(
                                'type'              => 'INT',
                                'constraint'        => 1,
                                'default'           => 0                              
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('guests');
	}

	public function down()
	{
			$this->dbforge->drop_table('guests');
	}
}
?>