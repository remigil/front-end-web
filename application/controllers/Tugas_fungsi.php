<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas_fungsi extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Tugas dan Fungsi | K3I Korlantas";
		$breadcrumb = "Tugas dan fungsi";
		$headline = "TUGAS DAN FUNGSI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','profil/tugas_fungsi', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
