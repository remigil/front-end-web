<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutan extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Sambutan | K3I Korlantas";  
        $this->template->load('templates/template','profil/sambutan', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
