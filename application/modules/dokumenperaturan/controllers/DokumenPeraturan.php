<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DokumenPeraturan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model('dokumenperaturan/m_dokumenperaturan');
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Dokumen Peraturan";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "dokumenperaturan/Korlantas/dokumenperaturan_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "dokumenperaturan/Kapolda/dokumenperaturan_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dokumenperaturan/Polres/dokumenperaturan_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

	public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_dokumenperaturan->get_datatables($postData);  
		echo json_encode($data); 
    }

	public function store() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 
        $path = $_FILES['files']['tmp_name'];
        $filename = $_FILES['files']['name'];
        if($_FILES['files']['name']){ 
            $dummy = [
                [
                    'name' => 'regulation_category',
                    'contents' => $input['kategoriPeraturan'],
                ],
                [
                    'name' => 'regulation_name',
                    'contents' => $input['judulPeraturan'],
                ],
                
				[
					'name' => 'picture',
					'contents' => fopen($path,'r'),
					'filename' => $filename
				], 
                
				[
					'name' => 'year',
					'contents' => $input['tahunPeraturan'],
				],
                
            ];
        } else {
            $dummy = [
                [
                    'name' => 'regulation_category',
                    'contents' => $input['kategoriPeraturan'],
                ],
                [
                    'name' => 'regulation_name',
                    'contents' => $input['judulPeraturan'],
                ],
                
				[
					'name' => 'year',
					'contents' => $input['tahunPeraturan'],
				],

            ];
        }

        $data = guzzle_request('POST', 'regulation_doc/add', [ 
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
	public function detailPeraturan()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_peraturan');

        $getDetail = guzzle_request('GET', 'regulation_doc/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

	public function hapusPeraturan()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_peraturan');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'regulation_doc/delete', [
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

    public function updatePeraturan()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();

        $path = $_FILES['files']['tmp_name'];
        $filename = $_FILES['files']['name'];
        if ($_FILES['files']['name']) {
            $dummy = [
                [
                    'name' => 'regulation_category',
                    'contents' => $input['kategoriPeraturan'],
                ],
                [
                    'name' => 'regulation_name',
                    'contents' => $input['judulPeraturan'],
                ],
                
				[
					'name' => 'picture',
					'contents' => fopen($path,'r'),
					'filename' => $filename
				], 
                
				[
					'name' => 'year',
					'contents' => $input['tahunPeraturan'],
				],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'regulation_category',
                    'contents' => $input['kategoriPeraturan'],
                ],
                [
                    'name' => 'regulation_name',
                    'contents' => $input['judulPeraturan'],
                ],
                
				[
					'name' => 'year',
					'contents' => $input['tahunPeraturan'],
				],

            ];
        }
        $data = guzzle_request('PUT', 'regulation_doc/edit/' . $input['id'] . '', [
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
