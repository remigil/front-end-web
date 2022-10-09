<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_kecelakaan extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Berita Kecelakaan Lalu Lintas | K3I Korlantas";
		$breadcrumb = "berita laka lantas";
		$headline = "BERITA KECELAKAAN LALU LINTAS";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','media_update/berita_kecelakaan', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
