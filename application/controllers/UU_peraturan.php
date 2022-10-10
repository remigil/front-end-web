<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UU_peraturan extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "UU dan Peraturan | K3I Korlantas";
		$breadcrumb = "uu dan peraturan";
		$headline = "UU DAN PERATURAN";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','informasi_publik/uu_peraturan', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
