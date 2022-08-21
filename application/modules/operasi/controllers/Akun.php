
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
        }


        $getVip = guzzle_request('GET', 'vip', [  
            'headers' => $headers 
        ]);
        $data['getVip'] = $getVip['data']['data'];

        $getVehicle = guzzle_request('GET', 'vehicle', [  
            'headers' => $headers 
        ]);
        $data['getVehicle'] = $getVehicle['data']['data'];

        $getPolres = guzzle_request('GET', 'polres', [  
            'headers' => $headers 
        ]);
        $data['getPolres'] = $getPolres['data']['data']; 

        // echo json_encode($data['getVip']['data']); 
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
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
        $dummy = [
            [
                'name' => 'name_account',
                'contents' => $input['namaAkun'],
            ],
            [
                'name' => 'leader_team',
                'contents' => $input['ketuaTeam'],
            ],
            [
                'name' => 'polres_id',
                'contents' => $input['polres'],
            ],
            [
                'name' => 'id_vehicle',
                'contents' => $input['id_kendaraan'],
            ],
            [
                'name' => 'id_vip',
                'contents' => $input['id_vip'],
            ],
            [
                'name' => 'password',
                'contents' => $input['password'],
            ]
        ];

        $data = guzzle_request('POST', 'account/add', [ 
            'multipart' => $dummy, 
            'headers' => $headers 
        ]);

        if($data['isSuccess'] == true){  
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        }else{
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
        }

        $getDetail = guzzle_request('GET', 'account/getId/'.$id.'', [  
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
        }

        $getDetail = guzzle_request('GET', 'account/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        $data['getDetail'] = $getDetail['data'];

        $getVip = guzzle_request('GET', 'vip', [  
            'headers' => $headers 
        ]);
        $data['getVip'] = $getVip['data']['data'];

        $getVehicle = guzzle_request('GET', 'vehicle', [  
            'headers' => $headers 
        ]);
        $data['getVehicle'] = $getVehicle['data']['data'];

        $getPolres = guzzle_request('GET', 'polres', [  
            'headers' => $headers 
        ]);
        $data['getPolres'] = $getPolres['data']['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function storeEdit() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 
        
        if($input['oldPassword'] == $input['password']){
            $dummy = [
                [
                    'name' => 'name_account',
                    'contents' => $input['namaAkun'],
                ],
                [
                    'name' => 'leader_team',
                    'contents' => $input['ketuaTeam'],
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $input['polres'],
                ],
                [
                    'name' => 'id_vehicle',
                    'contents' => $input['id_kendaraan'],
                ],
                [
                    'name' => 'id_vip',
                    'contents' => $input['id_vip'],
                ]
            ];
        }else{
            $dummy = [
                [
                    'name' => 'name_account',
                    'contents' => $input['namaAkun'],
                ],
                [
                    'name' => 'leader_team',
                    'contents' => $input['ketuaTeam'],
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $input['polres'],
                ],
                [
                    'name' => 'id_vehicle',
                    'contents' => $input['id_kendaraan'],
                ],
                [
                    'name' => 'id_vip',
                    'contents' => $input['id_vip'],
                ],
                [
                    'name' => 'password',
                    'contents' => $input['password'],
                ]
            ];
        }

        $data = guzzle_request('PUT', 'account/edit/'.$input['id'].'', [ 
            'multipart' => $dummy, 
            'headers' => $headers 
        ]);

        if($data['isSuccess'] == true){  
            $res = array(
                'status' => true,
                'message' => 'Berhasil edit data.',
                'data' => $data
            );
        }else{
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

        $data = guzzle_request('DELETE', 'account/delete', [ 
            'multipart' => $dummy, 
            'headers' => $headers 
        ]);

        if($data['isSuccess'] == true){  
            $res = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        }else{
            $res = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }
        
        echo json_encode($res);

    }

}
