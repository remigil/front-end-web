<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link_tvradio_polri extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "Link ke TV-Radio POLRI | K3I Korlantas";  
        $this->template->load('templates/template','lain_lain/link_tvradio_polri', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
