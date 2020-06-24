<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_guests extends CI_Model
{
    public function visit($input,$type)
    {
        $this->db->insert('guests',$input);
        $guest_id = $this->db->insert_id();
        
        if($type == GUEST_EMPLOYEE && !empty($guest_id))
        {
            //insert into table employees
        }
        return $guest_id;
    }
}
?>