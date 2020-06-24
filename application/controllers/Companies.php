<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Companies extends CI_Controller 
{
    function __construct()
	{
        parent::__construct();
        if(!is_login()) redirect(base_url(''));
    }
    
    function save()
    {
		$this->load->library('form_validation');
		$this->load->model('model_companies','company');

		 $this->form_validation->set_rules('name', 'Business Name', 'trim|required',
            array('required' => 'You must provide a %s')
        );

		if($this->form_validation->run() == false)
		{
			$this->session->set_flashdata('operation_error',true);
            $this->session->set_flashdata('error_message', validation_errors());
		}else{
			$input = array
			(
				'name' => $this->input->post('name'),
				'phone_number' => ($this->input->post('phone_number'))?$this->input->post('phone_number'):null,
				'building_info' => ($this->input->post('building_info'))?$this->input->post('building_info'):null,
				'street_address' => ($this->input->post('street_address'))?$this->input->post('street_address'):null,
				'city' => ($this->input->post('city'))?$this->input->post('city'):null,
				'postcode' => ($this->input->post('postcode'))?$this->input->post('postcode'):null,
				'state' => ($this->input->post('state'))?$this->input->post('state'):null,
				'code'	=> uniqid(),
				'is_delete' => 0
			);
			$this->company->create_new($input,user_id());
		}
		redirect(dashboard_url());
    }
    
}
?>