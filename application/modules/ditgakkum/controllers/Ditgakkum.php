<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ditgakkum extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_ditgakkum");
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
            $page_content["page"] = "ditagkkum/polda/ditgakkum_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditgakkum' || $this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "DITGAKKUM";
            $page_content["page"] = "ditgakkum/korlantas/ditgakkum_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function inputData()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Input Data Harian Ditgakkum";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "ditgakkum/korlantas/inputdata_ditgakkum";
        }


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function listof_import_file()
    {
        $postData = $this->input->post();
        $data = $this->M_ditgakkum->get_datatables_harian($postData);
        echo json_encode($data);
    }

    public function getStatistik()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $date = date("Y-m-d");
        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?date=' . $date . '', [
            'headers' => $headers
        ]);
        $getGakkum = $getGakkum["data"];

        $totalgarlantas = 0;
        $totallakalantas = 0;
        $totalturjagwali = 0;
        for ($i = 0; $i < count($getGakkum); $i++) {
            $totalgarlantas += $getGakkum[$i]['garlantas'];
            $totallakalantas += $getGakkum[$i]['lakalantas'];
            $totalturjagwali += $getGakkum[$i]['turjagwali'];
        }



        $data = [
            'garlantas' => number_format($totalgarlantas, 0, '', '.'),
            'lakalantas' =>  number_format($totallakalantas, 0, '', '.'),
            'turjagwali' => number_format($totalturjagwali, 0, '', '.'),
            'walpjr' => 72,
            // 'motor' =>  number_format($totalmotor, 0, '', '.'),
            // 'sim' =>  number_format($totalsim, 0, '', '.'),
        ];
        echo json_encode($data);
    }

    public function getChartDitgakkum()
    {
        $title = 'DATA DITGAKKUM';
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
        $getdata = $this->M_ditgakkum->getChartDitgakkum($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }

    public function getChartLaka()
    {
        $title = 'DATA LAKA';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_ditgakkum->getChartLaka($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }
    public function getChartGarlantas()
    {
        $title = 'DATA GARLANTAS';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_ditgakkum->getChartGarlantas($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }
    public function getChartTatib()
    {
        $title = 'DATA TATIB';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_ditgakkum->getChartTatib($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }
    public function getChartWalPjr()
    {
        $title = 'DATA WAL & PJR';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_ditgakkum->getChartWalPjr($filterbaru);
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
        $page_content["title"] = "Ditgakkum";
        $page_content["page"] = "ditgakkum/ditgakkum_dakgar_lantas";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Data Dakgar Lantas', 'headline' => 'data dakgar lalu lintas'];
        $this->templates->loadTemplate($page_content);
    }

    public function garlantas_konvensional()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["page"] = "ditgakkum/ditgakkum_garlantas_konvensional";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Pelanggaran Lalu Lintas Konvensional', 'headline' => 'pelanggaran lalu lintas konvensional'];
        $this->templates->loadTemplate($page_content);
    }

    public function kecelakaan_lalulintas()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["page"] = "ditgakkum/ditgakkum_kecelakaan_lalulintas";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Kecelakaan Lalu Lintas', 'headline' => 'kecelakaan lalu lintas'];
        $this->templates->loadTemplate($page_content);
    }

    public function turjagwali()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["page"] = "ditgakkum/ditgakkum_turjagwali";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Data Turjagwali', 'headline' => 'data turjagwali'];
        $this->templates->loadTemplate($page_content);
    }
}
