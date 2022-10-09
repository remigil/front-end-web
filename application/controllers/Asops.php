<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asops extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Asisten Kapolri Bidang Operasi | K3I Korlantas";
		$breadcrumb = "aspos";
		$headline = "ASISTEN KAPOLRI BIDANG OPERASI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        $this->template->load('templates/template','satker/asops', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
