
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('operasi/m_akun');
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/akun_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/akun_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/akun_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/akun_polres";
        } else {
            redirect(base_url('dashboard'));
        }


        $getOfficer = guzzle_request('GET', 'officer?serverSide=True&order=name_officer&orderDirection=asc&length=100000&start=1', [
            'headers' => $headers
        ]);
        $data['getOfficer'] = $getOfficer['data']['data'];

        $getVehicle = guzzle_request('GET', 'vehicle', [
            'headers' => $headers
        ]);

        $data['getVehicle'] = $getVehicle['data']['data'];


        // $getPolres = guzzle_request('GET', 'polres', [  
        //     'headers' => $headers 
        // ]);
        // $data['getPolres'] = $getPolres['data']['data']; 

        // echo json_encode($data['getVip']['data']); 
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function GetPetugas()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $getOfficer = guzzle_request('GET', 'officer', [
            'headers' => $headers
        ]);
        $data = $getOfficer['data']['data'];
        $getpetugas = array_filter($data, function ($get) {
            $name_officer = $this->input->get('Petugas');
            return $get['name_officer'] != $name_officer;
        });

        echo json_encode($getpetugas);
    }


    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_akun->get_datatables($postData);
        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        // $dummy = [
        //     [
        //         'name' => 'id_account',
        //         'contents' => str_replace(' ', '', $input['namaAkun']),
        //     ],
        //     [
        //         'name' => 'name_account',
        //         'contents' => $input['namaAkun'],
        //     ],
        //     [
        //         'name' => 'leader_team',
        //         'contents' => $input['ketuaTeam'],
        //     ],
        //     [
        //         'name' => 'polres_id',
        //         'contents' => $input['polres'],
        //     ],
        //     [
        //         'name' => 'id_vehicle',
        //         'contents' => $input['id_kendaraan'],
        //     ], 
        //     [
        //         'name' => 'password',
        //         'contents' => $input['password'],
        //     ]
        // ];

        // $data = guzzle_request('POST', 'account/add', [ 
        //     'multipart' => $dummy, 
        //     'headers' => $headers 
        // ]);

        $dummy = array();
        $dummy['id_account']    = str_replace(' ', '', $input['namaAkun']);
        $dummy['name_account']    = $input['namaAkun'];
        // $dummy['leader_team']    = $input['ketuaTeam'];
        // $dummy ['phone_account']	= $input['phone_account']; 
        // $dummy['id_vehicle']    = $input['id_kendaraan'];
        // $dummy['officers']    = json_encode($input['officers']);
        $dummy['password']    = $input['password'];
        $dummy['officers'] = json_encode($input['officers']);
        $dummy['vehicles'] = json_encode($input['id_kendaraan']);
        $dummy['flexRadioDefault'] = $input['flexRadioDefault'];

        $pilihKetua = floatval($input['flexRadioDefault']) - 1;
        $ketua = $input['officers'][$pilihKetua];
        $dummy['leader_team']    = $ketua;
        $dummy['id_vehicle']    = $input['id_kendaraan'][$pilihKetua];
        // echo json_encode($dummy);
        // die;


        $data = guzzle_request('POST', 'account/add', [
            'form_params' => $dummy,
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
        $page_content["title"] = "Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/detail_akun_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/detail_akun_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/detail_akun_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/detail_akun_polres";
        } else {
            redirect(base_url('dashboard'));
        }

        $getDetail = guzzle_request('GET', 'account/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'];
        // echo json_encode($data['getDetail']['data']);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Edit($id)
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/edit_akun_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_akun_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_akun_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_akun_polres";
        } else {
            redirect(base_url('dashboard'));
        }

        $getDetail = guzzle_request('GET', 'account/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'];

        $getOfficer = guzzle_request('GET', 'officer', [
            'headers' => $headers
        ]);
        $data['getOfficer'] = $getOfficer['data']['data'];

        $getVehicle = guzzle_request('GET', 'vehicle', [
            'headers' => $headers
        ]);
        $data['getVehicle'] = $getVehicle['data']['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function storeEdit()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();

        $dummy = array();
        $dummy['id_account']    = str_replace(' ', '', $input['namaAkun']);
        $dummy['name_account']    = $input['namaAkun'];
        // $dummy['leader_team']    = $input['ketuaTeam'];
        // $dummy ['phone_account']	= $input['phone_account']; 
        // $dummy['id_vehicle']    = $input['id_kendaraan'];
        // $dummy['officers']    = json_encode($input['officers']);
        $dummy['password']    = $input['password'];
        $dummy['officers'] = json_encode($input['officers']);
        $dummy['vehicles'] = json_encode($input['id_kendaraan']);
        $dummy['flexRadioDefault'] = $input['flexRadioDefault'];

        $pilihKetua = floatval($input['flexRadioDefault']) - 1;
        $ketua = $input['officers'][$pilihKetua];
        $dummy['leader_team']    = $ketua;
        $dummy['id_vehicle']    = $input['id_kendaraan'][$pilihKetua];

        if ($input['oldPassword'] != $input['password']) {
            $dummy['password']    = $input['password'];
        }

        $data = guzzle_request('PUT', 'account/edit/' . $input['id'] . '', [
            'form_params' => $dummy,
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


    public function deleteAccountPetugas()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $input      = $this->input->post();
        $dummy = [
            [
                'name' => 'account_id',
                'contents' => $input['account_id'],
            ],
            [
                'name' => 'officer_id',
                'contents' => $input['officer_id'],
            ]
        ];

        $data = guzzle_request('DELETE', 'account-officer/delete2param', [
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

        $data = guzzle_request('DELETE', 'account/delete', [
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
