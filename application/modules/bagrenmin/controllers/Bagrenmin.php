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

        $url = 'bagrenmin/sdm_polantas/daily';
        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $data['sdm_polantas'] = $result['data']['rows'];

        $url = 'bagrenmin/rengar/daily';
        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $data['rengar'] = $result['data']['rows'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'KaBagRenmin' || $this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "BAGRENMIN";
            $page_content["page"] = "bagrenmin/korlantas/bagrenmin_view";
        }


        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function getSDM()
    {
        $url = 'bagrenmin/sdm_polantas/daily';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);


        $irjen = array();
        $brigjen = array();
        $kbp = array();
        $akbp = array();
        $kp = array();
        $akp = array();
        $iptu = array();
        $aiptu = array();
        $ipda = array();
        $aipda = array();
        $bripka = array();
        $brigdr = array();
        $briptu = array();
        $bripda = array();
        $pns = array();
        $total = array();
        $polda_name = array();

        foreach ($result['data']['rows'] as $key) {
            $polda_name[] = $key['name_polda'];
            $irjen[] = $key['irjen'];
            $brigjen[] = $key['brigjen'];
            $kbp[] = $key['kbp'];
            $akbp[] = $key['akbp'];
            $kp[] = $key['kp'];
            $akp[] = $key['akp'];
            $iptu[] = $key['iptu'];
            $ipda[] = $key['ipda'];
            $aiptu[] = $key['aiptu'];
            $aipda[] = $key['aipda'];
            $bripka[] = $key['bripka'];
            $brigdr[] = $key['brigdr'];
            $briptu[] = $key['briptu'];
            $bripda[] = $key['bripda'];
            $pns[] = $key['pns'];
        }

        $data = [
            'polda_name' => $polda_name,
            'irjen' => $irjen,
            'brigjen' => $brigjen,
            'kbp' => $kbp,
            'akbp' => $akbp,
            'kp' => $kp,
            'akp' => $akp,
            'iptu' => $iptu,
            'ipda' => $ipda,
            'aiptu' => $aiptu,
            'aipda' => $aipda,
            'bripka' => $bripka,
            'brigdr' => $brigdr,
            'briptu' => $briptu,
            'bripda' => $bripda,
            'pns' => $pns,
        ];

        echo json_encode($data);
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
