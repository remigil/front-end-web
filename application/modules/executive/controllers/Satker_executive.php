<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satker_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        // $this->load->model("masterdata/m_fasum");
    }

    public function index()
    {
        $data["id"] = $this->uri->segment(4);
        $data["js"] = '';
        $data["title"] = "Detail Satker";
        $this->load->view('executive/satker/detail_satker_view', $data);
    }

    public function getDetailSatker()
    {
        $id = $this->input->post('id');
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        if ($id == 1) {
            $title = 'Ditgakkum';
            $getGakkum = guzzle_request('GET', 'ditgakkum/daily', [
                'headers' => $headers
            ]);
            $getdata = $getGakkum["data"];
        } elseif ($id == 2) {
            $title = 'Ditregident';
            $getRegident = guzzle_request('GET', 'ditregident/daily', [
                'headers' => $headers
            ]);
            $getdata = $getRegident["data"];
        } elseif ($id == 3) {
            $title = 'Ditkamsel';
            $getKamsel = guzzle_request('GET', 'ditkamsel/daily', [
                'headers' => $headers
            ]);
            $getdata = $getKamsel["data"];
        }



        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
}
