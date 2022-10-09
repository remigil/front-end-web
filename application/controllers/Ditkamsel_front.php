<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ditkamsel_front extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
		$title = "Direktorat Keamanan dan Keselamatan | K3I Korlantas";
		$breadcrumb = "ditkamsel";
		$headline = "DIREKTORAT KEAMANAN DAN KESELAMATAN";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/ditkamsel', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
