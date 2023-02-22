<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berita', 'berita');
		$this->load->model('m_ditlantas', 'ditlantas');
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
		
		$data['title'] = "Sambutan | K3I Korlantas";
		$data['breadcrumb'] = "Sambutan";
		$data['headline'] = "SAMBUTAN KORLANTAS POLRI";
		
		
		$kakor = guzzle_request('GET', 'profilepejabat?limit=10&page=1&id_jenis_pejabat=1'.'', []);
		$data['kakor'] = $kakor['data']['rows'][0];


		$this->template->load('templates/template', 'profil/sambutan', $data);
	}

	public function struktur_organisasi()
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
		
		$url = 'strukturorganisasi';

		$result = guzzle_request('GET', $url, [

			'headers' => [
				'Authorization' => $this->session->userdata['token']
			]

		]);
		$data['title'] = "Struktur Organisasi | K3I Korlantas";
		$data['breadcrumb'] = "Struktur Organisasi";
		$data['headline'] = "STRUKTUR ORGANISASI";
		$data['data'] = $result;



		$this->template->load('templates/template', 'profil/struktur_organisasi', $data);
	}

	public function profil_pejabat()
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

		$data['title'] = "Profil Pejabat | K3I Korlantas";
		$data['breadcrumb'] = "Profil Pejabat";
		$data['headline'] = "PROFIL PEJABAT";
		
		$data['kakor'] = $kakor['data']['rows'][0];
		$data['direktur'] = $direktur['data']['rows'];
		$data['kabag'] = $kabag['data']['rows'];
		$data['ditgakkum'] = $ditgakkum['data']['rows'];
		$data['ditkamsel'] = $ditkamsel['data']['rows'];
		$data['ditregident'] = $ditregident['data']['rows'];

		// var_dump($data['kakor']);die;

		$this->template->load('templates/template', 'profil/profil_pejabat', $data);
	}

	public function visi_misi()
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
		
		$url = 'visimisi';

		$result = guzzle_request('GET', $url, [

			'headers' => [
				'Authorization' => $this->session->userdata['token']
			]

		]);

		$data['title'] = "Visi dan Misi | K3I Korlantas";
		$data['breadcrumb'] = "Visi dan misi";
		$data['headline'] = "VISI DAN MISI";
		$data['data'] = $result;
		



		$this->template->load('templates/template', 'profil/visi_misi', $data);
	}

	public function tugas_fungsi()
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
		
		$korlantas = guzzle_request('GET', 'tugasfungsi/getIdWeb/VTJGc2RHVmtYMSt6RjNUSk5DSWRHK3pXQlpZazRyVzNwVGlPbERWNlVsOD0', []);
		$ditgakkum = guzzle_request('GET', 'tugasfungsi/getIdWeb/VTJGc2RHVmtYMThvZ21tMS96QkREK1ZyeWVuaWlKdmdOZWdONUo5bFZMcz0', []);
		$ditkamsel = guzzle_request('GET', 'tugasfungsi/getIdWeb/VTJGc2RHVmtYMStxTm91MTlZeHpCbnNoRStmaGYvck1HVEFuYVRGckVQUT0', []);
		$ditregident = guzzle_request('GET', 'tugasfungsi/getIdWeb/VTJGc2RHVmtYMTlMbmpEeEU1b2FZTHlVUWRQUkdNSDR3aWZEUXV5SHVhRT0', []);
		$bagops = guzzle_request('GET', 'tugasfungsi/getIdWeb/VTJGc2RHVmtYMTlWcEdta1A5bExSZFp6K29vbTJkWlBFcklKWlRJUVBZcz0', []);
		$bagrenmin = guzzle_request('GET', 'tugasfungsi/getIdWeb/VTJGc2RHVmtYMTlkbGFUTEVvWVVEZ1Z3ZDZwNlYxZktKaHgyOW5oZU1Lbz0', []);
		$bagtik = guzzle_request('GET', 'tugasfungsi/getIdWeb/VTJGc2RHVmtYMSswcFBvSDRZalNWOEp0QkJuTFlKNWQvTW0wbkNaN2xLST0', []);

		$data['title'] = "Tugas dan Fungsi | K3I Korlantas";
		$data['breadcrumb'] = "Tugas dan fungsi";
		$data['headline'] = "TUGAS DAN FUNGSI";
		


		$data['korlantas'] = $korlantas['data']['data'];
		$data['ditgakkum'] = $ditgakkum['data']['data'];
		$data['ditkamsel'] = $ditkamsel['data']['data'];
		$data['ditregident'] = $ditregident['data']['data'];
		$data['bagops'] = $bagops['data']['data'];
		$data['bagtik'] = $bagtik['data']['data'];
		$data['bagrenmin'] = $bagrenmin['data']['data'];

		// var_dump($data['korlantas']);die;



		$this->template->load('templates/template', 'profil/tugas_fungsi', $data);
	}

	public function sejarah()
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

		$data['title'] = "Sejarah POLANTAS | K3I Korlantas";
		$data['breadcrumb'] = "Sejarah";
		$data['headline'] = "SEJARAH POLISI LALU LINTAS";
		


		$this->template->load('templates/template', 'profil/sejarah', $data);
	}

	public function error()
	{
		$this->load->view('404_notfound');
	}
}
