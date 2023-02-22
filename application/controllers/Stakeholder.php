<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stakeholder extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_stakeholder');
    }
	public function index($id)
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

		$url = 'stackholder/getId/' . $id;
        $getbyid = guzzle_request('GET', $url, [
        ]);
		$getbyid = $getbyid['data']['data'];

		
		$data['title'] = $getbyid['title']." | K3I Korlantas";
		$data['stakeholder'] = $getbyid;
		
        $data['breadcrumb'] = $getbyid['title'];
        $data['headline'] = $getbyid['fullname'];

		$getkemendagri = guzzle_request('GET', 'regulation_doc/bycategory/8', []);
		$getkemenhub = guzzle_request('GET' , 'regulation_doc/bycategory/9' , []);
		$getkemenkes = guzzle_request('GET' , 'regulation_doc/bycategory/10' , []);
		$getkemenperin = guzzle_request('GET' , 'regulation_doc/bycategory/11' , []);
		$getkemenpupr = guzzle_request('GET' , 'regulation_doc/bycategory/12' , []);
		$getBadanriset = guzzle_request('GET' , 'regulation_doc/bycategory/13' , []);
		$getkemenkeu = guzzle_request('GET' , 'regulation_doc/bycategory/14' , []);
		$getkemendikbud = guzzle_request('GET' , 'regulation_doc/bycategory/15' , []);
		$getkemenhan = guzzle_request('GET' , 'regulation_doc/bycategory/16' , []);

		$getPublikasi = guzzle_request('GET', 'publikasi', [
			// 'headers' => $headers
		]);
		$data['publikasi'] = $getPublikasi;
		// var_dump($getkemendagri);die;

		// var_dump($getbyid['title']);die;

		if($getbyid['title'] == "Kemendagri"){
			$data['getdoc'] = $getkemendagri['data'];
		}
		else if($getbyid['title'] == "Kemenhub"){
			$data['getdoc'] = $getkemenhub['data'];
		}
		elseif($getbyid['title'] == "Kemenkes"){
			$data['getdoc'] = $getkemenkes['data'];
		}
		elseif($getbyid['title'] == "Kemenperin"){
			$data['getdoc'] = $getkemenperin['data'];
		}
		elseif($getbyid['title'] == "Kemenpupr"){
			$data['getdoc'] = $getkemenpupr['data'];
		}
		elseif($getbyid['title'] == "Badan Riset"){
			$data['getdoc'] = $getBadanriset['data'];
		}
		elseif($getbyid['title'] == "Kemenkeu"){
			$data['getdoc'] = $getkemenkeu['data'];
		}
		elseif($getbyid['title'] == "Kemendikbud"){
			$data['getdoc'] = $getkemendikbud['data'];
		}
		elseif($getbyid['title'] == "Kemenhan"){
			$data['getdoc'] = $getkemenhan['data'];
		}
		
		// var_dump($data);die;
		$this->template->load('templates/template', 'detail_stakeholder', $data);
	}


	public function error()
	{
		$this->load->view('404_notfound');
	}
}
