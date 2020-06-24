<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{
    function __construct()
	{
        parent::__construct();
    }

    public function create_new_account()
    {
        $this->load->library('form_validation');
        $this->load->model('model_users','users');

        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required',
            array('required' => 'You must provide a %s')
        );
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required',
            array('required' => 'You must provide a %s')
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required',
            array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('confirmation_password', 'Password Confirmation', 'trim|required|matches[password]',
            array('required' => 'You must provide a matching %s')
        );
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]|valid_email',
            array
            (
                'required'      => 'This %s is already exist',
                'valid_email'   => 'Invalid email address'
            )
        );

        if ($this->form_validation->run() == FALSE)
        {
            if(!empty($this->input->post('first_name')))$this->session->set_flashdata('first_name',$this->input->post('first_name'));
            if(!empty($this->input->post('last_name')))$this->session->set_flashdata('last_name',$this->input->post('last_name'));
            if(!empty($this->input->post('email')))$this->session->set_flashdata('email',$this->input->post('email'));

            $this->session->set_flashdata('register_error',true);
            $this->session->set_flashdata('error_message', validation_errors());
            redirect(base_url());
        }
        else
        {
            $input = array
            (
                'first_name'        => $this->input->post('first_name'),
                'last_name'         => $this->input->post('last_name'),
                'email'             => $this->input->post('email'),
                'password'          => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            );
            $this->users->create_new($input); 
            redirect(home_url('success_register'));
        }
    }

    public function employee($company_code)
    {
        $this->load->model('model_companies','company');
        $company = ($companies = $this->company->find_by_code($company_code))?$companies[0]:null;
        if(empty($company)) redirect(base_url(''));

        $this->template->setTemplate('vanilla',array())    
            ->setBody(array('page/register/employee','page/home/mdl-register'),array('company_code' => $company_code,'type' => 0))
            ->layout('blank');
    }

    public function visitor($company_code)
    {
        $this->load->model('model_companies','company');
        $company = ($companies = $this->company->find_by_code($company_code))?$companies[0]:null;
        if(empty($company)) redirect(base_url(''));

        $this->template->setTemplate('vanilla',array())    
        ->setBody(array('page/register/visitor','page/home/mdl-register'),array('company_code' => $company_code))
        ->layout('blank');
    }

    public function delivery($company_code)
    {
        $this->load->model('model_companies','company');
        $company = ($companies = $this->company->find_by_code($company_code))?$companies[0]:null;
        if(empty($company)) redirect(base_url(''));

        $this->template->setTemplate('vanilla',array())    
            ->setBody(array('page/register/mailman','page/home/mdl-register'),array('company_code' => $company_code))
            ->layout('blank');
    }


    public function save_guest()
    {
        $this->load->library('form_validation');
        $this->load->model('model_guests','guest');
        
        $this->form_validation->set_rules('name','Name','trim|required',array(
            'required' => 'Please provide your %s'
        ));

        $this->form_validation->set_rules('phone_number','Phone Number','trim|required',array(
            'required' => 'Please provide you %s'
        ));

        $this->form_validation->set_rules('temperature','Body Temperature','trim|required',array(
            'required' => 'Please scan your %s before entering premises'
        ));

        if($this->form_validation->run() == false)
        {
            die(debug(validation_errors()));
            $this->session->set_flashdata('operation_error',true);
            $this->session->set_flashdata('error_message', validation_errors());
            switch ($this->input->post('type')) 
            {
                case GUEST_VISITOR:
                    redirect(register_url('visitor/'.$this->input->post('company_code')));
                    break;
                
                case GUEST_DELIVERY:
                    redirect(register_url('delivery/'.$this->input->post('company_code')));
                    break;

                case GUEST_EMPLOYEE:
                    redirect(register_url('employee/'.$this->input->post('company_code')));
                    break;
                default:
                    redirect(register_url('visitor/'.$this->input->post('company_code')));
                    break;
            }
        }else{
            $this->load->model('model_companies','company');
            $company = ($companies = $this->company->find_by_code($this->input->post('company_code')))?$companies[0]:null;

            if(!empty($company))
            {
                $input = array(
                    'company_id'        => $company->id,
                    'email_address'     => (!empty($this->input->post('email')))?$this->input->post('email'):null,
                    'visitor_name'      => $this->input->post('name'),
                    'phone_number'      => $this->input->post('phone_number'),
                    'body_temperature'  => $this->input->post('temperature'),
                    'type'              => $this->input->post('type'),
                    'is_delete'         => 0
                );
                $this->guest->visit($input,$this->input->post('type'));
                //display success views
            }else{
                $this->session->set_flashdata('operation_error',true);
                $this->session->set_flashdata('error_message', '<p>Unable to find company.Please scan a valid qr code</p>');
                //display error views
            }
        }
    }
}
?>