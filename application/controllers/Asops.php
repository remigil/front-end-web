<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asops extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Asisten Kapolri Bidang Operasi | K3I Korlantas";  
        $this->template->load('templates/template','satker/asops', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
