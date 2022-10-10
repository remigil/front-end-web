<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Sejarah POLANTAS | K3I Korlantas";
		$breadcrumb = "Sejarah";
		$headline = "SEJARAH POLISI LALU LINTAS";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','profil/sejarah', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
