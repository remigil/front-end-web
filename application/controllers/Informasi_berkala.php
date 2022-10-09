<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_berkala extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Informasi Berkala | K3I Korlantas";  
        $this->template->load('templates/template','informasi_publik/informasi_berkala', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
