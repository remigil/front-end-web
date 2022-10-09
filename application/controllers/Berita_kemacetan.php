<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_kemacetan extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Berita Kemacetan Lalu Lintas | K3I Korlantas";
		$breadcrumb = "berita kemacetan";
		$headline = "BERITA KEMACETAN LALU LINTAS";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','media_update/berita_kemacetan', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
