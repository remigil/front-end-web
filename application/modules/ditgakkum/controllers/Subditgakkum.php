<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subditgakkum extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_subditgakkum");
    }



    public function index($id)
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Subgakkum Polda";
        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["page"] = "ditgakkum/korlantas/subditgakkum_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditgakkum/polda/subditgakkum_view";
        }
        $data['poldaid'] = $this->M_subditgakkum->get_Poldaid($id);
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function getStatistik($id)
    {

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $date = date("Y-m-d");
        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?polda_id=' . $id . '&date=' . $date . '', [
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
            'walpjr' => 0,
        ];
        echo json_encode($data);
    }

    public function getChartDitgakkum($id)
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
            'id' => $id,
            'type' => $type,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_subditgakkum->getChartLaka($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }

    public function getChartLaka($id)
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
            'id' => $id,
        ];
        $getdata = $this->M_subditgakkum->getChartLaka($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getChartGarlantas($id)
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
            'id' => $id,
        ];
        $getdata = $this->M_subditgakkum->getChartGarlantas($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }

    public function getChartTatib($id)
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
            'id' => $id,
        ];
        $getdata = $this->M_subditgakkum->getChartTatib($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }

    public function getChartWalPjr($id)
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
            'id' => $id,
        ];
        $getdata = $this->M_subditgakkum->getChartWalPjr($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }
}
