<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_front extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_berita','berita');
    }
 
	public function index()
	{ 
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
        $data['title'] = "Berita | K3I Korlantas";
        $data['breadcrumb'] = "Berita";
        $data['headline'] = "Berita";

		$data['getStakeholder'] = $getStakeholder['data']['data'];
		  
		
		// $url = 'news?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

		// $json = json_decode($url);
		// var_dump();
        // $page_content["css"] = '';
        // $page_content["js"] = '';
        // $page_content["title"] = "Berita";
        // ?search='..'
        if(isset($_GET['search'])){
            $search = '?search='.$_GET['search'].'';
            // var_dump($search);
        }else{
            $search = '';
        }

		$getBerita = guzzle_request('GET', 'news'.$search.'', [
            // 'headers' => $headers
        ]);
        // echo json_encode($getBerita);die;

        $news = array();
        foreach ($getBerita['data']['datanya'] as $key) {
            foreach ($key['data'] as $k) {
                $news[] = $k;
            }
        }
        // var_dump($semuaberita['getBerita']);die;


        $data["semuaberita"] = $news;
		// $postData = $this->input->post();   
        // $data = $this->berita->get_datatables($postData);  
		// echo json_encode($data); 
        $this->template->load('templates/template','home_berita', $data);
	}

	public function detailBerita($id)
    {

		$getStakeholder = guzzle_request('GET', 'stackholder', []);
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
        $data['title'] = "Berita | K3I Korlantas";  

		$data['getStakeholder'] = $getStakeholder['data']['data'];

		$getBerita = guzzle_request('GET', 'news', [
            // 'headers' => $headers
        ]);

        $news = array();
        foreach ($getBerita['data']['datanya'] as $key) {
            foreach ($key['data'] as $k) {
                $news[] = $k;
            }
        }
        // var_dump($semuaberita['getBerita']);die;


        $data["semuaberita"] = $news;

		$getDetail = guzzle_request('GET', 'news/getIdweb/' . $id . '', [
            // 'headers' => $headers
        ]);
		
        $data['getDetail'] = $getDetail['data']['data'];
		// var_dump($data['getDetail']);die;


        

		$this->template->load('templates/template','detail_berita', $data);
    }

	

	public function error()
	{
		$this->load->view('404_notfound');
	}
}
