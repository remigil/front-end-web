<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_khusus extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
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
