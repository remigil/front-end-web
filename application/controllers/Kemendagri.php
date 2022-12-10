<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemendagri extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Kementrian Dalam Negeri | INDONESIA";
		$breadcrumb = "kemendagri";
		$headline = "KEMENTRIAN DALAM NEGERI INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/kemendagri', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
