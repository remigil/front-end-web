<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_organisasi extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Struktur Organisasi | K3I Korlantas";  
        $this->template->load('templates/template','profil/struktur_organisasi', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
