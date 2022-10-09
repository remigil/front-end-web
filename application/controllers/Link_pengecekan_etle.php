<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link_pengecekan_etle extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Link Pengecekan Status ETLE | K3I Korlantas";
		$breadcrumb = "pengecekan status etle";
		$headline = "LINK KE PENGECEKAN STATUS ETLE";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','lain_lain/link_pengecekan_etle', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
