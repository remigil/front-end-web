<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polda extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('masterdata/m_polda');
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Polda";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/polda_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/polda_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/polda_view";
        }else{
            redirect(base_url('dashboard'));
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_polda->get_datatables($postData);
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
					'name' => 'logo_polda',
					'contents' => fopen($path,'r'),
					'filename' => $filename,
				],
                [
					'name' => 'code_satpas',
					'contents' => $input['kodeSatpas'],
				],
                [
					'name' => 'name_polda',
					'contents' => $input['namaPolda'],
				],
                [
					'name' => 'address',
					'contents' => $input['address'],
				],
                [
					'name' => 'latitude',
					'contents' => $input['latitude'],
				],
                [
					'name' => 'longitude',
					'contents' => $input['longitude'],
				],
                [
					'name' => 'open_time',
					'contents' => $input['open_time'],
				],
                [
					'name' => 'close_time',
					'contents' => $input['close_time'],
				],
				[
					'name' => 'phone_polda',
					'contents' => $input['phone_polda'],
				],
				
                
            ];
		} else {
				$dummy = [
					[
						'name' => 'code_satpas',
						'contents' => $input['kodeSatpas'],
					],
					[
						'name' => 'name_polda',
						'contents' => $input['namaPolda'],
					],
					[
						'name' => 'address',
						'contents' => $input['address'],
					],
					[
						'name' => 'latitude',
						'contents' => $input['latitude'],
					],
					[
						'name' => 'longitude',
						'contents' => $input['longitude'],
					],
					[
						'name' => 'open_time',
						'contents' => $input['open_time'],
					],
					[
						'name' => 'close_time',
						'contents' => $input['close_time'],
					],
					[
						'name' => 'phone_polda',
						'contents' => $input['phone_polda'],
					],
	
				];
			} 

			$data = guzzle_request('POST', 'polda/add', [ 
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
	public function detailPolda()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_polda');

        $getDetail = guzzle_request('GET', 'polda/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

	public function hapusPolda()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_polda');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'polda/delete', [
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

    public function updatePolda()
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
					'name' => 'code_satpas',
					'contents' => $input['kodeSatpas'],
				],
                [
					'name' => 'name_polda',
					'contents' => $input['namaPolda'],
				],
                [
					'name' => 'address',
					'contents' => $input['address'],
				],
                [
					'name' => 'logo_polda',
					'contents' => fopen($path,'r'),
					'filename' => $filename,
				],
                [
					'name' => 'latitude',
					'contents' => $input['latitude'],
				],
                [
					'name' => 'longitude',
					'contents' => $input['longitude'],
				],
                [
					'name' => 'open_time',
					'contents' => $input['open_time'],
				],
                [
					'name' => 'close_time',
					'contents' => $input['close_time'],
				],
                [
					'name' => 'phone_polda',
					'contents' => $input['phone_polda'],
				],
				
                
            ];
		} else {
				$dummy = [
					[
						'name' => 'code_satpas',
						'contents' => $input['kodeSatpas'],
					],
					[
						'name' => 'name_polda',
						'contents' => $input['namaPolda'],
					],
					[
						'name' => 'address',
						'contents' => $input['address'],
					],
					
					[
						'name' => 'latitude',
						'contents' => $input['latitude'],
					],
					[
						'name' => 'longitude',
						'contents' => $input['longitude'],
					],
					[
						'name' => 'open_time',
						'contents' => $input['open_time'],
					],
					[
						'name' => 'close_time',
						'contents' => $input['close_time'],
					],
					[
						'name' => 'phone_polda',
						'contents' => $input['phone_polda'],
					],
	
				];
			}
			
        $data = guzzle_request('PUT', 'polda/edit/' . $input['id'] . '', [
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
