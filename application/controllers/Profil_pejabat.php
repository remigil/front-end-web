<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_pejabat extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Profil Pejabat | K3I Korlantas";
		$breadcrumb = "Profil Pejabat";
		$headline = "PROFIL PEJABAT";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','profil/profil_pejabat', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
