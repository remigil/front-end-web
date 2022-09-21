<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divtik extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "DIVTIK POLRI | K3I Korlantas";  
        $this->template->load('templates/template','satker/divtik', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
