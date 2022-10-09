<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_setiap_saat extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Informasi Setiap Saat | K3I Korlantas";
		$breadcrumb = "informasi setiap saat";
		$headline = "INFORMASI SETIAP SAAT";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','informasi_publik/informasi_setiap_saat', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
