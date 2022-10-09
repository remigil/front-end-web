<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_etle extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Berita ETLE | K3I Korlantas";
		$breadcrumb = "berita etle";
		$headline = "BERITA ETLE";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','media_update/berita_etle', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
