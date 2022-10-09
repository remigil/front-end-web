<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Visi dan Misi | K3I Korlantas";
		$breadcrumb = "Visi dan misi";
		$headline = "VISI DAN MISI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','profil/visi_misi', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
