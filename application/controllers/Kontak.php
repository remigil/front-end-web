<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('guzzle_request_helper');
	}
	public function index()
	{
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['getStakeholder'] = $getStakeholder['data']['data'];
	}

	public function survey_kepuasan()
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
		
		
		$data['title'] = "Survey Kepuasan | K3I Korlantas";
		$data['breadcrumb'] = "survey";
		$data['headline'] = "SURVEY KEPUASAN";
		
		


		$this->template->load('templates/template', 'kontak/survey_kepuasan', $data);
	}
	public function store_kepuasan()
	{
		$input      = $this->input->post();

		$dummy = [
			[
				'name' => 'name_survey',
				'contents' => $input['name_survey'],
			],
			[
				'name' => 'address_survey',
				'contents' => $input['address_survey'],
			],
			[
				'name' => 'email_survey',
				'contents' => $input['email_survey'],
			],
			[
				'name' => 'design_survey',
				'contents' => $input['design_survey'],
			],
			[
				'name' => 'convenience_survey',
				'contents' => $input['convenience_survey'],
			],
			[
				'name' => 'accurate_survey',
				'contents' => $input['accurate_survey'],
			],
			[
				'name' => 'fast_survey',
				'contents' => $input['fast_survey'],
			],
		];
		$data = guzzle_request('POST', 'satisfactionsurvey/add', [
			'multipart' => $dummy,
		]);

		if ($data['isSuccess'] == true) {
			$res = array(
				'status' => true,
				'message' => 'Berhasil tambah data.',
				'data' => $data
			);
		} else {
			$res = array(
				'status' => false,
				'message' => 'Gagal tambah data.',
				'data' => $data
			);
		}

		echo json_encode($res);
	}

	public function getStatistik()
	{
		$urldesign = 'satisfactionsurvey/countdesign';
		$urlconvenience = 'satisfactionsurvey/countconvenience';
		$urlaccurate = 'satisfactionsurvey/countaccurate';
		$urlfast = 'satisfactionsurvey/countfast';

		$design =  guzzle_request('GET',   $urldesign, []);
		$datadesign =  $design['data'];
		$convenience =  guzzle_request('GET',   $urlconvenience, []);
		$dataconvenience =  $convenience['data'];
		$accurate =  guzzle_request('GET',   $urlaccurate, []);
		$dataaccurate =  $accurate['data'];
		$fast =  guzzle_request('GET',   $urlfast, []);
		$datafast =  $fast['data'];

		$data = [
			'design' => $datadesign,
			'convenience' => $dataconvenience,
			'accurate' => $dataaccurate,
			'fast' => $datafast,
		];


		echo json_encode($data);
	}

	public function layanan_pengaduan()
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
		
		
		$data['title'] = "Layanan Pengaduan | K3I Korlantas";
		$data['breadcrumb'] = "pengaduan";
		$data['headline'] = "LAYANAN PENGADUAN";

		


		$this->template->load('templates/template', 'kontak/layanan_pengaduan', $data);
	}

	public function kirim_pengaduan()
	{

		$input = $this->input->post();
		$dummy = [
			[
				'name' => 'name_complaint',
				'contents' => $input['nama'],
			],
			[
				'name' => 'email_complaint',
				'contents' => $input['email'],
			],
			[
				'name' => 'subjek_complaint',
				'contents' => $input['subjek'],
			],
			[
				'name' => 'deskripsi_complaint',
				'contents' => $input['deskripsi'],
			],

		];

		$data = guzzle_request('POST', 'complaint/add', [
			'multipart' => $dummy,
		]);

		if ($data['isSuccess'] == true) {
			$res = array(
				'status' => true,
				'message' => 'Berhasil tambah data.',
				'data' => $data
			);
		} else {
			$res = array(
				'status' => false,
				'message' => 'Gagal tambah data.',
				'data' => $data
			);
		}

		echo json_encode($res);
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
