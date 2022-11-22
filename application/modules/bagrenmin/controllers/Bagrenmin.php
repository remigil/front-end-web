<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bagrenmin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_bagrenmin");
    }

    public function index()
    {


        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "BAGRENMIN";
            $page_content["page"] = "bagrenmin/korlantas/bagrenmin_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function getStatistik()
    {
        // $headers = [
        //     'Authorization' => $this->session->userdata['token']
        // ];
        // $date = date("Y-m-d");
        // $getregident = guzzle_request('GET', 'ditregident/daily?date=' . $date . '', [
        //     'headers' => $headers
        // ]);
        // $getregident = $getregident["data"];

        // $totalsim = 0;
        // $totalbpkb = 0;
        // $totalstnk = 0;
        // for ($i = 0; $i < count($getregident); $i++) {
        //     $totalsim += $getregident[$i]['sim'];
        //     $totalbpkb += $getregident[$i]['bpkb'];
        //     $totalstnk += $getregident[$i]['stnk'];
        // }



        $data = [
            // 'sim' => number_format($totalsim, 0, '', '.'),
            'subbagren' => 0,
            'subbagsdm' =>  0,
            'subbagada' => 0,
            'subbaglog' => 0,
        ];
        echo json_encode($data);
    }

    public function getChartBagrenmin()
    {
        $title = 'DATA BAGRENMIN';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        if ($filter == 'day') {
            $type = 'day';
        } elseif ($filter == 'month') {
            $type = 'month';
        } elseif ($filter == 'year') {
            $type = 'year';
        }
        $filterbaru = [
            'filter' => true,
            'type' => $type,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_bagrenmin->getChartBagrenmin($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }
}
