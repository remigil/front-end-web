<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraannasional extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model('masterdata/m_kendaraan');
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Kendaraan";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/kendaraan_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/kendaraan_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/kendaraan_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

	public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_kendaraan->get_datatables($postData);  
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
					'name' => 'no_vehicle',
					'contents' => $input['noKendaraan'],
				],
				[
					'name' => 'type_vehicle',
					'contents' => $input['jenisKendaraan'],
				],
				[
					'name' => 'brand_vehicle',
					'contents' => $input['merekKendaraan'],
				],
				[
					'name' => 'ownership_vehicle',
					'contents' => $input['kepemilikan'],
				]
                
            ]; 

			$data = guzzle_request('POST', 'vehicle/add', [ 
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
	public function detailKendaraan()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_kendaraan');

        $getDetail = guzzle_request('GET', 'vehicle/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

	public function hapusKendaraan()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_kendaraan');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'vehicle/delete', [
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

    public function updateKendaraan()
    {
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 
        
            $dummy = [
                [
					'name' => 'no_vehicle',
					'contents' => $input['noKendaraan'],
				],
				[
					'name' => 'type_vehicle',
					'contents' => $input['jenisKendaraan'],
				],
				[
					'name' => 'brand_vehicle',
					'contents' => $input['merekKendaraan'],
				],
				[
					'name' => 'ownership_vehicle',
					'contents' => $input['kepemilikan'],
				]
                
            ];
        $data = guzzle_request('PUT', 'vehicle/edit/' . $input['id'] . '', [
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
