<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard extends CI_Controller 
{
    function __construct()
	{
        parent::__construct();
        if(!is_login()) redirect(base_url(''));
    }
    
    function index()
    {
        $this->home();
    }

    function home()
    {
        $this->load->model('model_companies','company');
        $data = array
        (
            'companies' => $this->company->find_by_user_id(user_id())
        );
        $this->template->setTemplate('vanilla',array())    
            ->setBody(array('page/dashboard/index','page/dashboard/navbar','page/dashboard/container'),$data)
            ->layout('blank');
    }

    
}
?>