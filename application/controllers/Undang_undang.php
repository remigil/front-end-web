<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Undang_undang extends MX_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->helper("logged_helper");
		$this->load->model('m_undang_undang');
    }
 
	public function index()
	{ 
		$title = "UU dan Peraturan | K3I Korlantas";
		$breadcrumb = "uu dan peraturan";
		$headline = "UU DAN PERATURAN";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','informasi_publik/undang_undang', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}

	public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_undang_undang->get_datatables($postData);  
		echo json_encode($data); 
    }
}
