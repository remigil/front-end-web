<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }
	public function loadTemplate($page_content)
	{

        $data["page_content"] = $page_content["page"];
        $data["css"] = $page_content["css"];
        $data["js"] = $page_content["js"];
        $data["title"] = $page_content["title"];
        $data["data"] = $page_content["data"]; 

        // $headers = [
        //     'Token' => $this->session->userdata['token']
        // ];
        // $user = guzzle_request('GET','user?limit=1&filterField%5B%5D=user_id&filterValue%5B%5D='.$this->session->userdata['user_id'].'', ['headers' => $headers]);
        // $data['user'] = $user['data']['data'];
        
        // $compenyProfile = guzzle_request('GET','company?limit=1&filterField%5B%5D=company_id&filterValue%5B%5D='.$this->session->userdata['company'].'', ['headers' => $headers]);
        // $data['compenyProfile'] = $compenyProfile['data']['data'];
      
        
        $this->load->view("templates/app", $data);
    }
}
