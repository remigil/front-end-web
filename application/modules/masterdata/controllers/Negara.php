
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Negara extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper"); 
        $this->load->model('masterdata/m_negara'); 
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Negara / Organisasi VIP";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "masterdata/G20/negara";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/negara_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/negara_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/negara_polres";
        } 


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_negara->get_datatables($postData);  
		echo json_encode($data); 
    }

    public function store() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 
        if($_FILES['photo']['name'] != null){ 
            $path = $_FILES['photo']['tmp_name'];
            $filename = $_FILES['photo']['name'];
            $dummy = [
				[
					'name' => 'photo_country',
					'contents' => fopen($path,'r'),
					'filename' => $filename
				],
                [
                    'name' => 'name_country',
                    'contents' => $input['name'],
                ],
                [
                    'name' => 'status_country',
                    'contents' => $input['status'],
                ] 
            ];
        }else{
            $dummy = [
                [
                    'name' => 'name_country',
                    'contents' => $input['name'],
                ],
                [
                    'name' => 'status_country',
                    'contents' => $input['status'],
                ] 
            ]; 
        }

        $data = guzzle_request('POST', 'country/add', [ 
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
        $page_content["title"] = "Detail Negara / Organisasi VIP";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "masterdata/G20/detail_negara";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/detail_negara_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/detail_negara_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/detail_negara_polres";
        }


        $getDetail = guzzle_request('GET', 'country/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        $data['getDetail'] = $getDetail['data'];
        // echo json_encode($data['getDetail']['data']['no_vehicle']);
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
        $page_content["title"] = "Edit Negara / Organisasi VIP";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "masterdata/G20/edit_negara";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/edit_negara_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/edit_negara_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/edit_negara_polres";
        }


        $getDetail = guzzle_request('GET', 'country/getId/'.$id.'', [  
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

        if($_FILES['photo']['name'] != null){ 
            $path = $_FILES['photo']['tmp_name'];
            $filename = $_FILES['photo']['name'];
            $dummy = [
				[
					'name' => 'photo_country',
					'contents' => fopen($path,'r'),
					'filename' => $filename
				],
                [
                    'name' => 'name_country',
                    'contents' => $input['name'],
                ],
                [
                    'name' => 'status_country',
                    'contents' => $input['status'],
                ] 
            ];
        }else{
            $dummy = [
                [
                    'name' => 'name_country',
                    'contents' => $input['name'],
                ],
                [
                    'name' => 'status_country',
                    'contents' => $input['status'],
                ] 
            ]; 
        }

        $data = guzzle_request('PUT', 'country/edit/'.$input['id'].'', [ 
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

        $data = guzzle_request('DELETE', 'country/delete', [ 
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
