<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact_center extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Contact Center NTMC | K3I Korlantas";  
        $this->template->load('templates/template','kontak/contact_center', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
