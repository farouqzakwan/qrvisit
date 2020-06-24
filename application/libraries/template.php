<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template{

    private $template;
    private $template_data;
    private $js;
    private $css;
    private $is_debug = false;
    private $debug_data;
    private $body;
    private $body_data; 

	function __construct()
	{
    }
    
    public function setTemplate($template,$data = array())
    {
        $this->template = $template;
        $this->template_data = $data;
        return $this;
    }

    public function setBody($body,$body_data = array())
    {
        $this->body_data = $body_data;
        if(is_array($body))
        {
            $this->body = $body;
        }else{
            $this->body[0] = $body;
        }
        return $this;
    }

    public function setCss($css)
    {
        if(is_array($css))
        {
            $this->css = $css;
        }else{
            $this->css[0] = $css;
        }
        return $this;
    }

    public function setJs($js)
    {
        if(is_array($js))
        {
            $this->js = $js;
        }else{
            $this->js[0] = $js;
        }
        return $this;
    }

    public function layout($base_template,$body_data = array())
    {
        $ci=& get_instance();
        if(!empty($body_data))
        {
            $this->$body_data = $body_data;
        }

        if($this->is_debug)
        {
            die(debug($this->debug_data));
        }
        $ci->load->view('template/'.$this->template.'/'.$base_template,$this->_get_view_data());
        
        return $this;
    }

    public function debug($debug_data)
    {
        $this->is_debug = true;
        $this->debug_data = $debug_data;
        return $this;
    }

    private function _get_view_data()
    {
        $data = array
        (
            'template'          => array
            (
                'data'          => $this->template_data,
                'body'          => $this->body,
                // 'navbar'
                // 'breadcrumb'
                // 'invoice'
                
            ),
            'data'              => $this->body_data,
        );

        return $data;
    }
}