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
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		// menu navbar
			$getStakeholder = guzzle_request('GET', 'stackholder', []);
			$data['getStakeholder'] = $getStakeholder['data']['data'];

			$getpublikasi = guzzle_request('GET', 'publikasi', [
				// 'headers' => $headers
			]);
			$data['publikasi'] = $getpublikasi;

			$getSatker = guzzle_request('GET', 'fungsisatker', [
				// 'headers' => $headers
			]);
			$data['satker'] = $getSatker;

			$getLainnya = guzzle_request('GET', 'fungsilain', [
				// 'headers' => $headers
			]);
			$data['lainnya'] = $getLainnya;
		// end menu navbar

		
		$data['title'] = "Informasi Setiap Saat | K3I Korlantas";
		$data['breadcrumb'] = "informasi setiap saat";
		$data['headline'] = "INFORMASI SETIAP SAAT";
		$getdoc = guzzle_request('GET' , 'regulation_doc/bycategory/28',[]);
		$data['getpp'] = $getdoc['data'];

		
        $this->template->load('templates/template','informasi_publik/informasi_setiap_saat', $data); 
        
	}

	public function informasi_berkala()
	{ 
		

		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
		
		
		// menu navbar
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		
		$getpublikasi = guzzle_request('GET', 'publikasi', [
			// 'headers' => $headers
		]);
		$data['publikasi'] = $getpublikasi;
		
		$getSatker = guzzle_request('GET', 'fungsisatker', [
			// 'headers' => $headers
		]);
		$data['satker'] = $getSatker;

		$getLainnya = guzzle_request('GET', 'fungsilain', [
			// 'headers' => $headers
		]);
		$data['lainnya'] = $getLainnya;
		// end menu navbar

		$kakor = guzzle_request('GET', 'profilepejabat?limit=10&page=1&id_jenis_pejabat=1'.'', []);
		$direktur = guzzle_request('GET', 'profilepejabat?limit=10&page=1&id_jenis_pejabat=2,3,4'.'', []);
		$kabag = guzzle_request('GET', 'profilepejabat?limit=10&page=1&id_jenis_pejabat=5,6,7'.'', []);
		$ditgakkum = guzzle_request('GET', 'profilepejabat?limit=10&page=1&id_jenis_pejabat=8,9,10'.'', []);
		$ditkamsel = guzzle_request('GET', 'profilepejabat?limit=10&page=1&id_jenis_pejabat=11,12,13'.'', []);
		$ditregident = guzzle_request('GET', 'profilepejabat?limit=10&page=1&id_jenis_pejabat=14,15,16'.'', []);

		$data['title'] = "Informasi Berkala | K3I Korlantas";
		$data['breadcrumb'] = "informasi berkala";
		$data['headline'] = "INFORMASI BERKALA";

		$data['kakor'] = $kakor;
		$data['direktur'] = $direktur;
		$data['kabag'] = $kabag;
		$data['ditgakkum'] = $ditgakkum;
		$data['ditkamsel'] = $ditkamsel;
		$data['ditregident'] = $ditregident;

		
        $this->template->load('templates/template','informasi_publik/informasi_berkala', $data); 
        
	}

	public function informasi_serta_merta()
	{ 
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		// menu navbar
			$getStakeholder = guzzle_request('GET', 'stackholder', []);
			$data['getStakeholder'] = $getStakeholder['data']['data'];

			$getpublikasi = guzzle_request('GET', 'publikasi', [
				// 'headers' => $headers
			]);
			$data['publikasi'] = $getpublikasi;

			$getSatker = guzzle_request('GET', 'fungsisatker', [
				// 'headers' => $headers
			]);
			$data['satker'] = $getSatker;

			$getLainnya = guzzle_request('GET', 'fungsilain', [
				// 'headers' => $headers
			]);
			$data['lainnya'] = $getLainnya;
		// end menu navbar

		
		$data['title'] = "Informasi Serta Merta | K3I Korlantas";
		$data['breadcrumb'] = "informasi serta merta";
		$data['headline'] = "INFORMASI SERTA MERTA";


		$getdoc = guzzle_request('Get' , 'regulation_doc/bycategory/35',[]);
		$data['getdoc'] = $getdoc['data'][0];

		// var_dump($data['getdoc']);die;

		
        
        $this->template->load('templates/template','informasi_publik/informasi_serta_merta', $data); 
        
	}

	public function undang_undang()
	{ 
		
		
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 

		// menu navbar
			$getStakeholder = guzzle_request('GET', 'stackholder', []);
			$data['getStakeholder'] = $getStakeholder['data']['data'];

			$getpublikasi = guzzle_request('GET', 'publikasi', [
				// 'headers' => $headers
			]);
			$data['publikasi'] = $getpublikasi;

			$getSatker = guzzle_request('GET', 'fungsisatker', [
				// 'headers' => $headers
			]);
			$data['satker'] = $getSatker;

			$getLainnya = guzzle_request('GET', 'fungsilain', [
				// 'headers' => $headers
			]);
			$data['lainnya'] = $getLainnya;
		// end menu navbar
		
		$getuud = guzzle_request('Get' , 'regulation_doc/bycategory/1',[]);
		// var_dump($getuud);die;
		$getpp = guzzle_request('Get' , 'regulation_doc/bycategory/2',[]);
		$getperpres = guzzle_request('Get' , 'regulation_doc/bycategory/3',[]);
		$getpolisi = guzzle_request('Get' , 'regulation_doc/bycategory/4',[]);
		$getkapolri = guzzle_request('Get' , 'regulation_doc/bycategory/5',[]);
		$getkakor = guzzle_request('Get' , 'regulation_doc/bycategory/6',[]);
		$getlain = guzzle_request('Get' , 'regulation_doc/bycategory/7',[]);

		$data['getuud'] = $getuud['data'];
		$data['getpp'] = $getpp['data'];
		$data['getperpres'] = $getperpres['data'];
		$data['getpolisi'] = $getpolisi['data'];
		$data['getkapolri'] = $getkapolri['data'];
		$data['getkakor'] = $getkakor['data'];
		$data['getlain'] = $getlain['data'];
		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN"; 


        $this->template->load('templates/template','informasi_publik/undang_undang', $data); 
        
	}
	public function uud()
	{
		$getuud = guzzle_request('Get' , 'regulation_doc/bycategory/1',[]);
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['getuud'] = $getuud['data'];

		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN"; 

		$this->template->load('templates/template','informasi_publik/uud_list', $data); 
	}
	public function pp()
	{
		$getpp = guzzle_request('Get' , 'regulation_doc/bycategory/2',[]);
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['getpp'] = $getpp['data'];

		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN"; 

		$this->template->load('templates/template','informasi_publik/pp_list', $data); 
	}
	public function perpres()
	{
		$getperpres = guzzle_request('Get' , 'regulation_doc/bycategory/3',[]);
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['getperpres'] = $getperpres['data'];

		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN"; 

		$this->template->load('templates/template','informasi_publik/perpres_list', $data); 
	}
	public function polisi()
	{
		$getpolisi = guzzle_request('Get' , 'regulation_doc/bycategory/4',[]);
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['getpolisi'] = $getpolisi['data'];

		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN"; 

		$this->template->load('templates/template','informasi_publik/polisi_list', $data); 
	}
	public function kapolri()
	{
		$getkapolri = guzzle_request('Get' , 'regulation_doc/bycategory/5',[]);
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['getkapolri'] = $getkapolri['data'];

		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN"; 

		$this->template->load('templates/template','informasi_publik/kapolri_list', $data); 
	}
	public function kakor()
	{
		$getkakor = guzzle_request('Get' , 'regulation_doc/bycategory/6',[]);
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['getkakor'] = $getkakor['data'];

		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN"; 

		$this->template->load('templates/template','informasi_publik/kakor_list', $data); 
	}
	public function lain()
	{
		$getlain = guzzle_request('Get' , 'regulation_doc/bycategory/7',[]);
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['getlain'] = $getlain['data'];

		$data['title'] = "UU dan Peraturan | K3I Korlantas";  
		$data['breadcrumb'] = "uu dan peraturan";  
		$data['headline'] = "UU DAN PERATURAN"; 

		$this->template->load('templates/template','informasi_publik/lain_list', $data); 
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
