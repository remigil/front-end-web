<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugasnasional extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model('masterdata/m_petugasnasional');
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Petugas Nasional";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/petugasnasional_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/petugasnasional_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/petugasnasional_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
	public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_petugasnasional->get_datatables($postData);  
		// var_dump($data);
		// die;
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
					'name' => 'photo_officer',
					'contents' => fopen($path,'r'),
					'filename' => $filename
				], 
                [
					'name' => 'nrp_officer',
                    'contents' => $input['nrpPetugas'],
                ],
				[
					'name' => 'name_officer',
					'contents' => $input['namaPetugas'],
				],
                [
                    'name' => 'phone_officer',
                    'contents' => $input['noHP'],
                ],
                [
                    'name' => 'rank_officer',
                    'contents' => $input['pangkat'],
                ],
                [
                    'name' => 'pam_officer',
                    'contents' => $input['pamPetugas'],
                ],
                [
                    'name' => 'structural_officer',
                    'contents' => $input['struktural'],
                ],
                [
                    'name' => 'status_officer',
                    'contents' => $input['status'],
                ],
                
            ];
        } else {
            $dummy = [
				[
					'name' => 'nrp_officer',
                    'contents' => $input['nrpPetugas'],
                ],
				[
					'name' => 'name_officer',
					'contents' => $input['namaPetugas'],
				],
                [
                    'name' => 'phone_officer',
                    'contents' => $input['noHP'],
                ],
                [
                    'name' => 'rank_officer',
                    'contents' => $input['pangkat'],
                ],
				[
                    'name' => 'pam_officer',
                    'contents' => $input['pamPetugas'],
                ],
                [
                    'name' => 'structural_officer',
                    'contents' => $input['struktural'],
                ],
                [
                    'name' => 'status_officer',
                    'contents' => $input['status'],
                ],

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
	public function detailPetugas()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_petugas');

        $getDetail = guzzle_request('GET', 'officer/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

	public function hapusPetugas()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_petugas');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'officer/delete', [
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

    public function updatePetugas()
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
					'name' => 'photo_officer',
					'contents' => fopen($path,'r'),
					'filename' => $filename
				], 
                [
					'name' => 'nrp_officer',
                    'contents' => $input['nrpPetugas'],
                ],
				[
					'name' => 'name_officer',
					'contents' => $input['namaPetugas'],
				],
                [
                    'name' => 'phone_officer',
                    'contents' => $input['noHP'],
                ],
                [
                    'name' => 'rank_officer',
                    'contents' => $input['pangkat'],
                ],
                [
                    'name' => 'status_officer',
                    'contents' => $input['status'],
                ],
                
            ];
        } else {
            $dummy = [
				[
					'name' => 'nrp_officer',
                    'contents' => $input['nrpPetugas'],
                ],
				[
					'name' => 'name_officer',
					'contents' => $input['namaPetugas'],
				],
                [
                    'name' => 'phone_officer',
                    'contents' => $input['noHP'],
                ],
                [
                    'name' => 'rank_officer',
                    'contents' => $input['pangkat'],
                ],
                [
                    'name' => 'status_officer',
                    'contents' => $input['status'],
                ],

            ];
        }
        $data = guzzle_request('PUT', 'officer/edit/' . $input['id'] . '', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);
        // echo json_encode($data);
        // die;

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
}
