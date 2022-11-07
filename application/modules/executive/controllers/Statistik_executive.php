<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("executive/M_detail_statistik");
    }

    public function index()
    {

        $data['polda'] = $this->M_detail_statistik->get_Polda();
        $data["id"] = $this->uri->segment(4);
        $data["js"] = '';
        $data["title"] = "Detail Statistik";
        $this->load->view('executive/statistik/detail_statistik_view', $data);
    }

    public function getDetailStatistik()
    {
        $id = $this->input->post('id');

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        if ($id == 1) {
            $title = 'DATA KECELEKAAN LALU LINTAS';
            $getdata = $this->M_detail_statistik->getKecelakaanNasional();
            // $getGakkum = guzzle_request('GET', 'ditgakkum/daily', [
            //     'headers' => $headers
            // ]);

            // $getdata = $getGakkum['data'];
        } elseif ($id == 2) {
            $title = 'DATA PELANGGARAN LALU LINTAS';
            $getGakkum = guzzle_request('GET', 'ditgakkum/daily', [
                'headers' => $headers
            ]);

            $getdata = $getGakkum['data'];
        } elseif ($id == 3) {
            $title = 'DATA KENDARAAN BERMOTOR';
            $getRanmor = guzzle_request('GET', 'ranmor/daily', [
                'headers' => $headers
            ]);

            $getdata = $getRanmor["data"]["rows"];
        } elseif ($id == 4) {
            $title = 'JUMLAH SIM NASIONAL';
            $getSim = guzzle_request('GET', 'sim/daily', [
                'headers' => $headers
            ]);

            $getdata = $getSim["data"]["rows"];
        }

        $data = [
            'data' => $getdata,
            'title' => $title
        ];
        echo json_encode($data);
    }
}
