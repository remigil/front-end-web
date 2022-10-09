<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_kontijensi extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Berita Kontijensi | K3I Korlantas";
		$breadcrumb = "berita kontijensi";
		$headline = "BERITA KONTIJENSI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','media_update/berita_kontijensi', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
