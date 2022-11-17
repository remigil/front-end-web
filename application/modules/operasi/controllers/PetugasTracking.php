
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PetugasTracking extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('operasi/m_petugas_tracking'); 
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
            $page_content["page"] = "operasi/G20/petugasTracking_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/petugasTracking_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/petugasTracking_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/petugasTracking_polres";
        } else {
            redirect(base_url('404_notfound'));
             
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_petugas_tracking->get_datatables($postData);  
		echo json_encode($data); 
    }

    public function store() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 

        if( 
            backdoorCek($input['namapetugasTracking']) == 1 ||
            backdoorCek($input['nrp']) == 1 ||
            backdoorCek($input['replacementNrp_officer']) == 1 ||
            backdoorCek($input['pangkat']) == 1 ||
            backdoorCek($input['struktural']) == 1 ||
            backdoorCek($input['pam']) == 1 ||
            backdoorCek($input['noHp']) == 1
        ){
            $res = array(
                'status' => false,
                'message' => 'Terindikasi inputan tidak sesuai standart!',
                'data' => []
            );
            echo json_encode($res);
            die;
        }

        if($_FILES['photo']['name']){ 
            $path = $_FILES['photo']['tmp_name'];
            $filename = $_FILES['photo']['name'];
            $dummy = [
                [
                    'name' => 'name_officer',
                    'contents' => $input['namapetugasTracking'],
                ],
                [
                    'name' => 'nrp_officer',
                    'contents' => $input['nrp'],
                ],
                [
                    'name' => 'rank_officer',
                    'contents' => $input['pangkat'],
                ],
                [
                    'name' => 'structural_officer',
                    'contents' => $input['struktural'],
                ],
                [
                    'name' => 'pam_officer',
                    'contents' => $input['pam'],
                ],
                [
                    'name' => 'phone_officer',
                    'contents' => $input['noHp'],
                ],
                [
                    'name' => 'status_officer',
                    'contents' => $input['status'],
                ], 
                [
                    'name' => 'photo_officer',
                    'contents' => fopen($path,'r'),
                    'filename' => $filename
                ] 
            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_officer',
                    'contents' => $input['namapetugasTracking'],
                ],
                [
                    'name' => 'nrp_officer',
                    'contents' => $input['nrp'],
                ],
                [
                    'name' => 'rank_officer',
                    'contents' => $input['pangkat'],
                ],
                [
                    'name' => 'structural_officer',
                    'contents' => $input['struktural'],
                ],
                [
                    'name' => 'pam_officer',
                    'contents' => $input['pam'],
                ],
                [
                    'name' => 'phone_officer',
                    'contents' => $input['noHp'],
                ],
                [
                    'name' => 'status_officer',
                    'contents' => $input['status'],
                ]
            ];
        }

        $data = guzzle_request('POST', 'track-notif/add', [ 
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
            $page_content["page"] = "operasi/G20/detail_petugasTracking_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/detail_petugasTracking_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/detail_petugasTracking_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/detail_petugasTracking_polres";
        }

        $getDetail = guzzle_request('GET', 'track-notif/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        if($getDetail['isSuccess'] == false){
            redirect(base_url('404_notfound'));
            die;
        }
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
            $page_content["page"] = "operasi/G20/edit_petugasTracking_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_petugasTracking_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_petugasTracking_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_petugasTracking_polres";
        }

        $getDetail = guzzle_request('GET', 'track-notif/getId/'.$id.'', [  
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
            backdoorCek($input['namapetugasTracking']) == 1 ||
            backdoorCek($input['nrp']) == 1 ||
            backdoorCek($input['replacementNrp_officer']) == 1 ||
            backdoorCek($input['pangkat']) == 1 ||
            backdoorCek($input['struktural']) == 1 ||
            backdoorCek($input['pam']) == 1 ||
            backdoorCek($input['noHp']) == 1
        ){
            $res = array(
                'status' => false,
                'message' => 'Terindikasi inputan tidak sesuai standart!',
                'data' => []
            );
            echo json_encode($res);
            die;
        }

        if($_FILES['photo']['name']){ 
            $path = $_FILES['photo']['tmp_name'];
            $filename = $_FILES['photo']['name'];
            $dummy = [
                [
                    'name' => 'name_officer',
                    'contents' => $input['namapetugasTracking'],
                ],
                [
                    'name' => 'nrp_officer',
                    'contents' => $input['nrp'],
                ],
                [
                    'name' => 'rank_officer',
                    'contents' => $input['pangkat'],
                ],
                [
                    'name' => 'structural_officer',
                    'contents' => $input['struktural'],
                ],
                [
                    'name' => 'pam_officer',
                    'contents' => $input['pam'],
                ],
                [
                    'name' => 'phone_officer',
                    'contents' => $input['noHp'],
                ],
                [
                    'name' => 'status_officer',
                    'contents' => $input['status'],
                ], 
                [
                    'name' => 'photo_officer',
                    'contents' => fopen($path,'r'),
                    'filename' => $filename
                ] 
            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_officer',
                    'contents' => $input['namapetugasTracking'],
                ],
                [
                    'name' => 'nrp_officer',
                    'contents' => $input['nrp'],
                ],
                [
                    'name' => 'rank_officer',
                    'contents' => $input['pangkat'],
                ],
                [
                    'name' => 'structural_officer',
                    'contents' => $input['struktural'],
                ],
                [
                    'name' => 'pam_officer',
                    'contents' => $input['pam'],
                ],
                [
                    'name' => 'phone_officer',
                    'contents' => $input['noHp'],
                ],
                [
                    'name' => 'status_officer',
                    'contents' => $input['status'],
                ]
            ];
        }
        $data = guzzle_request('PUT', 'track-notif/edit/'.$input['id'].'', [ 
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

        $data = guzzle_request('DELETE', 'track-notif/delete', [ 
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
