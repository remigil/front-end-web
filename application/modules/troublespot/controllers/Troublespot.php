<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Troublespot extends MY_Controller {

    public function __construct(){
        parent::__construct(); 
        $this->load->helper("logged_helper");
    } 
	
	public function index()
	{
		
		// $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Troublespot";  
		
        if($this->session->userdata['role'] == 'G20'){
            $page_content["page"] = "troublespot/list_g20";
        }else if($this->session->userdata['role'] == 'Korlantas'){
            $page_content["page"] = "troublespot/list_view";
        }else if($this->session->userdata['role'] == 'Kapolda'){
            $page_content["page"] = "troublespot/list_view";
        }else if($this->session->userdata['role'] == 'Polres'){
            $page_content["page"] = "troublespot/list_view";
        } 
 
		
        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    } 
 
    public function detail($id)
	{
        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Troublespot";  
		
        if($this->session->userdata['role'] == 'G20'){
            $page_content["page"] = "troublespot/detail_g20";
        }else if($this->session->userdata['role'] == 'Korlantas'){
            $page_content["page"] = "troublespot/detail_view";
        }else if($this->session->userdata['role'] == 'Kapolda'){
            $page_content["page"] = "troublespot/detail_view";
        }else if($this->session->userdata['role'] == 'Polres'){
            $page_content["page"] = "troublespot/detail_view";
        } 
 
		
        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

}
