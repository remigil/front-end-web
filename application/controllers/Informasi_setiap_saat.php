<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_setiap_saat extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Informasi Setiap Saat | K3I Korlantas";  
        $this->template->load('templates/template','informasi_publik/informasi_setiap_saat', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
