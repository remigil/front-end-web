<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutan extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Sambutan | K3I Korlantas";
		$breadcrumb = "Sambutan";
		$headline = "SAMBUTAN KORLANTAS POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];   
        $this->template->load('templates/template','profil/sambutan', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
