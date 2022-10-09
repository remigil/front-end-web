<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi_tatakerja extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Organisasi dan Tata Kerja | K3I Korlantas";
		$breadcrumb = "organisasi dan tata kerja";
		$headline = "ORGANISASI DAN TATA KERJA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','profil/organisasi_tatakerja', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
