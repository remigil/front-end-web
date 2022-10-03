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

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $notif = guzzle_request('GET', 'notifikasi?serverSide=True&order=id&orderDirection=desc&length=10&start=1&filter[]=is_read&filterSearch[]=0', [
            'headers' => $headers
        ]);
        $data['notif'] = $notif['data'];
        // echo json_encode($data['notif']);
        // die;
        
        // $compenyProfile = guzzle_request('GET','company?limit=1&filterField%5B%5D=company_id&filterValue%5B%5D='.$this->session->userdata['company'].'', ['headers' => $headers]);
        // $data['compenyProfile'] = $compenyProfile['data']['data'];
      
        
        $this->load->view("templates/app", $data);
    }
}
