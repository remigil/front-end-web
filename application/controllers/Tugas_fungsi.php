<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas_fungsi extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Tugas dan Fungsi | K3I Korlantas";  
        $this->template->load('templates/template','profil/tugas_fungsi', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
