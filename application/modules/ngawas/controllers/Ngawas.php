<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ngawas extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("ngawas/m_ngawas2");
        $this->load->model("ngawas/m_ngawas3");
        $this->load->model("ngawas/m_ngawas");
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Bogor Ngawas";

        // if ($this->session->userdata['role'] == 'G20') {
        //     $page_content["page"] = "dashboard/dashboard_g20";
        // } else if ($this->session->userdata['role'] == 'Korlantas') {
        //     $page_content["page"] = "tripon/Korlantas/tripon";
        // } else if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'KaBagOps') {
        //     $page_content["page"] = "ngawas/Kakor/ngawas";

        // }

        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["page"] = "ngawas/Kakor/ngawas";
        }


        $getVehicle = guzzle_request('GET', 'type_vehicle', [
            'headers' => [
                'Authorization' => $headers
            ]
        ]);

        $getProv = guzzle_request('GET', 'wilayah/provinsi', [
            'headers' => $headers
        ]);
        $ngawas = guzzle_request('GET', 'ngawas', [
            'headers' => $headers
        ]);
        $data['ngawas'] = $ngawas['data']['rows'][0];
        //    var_dump($data['ngawas']);die;
        $data['getProv'] = $getProv['data']['data'];

        $data['getVehicle'] = $getVehicle['data']['data'];
        //    echo "<pre>";
        // var_dump($data['ngawas']);
        //    die;


        $page_content["data"] = $data;
        // $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    //     public function ngawas()
    //     {
    //      $headers = [
    //             'Token' => $this->session->userdata['token'],
    //         ];

    //         $page_content["css"] = '';
    //         $page_content["js"] = '';
    //         $page_content["title"] = "Monitoring";
    //            $page_content["page"] = "ngawas/Kakor/ngawas";

    //             $page_content["data"] = '';
    //         // $page_content["data"] = '';
    //         $this->templates->loadTemplate($page_content);
    //     }


    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_ngawas2->get_datatables($postData);
        echo json_encode($data);
    }

    public function ServerSideModel()
    {
        $postData = $this->input->post();
        $data = $this->m_ngawas3->get_datatables($postData);
        // var_dump($data);
        echo json_encode($data);
    }

    public function detailKendaraan()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id');

        $getDetail = guzzle_request('GET', 'brand_vehicle/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $getType = guzzle_request('GET', 'type_vehicle', [
            'headers' => $headers
        ]);
        $data = [
            'getDetail' => $getDetail['data']['data'],
            'getType' => $getType['data']['data']
        ];

        echo json_encode($data);
    }

    public function tambah()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input = $this->input->post();

        $dummy = [
            [
                'name' => 'type_id',
                'contents' => $input['type_vehicle'],
            ],
            [
                'name' => 'brand_name',
                'contents' => $input['brand'],
            ],
        ];


        $data = guzzle_request('POST', 'brand_vehicle/add', [
            'multipart' => $dummy,
            'headers' => $headers
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

    public function edit()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input = $this->input->post();

        // var_dump($input);die;

        $dummy = [
            [
                'name' => 'type_id',
                'contents' => $input['type_vehicle'],
            ],
            [
                'name' => 'brand_name',
                'contents' => $input['brand'],
            ]
        ];

        $data = guzzle_request('PUT', 'brand_vehicle/edit/' . $input['id'] . '', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil edit data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal edit data.',
                'data' => $data
            );
        }
        echo json_encode($res);
    }


    public function delete()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'brand_vehicle/delete', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);


        if ($data['isSuccess'] == true) {
            $results = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        } else {
            $results = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }

        echo json_encode($results);
    }


    public function detail($id)
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Detail";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "tripon/Korlantas/tripondetail";
        } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'OperatorPolda') {
            $page_content["page"] = "tripon/Kapolda/tripondetail";
        } else if ($this->session->userdata['role'] == 'Polres' || $this->session->userdata['role'] == 'OperatorPolres') {
            $page_content["page"] = "tripon/Polres/tripondetail";
        } else if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["page"] = "ngawas/Kakor/ngawasdetail";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["page"] = "tripon/Ditkamsel/tripondetail";
        }
        $getDetail = guzzle_request('GET', 'ngawas/getId/' . $id . '', [
            'headers' => $headers
        ]);


        $data['getDetail'] = $getDetail['data'];
        // echo "<pre>";
        // var_dump($getDetail);die;


        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function getTipe_Kendaraan()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];


        $filter = $this->input->post('filter');
        $time = $this->input->post('time');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');


        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');




        if ($time == 'true') {
            $url = 'count_ngawas/jenis_kendaraan?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date  . '';
        } else {
            $url = 'count_ngawas/jenis_kendaraan?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '';
        }

        $getTripon = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $jumlah = array();

        foreach ($getTripon['data'] as $key) {
            $type[] = $key['nama'];
            $jumlah[] = $key['jumlah'];
        }

        $data['ngawas'] = [
            'type' => $type,
            'jumlah' => $jumlah
        ];

        echo json_encode($data['ngawas']);
    }

    public function ngawas_prov()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $data['lakalantas'] = '123';

        $limit = $this->input->post('limit');
        $filter = $this->input->post('filter');
        $time = $this->input->post('time');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');


        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');




        if ($time == 'true') {
            $url = 'count_ngawas/kec_ngawas?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '&time=' . $time . '&start_time=' . $start_time . '&end_time=' . $end_time . '&limit=' . $limit . '&topNgawas=true';
        } else {
            $url = 'count_ngawas/kec_ngawas?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '&limit=' . $limit . '&topNgawas=true';
        }


        $getTripon = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);


        foreach ($getTripon['data'] as $key) {
            $kedatangan[] = $key['kedatangan'];
            $keberangkatan[] = $key['keberangkatan'];
            $provinsi[] = $key['nama'];
        }

        $data['ngawas'] = [
            'kedatangan' => $kedatangan,
            'keberangkatan' => $keberangkatan,
            'provinsi' => $provinsi
        ];

        echo json_encode($data['ngawas']);
    }

    public function ngawas_datang()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $data['lakalantas'] = '123';

        $filter = $this->input->post('filter');
        $time = $this->input->post('time');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');


        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');

        $start_prov = $this->input->post('start_prov');
        $end_prov =  $this->input->post('end_prov');

        // $url_test = 'count_ngawas/kec_ngawas?filter='.'&topNgawas=true&time=true';

        // if ($time == 'true') {
        //     $url = 'count_ngawas/kec_ngawas?start_prov=' . $start_prov . '&end_prov=' . $end_prov . '&start_date=' . $start_date . '&end_date=' . $end_date . '&filter=' . $filter . '&time=' . $time . '&start_time=' . $start_time . '&end_time=' . $end_time . '';
        // } else {
        //     $url = 'count_ngawas/kec_ngawas?start_prov=' . $start_prov . '&end_prov=' . $end_prov . '&start_date=' . $start_date . '&end_date=' . $end_date . '&filter=' . $filter . '';
        // }


        if ($time == 'true') {
            $url = 'count_ngawas/kec_ngawas?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '&time=' . $time . '&start_time=' . $start_time . '&end_time=' . $end_time . '&topNgawas=true';
        } else {
            $url = 'count_ngawas/kec_ngawas?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date .  '&topNgawas=true';
        }



        $getTripon = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        //    echo "<pre>";
        //    var_dump($getTripon['data'][0]['kedatangan']);die;

        foreach ($getTripon['data'] as $key) {
            $kedatangan[] = $key['kedatangan'];
            $keberangkatan[] = $key['keberangkatan'];
            $provinsi[] = $key['nama'];
        }

        // $jumlah_kedatangan = 0;



        $data['ngawas'] = [
            'kedatangan' => $kedatangan,
            'keberangkatan' => $keberangkatan,
            'provinsi' => $provinsi
        ];


        echo json_encode($data['ngawas']);
    }

    public function getStatistik()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $filter = $this->input->post('filter');
        $time = $this->input->post('time');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');


        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');

        $start_prov = $this->input->post('start_prov');
        $end_prov =  $this->input->post('end_prov');


        // if ($time == 'true') {
        //     $url = 'count_ngawas/filter?start_prov=' . $start_prov . '&end_prov=' . $end_prov . '&start_date=' . $start_date . '&end_date=' . $end_date . '&filter=' . $filter . '&time=' . $time . '&start_time=' . $start_time . '&end_time=' . $end_time . '';
        // } else {
        //     $url = 'count_ngawas/filter?start_prov=' . $start_prov . '&end_prov=' . $end_prov . '&start_date=' . $start_date . '&end_date=' . $end_date . '&filter=' . $filter . '';
        // }

        if ($time == 'true') {
            $url = 'count_ngawas/jenis_kendaraan?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '&time=' . $time . '&start_time=' . $start_time . '&end_time=' . $end_time . '';
        } else {
            $url = 'count_ngawas/jenis_kendaraan?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '';
        }


        $getTripon = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $jumlah = array();

        foreach ($getTripon['data'] as $key) {
            $type[] = $key['nama'];
            $jumlah[] = $key['jumlah'];
        }

        $data['ngawas'] = [
            'type' => $type,
            'jumlah' => $jumlah
        ];


        // echo json_encode([
        //     'jumlah_tripon' => $jumlah_tripon,
        //     'jumlah_kendaraan' => $jumlah_kendaraan,
        //     'jumlah_penumpang' => $jumlah_penumpang
        // ]);

        // echo "<pre>";
        // var_dump($getTripon['data']);die;
        echo json_encode($data['ngawas']);
    }

    public function getModelKendaraan()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];


        $filter = $this->input->post('filter');
        $time = $this->input->post('time');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');


        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');


        if ($time == 'true') {
            $url = 'count_ngawas/merk_kendaraan?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '&time=' . $time . '&start_time=' . $start_time . '&end_time=' . $end_time . '';
        } else {
            $url = 'count_ngawas/merk_kendaraan?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '';
        }

        $getTripon = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        //     echo "<pre>";
        //    var_dump($getTripon);die;

        $jumlah = array();

        foreach ($getTripon['data'] as $key) {
            $type[] = $key['brand'];
            $jumlah[] = $key['jumlah'];
        }

        $data['ngawas'] = [
            'type' => $type,
            'jumlah' => $jumlah
        ];

        echo json_encode($data['ngawas']);
    }

    public function tambah_model()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Kelola";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "tripon/Korlantas/tripondetail";
        } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'OperatorPolda') {
            $page_content["page"] = "tripon/Kapolda/tripondetail";
        } else if ($this->session->userdata['role'] == 'Polres' || $this->session->userdata['role'] == 'OperatorPolres') {
            $page_content["page"] = "tripon/Polres/tripondetail";
        } else if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["page"] = "ngawas/Kakor/tambah_model";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["page"] = "tripon/Ditkamsel/tripondetail";
        }

        $getBrand = guzzle_request('GET', 'brand_vehicle', [
            'headers' => [
                'Authorization' => $headers
            ]
        ]);
        $data['getBrand'] = $getBrand['data']['data'];


        $getType = guzzle_request('GET', 'type_vehicle', [
            'headers' => [
                'Authorization' => $headers
            ]
        ]);

        $data['getType'] = $getType['data']['data'];


        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function dashboard2()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Dashboard";


        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["page"] = "ngawas/Kakor/dashboard2";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["page"] = "tripon/Ditkamsel/tripondetail";
        }


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function sebaran()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];


        $url = 'ngawas/getPerMonth';
        $getTripon = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $data = $getTripon['data']['rows'];
        // echo "<pre>";
        // var_dump($data);
        // die;
        echo json_encode($data);
    }


    public function choropleth()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $url = 'count_ngawas/kec_ngawas_month';
        $getTripon = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $data = $getTripon['data'];
        // echo "<pre>";
        // var_dump($data);die;
        echo json_encode($data);
    }
}