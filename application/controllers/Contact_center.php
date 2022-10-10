<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact_center extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Contact Center NTMC | K3I Korlantas";
		$breadcrumb = "ntmc";
		$headline = "CONTACT CENTER NTMC";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','kontak/contact_center', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
