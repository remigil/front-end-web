<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_kepuasan extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Survey Kepuasan | K3I Korlantas";
		$breadcrumb = "survey";
		$headline = "SURVEY KEPUASAN";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','kontak/survey_kepuasan', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
