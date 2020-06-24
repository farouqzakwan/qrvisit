<?php

if(!function_exists('user_id')){
	function user_id(){
		$ci =& get_instance();
		if(!empty($ci->session->userdata('login_user_id')))
		{
			return $ci->session->userdata('login_user_id');
		}else{
			return false;
		}
	}
}

if(!function_exists('is_login')){
	function is_login(){
		$ci =& get_instance();
		if(!empty($ci->session->userdata('login')))
		{
			return true;
		}else{
			return false;
		}
	}
}

if(!function_exists('first_name')){
	function first_name(){
		$ci =& get_instance();
		if(!empty($ci->session->userdata('login')))
		{
			return $ci->session->userdata('first_name');
		}else{
			return false;
		}
	}
}

if(!function_exists('last_name')){
	function last_name(){
		$ci =& get_instance();
		if(!empty($ci->session->userdata('login')))
		{
			return $ci->session->userdata('last_name');
		}else{
			return false;
		}
	}
}

if(!function_exists('login_email')){
	function login_email(){
		$ci =& get_instance();
		if(!empty($ci->session->userdata('login')))
		{
			return $ci->session->userdata('email');
		}else{
			return false;
		}
	}
}
?>