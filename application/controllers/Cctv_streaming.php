<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cctv_streaming extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function index()
	{ 
        $data['title'] = "CCTV Streaming | K3I Korlantas";  
        $this->template->load('templates/template','lain_lain/cctv_streaming', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
