<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polda_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("executive/M_detail_polda");
    }

    public function index()
    {
        $id = $this->uri->segment(4);

        $data['polda'] = $this->M_detail_polda->get_Polda();
        $data['poldaid'] = $this->M_detail_polda->get_Poldaid($id);
        $data["id"] = $id;
        $data["title"] = "Detail Polda";
        $this->load->view('executive/polda/detail_polda_view', $data);
    }


    public function getDetailPolda()
    {
        $id = $this->input->post('id');
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'polda/getId/' . $id;
        $getPolda = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);



        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getGakkum = $getGakkum["data"];

        $totalgarlantas = 0;
        $totallakalantas = 0;
        for ($i = 0; $i < count($getGakkum); $i++) {
            $totalgarlantas += $getGakkum[$i]['garlantas'];
            $totallakalantas += $getGakkum[$i]['lakalantas'];
        }

        $getRanmor = guzzle_request('GET', 'ranmor/daily?polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getRanmor = $getRanmor["data"]["rows"];

        $totalmotor = 0;
        for ($i = 0; $i < count($getRanmor); $i++) {
            $totalmotor += $getRanmor[$i]['sepeda_motor'];
        }

        $getSim = guzzle_request('GET', 'sim/daily?polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getSim = $getSim["data"]["rows"];

        $totalsim = 0;
        for ($i = 0; $i < count($getSim); $i++) {
            $totalsim += $getSim[$i]['total'];
        }


        $data = [
            'polda' => $getPolda['data']['data'],
            'garlantas' => number_format($totalgarlantas, 0, '', '.'),
            'lakalantas' => number_format($totallakalantas, 0, '', '.'),
            'motor' => number_format($totalmotor, 0, '', '.'),
            'sim' => number_format($totalsim, 0, '', '.'),
        ];
        echo json_encode($data);
    }

    public function getDetailPolda_filter()
    {
        $id = $this->input->post('id');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $search = '';



        if ($start_date != null && $end_date != null) {
            $search = 'filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '&';
        }

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'polda/getId/' . $id;
        $getPolda = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);


        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?' . $search . 'polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getGakkum = $getGakkum["data"];


        $totalgarlantas = 0;
        $totallakalantas = 0;
        for ($i = 0; $i < count($getGakkum); $i++) {
            $totalgarlantas += $getGakkum[$i]['garlantas'];
            $totallakalantas += $getGakkum[$i]['lakalantas'];
        }

        $getRanmor = guzzle_request('GET', 'ranmor/daily?' . $search . 'polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getRanmor = $getRanmor["data"]["rows"];

        $totalmotor = 0;
        for ($i = 0; $i < count($getRanmor); $i++) {
            $totalmotor += $getRanmor[$i]['sepeda_motor'];
        }

        $getSim = guzzle_request('GET', 'sim/daily?' . $search . 'polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getSim = $getSim["data"]["rows"];

        $totalsim = 0;
        for ($i = 0; $i < count($getSim); $i++) {
            $totalsim += $getSim[$i]['total'];
        }


        $data = [
            'polda' => $getPolda['data']['data'],
            'garlantas' => number_format($totalgarlantas, 0, '', '.'),
            'lakalantas' => number_format($totallakalantas, 0, '', '.'),
            'motor' => number_format($totalmotor, 0, '', '.'),
            'sim' => number_format($totalsim, 0, '', '.'),
        ];
        echo json_encode($data);
    }
}
