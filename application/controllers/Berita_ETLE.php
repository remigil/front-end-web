<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_etle extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Berita ETLE | K3I Korlantas";  
        $this->template->load('templates/template','media_update/berita_etle', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
