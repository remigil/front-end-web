<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riset_media extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Riset Media Center NTMC | K3I Korlantas";  
        $this->template->load('templates/template','publikasi/riset_media', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
