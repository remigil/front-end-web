<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cctv_streaming extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_cctv_streaming');
    }
 
	public function index()
	{ 
		$headers = [
            // 'Authorization' => $this->session->userdata['token']
        ];
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
		$data['title'] = "CCTV Streaming | K3I Korlantas";
		$data['breadcrumb'] = "cctv";
		$data['headline'] = "CCTV STREAMING";

		$getCCTV = guzzle_request('GET', 'cctv', [
            // 'headers' => $headers
        ]);
		// var_dump($getCCTV);die;
		
        
        $this->template->load('templates/template','lain_lain/cctv_streaming', $data); 
        
	}

	// public function serverSideTable() 
    // {  
    //     $postData = $this->input->post();   
    //     $data = $this->m_cctv_streaming->get_datatables($postData);  
	// 	echo json_encode($data); 
    // }

	public function getCCTV()
    {
        // $headers = [
        //     'Authorization' => $this->session->userdata['token']
        // ];

        $input = $this->input->post();  

        if($input['kategoriFilter']){
            $kategoriFilter = '&filter[]=type_cctv&filterSearch[]='.$input['kategoriFilter'].'';
        }else{
            $kategoriFilter = '';
        }

        if($input['searchFilter']){
            $searchData = '&search='.$input['searchFilter'].'';
        }else{
            $searchData = '';
        } 

        if($input['page']){
            $page = ''.$input['page'].'';
        }else{
            $page = '1';
        } 


        $url = 'cctv?serverSide=True&length=8&start='.$page.'&order=id&orderDirection=asc'.$searchData.''.$kategoriFilter.'';
        // print_r($url);
        // die;
        $getCCTV = guzzle_request('GET', $url, [
            // 'headers' => $headers
        ]);
        if($getCCTV['isSuccess'] == false){
            redirect(base_url('404_notfound'));
            die;
        }
        
        $data['getCCTV'] = $getCCTV['data'];
        echo json_encode($data['getCCTV']);
    }


	public function error()
	{
		$this->load->view('404_notfound');
	}
}
