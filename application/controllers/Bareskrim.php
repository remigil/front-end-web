<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bareskrim extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "BARESKRIM POLRI | K3I Korlantas";
		$breadcrumb = "bareskrim";
		$headline = "BARESKRIM POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/bareskrim', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
