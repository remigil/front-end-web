<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_pelanggaran extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Berita Pelanggaran Lalu Lintas | K3I Korlantas";  
        $this->template->load('templates/template','media_update/berita_pelanggaran', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
