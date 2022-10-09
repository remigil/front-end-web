<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polres extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("masterdata/m_polres");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Polres";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/polres_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/polres_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/polres_view";
        }

		$getPolda = guzzle_request('GET', 'polda', [
            'headers' => $headers
        ]);
        $data['getPolda'] = $getPolda['data']['data'];

		// var_dump($getPolda);
        // die;




        $page_content["data"] = $data;
        // $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_polres->get_datatables($postData);
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
					'name' => 'polda_id',
					'contents' => $input['namaPolda'],
				],
				[
					'name' => 'name_polres',
					'contents' => $input['namaPolres'],
				],
				[
					'name' => 'code_satpas',
					'contents' => $input['kodeSatpas'],
				],
				[
					'name' => 'address',
					'contents' => $input['address'],
				],
				[
					'name' => 'latitude',
					'contents' => $input['cordinate'],
				],
				[
					'name' => 'longitude',
					'contents' => $input['cordinate'],
				],
				
                
            ]; 

			$data = guzzle_request('POST', 'polres/add', [ 
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
	public function detailPolres()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_polres');

        $getDetail = guzzle_request('GET', 'polres/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

	public function hapusPolres()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_polres');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'polres/delete', [
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

    public function updatePolres()
    {
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 
        
		$dummy = [
			[
				'name' => 'polda_id',
				'contents' => $input['namaPolda'],
			],
			[
				'name' => 'name_polres',
				'contents' => $input['namaPolres'],
			],
			[
				'name' => 'code_satpas',
				'contents' => $input['kodeSatpas'],
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

			
			
		]; 
        $data = guzzle_request('PUT', 'polres/edit/' . $input['id'] . '', [
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
