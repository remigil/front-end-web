<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagops_front extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Bagian Operasional | K3I Korlantas";
		$breadcrumb = "bagops";
		$headline = "BAGIAN OPERASIONAL";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/bagops', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
