<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_serta_merta extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Informasi Serta Merta | K3I Korlantas";
		$breadcrumb = "informasi serta merta";
		$headline = "INFORMASI SERTA MERTA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','informasi_publik/informasi_serta_merta', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
