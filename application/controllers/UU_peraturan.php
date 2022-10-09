<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UU_peraturan extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "UU dan Peraturan | K3I Korlantas";  
        $this->template->load('templates/template','informasi_publik/uu_peraturan', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
