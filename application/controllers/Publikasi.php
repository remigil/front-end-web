<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publikasi extends MX_Controller
{

	public function __construct()
	{
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

	public function detail($id)
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
		
		$getbyid = guzzle_request('GET', 'publikasi/getIdWeb/' . $id, []);
		$getdokPublikasi = guzzle_request('GET', 'dokumenpublikasi/getbyidpublikasi/' . $id, []);
		$getlinkPublikasi = guzzle_request('GET', 'linkpublikasi/getbyidpublikasi/' . $id, []);

		$data['title'] = $getbyid['data']['data']['name_publikasi'];
		$data['data'] = $getbyid['data']['data'];
		$data['dokpublikasi'] = $getdokPublikasi['data']['data'];
		$data['linkpublikasi'] = $getlinkPublikasi['data']['data'];



		$this->template->load('templates/template', 'publikasi/detail', $data);
	}

	public function konferensi_pers()
	{
		$getStakeholder = guzzle_request('GET', 'stackholder', []);

		$data['csrf_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();

		$data['title'] = "Konferensi Pers | K3I Korlantas";
		$data['breadcrumb'] = "konferensi pers";
		$data['headline'] = "KONFERENSI PERS";
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		$getPublikasi = guzzle_request('GET', 'publikasi', [
            // 'headers' => $headers
        ]);
		$data['publikasi'] = $getPublikasi;



		$this->template->load('templates/template', 'publikasi/konferensi_pers', $data);
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

		$getPublikasi = guzzle_request('GET', 'publikasi', [
            // 'headers' => $headers
        ]);
		$data['publikasi'] = $getPublikasi;


		$this->template->load('templates/template', 'publikasi/kegiatan_kakor', $data);
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

		$getPublikasi = guzzle_request('GET', 'publikasi', [
            // 'headers' => $headers
        ]);
		$data['publikasi'] = $getPublikasi;



		$this->template->load('templates/template', 'publikasi/kegiatan_khusus', $data);
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
