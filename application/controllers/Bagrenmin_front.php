<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagrenmin_front extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Bagian Perencanaan dan Administrasi | K3I Korlantas";  
        $this->template->load('templates/template','satker/bagrenmin', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}