<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Undang_undang extends MX_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->helper("logged_helper");
		$this->load->model('dokumenperaturan/m_dokumenperaturan');
    }
 
	public function index()
	{ 
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		// $headers = [
        //     'Authorization' => $this->session->userdata['token']
        // ];
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN";  

        $getUU = guzzle_request('GET', 'regulation_doc', [
            // 'headers' => $headers
        ]);
		// var_dump($getUU);die;
		$dataUU['getUU'] = $getUU['data'];

		$data["dataUU"] = $dataUU;
        
        $this->template->load('templates/template','informasi_publik/undang_undang', $data); 
        
	}

	public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_dokumenperaturan->get_datatables($postData);  
		echo json_encode($data); 
    }

	public function error()
	{
		$this->load->view('404_notfound');
	}
}
