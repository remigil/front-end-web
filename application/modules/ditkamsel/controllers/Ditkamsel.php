<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ditkamsel extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_ditkamsel");
    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

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
        } else if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["title"] = "DITKAMSEL";
            $page_content["page"] = "ditkamsel/korlantas/ditkamsel_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function getStatistik()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $date = date("Y-m-d");
        $getkamsel = guzzle_request('GET', 'ditkamsel/daily?date=' . $date . '', [
            'headers' => $headers
        ]);
        $getkamsel = $getkamsel["data"];

        $totaldikmaslantas = 0;
        for ($i = 0; $i < count($getkamsel); $i++) {
            $totaldikmaslantas += $getkamsel[$i]['dikmaslantas'];
        }



        $data = [
            'dikmaslantas' => number_format($totaldikmaslantas, 0, '', '.'),
            'jemenopsrek' =>  0,
            'cegah' => 0,
            'audit' => 0,
        ];
        echo json_encode($data);
    }

    public function getChartDitkamsel()
    {
        $title = 'DATA Ditkamsel';
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
        $getdata = $this->M_ditkamsel->getChartDitkamsel($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }


    public function data_dakgar_lantas()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditkamsel";
        $page_content["page"] = "ditkamsel/ditkamsel_dakgar_lantas";
        $page_content["data"] = ['menu' => 'Ditkamsel', 'submenu' => 'Data Dakgar Lantas', 'headline' => 'data dakgar lalu lintas'];
        $this->templates->loadTemplate($page_content);
    }

    public function garlantas_konvensional()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditkamsel";
        $page_content["page"] = "ditkamsel/ditkamsel_garlantas_konvensional";
        $page_content["data"] = ['menu' => 'Ditkamsel', 'submenu' => 'Pelanggaran Lalu Lintas Konvensional', 'headline' => 'pelanggaran lalu lintas konvensional'];
        $this->templates->loadTemplate($page_content);
    }

    public function kecelakaan_lalulintas()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditkamsel";
        $page_content["page"] = "ditkamsel/ditkamsel_kecelakaan_lalulintas";
        $page_content["data"] = ['menu' => 'Ditkamsel', 'submenu' => 'Kecelakaan Lalu Lintas', 'headline' => 'kecelakaan lalu lintas'];
        $this->templates->loadTemplate($page_content);
    }

    public function turjagwali()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditkamsel";
        $page_content["page"] = "ditkamsel/ditkamsel_turjagwali";
        $page_content["data"] = ['menu' => 'Ditkamsel', 'submenu' => 'Data Turjagwali', 'headline' => 'data turjagwali'];
        $this->templates->loadTemplate($page_content);
    }
}
