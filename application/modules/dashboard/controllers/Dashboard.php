<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

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
        $page_content["title"] = "Dashboard";  
		
        if($this->session->userdata['role'] == 'G20'){
            $page_content["page"] = "dashboard/dashboard_g20";
        }else if($this->session->userdata['role'] == 'Korlantas'){
            $page_content["page"] = "dashboard/dashboard_view";
        }else if($this->session->userdata['role'] == 'Kapolda'){
            $page_content["page"] = "dashboard/dashboard_view";
        }else if($this->session->userdata['role'] == 'Polres'){
            $page_content["page"] = "dashboard/dashboard_view";
        }

        // $getTrack = guzzle_requestTracking('GET', 'getMe?date='.date('Y-m-d').'', [  
        //     'headers' => $headers 
        // ]);
        // $data['getTrack'] = $getTrack['data']; 
 
		
        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    } 

    public function getTracking()

	{  

        $headers = [ 
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post();

        // if($input["status"]){
        //     $status = '&filterField[]=status&filterValue[]='.$input["status"].'';
        // }else{
        //     $status = '';
        // } 


        $url = 'getMe?date=2022-08-22'; 
        $getMe = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);  

		echo json_encode($getMe);

	}

 

}
