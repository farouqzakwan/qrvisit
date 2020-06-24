<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Stisla extends CI_Controller 
{
    function __construct()
	{
        parent::__construct();
        if(ENVIRONMENT != 'development') redirect(base_url());
    }
    
    function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->template->setTemplate('stisla',array())
            ->setBody('page/sample/index',array())
            ->layout('layout');
    }

    public function utilities()
    {
        $this->template->setTemplate('stisla',array())
        ->setBody(array('page/sample/index','page/sample/utilities'),array())
        ->layout('layout'); 
    }

    public function widgets()
    {
        $this->template->setTemplate('stisla',array())
            ->setBody(array('page/sample/index','page/sample/widget'),array())
            ->layout('layout');  
    }

    public function forms()
    {
        $this->template->setTemplate('stisla',array())
            ->setBody(array('page/sample/index','page/sample/form'),array())
            ->layout('layout');
    }

    public function form_validations()
    {
        $this->template->setTemplate('stisla',array())
            ->setBody(array('page/sample/index','page/sample/form_validation'),array())
            ->layout('layout');
    }

    public function cards()
    {
        $this->template->setTemplate('stisla',array())
            ->setBody(array('page/sample/index','page/sample/card'),array())
            ->layout('layout');
    }

    public function panels()
    {
        $this->template->setTemplate('stisla',array())
            ->setBody(array('page/sample/index','page/sample/panel'),array())
            ->layout('layout');
    }

    public function buttons()
    {
        $this->template->setTemplate('stisla',array())
            ->setBody(array('page/sample/index','page/sample/button'),array())
            ->layout('layout');
    }

}

?>