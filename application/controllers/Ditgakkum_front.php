<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ditgakkum_front extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Direktorat Penegak Hukum | K3I Korlantas";
		$breadcrumb = "ditgakkum";
		$headline = "DIREKTORAT PENEGAK HUKUM";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/ditgakkum', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
