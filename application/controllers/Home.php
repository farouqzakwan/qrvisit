<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller 
{
    function __construct()
	{
        parent::__construct();
        if(is_login())redirect(dashboard_url());
    }
    
    function index()
    {
        $this->home();
    }

    function home()
    {
        $this->template->setTemplate('vanilla',array())    
            ->setBody(array('page/home/index','page/home/mdl-register'),array())
            ->layout('blank');
    }

    function success_register()
    {
        $this->template->setTemplate('vanilla',array())    
        ->setBody(array('page/home/success_register','page/home/mdl-register'),array())
        ->layout('blank');
    }
}

?>