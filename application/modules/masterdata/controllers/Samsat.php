<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Samsat extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("masterdata/m_samsat");
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Samsat";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "masterdata/G20/samsat_view";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/samsat_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/samsat_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/samsat_view";
        }


        $getPolda = guzzle_request('GET', 'polda', [
            'headers' => $headers
        ]);
        $data['getPolda'] = $getPolda['data']['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_samsat->get_datatables($postData);
        // var_dump($data);
        // die;
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
                'name' => 'name_samsat',
                'contents' => $input['name_samsat'],
            ],
            [
                'name' => 'address',
                'contents' => $input['address'],
            ],
            [
                'name' => 'samsat_lat',
                'contents' => $input['latitude'],
            ],
            [
                'name' => 'samsat_lng',
                'contents' => $input['longitude'],
            ],
            [
                'name' => 'samsat_open_time',
                'contents' => $input['samsat_open_time'],
            ],
            [
                'name' => 'samsat_close_time',
                'contents' => $input['samsat_close_time'],
            ],
            [
                'name' => 'polda_id',
                'contents' => $input['polda_id'],
            ],
            [
                'name' => 'polres_id',
                'contents' => $input['polres_id'],
            ]

        ];

        $data = guzzle_request('POST', 'samsat/add', [
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
    public function detailSamsat()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_samsat');

        $getDetail = guzzle_request('GET', 'samsat/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

    public function hapusSamsat()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_samsat');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'samsat/delete', [
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

    public function updateSamsat()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();

        $dummy = [
            [
                'name' => 'name_samsat',
                'contents' => $input['name_samsat'],
            ],
            [
                'name' => 'address',
                'contents' => $input['address'],
            ],
            [
                'name' => 'samsat_lat',
                'contents' => $input['latitude'],
            ],
            [
                'name' => 'samsat_lng',
                'contents' => $input['longitude'],
            ],
            [
                'name' => 'samsat_open_time',
                'contents' => $input['samsat_open_time'],
            ],
            [
                'name' => 'samsat_close_time',
                'contents' => $input['samsat_close_time'],
            ],
            [
                'name' => 'polda_id',
                'contents' => $input['polda_id'],
            ],
            [
                'name' => 'polres_id',
                'contents' => $input['polres_id'],
            ]

        ];
        $data = guzzle_request('PUT', 'samsat/edit/' . $input['id'] . '', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);
        // echo json_encode($data);
        // die;

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
}
