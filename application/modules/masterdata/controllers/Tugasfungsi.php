<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugasfungsi extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('masterdata/m_tugasfungsi');
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Satker Mabes - Korlantas";

        $page_content["page"] = "masterdata/Korlantas/Tugasfungsi/tugasfungsi_view";

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function edit($id)
    {

        $url = 'tugasfungsi/getIdWeb/' . $id;

        $result = guzzle_request('GET', $url, []);
        // echo json_encode($result);
        // die;

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Edit Tugas Fungsi";

        $page_content["page"] = "masterdata/Korlantas/Tugasfungsi/edit_tugasfungsi";

        $page_content["data"] = [
            'tugasfungsi' => $result["data"]["data"],
        ];
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_tugasfungsi->get_datatables($postData);
        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input = $this->input->post();
        if ($_FILES['picture_satker']['name'] != null) {
            $path = $_FILES['picture_satker']['tmp_name'];
            $filename = $_FILES['picture_satker']['name'];
            $dummy = [
                [
                    'name' => 'name_satker',
                    'contents' => $input['name_satker'],
                ],
                [
                    'name' => 'picture_satker',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'youtube_satker',
                    'contents' => $input['youtube_satker'],
                ],
                [
                    'name' => 'tugas_satker',
                    'contents' => $input['tugas_satker'],
                ],
                [
                    'name' => 'fungsi_satker',
                    'contents' => $input['fungsi_satker'],
                ],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_satker',
                    'contents' => $input['name_satker'],
                ],
                [
                    'name' => 'picture_satker',
                    'contents' => $input['picture_satker'],
                ],

                [
                    'name' => 'youtube_satker',
                    'contents' => $input['youtube_satker'],
                ],
                [
                    'name' => 'tugas_satker',
                    'contents' => $input['tugas_satker'],
                ],
                [
                    'name' => 'fungsi_satker',
                    'contents' => $input['fungsi_satker'],
                ],
            ];
        }


        $data = guzzle_request('POST', 'tugasfungsi/add', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data Tugas.',
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

    public function storeUpdate()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input = $this->input->post();
        if ($_FILES['picture_satker']['name'] != null) {
            $path = $_FILES['picture_satker']['tmp_name'];
            $filename = $_FILES['picture_satker']['name'];
            $dummy = [
                [
                    'name' => 'name_satker',
                    'contents' => $input['name_satker'],
                ],
                [
                    'name' => 'picture_satker',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'youtube_satker',
                    'contents' => $input['youtube_satker'],
                ],
                [
                    'name' => 'tugas_satker',
                    'contents' => $input['tugas_satker'],
                ],
                [
                    'name' => 'fungsi_satker',
                    'contents' => $input['fungsi_satker'],
                ],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_satker',
                    'contents' => $input['name_satker'],
                ],
                [
                    'name' => 'picture_satker',
                    'contents' => $input['picture_satker'],
                ],

                [
                    'name' => 'youtube_satker',
                    'contents' => $input['youtube_satker'],
                ],
                [
                    'name' => 'tugas_satker',
                    'contents' => $input['tugas_satker'],
                ],
                [
                    'name' => 'fungsi_satker',
                    'contents' => $input['fungsi_satker'],
                ],
            ];
        }


        $data = guzzle_request('PUT', 'tugasfungsi/edit/' . $input["id"] . '', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil edit data Tugas.',
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

    public function hapus()
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

        $data = guzzle_request('DELETE', 'tugasfungsi/delete', [
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


}