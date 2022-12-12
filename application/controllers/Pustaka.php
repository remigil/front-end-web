<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pustaka extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function informasi_setiap_saat()
	{ 
		$title = "Informasi Setiap Saat | K3I Korlantas";
		$breadcrumb = "informasi setiap saat";
		$headline = "INFORMASI SETIAP SAAT";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','informasi_publik/informasi_setiap_saat', $data); 
        
	}

	public function informasi_berkala()
	{ 
		$title = "Informasi Berkala | K3I Korlantas";
		$breadcrumb = "informasi berkala";
		$headline = "INFORMASI BERKALA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','informasi_publik/informasi_berkala', $data); 
        
	}

	public function informasi_serta_merta()
	{ 
		$title = "Informasi Serta Merta | K3I Korlantas";
		$breadcrumb = "informasi serta merta";
		$headline = "INFORMASI SERTA MERTA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','informasi_publik/informasi_serta_merta', $data); 
        
	}

	public function undang_undang()
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

        
        
        $this->template->load('templates/template','informasi_publik/undang_undang', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
