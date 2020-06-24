<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class QR extends CI_Controller
{
    function __construct()
	{
        parent::__construct();
    }

    //all three qr code
    public function index($company_code = null)
    {
        if(empty($company_code)) redirect(dashboard_url());
        $this->template->setTemplate('vanilla',array()) 

            ->layout('blank');
    }

    //employee qr code
    public function employee($company_code = null)
    {
        if(empty($company_code)) redirect(dashboard_url());
        $this->template->setTemplate('vanilla',array())    
            ->setBody(array('page/qr/qrcode'),array('qrurl' => register_url('employee/'.$company_code))) 
            ->setJs(array('/assets/js/qrcodejs/code.js'))
            ->layout('blank');
    }

    //visitor qr code
    public function visitor($company_code = null)
    {
        if(empty($company_code)) redirect(dashboard_url());
        $this->template->setTemplate('vanilla',array()) 
        ->setBody(array('page/qr/qrcode'),array('qrurl' => register_url('visitor/'.$company_code))) 
        ->setJs(array('/assets/js/qrcodejs/code.js'))
        ->layout('blank');
    }

    //delivery qr code
    public function delivery($company_code = null)
    {
        if(empty($company_code)) redirect(dashboard_url());
        $this->template->setTemplate('vanilla',array())    
        ->setBody(array('page/qr/qrcode'),array('qrurl' => register_url('delivery/'.$company_code))) 
        ->setJs(array('/assets/js/qrcodejs/code.js'))
            ->layout('blank');
    }
}
?>