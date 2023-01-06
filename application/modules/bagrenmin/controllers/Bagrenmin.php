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


        $irjen = [];
        $brigjen = [];
        $kbp = [];
        $akbp = [];
        $kp = [];
        $akp = [];
        $iptu = [];
        $aiptu = [];
        $ipda = [];
        $aipda = [];
        $bripka = [];
        $brigdr = [];
        $briptu = [];
        $bripda = [];
        $pns = [];
        $total = [];
        $polda_name = [];

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
    public function getAnggaran()
    {
        $url = 'bagrenmin/rengar/daily';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $program_kegiatan = [];
        $belanja_barang = [];
        $belanja_modal = [];
        $gaji_pegawai = [];
        $polda_name = [];

        foreach ($result['data']['rows'] as $key) {
            $polda_name[] = $key['name_polda'];
            $program_kegiatan[] = $key['program_kegiatan'];
            $belanja_barang[] = $key['belanja_barang'];
            $belanja_modal[] = $key['belanja_modal'];
            $gaji_pegawai[] = $key['gaji_pegawai'];
        }

        $data = [
            'polda_name' => $polda_name,
            'program_kegiatan' => $program_kegiatan,
            'belanja_barang' => $belanja_barang,
            'belanja_modal' => $belanja_modal,
            'gaji_pegawai' => $gaji_pegawai,
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

    public function inputData_SDM()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Update data SDM polantas";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "bagrenmin/korlantas/inputdata_bagrenmin";
        }

        $url = 'bagrenmin/sdm_polantas/daily?newest=true';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $page_content["data"] = $result['data']['rows'];
        $this->templates->loadTemplate($page_content);
    }

    public function inputData_Rengar()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Update data Rencana Anggaran";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "bagrenmin/korlantas/inputdata_bagrenmin_rengar";
        }

        $url = 'bagrenmin/rengar/daily?newest=true';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $page_content["data"] = $result['data']['rows'];
        $this->templates->loadTemplate($page_content);
    }

    public function store()
    {
        $polda_id = $this->input->post('polda_id');
        $date = $this->input->post('date');
        $value = [];
        $url = 'bagrenmin/sdm_polantas/add';


        $max_loop = count($this->input->post('polda_id'));

        for ($i = 0; $i < $max_loop; $i++) {
            $object = (object) [
                'polda_id' => $this->input->post('polda_id')[$i],
                'date' => $date,
                'irjen' => $this->input->post('irjen')[$i],
                'brigjen' => $this->input->post('brigjen')[$i],
                'kbp' => $this->input->post('kbp')[$i],
                'akbp' => $this->input->post('akbp')[$i],
                'bripda' => $this->input->post('bripda')[$i],
                'kp' => $this->input->post('kp')[$i],
                'pns' => $this->input->post('pns')[$i],
                'akp' => $this->input->post('akp')[$i],
                'iptu' => $this->input->post('iptu')[$i],
                'ipda' => $this->input->post('ipda')[$i],
                'aiptu' => $this->input->post('aiptu')[$i],
                'aipda' => $this->input->post('aipda')[$i],
                'bripka' => $this->input->post('bripka')[$i],
                'brigdr' => $this->input->post('brigdr')[$i],
                'briptu' => $this->input->post('briptu')[$i]
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

    public function store_rengar()
    {
        $polda_id = $this->input->post('polda_id');
        $date = $this->input->post('date');
        $value = [];
        $url = 'bagrenmin/rengar/add';


        $max_loop = count($this->input->post('polda_id'));

        for ($i = 0; $i < $max_loop; $i++) {
            $object = (object) [
                'polda_id' => $this->input->post('polda_id')[$i],
                'date' => $date,
                'program_kegiatan' => $this->input->post('program_kegiatan')[$i],
                'belanja_barang' => $this->input->post('belanja_barang')[$i],
                'belanja_modal' => $this->input->post('belanja_modal')[$i],
                'gaji_pegawai' => $this->input->post('gaji_pegawai')[$i],

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
}
