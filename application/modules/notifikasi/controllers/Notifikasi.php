<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
    }

    public function index()
    {
    // redirect(base_url('404_notfound'));
    }

    public function getNotif()
    {  
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $input = $this->input->post();

        if($input['page']){
            $page = ''.$input['page'].'';
        }else{
            $page = '1';
        } 


        $url = 'notifikasi?serverSide=True&order=id&orderDirection=desc&length=10&start='.$page.'&filter[]=is_read&filterSearch[]=0';
        $getNotif = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getNotif'] = $getNotif['data'];
        
        echo json_encode($data['getNotif']); 
        // die;
    
    }

    public function getCountNotif()
    {  
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $input = $this->input->post();

        if($input['page']){
            $page = ''.$input['page'].'';
        }else{
            $page = '1';
        } 


        $url = 'notifikasi/countNotif';
        $getCountNotif = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getCountNotif'] = $getCountNotif['data'];
        
        echo json_encode($data['getCountNotif']); 
        // die;
    
    }
}