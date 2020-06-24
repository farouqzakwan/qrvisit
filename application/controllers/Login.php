<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller 
{
    function __construct()
	{
        parent::__construct();
    }
    
	public function verify_login()
	{
		$this->load->model('model_users','users');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','trim|required|valid_email',
			array('required' => '%s field is required','valid_email' => 'Invalid email address')
		);

		$this->form_validation->set_rules('password','Password','trim|required',array(
			array('required' => '%s field is required')
		));

		if($this->form_validation->run() == false)
		{	
			$this->session->set_flashdata('login_error',true);
			$this->session->set_flashdata('error_message',validation_errors());
			redirect(base_url());
		}else{
			$users = $this->users->find_email($this->input->post('email'));
			if(empty($users)){
				$this->session->set_flashdata('login_error',true);
				$this->session->set_flashdata('error_message','<p>Email is not exist.</p>');
				redirect(base_url());
			}else{
				if($users->is_delete == 1)
				{
					$this->session->set_flashdata('login_error',true);
					$this->session->set_flashdata('error_message','<p>Account has been removed.</p>');
					redirect(base_url());
				}else{
					$is_auth = $this->users->auth($this->input->post('password'),$users->password);
					if(!$is_auth){
						$this->session->set_flashdata('login_error',true);
						$this->session->set_flashdata('error_message','<p>Wrong password.</p>');
						redirect(base_url());
					}else{
						$this->session->set_userdata('login_user_id',$users->id);
						$this->session->set_userdata('login_first_name',$users->first_name);
						$this->session->set_userdata('login_last_name',$users->last_name);
						$this->session->set_userdata('login_email',$users->email);
						$this->session->set_userdata('login',true);
						redirect(dashboard_url());
					}
				}	
			}
		}
	}

	public function sign_out()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

?>