<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Troublespot extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('troublespot/m_troublespot');
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Troublespot";

        if ($this->session->userdata['role'] == 'G20') {
            // $page_content["page"] = "troublespot/G20/list_g20";
            redirect(base_url('404_notfound'));
            die;
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "troublespot/Korlantas/list_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'OperatorPolda') {
            $page_content["page"] = "troublespot/Kapolda/list_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres' || $this->session->userdata['role'] == 'OperatorPolres') {
            $page_content["page"] = "troublespot/Polres/list_polres";
        }

        $getPolda = guzzle_request('GET', 'polda', [
            'headers' => $headers
        ]);
        $getPolres = guzzle_request('GET', 'polres', [
            'headers' => $headers
        ]);
        $data['getPolda'] = $getPolda['data']['data'];
        $data['getPolres'] = $getPolres['data']['data'];

        // var_dump($getPolda);
        // die;
        // $getVehicle = guzzle_request('GET', 'vehicle', [
        //     'headers' => $headers
        // ]);

        // $data['getVehicle'] = $getVehicle['data']['data'];


        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_troublespot->get_datatables($postData);
        echo json_encode($data);
    }


    public function GetPolres($id)
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $getPolres = guzzle_request('GET', 'polres/getPolda/' . $id, [
            'headers' => $headers
        ]);
        $data = $getPolres['data']['data'];


        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $dummy = [
            [
                'name' => 'report_date',
                'contents' => $input['tanggal_pelaporan'],
            ],
            [
                'name' => 'reporter_name',
                'contents' => $input['nama_pelapor'],
            ],
            [
                'name' => 'polda_id',
                'contents' => $input['polda_id'],
            ],
            [
                'name' => 'polres_id',
                'contents' => $input['polres_id'],
            ],
            [
                'name' => 'traffic_reason',
                'contents' => $input['penyebab_kemacetan'],
            ],
            [
                'name' => 'location',
                'contents' => $input['lokasi_kejadian'],
            ],
            [
                'name' => 'latitude',
                'contents' => $input['latitude'],
            ],
            [
                'name' => 'longitude',
                'contents' => $input['longitude'],
            ],
            [
                'name' => 'desc',
                'contents' => $input['keterangan'],
            ],
            [
                'name' => 'problem',
                'contents' => $input['permasalahan'],
            ],
            [
                'name' => 'recommendation',
                'contents' => $input['rekomendasi'],
            ],
            [
                'name' => 'action',
                'contents' => $input['tindakan'],
            ],
            [
                'name' => 'result',
                'contents' => $input['hasil_dicapai'],
            ],
            [
                'name' => 'route',
                'contents' => $input['routeUtama'],
            ],
        ]; 

        $data = guzzle_request('POST', 'troublespot/add', [
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

    public function detail($id)
    // public function detail($id)
    {
        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Troublespot";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "troublespot/G20/detail_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "troublespot/Korlantas/detail_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'OperatorPolda') {
            $page_content["page"] = "troublespot/Kapolda/detail_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres' || $this->session->userdata['role'] == 'OperatorPolres') {
            $page_content["page"] = "troublespot/Polres/detail_polres";
        }
        $getDetail = guzzle_request('GET', 'troublespot/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'];
        // echo json_encode($data['getDetail']['data']);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function hapusTroublespot()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_troublespot');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'news/delete', [
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

    public function tambah()
    // public function detail($id)
    {
        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Troublespot";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "troublespot/G20/tambah_G20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "troublespot/Korlantas/tambah_Korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "troublespot/Kapolda/tambah_Kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "troublespot/Polres/tambah_Polres";
        }


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
    public function edit($id)
    // public function detail($id)
    {
        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Troublespot";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "troublespot/G20/edit_G20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "troublespot/Korlantas/edit_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "troublespot/Kapolda/edit_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "troublespot/Polres/edit_polres";
        }
        $getDetail = guzzle_request('GET', 'troublespot/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'];
		$getPolda = guzzle_request('GET', 'polda', [
            'headers' => $headers
        ]);
        $getPolres = guzzle_request('GET', 'polres', [
            'headers' => $headers
        ]);
        $data['getPolda'] = $getPolda['data']['data'];
        $data['getPolres'] = $getPolres['data']['data'];

        // $getTroublespot = guzzle_request('GET', 'troublespot', [
        //     'headers' => $headers
        // ]);
        // $data['getTroublespot'] = $getTroublespot['data']['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function storeEdit()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $dummy = [
            [
                'name' => 'no_ts',
                'contents' => $input['no_ts'],
            ],
            [
                'name' => 'report_date',
                'contents' => $input['tanggal_pelaporan'],
            ],
            [
                'name' => 'reporter_name',
                'contents' => $input['nama_pelapor'],
            ],
            [
                'name' => 'polda_id',
				'contents' => $input['polda_id'],
            ],
            [
                'name' => 'polres_id',
                'contents' => $input['polres'],
            ],
            [
                'name' => 'traffic_reason',
                'contents' => $input['penyebab_kemacetan'],
            ],
            [
                'name' => 'location',
                'contents' => $input['lokasi_kejadian'],
            ],
            [
                'name' => 'latitude',
                'contents' => $input['latitude'],
            ],
            [
                'name' => 'longitude',
                'contents' => $input['longitude'],
            ],
            [
                'name' => 'desc',
                'contents' => $input['keterangan'],
            ],
            [
                'name' => 'problem',
                'contents' => $input['permasalahan'],
            ],
            [
                'name' => 'recommendation',
                'contents' => $input['rekomendasi'],
            ],
            [
                'name' => 'action',
                'contents' => $input['tindakan'],
            ],
            [
                'name' => 'result',
                'contents' => $input['hasil_dicapai'],
            ],
            [
                'name' => 'route',
                'contents' => $input['routeUtama'],
            ],
        ];

        // echo json_encode($dummy);
        // die;
		

        $data = guzzle_request('PUT', 'troublespot/edit/' . $input['id'] . '', [
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

        $input      = $this->input->post();
        $dummy = [
            [
                'name' => 'id',
                'contents' => $input['id'],
            ]
        ];

        $data = guzzle_request('DELETE', 'troublespot/hardDelete', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }
}
