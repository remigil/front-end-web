<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tripon extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("tripon/m_tripon");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "TripOn";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "tripon/Korlantas/tripon";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "tripon/Kapolda/tripon";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "tripon/Polres/tripon";
        }

        $getVehicle = guzzle_request('GET', 'type_vehicle', [
            'headers' => [
                'Authorization' => $headers
                ]
        ]);
        $data['getVehicle'] = $getVehicle['data']['data'];
        
        // var_dump($getVehicle);
        // die;


        $page_content["data"] = $data;
        // $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_tripon->get_datatables($postData);  
		echo json_encode($data); 
    }


    public function detail($id)
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "TripOn";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "tripon/Korlantas/tripondetail";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "tripon/Kapolda/tripondetail";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "tripon/Polres/tripondetail";
        }
        $getDetail = guzzle_request('GET', 'trip_on/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'];
        // var_dump($data['getDetail']);die;
        // echo json_encode($data['getDetail']['data']);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
}
