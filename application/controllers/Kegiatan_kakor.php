<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_kakor extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
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
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
