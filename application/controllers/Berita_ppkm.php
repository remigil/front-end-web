<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_ppkm extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Berita PPKM | K3I Korlantas";
		$breadcrumb = "berita ppkm";
		$headline = "BERITA PPKM";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','media_update/berita_ppkm', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
