<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pustaka extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('guzzle_request_helper');
		$this->load->model('m_pustaka');
    }
	
	public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_pustaka->get_datatables($postData);  
		echo json_encode($data); 
    }

	public function index()
	{
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
	}
 
	public function informasi_setiap_saat()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['title'] = "Informasi Setiap Saat | K3I Korlantas";
		$data['breadcrumb'] = "informasi setiap saat";
		$data['headline'] = "INFORMASI SETIAP SAAT";

		
        $this->template->load('templates/template','informasi_publik/informasi_setiap_saat', $data); 
        
	}

	public function informasi_berkala()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['title'] = "Informasi Berkala | K3I Korlantas";
		$data['breadcrumb'] = "informasi berkala";
		$data['headline'] = "INFORMASI BERKALA";

		
        $this->template->load('templates/template','informasi_publik/informasi_berkala', $data); 
        
	}

	public function informasi_serta_merta()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['title'] = "Informasi Serta Merta | K3I Korlantas";
		$data['breadcrumb'] = "informasi serta merta";
		$data['headline'] = "INFORMASI SERTA MERTA";

		
        
        $this->template->load('templates/template','informasi_publik/informasi_serta_merta', $data); 
        
	}

	public function undang_undang()
	{ 
		
		
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		// $headers = [
        //     'Authorization' => $this->session->userdata['token']
        // ];
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN"; 

		
        
        
        $this->template->load('templates/template','informasi_publik/undang_undang', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
