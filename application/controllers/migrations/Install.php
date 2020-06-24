<?php
class Install extends CI_Controller
{
	 function __construct()
	{
        parent::__construct();
    }
    
    function index()
    {
         $this->load->library('migration');

        if ($this->migration->current() === FALSE)
        {
                show_error($this->migration->error_string());
        }

        echo 'run installation and delete files';
    }

}

?>