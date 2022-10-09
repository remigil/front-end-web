<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konferensi_pers extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
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
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
