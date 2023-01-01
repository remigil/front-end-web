
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('user/m_operator'); 
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "user";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "user/G20/operator_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "user/Korlantas/operator_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "user/Kapolda/operator_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "user/Polres/operator_polres";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_operator->get_datatables($postData);  
		echo json_encode($data); 
    }

    public function store() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 

        if($_FILES['logo']['name']){ 
            $path = $_FILES['logo']['tmp_name'];
            $filename = $_FILES['logo']['name'];
            $dummy = [
                [
                    'name' => 'name_operation',
                    'contents' => $input['name_operation'],
                ],
                [
                    'name' => 'date_start_operation',
                    'contents' => $input['start_date'],
                ],
                [
                    'name' => 'date_end_operation',
                    'contents' => $input['end_date'],
                ],
                [
                    'name' => 'latlng_center',
                    'contents' => $input['cordinate'],
                ],
                [
                    'name' => 'zoom_level',
                    'contents' => $input['zoom_level'],
                ], 
                [
                    'name' => 'logo',
                    'contents' => fopen($path,'r'),
                    'filename' => $filename
                ] 
            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_operation',
                    'contents' => $input['name_operation'],
                ],
                [
                    'name' => 'date_start_operation',
                    'contents' => $input['start_date'],
                ],
                [
                    'name' => 'date_end_operation',
                    'contents' => $input['end_date'],
                ],
                [
                    'name' => 'latlng_center',
                    'contents' => $input['cordinate'],
                ],
                [
                    'name' => 'zoom_level',
                    'contents' => $input['zoom_level'],
                ], 
            ];
        }

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('POST', 'operation-profile/add', [ 
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
        $page_content["title"] = "user";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "user/G20/detail_operator_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "user/Korlantas/detail_operator_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "user/Kapolda/detail_operator_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "user/Polres/detail_operator_polres";
        }

        $getDetail = guzzle_request('GET', 'operation-profile/getId/'.$id.'', [  
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
        $page_content["title"] = "user";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "user/G20/edit_operator_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "user/Korlantas/edit_operator_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "user/Kapolda/edit_operator_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "user/Polres/edit_operator_polres";
        }

        $getDetail = guzzle_request('GET', 'operation-profile/getId/'.$id.'', [  
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

        $path = $_FILES['logo']['tmp_name'];
        $filename = $_FILES['logo']['name'];
        if($_FILES['logo']['name']){ 
            $dummy = [
                [
                    'name' => 'name_operation',
                    'contents' => $input['name_operation'],
                ],
                [
                    'name' => 'date_start_operation',
                    'contents' => $input['start_date'],
                ],
                [
                    'name' => 'date_end_operation',
                    'contents' => $input['end_date'],
                ],
                [
                    'name' => 'latlng_center',
                    'contents' => $input['cordinate'],
                ],
                [
                    'name' => 'zoom_level',
                    'contents' => $input['zoom_level'],
                ], 
                [
                    'name' => 'logo',
                    'contents' => fopen($path,'r'),
                    'filename' => $filename
                ] 
            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_operation',
                    'contents' => $input['name_operation'],
                ],
                [
                    'name' => 'date_start_operation',
                    'contents' => $input['start_date'],
                ],
                [
                    'name' => 'date_end_operation',
                    'contents' => $input['end_date'],
                ],
                [
                    'name' => 'latlng_center',
                    'contents' => $input['cordinate'],
                ],
                [
                    'name' => 'zoom_level',
                    'contents' => $input['zoom_level'],
                ] 
            ];
        }
        $data = guzzle_request('PUT', 'operation-profile/edit/'.$input['id'].'', [ 
            'multipart' => $dummy, 
            'headers' => $headers 
        ]);
        // echo json_encode($data);
        // die;

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

        $data = guzzle_request('DELETE', 'operation-profile/delete', [ 
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
