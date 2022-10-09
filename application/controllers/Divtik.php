<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divtik extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "DIVTIK POLRI | K3I Korlantas";
		$breadcrumb = "divtik";
		$headline = "DIVISI TEKNOLOGI INFORMASI DAN KOMUNIKASI POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/divtik', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
