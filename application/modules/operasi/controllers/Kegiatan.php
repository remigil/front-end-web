
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('operasi/m_kegiatan'); 
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
            $page_content["page"] = "operasi/G20/kegiatan_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/kegiatan_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/kegiatan_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/kegiatan_polres";
        } 

        $getVip = guzzle_request('GET', 'vip', [  
            'headers' => $headers 
        ]); 
        $data['getVip'] = $getVip['data']['data'];
        $getOfficer = guzzle_request('GET', 'officer', [  
            'headers' => $headers 
        ]); 
        $data['getOfficer'] = $getOfficer['data']['data'];

        // $getAccount = guzzle_request('GET', 'account', [  
        //     'headers' => $headers 
        // ]); 
        // $data['getAccount'] = $getAccount['data']['data'];
        // echo json_encode($data['getAccount']);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_kegiatan->get_datatables($postData);  
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
                'name' => 'activity',
                'contents' => $input['kegiatan'],
            ],
            [
                'name' => 'id_vip',
                'contents' => $input['id_akun'],
            ],
            [
                'name' => 'id_account',
                'contents' => $input['jabatan'],
            ],
            [
                'name' => 'date_schedule',
                'contents' => $input['keterangan'],
            ],
            [
                'name' => 'start_time',
                'contents' => $input['keterangan'],
            ],
            [
                'name' => 'end_time',
                'contents' => $input['keterangan'],
            ],
            [
                'name' => 'coordinate_schedule',
                'contents' => $input['keterangan'],
            ],
            [
                'name' => 'status_schedule',
                'contents' => $input['keterangan'],
            ] 
        ];

        $data = guzzle_request('POST', 'schedule/add', [ 
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
            $page_content["page"] = "operasi/G20/detail_kegiatan_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/detail_kegiatan_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/detail_kegiatan_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/detail_kegiatan_polres";
        }

        $getDetail = guzzle_request('GET', 'schedule/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        $data['getDetail'] = $getDetail['data'];
        // echo json_encode($data['getDetail']['data']['name']);
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
            $page_content["page"] = "operasi/G20/edit_kegiatan_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_kegiatan_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_kegiatan_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_kegiatan_polres";
        }

        $getDetail = guzzle_request('GET', 'schedule/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        $data['getDetail'] = $getDetail['data'];

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
                'name' => 'name_kegiatan',
                'contents' => $input['namakegiatan'],
            ],
            [
                'name' => 'country_arrival_kegiatan',
                'contents' => $input['asalNegara'],
            ],
            [
                'name' => 'position_kegiatan',
                'contents' => $input['jabatan'],
            ],
            [
                'name' => 'description_kegiatan',
                'contents' => $input['keterangan'],
            ]
        ];

        $data = guzzle_request('PUT', 'schedule/edit/'.$input['id'].'', [ 
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

        $data = guzzle_request('DELETE', 'schedule/delete', [ 
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
