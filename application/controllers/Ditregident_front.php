<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ditregident_front extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Direktorat Registrasi dan Identifikasi | K3I Korlantas";  
        $this->template->load('templates/template','satker/ditregident', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}