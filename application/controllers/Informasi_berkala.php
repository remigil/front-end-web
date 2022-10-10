<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_berkala extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Informasi Berkala | K3I Korlantas";
		$breadcrumb = "informasi berkala";
		$headline = "INFORMASI BERKALA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','informasi_publik/informasi_berkala', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
