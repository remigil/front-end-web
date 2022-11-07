<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opsus_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		
        $this->load->model("executive/M_detail_opsus");
    }

    public function index()
    {

		$headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $data["title"] = "Detail Opsus";
		
        $this->load->view('executive/opsus/detail_opsus_view', $data);
		$getPolda = guzzle_request('GET', 'polda', [
            'headers' => [
                'Authorization' => $headers
            ]
        ]);
        $data['getPolda'] = $getPolda['data']['data'];
    }

	public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->M_detail_opsus->get_datatables($postData);
        echo json_encode($data);
    }


}
