<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_companies extends CI_Model
{
	public function create_new($input,$user_id)
	{
		$this->db->insert('companies',$input);
		$company_id = $this->db->insert_id();
		if(!empty($company_id))
		{
			$this->db->insert('user_companies',array('user_id' => $user_id, 'company_id' => $company_id, 'is_delete' => 0));
			return $company_id;
		}else{
			return false;
		}
	}

	public function find_by_user_id($user_id)
	{	
		$result = $this->db->select('a.*')
			->where('b.user_id',$user_id)
			->join('user_companies b','b.company_id = a.id','left')
			->get('companies a')
			->result();
		return $result;
	}
}

?>