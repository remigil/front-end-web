<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('guzzle_request_helper');
    }
	public function index()
	{
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
	}
 
	public function survey_kepuasan()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['title'] = "Survey Kepuasan | K3I Korlantas";
		$data['breadcrumb'] = "survey";
		$data['headline'] = "SURVEY KEPUASAN";

		
        $this->template->load('templates/template','kontak/survey_kepuasan', $data); 
        
	}

	public function layanan_pengaduan()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$data['title'] = "Layanan Pengaduan | K3I Korlantas";
		$data['breadcrumb'] = "pengaduan";
		$data['headline'] = "LAYANAN PENGADUAN";

		
        $this->template->load('templates/template','kontak/layanan_pengaduan', $data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
