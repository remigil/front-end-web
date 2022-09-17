<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Samsat extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_samsat");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Samsat";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/samsat_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/samsat_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/samsat_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_samsat->get_datatables($postData);
        var_dump($data);
        die;
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
                'contents' => $input['namaSamsat'],
            ],
            [
                'name' => 'address',
                'contents' => $input['alamatSamsat'],
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
                'contents' => $input['jamBuka'],
            ],
            [
                'name' => 'samsat_close_time',
                'contents' => $input['jamTutup'],
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
                'contents' => $input['namaSamsat'],
            ],
            [
                'name' => 'address',
                'contents' => $input['alamatSamsat'],
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
                'contents' => $input['jamBuka'],
            ],
            [
                'name' => 'samsat_close_time',
                'contents' => $input['jamTutup'],
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
