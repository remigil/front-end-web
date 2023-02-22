<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profilpejabat extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('masterdata/m_profilpejabat');
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Profile pejabat - Korlantas";

        $page_content["page"] = "masterdata/Korlantas/Profilpejabat/profilpejabat_view";

        $jenisPejabat = guzzle_request('GET', 'jenispejabat?serverSide=true&limit=100', [
            'headers' => $headers
        ]);
        $data['jenisPejabat'] = $jenisPejabat['data']['rows'];
        // echo json_encode($data['jenisPejabat']);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function edit($id)
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $url = 'profilepejabat/getIdWeb/' . $id;

        $result = guzzle_request('GET', $url, []);


        $jenisPejabat = guzzle_request('GET', 'jenispejabat?serverSide=true&limit=100', [
            'headers' => $headers
        ]);
        // echo json_encode($result["data"]["data"]);
        // die;

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Edit profile pejabat";

        $page_content["page"] = "masterdata/Korlantas/Profilpejabat/edit_profilpejabat";

        $page_content["data"] = [
            'profilepejabat' => $result["data"]["data"],
            'jenisPejabat' => $jenisPejabat['data']['rows'],
        ];
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_profilpejabat->get_datatables($postData);
        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input = $this->input->post();
        if ($_FILES['foto_pejabat']['name'] != null) {
            $path = $_FILES['foto_pejabat']['tmp_name'];
            $filename = $_FILES['foto_pejabat']['name'];
            $dummy = [
                [
                    'name' => 'id_jenis_pejabat',
                    'contents' => $input['id_jenis_pejabat'],
                ],
                [
                    'name' => 'name_pejabat',
                    'contents' => $input['name_pejabat'],
                ],
                [
                    'name' => 'foto_pejabat',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'agama',
                    'contents' => $input['agama'],
                ],
                [
                    'name' => 'tempat_lahir',
                    'contents' => $input['tempat_lahir'],
                ],
                [
                    'name' => 'date_birth',
                    'contents' => $input['date_birth'],
                ],
                [
                    'name' => 'pendidikan_kepolisian',
                    'contents' => $input['pendidikan_kepolisian'],
                ],
                [
                    'name' => 'riwayat_jabatan',
                    'contents' => $input['riwayat_jabatan'],
                ],
                [
                    'name' => 'pengembangan',
                    'contents' => $input['pengembangan'],
                ],
                [
                    'name' => 'tanda_kehormatan',
                    'contents' => $input['tanda_kehormatan'],
                ],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'id_jenis_pejabat',
                    'contents' => $input['id_jenis_pejabat'],
                ],
                [
                    'name' => 'name_pejabat',
                    'contents' => $input['name_pejabat'],
                ],
                [
                    'name' => 'agama',
                    'contents' => $input['agama'],
                ],
                [
                    'name' => 'tempat_lahir',
                    'contents' => $input['tempat_lahir'],
                ],
                [
                    'name' => 'date_birth',
                    'contents' => $input['date_birth'],
                ],
                [
                    'name' => 'pendidikan_kepolisian',
                    'contents' => $input['pendidikan_kepolisian'],
                ],
                [
                    'name' => 'riwayat_jabatan',
                    'contents' => $input['riwayat_jabatan'],
                ],
                [
                    'name' => 'pengembangan',
                    'contents' => $input['pengembangan'],
                ],
                [
                    'name' => 'tanda_kehormatan',
                    'contents' => $input['tanda_kehormatan'],
                ],
            ];
        }


        $data = guzzle_request('POST', 'profilepejabat/add', [
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
        if ($_FILES['foto_pejabat']['name'] != null) {
            $path = $_FILES['foto_pejabat']['tmp_name'];
            $filename = $_FILES['foto_pejabat']['name'];
            $dummy = [
                [
                    'name' => 'id_jenis_pejabat',
                    'contents' => $input['id_jenis_pejabat'],
                ],
                [
                    'name' => 'name_pejabat',
                    'contents' => $input['name_pejabat'],
                ],
                [
                    'name' => 'foto_pejabat',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'agama',
                    'contents' => $input['agama'],
                ],
                [
                    'name' => 'tempat_lahir',
                    'contents' => $input['tempat_lahir'],
                ],
                [
                    'name' => 'date_birth',
                    'contents' => $input['date_birth'],
                ],
                [
                    'name' => 'pendidikan_kepolisian',
                    'contents' => $input['pendidikan_kepolisian'],
                ],
                [
                    'name' => 'riwayat_jabatan',
                    'contents' => $input['riwayat_jabatan'],
                ],
                [
                    'name' => 'pengembangan',
                    'contents' => $input['pengembangan'],
                ],
                [
                    'name' => 'tanda_kehormatan',
                    'contents' => $input['tanda_kehormatan'],
                ],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'id_jenis_pejabat',
                    'contents' => $input['id_jenis_pejabat'],
                ],
                [
                    'name' => 'name_pejabat',
                    'contents' => $input['name_pejabat'],
                ],
                [
                    'name' => 'agama',
                    'contents' => $input['agama'],
                ],
                [
                    'name' => 'tempat_lahir',
                    'contents' => $input['tempat_lahir'],
                ],
                [
                    'name' => 'date_birth',
                    'contents' => $input['date_birth'],
                ],
                [
                    'name' => 'pendidikan_kepolisian',
                    'contents' => $input['pendidikan_kepolisian'],
                ],
                [
                    'name' => 'riwayat_jabatan',
                    'contents' => $input['riwayat_jabatan'],
                ],
                [
                    'name' => 'pengembangan',
                    'contents' => $input['pengembangan'],
                ],
                [
                    'name' => 'tanda_kehormatan',
                    'contents' => $input['tanda_kehormatan'],
                ],
            ];
        }


        $data = guzzle_request('PUT', 'profilepejabat/edit/' . $input["id"] . '', [
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

        $data = guzzle_request('DELETE', 'profilepejabat/hardDelete', [
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