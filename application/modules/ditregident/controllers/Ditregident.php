<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ditregident extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_ditregident");
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
        } else if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "DITREGIDENT";
            $page_content["page"] = "ditregident/korlantas/ditregident_view";
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
        $getregident = guzzle_request('GET', 'ditregident/daily?date=' . $date . '', [
            'headers' => $headers
        ]);
        $getregident = $getregident["data"];

        $totalsim = 0;
        $totalbpkb = 0;
        $totalstnk = 0;
        for ($i = 0; $i < count($getregident); $i++) {
            $totalsim += $getregident[$i]['sim'];
            $totalbpkb += $getregident[$i]['bpkb'];
            $totalstnk += $getregident[$i]['stnk'];
        }



        $data = [
            'sim' => number_format($totalsim, 0, '', '.'),
            'bpkb' =>  number_format($totalbpkb, 0, '', '.'),
            'stnk' => number_format($totalstnk, 0, '', '.'),
            'sbst' => 0,
        ];
        echo json_encode($data);
    }

    public function getChartDitregident()
    {
        $title = 'DATA DITREGIDENT';
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
        $getdata = $this->M_ditregident->getChartDitregident($filterbaru);
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
        $page_content["title"] = "Ditregident";
        $page_content["page"] = "ditregident/ditregident_dakgar_lantas";
        $page_content["data"] = ['menu' => 'Ditregident', 'submenu' => 'Data Dakgar Lantas', 'headline' => 'data dakgar lalu lintas'];
        $this->templates->loadTemplate($page_content);
    }

    public function garlantas_konvensional()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditregident";
        $page_content["page"] = "ditregident/ditregident_garlantas_konvensional";
        $page_content["data"] = ['menu' => 'Ditregident', 'submenu' => 'Pelanggaran Lalu Lintas Konvensional', 'headline' => 'pelanggaran lalu lintas konvensional'];
        $this->templates->loadTemplate($page_content);
    }

    public function kecelakaan_lalulintas()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditregident";
        $page_content["page"] = "ditregident/ditregident_kecelakaan_lalulintas";
        $page_content["data"] = ['menu' => 'Ditregident', 'submenu' => 'Kecelakaan Lalu Lintas', 'headline' => 'kecelakaan lalu lintas'];
        $this->templates->loadTemplate($page_content);
    }

    public function turjagwali()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditregident";
        $page_content["page"] = "ditregident/ditregident_turjagwali";
        $page_content["data"] = ['menu' => 'Ditregident', 'submenu' => 'Data Turjagwali', 'headline' => 'data turjagwali'];
        $this->templates->loadTemplate($page_content);
    }
}
