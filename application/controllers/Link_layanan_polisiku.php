<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link_layanan_polisiku extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Link ke Layanan Polisiku  | K3I Korlantas";  
        $this->template->load('templates/template','lain_lain/link_layanan_polisiku', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
