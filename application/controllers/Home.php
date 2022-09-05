<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Home | K3I Korlantas";  
        $this->template->load('templates/template','home', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}