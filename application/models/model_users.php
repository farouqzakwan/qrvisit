<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model
{
	public function create_new($input)
	{
		$this->db->insert('users',$input);
		return $this->db->insert_id();
	}

	public function find_email($email)
	{
		$result = $this->db->select('a.*')
			->where('a.email',$email)
			->get('users a')
			->result();	
		return (!empty($result))?$result[0]:false;
	}

	public function find_deleted()
	{
		$result = $this->db->select('a.*')
			->where('a.is_delete',1)
			->get('users a')
			->result();	
		return (!empty($result))?$result:false;
	}

	public function find__valid()
	{
		$result = $this->db->select('a.*')
			->where('a.is_delete',0)
			->get('users a')
			->result();	
		return (!empty($result))?$result:false;
	}

	public function auth($password,$password_hashed)
	{
		if(password_verify($password,$password_hashed)){
			return true;
		}else{
			return false;
		}
	}
}

?>