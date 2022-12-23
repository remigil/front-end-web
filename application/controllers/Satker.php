<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satker extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
	public function index()
	{
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
	}
 
	public function ditgakkum()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "Direktorat Penegak Hukum | K3I Korlantas";
		$data['breadcrumb'] = "ditgakkum";
		$data['headline'] = "DIREKTORAT PENEGAK HUKUM";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        
        $this->template->load('templates/template','satker/ditgakkum', $data); 
        
	}

	public function ditregident()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "Direktorat Registrasi dan Identifikasi | K3I Korlantas";
		$data['breadcrumb'] = "ditregident";
		$data['headline'] = "DIREKTORAT REGISTRASI DAN IDENTIFIKASI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        
        $this->template->load('templates/template','satker/ditregident', $data); 
        
	}

	public function ditkamsel()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "Direktorat Keamanan dan Keselamatan | K3I Korlantas";
		$data['breadcrumb'] = "ditkamsel";
		$data['headline'] = "DIREKTORAT KEAMANAN DAN KESELAMATAN";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        
        $this->template->load('templates/template','satker/ditkamsel', $data); 
        
	}

	public function bagrenmin()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "Bagian Perencanaan dan Administrasi | K3I Korlantas";
		$data['breadcrumb'] = "bagrenmin";
		$data['headline'] = "BAGIAN PERENCANAAN DAN ADMINISTRASI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        
        $this->template->load('templates/template','satker/bagrenmin', $data); 
        
	}

	public function bagops()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "Bagian Operasional | K3I Korlantas";
		$data['breadcrumb'] = "bagops";
		$data['headline'] = "BAGIAN OPERASIONAL";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        $this->template->load('templates/template','satker/bagops', $data); 
        
	}

	public function bagtik()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "Bagian Teknologi Informasi Korlantas | K3I Korlantas";
		$data['breadcrumb'] = "bagtik";
		$data['headline'] = "BAGIAN TEKNOLOGI INFORMASI KORLANTAS";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        $this->template->load('templates/template','satker/bagtik', $data); 
        
	}

	public function baharkam()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "BAHARKAM POLRI | K3I Korlantas";
		$data['breadcrumb'] = "baharkam";
		$data['headline'] = "BAHARKAM POLRI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        $this->template->load('templates/template','satker/baharkam', $data); 
        
	}

	public function asops()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "Asisten Kapolri Bidang Operasi | K3I Korlantas";
		$data['breadcrumb'] = "asops";
		$data['headline'] = "ASISTEN KAPOLRI BIDANG OPERASI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        $this->template->load('templates/template','satker/asops', $data); 
        
	}

	public function divtik()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "DIVTIK POLRI | K3I Korlantas";
		$data['breadcrumb'] = "divtik";
		$data['headline'] = "DIVISI TEKNOLOGI INFORMASI DAN KOMUNIKASI POLRI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        $this->template->load('templates/template','satker/divtik', $data); 
        
	}

	public function bareskrim()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "BARESKRIM POLRI | K3I Korlantas";
		$data['breadcrumb'] = "bareskrim";
		$data['headline'] = "BARESKRIM POLRI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        $this->template->load('templates/template','satker/bareskrim', $data); 
        
	}

	public function divhumas()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "Div HUMAS POLRI | K3I Korlantas";
		$data['breadcrumb'] = "div humas";
		$data['headline'] = "DIVISI HUMAS POLRI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        $this->template->load('templates/template','satker/divhumas', $data); 
        
	}

	public function itwasum()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "ITWASUM POLRI | K3I Korlantas";
		$data['breadcrumb'] = "itwasum";
		$data['headline'] = "ITWASUM POLRI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        $this->template->load('templates/template','satker/itwasum', $data); 
        
	}
	
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
