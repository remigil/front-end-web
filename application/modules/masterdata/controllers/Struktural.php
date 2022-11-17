
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struktural extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper"); 
        $this->load->model('masterdata/m_struktural'); 
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Structural Petugas";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "masterdata/G20/struktural";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/struktural_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/struktural_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/struktural_polres";
        } else {
            redirect(base_url('404_notfound')); 
        }


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_struktural->get_datatables($postData);  
		echo json_encode($data); 
    }

    public function store() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 

        if( 
            backdoorCek($input['name']) == 1
        ){
            $res = array(
                'status' => false,
                'message' => 'Terindikasi inputan tidak sesuai standart!',
                'data' => []
            );
            echo json_encode($res);
            die;
        }

        $dummy = [
            [
                'name' => 'name_structural',
                'contents' => $input['name'],
            ],
            [
                'name' => 'status_structural',
                'contents' => $input['status'],
            ] 
        ];

        $data = guzzle_request('POST', 'structural/add', [ 
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
            $page_content["page"] = "masterdata/G20/detail_struktural";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/detail_struktural_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/detail_struktural_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/detail_struktural_polres";
        }


        $getDetail = guzzle_request('GET', 'structural/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        if($getDetail['isSuccess'] == false){
            redirect(base_url('404_notfound'));
            die;
        }
        
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
        $page_content["title"] = "Structural Petugas";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "masterdata/G20/edit_struktural";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/edit_struktural_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/edit_struktural_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/edit_struktural_polres";
        }


        $getDetail = guzzle_request('GET', 'structural/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        if($getDetail['isSuccess'] == false){
            redirect(base_url('404_notfound'));
            die;
        }
        
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

        if( 
            backdoorCek($input['name']) == 1
        ){
            $res = array(
                'status' => false,
                'message' => 'Terindikasi inputan tidak sesuai standart!',
                'data' => []
            );
            echo json_encode($res);
            die;
        }
        
        $dummy = [
            [
                'name' => 'name_structural',
                'contents' => $input['name'],
            ],
            [
                'name' => 'status_structural',
                'contents' => $input['status'],
            ] 
        ];

        $data = guzzle_request('PUT', 'structural/edit/'.$input['id'].'', [ 
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

        $data = guzzle_request('DELETE', 'structural/delete', [ 
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
