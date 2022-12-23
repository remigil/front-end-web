<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stackholder extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('masterdata/m_stackholder');
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Stackholder";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/stackholder_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/stackholder_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/stackholder_view";
        } else {
            redirect(base_url('dashboard'));
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_stackholder->get_datatables($postData);

        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        if ($_FILES['photo']['name']) {
            $dummy = [
                [
                    'name' => 'icon',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'title',
                    'contents' => $input['namaStackholder'],
                ],
                [
                    'name' => 'fullname',
                    'contents' => $input['fullname'],
                ],
                [
                    'name' => 'alamat',
                    'contents' => $input['address'],
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
                    'name' => 'no_telp',
                    'contents' => $input['no_telp'],
                ],
                [
                    'name' => 'call_center',
                    'contents' => $input['call_center'],
                ],
                [
                    'name' => 'fax',
                    'contents' => $input['fax'],
                ],
                [
                    'name' => 'email',
                    'contents' => $input['email'],
                ],
                [
                    'name' => 'facebook',
                    'contents' => $input['facebook'],
                ],
                [
                    'name' => 'twitter',
                    'contents' => $input['twitter'],
                ],
                [
                    'name' => 'youtube',
                    'contents' => $input['youtube'],
                ],
                [
                    'name' => 'instagram',
                    'contents' => $input['instagram'],
                ],
                [
                    'name' => 'url',
                    'contents' => $input['url'],
                ],


            ];
        } else {
            $dummy = [
                [
                    'name' => 'title',
                    'contents' => $input['namaStackholder'],
                ],
                [
                    'name' => 'fullname',
                    'contents' => $input['fullname'],
                ],
                [
                    'name' => 'alamat',
                    'contents' => $input['alamat'],
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
                    'name' => 'no_telp',
                    'contents' => $input['no_telp'],
                ],
                [
                    'name' => 'call_center',
                    'contents' => $input['call_center'],
                ],
                [
                    'name' => 'fax',
                    'contents' => $input['fax'],
                ],
                [
                    'name' => 'email',
                    'contents' => $input['email'],
                ],
                [
                    'name' => 'facebook',
                    'contents' => $input['facebook'],
                ],
                [
                    'name' => 'twitter',
                    'contents' => $input['twitter'],
                ],
                [
                    'name' => 'youtube',
                    'contents' => $input['youtube'],
                ],
                [
                    'name' => 'instagram',
                    'contents' => $input['instagram'],
                ],
                [
                    'name' => 'url',
                    'contents' => $input['url'],
                ],

            ];
        }




        $data = guzzle_request('POST', 'stackholder/add', [
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

    public function store_layanan()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        if ($_FILES['photo']['name']) {
            $dummy = [
                [
                    'name' => 'icon',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'stackholder_id',
                    'contents' => $input['stackholder_id'],
                ],
                [
                    'name' => 'url',
                    'contents' => $input['url'],
                ],



            ];
        } else {
            $dummy = [
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'stackholder_id',
                    'contents' => $input['stackholder_id'],
                ],
                [
                    'name' => 'url',
                    'contents' => $input['url'],
                ],
            ];
        }

        $data = guzzle_request('POST', 'stackholder/add_layanan_stackholder', [
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
    public function detailStackholder()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_stackholder');

        $getDetail = guzzle_request('GET', 'stackholder/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        // var_dump($data['getDetail']);die;

        echo json_encode($data['getDetail']);
    }

    public function hapusStackholder()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_polda');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'stackholder/hardDelete', [
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

    public function updateStackholder()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        if ($_FILES['photo']['name']) {
            $dummy = [
                [
                    'name' => 'icon',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'title',
                    'contents' => $input['namaStackholder'],
                ],
                [
                    'name' => 'fullname',
                    'contents' => $input['fullname'],
                ],
                [
                    'name' => 'alamat',
                    'contents' => $input['address'],
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
                    'name' => 'no_telp',
                    'contents' => $input['no_telp'],
                ],
                [
                    'name' => 'call_center',
                    'contents' => $input['call_center'],
                ],
                [
                    'name' => 'fax',
                    'contents' => $input['fax'],
                ],
                [
                    'name' => 'email',
                    'contents' => $input['email'],
                ],
                [
                    'name' => 'facebook',
                    'contents' => $input['facebook'],
                ],
                [
                    'name' => 'twitter',
                    'contents' => $input['twitter'],
                ],
                [
                    'name' => 'youtube',
                    'contents' => $input['youtube'],
                ],
                [
                    'name' => 'instagram',
                    'contents' => $input['instagram'],
                ],
                [
                    'name' => 'url',
                    'contents' => $input['url'],
                ],


            ];
        } else {
            $dummy = [
                [
                    'name' => 'title',
                    'contents' => $input['namaStackholder'],
                ],
                [
                    'name' => 'fullname',
                    'contents' => $input['fullname'],
                ],
                [
                    'name' => 'alamat',
                    'contents' => $input['address'],
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
                    'name' => 'no_telp',
                    'contents' => $input['no_telp'],
                ],
                [
                    'name' => 'call_center',
                    'contents' => $input['call_center'],
                ],
                [
                    'name' => 'fax',
                    'contents' => $input['fax'],
                ],
                [
                    'name' => 'email',
                    'contents' => $input['email'],
                ],
                [
                    'name' => 'facebook',
                    'contents' => $input['facebook'],
                ],
                [
                    'name' => 'twitter',
                    'contents' => $input['twitter'],
                ],
                [
                    'name' => 'youtube',
                    'contents' => $input['youtube'],
                ],
                [
                    'name' => 'instagram',
                    'contents' => $input['instagram'],
                ],
                [
                    'name' => 'url',
                    'contents' => $input['url'],
                ],

            ];
        }

        $data = guzzle_request('PUT', 'stackholder/edit/' . $input['id_stackholder'] . '', [
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
