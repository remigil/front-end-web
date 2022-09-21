<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baharkam extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "BAHARKAM POLRI | K3I Korlantas";  
        $this->template->load('templates/template','satker/baharkam', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
