<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_berita','berita');
		$this->load->model('m_ditlantas','ditlantas');
    }
	public function index()
	{
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
		
		$data['getStakeholder'] = $getStakeholder['data']['data'];
	}
 
	public function sambutan()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
		
		$data['title'] = "Sambutan | K3I Korlantas";
		$data['breadcrumb'] = "Sambutan";
		$data['headline'] = "SAMBUTAN KORLANTAS POLRI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		
		 
        $this->template->load('templates/template','profil/sambutan', $data); 
        
	}

	public function struktur_organisasi()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
		
		$data['title'] = "Struktur Organisasi | K3I Korlantas";
		$data['breadcrumb'] = "Struktur Organisasi";
		$data['headline'] = "STRUKTUR ORGANISASI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        $this->template->load('templates/template','profil/struktur_organisasi', $data); 
        
	}

	public function profil_pejabat()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
		
		$data['title'] = "Profil Pejabat | K3I Korlantas";
		$data['breadcrumb'] = "Profil Pejabat";
		$data['headline'] = "PROFIL PEJABAT";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        
        $this->template->load('templates/template','profil/profil_pejabat', $data); 
        
	}

	public function visi_misi()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
		
		$data['title'] = "Visi dan Misi | K3I Korlantas";
		$data['breadcrumb'] = "Visi dan misi";
		$data['headline'] = "VISI DAN MISI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
    
        $this->template->load('templates/template','profil/visi_misi', $data); 
        
	}

	public function tugas_fungsi()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
		
		$data['title'] = "Tugas dan Fungsi | K3I Korlantas";
		$data['breadcrumb'] = "Tugas dan fungsi";
		$data['headline'] = "TUGAS DAN FUNGSI";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        
        $this->template->load('templates/template','profil/tugas_fungsi', $data); 
        
	}

	public function sejarah()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
		
		$data['title'] = "Sejarah POLANTAS | K3I Korlantas";
		$data['breadcrumb'] = "Sejarah";
		$data['headline'] = "SEJARAH POLISI LALU LINTAS";
		$data['getStakeholder'] = $getStakeholder['data']['data'];

		
        
        $this->template->load('templates/template','profil/sejarah', $data); 
        
	}

	public function error()
	{
		$this->load->view('404_notfound');
	}
}
