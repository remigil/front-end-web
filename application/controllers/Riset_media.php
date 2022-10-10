<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riset_media extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Riset Media Center NTMC | K3I Korlantas";
		$breadcrumb = "riset media";
		$headline = "RISET MEDIA CENTER NTMC";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','publikasi/riset_media', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
