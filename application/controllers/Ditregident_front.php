<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ditregident_front extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Direktorat Registrasi dan Identifikasi | K3I Korlantas";
		$breadcrumb = "ditregident";
		$headline = "DIREKTORAT REGISTRASI DAN IDENTIFIKASI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/ditregident', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
