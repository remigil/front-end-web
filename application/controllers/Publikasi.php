<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function konferensi_pers()
	{ 
		$title = "Konferensi Pers | K3I Korlantas";
		$breadcrumb = "konferensi pers";
		$headline = "KONFERENSI PERS";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','publikasi/konferensi_pers', $data); 
        
	}

	public function kegiatan_kakor()
	{ 
		$title = "Kegiatan Kakorlantas POLRI | K3I Korlantas";
		$breadcrumb = "kegiatan kakorlantas";
		$headline = "KEGIATAN KAKORLANTAS POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','publikasi/kegiatan_kakor', $data); 
        
	}

	public function kegiatan_khusus()
	{ 
		$title = "Kegiatan Khusus | K3I Korlantas";
		$breadcrumb = "kegiatan khusus";
		$headline = "KEGIATAN KHUSUS";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','publikasi/kegiatan_khusus', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
