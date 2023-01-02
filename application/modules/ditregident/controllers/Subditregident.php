<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subditregident extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_subditregident");
    }



    public function index($id)
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Subregident Polda";
        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["page"] = "ditregident/korlantas/subditregident_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditregident/polda/subditregident_view";
        }
        $data['poldaid'] = $this->M_subditregident->get_Poldaid($id);
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function detail_polda($id)
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Subregident Polda";
        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["page"] = "ditregident/korlantas/subditregident_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditregident/polda/subditregident_view";
        }
        $data['poldaid'] = $this->M_subditregident->get_Poldaid($id);
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function getChartRanmor($id)
    {
        $filter = $this->input->post('filter');
        $title = 'DATA RANMOR ' . $filter;
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'id' => $id
        ];
        $getdata = $this->M_subditregident->getChartRanmor($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }

    public function getStatistik($id)
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $date = date("Y-m-d");
        $getregident = guzzle_request('GET', 'ditregident/daily?polda_id=' . $id . '&date=' . $date . '', [
            'headers' => $headers
        ]);
        $getregident = $getregident["data"];
        // echo "<pre>";
        // var_dump($getregident);
        // die;

        $totalsim = 0;
        $totalbpkb = 0;
        $totalstnk = 0;
        $totalranmor = 0;
        $totalsbst = 0;
        for ($i = 0; $i < count($getregident); $i++) {
            $totalsim += $getregident[$i]['sim'];
            $totalbpkb += $getregident[$i]['bpkb'];
            $totalstnk += $getregident[$i]['stnk'];
            $totalranmor += $getregident[$i]['ranmor'];
            $totalsbst += $getregident[$i]['total_sbst'];
        }



        $data = [
            'sim' => number_format($totalsim, 0, '', '.'),
            'bpkb' =>  number_format($totalbpkb, 0, '', '.'),
            'stnk' => number_format($totalstnk, 0, '', '.'),
            'ranmor' => number_format($totalranmor, 0, '', '.'),
            'sbst' => number_format($totalsbst, 0, '', '.'),
        ];
        echo json_encode($data);
    }


    public function getChartSim($id)
    {
        $filter = $this->input->post('filter');
        $title = 'DATA SIM ' . $filter;
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'id' => $id
        ];
        $getdata = $this->M_subditregident->getChartSim($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }


    public function getChartBpkb($id)
    {
        $filter = $this->input->post('filter');
        $title = 'DATA BPKB ' . $filter;
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'id' => $id
        ];
        $getdata = $this->M_subditregident->getChartBpkb($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }

    public function getChartStnk($id)
    {
        $filter = $this->input->post('filter');
        $title = 'DATA STNK ' . $filter;
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'id' => $id
        ];
        $getdata = $this->M_subditregident->getChartStnk($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }

    public function getChartSbst($id)
    {
        $filter = $this->input->post('filter');
        $title = 'DATA SBST ' . $filter;
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filterbaru = [
            'filter' => true,
            'type' => $filter,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'id' => $id
        ];
        $getdata = $this->M_subditregident->getChartSbst($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }


}
