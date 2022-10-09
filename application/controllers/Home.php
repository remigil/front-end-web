<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_berita','berita');
    }
 
	public function index()
	{ 
        $data['title'] = "Home | K3I Korlantas";  
		$this->template->load('templates/template','home', $data); 
		
		// $url = 'news?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

		// $json = json_decode($url);
		// var_dump($json);
        // $page_content["css"] = '';
        // $page_content["js"] = '';
        // $page_content["title"] = "Berita";

		
		
		
        // $page_content["data"] = '';
		// $postData = $this->input->post();   
        // $data = $this->berita->get_datatables($postData);  
		// echo json_encode($data); 
        
	}
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
