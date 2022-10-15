
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
        } else{
            redirect(base_url('dashboard'));
        }

        $getVip = guzzle_request('GET', 'vip', [  
            'headers' => $headers 
        ]); 
        $data['getVip'] = $getVip['data']['data']; 

        $getAccount = guzzle_request('GET', 'account', [  
            'headers' => $headers 
        ]); 
        $data['getAccount'] = $getAccount['data']['data'];
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


        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        if($_FILES['photo']['name']){ 
            $dummy = [
                [
                    'name' => 'activity',
                    'contents' => $input['kegiatan'],
                ],
                // [
                //     'name' => 'id_vip',
                //     'contents' => implode(",",$input['id_vip']),
                // ],
                // [
                //     'name' => 'id_account',
                //     'contents' => implode(",",$input['id_account']),
                // ],
                [
                    'name' => 'date_schedule',
                    'contents' => $input['date'],
                ],
                [
                    'name' => 'start_time',
                    'contents' => $input['startTime'],
                ],
                [
                    'name' => 'end_time',
                    'contents' => $input['endTime'],
                ],
                [
                    'name' => 'address_schedule',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'coordinate_schedule',
                    'contents' => $input['cordinate'],
                ],
                [
                    'name' => 'status_schedule',
                    'contents' => '1',
                ], 
                [
                    'name' => 'photo_schedule',
                    'contents' => fopen($path,'r'),
                    'filename' => $filename
                ] 
            ];
        }else{
            $dummy = [
                [
                    'name' => 'activity',
                    'contents' => $input['kegiatan'],
                ],
                // [
                //     'name' => 'id_vip',
                //     'contents' => implode(",",$input['id_vip']),
                // ],
                // [
                //     'name' => 'id_account',
                //     'contents' => implode(",",$input['id_account']),
                // ],
                [
                    'name' => 'date_schedule',
                    'contents' => $input['date'],
                ],
                [
                    'name' => 'start_time',
                    'contents' => $input['startTime'],
                ],
                [
                    'name' => 'end_time',
                    'contents' => $input['endTime'],
                ],
                [
                    'name' => 'address_schedule',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'coordinate_schedule',
                    'contents' => $input['cordinate'],
                ],
                [
                    'name' => 'status_schedule',
                    'contents' => '1',
                ]
            ];
        }

        
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
        }else{
            redirect(base_url('dashboard'));
        }

        $getDetail = guzzle_request('GET', 'schedule/getId/'.$id.'', [  
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
            $page_content["page"] = "operasi/G20/edit_kegiatan_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_kegiatan_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_kegiatan_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_kegiatan_polres";
        }else{
            redirect(base_url('dashboard'));
        }

        $getDetail = guzzle_request('GET', 'schedule/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        $data['getDetail'] = $getDetail['data'];

        $getVip = guzzle_request('GET', 'vip', [  
            'headers' => $headers 
        ]); 
        $data['getVip'] = $getVip['data']['data']; 

        $getAccount = guzzle_request('GET', 'account', [  
            'headers' => $headers 
        ]); 
        $data['getAccount'] = $getAccount['data']['data'];

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
        if($_FILES['photo']['name']){ 
            $dummy = [
                [
                    'name' => 'activity',
                    'contents' => $input['kegiatan'],
                ],
                // [
                //     'name' => 'id_vip',
                //     'contents' => implode(",",$input['id_vip']),
                // ],
                // [
                //     'name' => 'id_account',
                //     'contents' => implode(",",$input['id_account']),
                // ],
                [
                    'name' => 'date_schedule',
                    'contents' => $input['date'],
                ],
                [
                    'name' => 'start_time',
                    'contents' => $input['startTime'],
                ],
                [
                    'name' => 'end_time',
                    'contents' => $input['endTime'],
                ],
                [
                    'name' => 'address_schedule',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'coordinate_schedule',
                    'contents' => $input['cordinate'],
                ],
                [
                    'name' => 'status_schedule',
                    'contents' => '1',
                ], 
                [
                    'name' => 'photo_schedule',
                    'contents' => fopen($path,'r'),
                    'filename' => $filename
                ] 
            ];
        }else{
            $dummy = [
                [
                    'name' => 'activity',
                    'contents' => $input['kegiatan'],
                ],
                // [
                //     'name' => 'id_vip',
                //     'contents' => implode(",",$input['id_vip']),
                // ],
                // [
                //     'name' => 'id_account',
                //     'contents' => implode(",",$input['id_account']),
                // ],
                [
                    'name' => 'date_schedule',
                    'contents' => $input['date'],
                ],
                [
                    'name' => 'start_time',
                    'contents' => $input['startTime'],
                ],
                [
                    'name' => 'end_time',
                    'contents' => $input['endTime'],
                ],
                [
                    'name' => 'address_schedule',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'coordinate_schedule',
                    'contents' => $input['cordinate'],
                ],
                [
                    'name' => 'status_schedule',
                    'contents' => '1',
                ]
            ];
        }

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

        $data = guzzle_request('DELETE', 'schedule/hardDelete', [ 
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
