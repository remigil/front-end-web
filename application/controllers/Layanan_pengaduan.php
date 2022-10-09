<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_pengaduan extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Layanan Pengaduan | K3I Korlantas";
		$breadcrumb = "pengaduan";
		$headline = "LAYANAN PENGADUAN";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','kontak/layanan_pengaduan', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
