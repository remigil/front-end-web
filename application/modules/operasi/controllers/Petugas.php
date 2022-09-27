
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('operasi/m_petugas'); 
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
            $page_content["page"] = "operasi/G20/petugas_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/petugas_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/petugas_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/petugas_polres";
        }


        $getRank = guzzle_request('GET', 'rank_officer?order=name_rankOfficer&orderDirection=asc&filter[]=status_rankOfficer&filterSearch[]=1', [  
            'headers' => $headers 
        ]); 
        $data['getRank'] = $getRank['data']['data']; 

        $getStructural = guzzle_request('GET', 'structural?order=name_structural&orderDirection=asc&filter[]=status_rankOfficer&filterSearch[]=1', [  
            'headers' => $headers 
        ]); 
        $data['getStructural'] = $getStructural['data']['data']; 

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_petugas->get_datatables($postData);  
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
                    'name' => 'name_officer',
                    'contents' => $input['namapetugas'],
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
                    'contents' => $input['namapetugas'],
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

        $data = guzzle_request('POST', 'officer/add', [ 
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
            $page_content["page"] = "operasi/G20/detail_petugas_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/detail_petugas_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/detail_petugas_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/detail_petugas_polres";
        }

        $getDetail = guzzle_request('GET', 'officer/getId/'.$id.'', [  
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
            $page_content["page"] = "operasi/G20/edit_petugas_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_petugas_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_petugas_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_petugas_polres";
        }

        $getDetail = guzzle_request('GET', 'officer/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        $data['getDetail'] = $getDetail['data'];

        $getRank = guzzle_request('GET', 'rank_officer?order=name_rankOfficer&orderDirection=asc&filter[]=status_rankOfficer&filterSearch[]=1', [  
            'headers' => $headers 
        ]); 
        $data['getRank'] = $getRank['data']['data']; 

        $getStructural = guzzle_request('GET', 'structural?order=name_structural&orderDirection=asc&filter[]=status_rankOfficer&filterSearch[]=1', [  
            'headers' => $headers 
        ]); 
        $data['getStructural'] = $getStructural['data']['data']; 

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
                    'name' => 'name_officer',
                    'contents' => $input['namapetugas'],
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
                    'contents' => $input['namapetugas'],
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
        $data = guzzle_request('PUT', 'officer/edit/'.$input['id'].'', [ 
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

        $data = guzzle_request('DELETE', 'officer/delete', [ 
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
