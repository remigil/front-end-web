<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagtik_front extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Bagian Teknologi Informasi Korlantas | K3I Korlantas";
		$breadcrumb = "bagtik";
		$headline = "BAGIAN TEKNOLOGI INFORMASI KORLANTAS";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/bagtik', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
