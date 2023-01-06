<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bagtik extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_bagtik");
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
        } else if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'KaBagTIK' || $this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "BAGTIK";
            $page_content["page"] = "bagtik/korlantas/bagtik_view";
        }

        $url_cctv = 'bagtik/cctv/daily?newest=true';
        $url_cctvintegrasi = 'bagtik/cctvintegrasi/daily?newest=true';
        $url_rtmc = 'bagtik/rtmc/daily?newest=true';
        $url_tmc = 'bagtik/tmc/daily?newest=true';

        $result_cctv = guzzle_request('GET', $url_cctv, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $result_cctvintegrasi = guzzle_request('GET', $url_cctvintegrasi, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $result_rtmc = guzzle_request('GET', $url_rtmc, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $result_tmc = guzzle_request('GET', $url_tmc, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $data['cctv'] = $result_cctv['data']['rows'];
        $data['cctvintegrasi'] = $result_cctvintegrasi['data']['rows'];
        $data['rtmc'] = $result_rtmc['data']['rows'];
        $data['tmc'] = $result_tmc['data']['rows'];



        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function inputData_CCTV()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Update data CCTV Bagtik";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "bagtik/korlantas/inputdata_cctv";
        }

        $url = 'bagtik/cctv/daily?newest=true';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $page_content["data"] = $result['data']['rows'];
        $this->templates->loadTemplate($page_content);
    }

    public function inputData_CCTVINTEGRASI()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Update data CCTV Integrasi Bagtik";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "bagtik/korlantas/inputdata_cctvintegrasi";
        }

        $url = 'bagtik/cctvintegrasi/daily?newest=true';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $page_content["data"] = $result['data']['rows'];
        $this->templates->loadTemplate($page_content);
    }

    public function inputData_RTMC()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Update data RTMC Bagtik";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "bagtik/korlantas/inputdata_rtmc";
        }

        $url = 'bagtik/rtmc/daily?newest=true';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $page_content["data"] = $result['data']['rows'];
        $this->templates->loadTemplate($page_content);
    }

    public function inputData_TMC()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Update data TMC Bagtik";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "bagtik/korlantas/inputdata_tmc";
        }

        $url = 'bagtik/tmc/daily?newest=true';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $page_content["data"] = $result['data']['rows'];
        $this->templates->loadTemplate($page_content);
    }


    public function store_cctv()
    {
        $polda_id = $this->input->post('polda_id');
        $date = $this->input->post('date');
        $value = [];
        $url = 'bagtik/cctv/add';


        $max_loop = count($this->input->post('polda_id'));

        for ($i = 0; $i < $max_loop; $i++) {
            $object = (object) [
                'polda_id' => $this->input->post('polda_id')[$i],
                'date' => $date,
                'jumlah' => $this->input->post('jumlah')[$i],
            ];
            array_push($value, $object);
        }

        $data = guzzle_request('POST', $url, [
            'json' => [
                'value' => $value
            ],
            'headers' => [

                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function store_cctvintegrasi()
    {
        $polda_id = $this->input->post('polda_id');
        $date = $this->input->post('date');
        $value = [];
        $url = 'bagtik/cctvintegrasi/add';


        $max_loop = count($this->input->post('polda_id'));

        for ($i = 0; $i < $max_loop; $i++) {
            $object = (object) [
                'polda_id' => $this->input->post('polda_id')[$i],
                'date' => $date,
                'jumlah' => $this->input->post('jumlah')[$i],
            ];
            array_push($value, $object);
        }

        $data = guzzle_request('POST', $url, [
            'json' => [
                'value' => $value
            ],
            'headers' => [

                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function store_rtmc()
    {
        $polda_id = $this->input->post('polda_id');
        $date = $this->input->post('date');
        $value = [];
        $url = 'bagtik/rtmc/add';


        $max_loop = count($this->input->post('polda_id'));

        for ($i = 0; $i < $max_loop; $i++) {
            $object = (object) [
                'polda_id' => $this->input->post('polda_id')[$i],
                'date' => $date,
                'jumlah' => $this->input->post('jumlah')[$i],
            ];
            array_push($value, $object);
        }

        $data = guzzle_request('POST', $url, [
            'json' => [
                'value' => $value
            ],
            'headers' => [

                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function store_tmc()
    {
        $polda_id = $this->input->post('polda_id');
        $date = $this->input->post('date');
        $value = [];
        $url = 'bagtik/tmc/add';


        $max_loop = count($this->input->post('polda_id'));

        for ($i = 0; $i < $max_loop; $i++) {
            $object = (object) [
                'polda_id' => $this->input->post('polda_id')[$i],
                'date' => $date,
                'jumlah' => $this->input->post('jumlah')[$i],
            ];
            array_push($value, $object);
        }

        $data = guzzle_request('POST', $url, [
            'json' => [
                'value' => $value
            ],
            'headers' => [

                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
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
            'subbagambangsistek' => 0,
            'subbagjarsistek' => 0,
            'subbagharsistek' => 0
        ];
        echo json_encode($data);
    }

    public function getChartBagtik()
    {
        $title = 'DATA BAGtik';
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
        $getdata = $this->M_bagtik->getChartBagtik($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }
}
