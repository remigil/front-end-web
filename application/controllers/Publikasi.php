<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi extends MX_Controller {

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
 
	public function konferensi_pers()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['title'] = "Konferensi Pers | K3I Korlantas";
		$data['breadcrumb'] = "konferensi pers";
		$data['headline'] = "KONFERENSI PERS";

		
        
        $this->template->load('templates/template','publikasi/konferensi_pers', $data); 
        
	}

	public function kegiatan_kakor()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['title'] = "Kegiatan Kakorlantas POLRI | K3I Korlantas";
		$data['breadcrumb'] = "kegiatan kakorlantas";
		$data['headline'] = "KEGIATAN KAKORLANTAS POLRI";
		
		
        $this->template->load('templates/template','publikasi/kegiatan_kakor', $data); 
        
	}

	public function kegiatan_khusus()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['title'] = "Kegiatan Khusus | K3I Korlantas";
		$data['breadcrumb'] = "kegiatan khusus";
		$data['headline'] = "KEGIATAN KHUSUS";

		
        
        $this->template->load('templates/template','publikasi/kegiatan_khusus', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
