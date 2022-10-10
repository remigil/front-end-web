<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itwasum extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "ITWASUM POLRI | K3I Korlantas";
		$breadcrumb = "itwasum";
		$headline = "ITWASUM POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/itwasum', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
