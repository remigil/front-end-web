<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RencanaOperasi extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("operasi/M_operasi");
        $this->load->model("operasi/M_operasi_detail");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Operasi Khusus";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/operasi";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/operasi";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/operasi";
        } else {
            redirect(base_url('404_notfound')); 
        }


        $getPolda = guzzle_request('GET', 'polda', [
            'headers' => [
                'Authorization' => $headers
            ]
        ]);
        $data['getPolda'] = $getPolda['data']['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->M_operasi->get_datatables($postData);
        echo json_encode($data);
    }


    public function GetPoldaList()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $getPolda = guzzle_request('GET', 'polda', [
            'headers' => $headers
        ]);
        $data = $getPolda['data']['data'];
        // $getpetugas = array_filter($data, function ($get) {
        //     $name_officer = $this->input->get('Petugas');
        //     return $get['name_officer'] != $name_officer;
        // });
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
        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        if ($_FILES['photo']['name']) {
            $dummy = [
                [
                    'name' => 'name_operation',
                    'contents' => $input['name_operation'],
                ],
                [
                    'name' => 'polda',
                    'contents' => $input['polda'],
                ],
                [
                    'name' => 'date_start_operation',
                    'contents' => $input['date_start_operation'],
                ],
                [
                    'name' => 'date_end_operation',
                    'contents' => $input['date_end_operation'],
                ],
                [
                    'name' => 'document_sprint',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'logo',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'background_image',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'banner',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],


            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_operation',
                    'contents' => $input['name_operation'],
                ],
                [
                    'name' => 'date_start_operation',
                    'contents' => $input['date_start_operation'],
                ],
                [
                    'name' => 'date_end_operation',
                    'contents' => $input['date_end_operation'],
                ],

            ];
        }

        $data = guzzle_request('POST', 'operation-profile/add', [
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

    public function Detail($id)
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Rencana Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/detail_kegiatan_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/detail_operasi";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/detail_operasi";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/detail_operasi";
        } else {
            redirect(base_url('dashboard'));
        }

        $getDetail = guzzle_request('GET', 'operation-profile/getId/' . $id . '', [
            'headers' => $headers
        ]);
        if($getDetail['isSuccess'] == false){
            redirect(base_url('404_notfound'));
            die;
        }
        $data['getDetail'] = $getDetail['data'];

        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function serverSideTablePolda()
    {
        $postData = $this->input->post();
        $data = $this->M_operasi_detail->get_datatables($postData);
        echo json_encode($data);
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

        $data = guzzle_request('DELETE', 'operation-profile/delete', [
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

    public function tambah()
    // public function detail($id)
    {
        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Rencana Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/tambah_G20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/tambah_Korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/tambah_Kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/tambah_Polres";
        } else {
            redirect(base_url('404_notfound')); 
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
        $page_content["title"] = "Rencana Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/edit_G20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_Korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_Kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_Polres";
        }
        $getDetail = guzzle_request('GET', 'operation-profile/getId/' . $id . '', [
            'headers' => $headers
        ]);
        if($getDetail['isSuccess'] == false){
            redirect(base_url('404_notfound'));
            die;
        }
        $data['getDetail'] = $getDetail['data'];

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
        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        if ($_FILES['photo']['name']) {
            $dummy = [
                [
                    'name' => 'name_operation',
                    'contents' => $input['name_operation'],
                ],
                [
                    'name' => 'polda',
                    'contents' => $input['polda'],
                ],
                [
                    'name' => 'date_start_operation',
                    'contents' => $input['date_start_operation'],
                ],
                [
                    'name' => 'date_end_operation',
                    'contents' => $input['date_end_operation'],
                ],
                [
                    'name' => 'document_sprint',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'logo',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'background_image',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'banner',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],


            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_operation',
                    'contents' => $input['name_operation'],
                ],
                [
                    'name' => 'date_start_operation',
                    'contents' => $input['date_start_operation'],
                ],
                [
                    'name' => 'date_end_operation',
                    'contents' => $input['date_end_operation'],
                ],

            ];
        }

        $data = guzzle_request('PUT', 'operation-profile/edit/' . $input['id'] . '', [
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
}
