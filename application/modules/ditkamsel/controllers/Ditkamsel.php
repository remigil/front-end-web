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
        } else if ($this->session->userdata['role'] == 'Kakorlantas' ||  $this->session->userdata['role'] == 'Ditkamsel' || $this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "DITKAMSEL";
            $page_content["page"] = "ditkamsel/korlantas/ditkamsel_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }


    public function inputData()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Input Data Harian Ditkamsel";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "ditkamsel/korlantas/inputdata_ditkamsel";
        }


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function listof_import_file()
    {
        $postData = $this->input->post();
        $data = $this->M_ditkamsel->get_datatables_harian($postData);
        echo json_encode($data);
    }

    public function getStatistik()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $date = date("Y-m-d");
        $getkamselrekalantas = guzzle_request('GET', 'rekalantas/daily?date=' . $date . '', [
            'headers' => $headers
        ]);
        $getkamseltroublespot = guzzle_request('GET', 'troublespot/daily?date=' . $date . '', [
            'headers' => $headers
        ]);
        $getkamselblackspot = guzzle_request('GET', 'blankspot/daily?date=' . $date . '', [
            'headers' => $headers
        ]);
        $getkamseldikmaslantas = guzzle_request('GET', 'dikmaslantas/daily?date=' . $date . '', [
            'headers' => $headers
        ]);
        $getkamselrekalantas = $getkamselrekalantas["data"];
        $getkamseltroublespot = $getkamseltroublespot["data"];
        $getkamselblackspot = $getkamselblackspot["data"];
        $getkamseldikmaslantas = $getkamseldikmaslantas["data"];


        $totalrekalantas = 0;
        $totaltroublespot = 0;
        $totalblackspot = 0;
        $totaldikmaslantas = 0;
        for ($i = 0; $i < count($getkamselrekalantas); $i++) {
            $totalrekalantas += $getkamselrekalantas[$i]['total'];
        }
        for ($i = 0; $i < count($getkamseltroublespot); $i++) {
            $totaltroublespot += $totaltroublespot[$i]['total'];
        }
        for ($i = 0; $i < count($getkamselblackspot); $i++) {
            $totalblackspot += $totalblackspot[$i]['total'];
        }
        for ($i = 0; $i < count($getkamseldikmaslantas); $i++) {
            $totaldikmaslantas += $totaldikmaslantas[$i]['total'];
        }



        $data = [
            'rekalantas' => number_format($totalrekalantas, 0, '', '.'),
            'troublespot' => number_format($totaltroublespot, 0, '', '.'),
            'blackspot' => number_format($totalblackspot, 0, '', '.'),
            'dikmaslantas' => number_format($totaldikmaslantas, 0, '', '.'),
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
    public function getChartBlackspot()
    {
        $title = 'DATA Blackspot';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_ditkamsel->getChartBlackspot($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }
    public function getChartTroublespot()
    {
        $title = 'DATA Troublespot';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_ditkamsel->getChartTroublespot($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }
    public function getChartDikmaslantas()
    {
        $title = 'DATA Ditkamsel';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_ditkamsel->getChartDikmaslantas($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }
    public function getChartRekalantas()
    {
        $title = 'DATA Ditkamsel';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_ditkamsel->getChartRekalantas($filterbaru);
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
