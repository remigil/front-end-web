<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Sejarah POLANTAS | K3I Korlantas";  
        $this->template->load('templates/template','profil/sejarah', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
