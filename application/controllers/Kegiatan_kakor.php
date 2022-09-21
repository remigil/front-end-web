<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_kakor extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Kegiatan Kakorlantas POLRI | K3I Korlantas";  
        $this->template->load('templates/template','publikasi/kegiatan_kakor', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
