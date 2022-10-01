<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitasumum extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model("masterdata/m_fasum");
    }

    public function index()
    {
		$headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Fasilitas Umum";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/fasum_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/fasum_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/fasum_view";
        }

        $getFasum = guzzle_request('GET', 'category_fasum', [
            'headers' => $headers
        ]);
        $data['getFasum'] = $getFasum['data'];

        // var_dump($getFasum);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

	public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_fasum->get_datatables($postData);
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
					'name' => 'fasum_logo',
					'contents' => fopen($path,'r'),
					'filename' => $filename
				],
                [
                    'name' => 'fasum_name',
                    'contents' => $input['namaFasum'],
                ],
                [
                    'name' => 'fasum_type',
                    'contents' => $input['jenisFasum'],
                ],
                [
                    'name' => 'fasum_address',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'fasum_lat',
                    'contents' => $input['latitude'],
                ],
				[
                    'name' => 'fasum_lng',
                    'contents' => $input['longitude'],
                ],
				[
                    'name' => 'fasum_description',
                    'contents' => $input['deskripsiFasum'],
                ],
				[
                    'name' => 'fasum_phone',
                    'contents' => $input['kontakFasum'],
                ],
				[
                    'name' => 'fasum_status',
                    'contents' => $input['statusFasum'],
                ],
				[
                    'name' => 'fasum_open_time',
                    'contents' => $input['jamBuka'],
                ],
				[
                    'name' => 'fasum_close_time',
                    'contents' => $input['jamTutup'],
                ], 
            ];
        } else {
            $dummy = [
                [
                    'name' => 'fasum_name',
                    'contents' => $input['namaFasum'],
                ],
                [
                    'name' => 'fasum_type',
                    'contents' => $input['jenisFasum'],
                ],
                [
                    'name' => 'fasum_address',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'fasum_lat',
                    'contents' => $input['latitude'],
                ],
				[
                    'name' => 'fasum_lng',
                    'contents' => $input['longitude'],
                ],
				[
                    'name' => 'fasum_description',
                    'contents' => $input['deskripsiFasum'],
                ],
				[
                    'name' => 'fasum_phone',
                    'contents' => $input['kontakFasum'],
                ],
				[
                    'name' => 'fasum_status',
                    'contents' => $input['statusFasum'],
                ],
				[
                    'name' => 'fasum_open_time',
                    'contents' => $input['jamBuka'],
                ],
				[
                    'name' => 'fasum_close_time',
                    'contents' => $input['jamTutup'],
                ],
			];
        }

        $data = guzzle_request('POST', 'fasum/add', [ 
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

    public function detailFasum()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_fasum');

        $getDetail = guzzle_request('GET', 'fasum/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

    public function hapusFasum()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_fasum');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'fasum/delete', [
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

    public function updateFasum()
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
                    'name' => 'fasum_name',
                    'contents' => $input['namaFasum'],
                ],
                [
                    'name' => 'fasum_type',
                    'contents' => $input['jenisFasum'],
                ],
                [
                    'name' => 'fasum_address',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'fasum_lat',
                    'contents' => $input['latitude'],
                ],
				[
                    'name' => 'fasum_lng',
                    'contents' => $input['longitude'],
                ],
				[
                    'name' => 'fasum_description',
                    'contents' => $input['deskripsiFasum'],
                ],
				[
                    'name' => 'fasum_phone',
                    'contents' => $input['kontakFasum'],
                ],
				[
                    'name' => 'fasum_status',
                    'contents' => $input['statusFasum'],
                ],
                [
                    'name' => 'fasum_logo',
                    'contents' => fopen($path,'r'),
                    'filename' => $filename
				],
				[
                    'name' => 'fasum_open_time',
                    'contents' => $input['jamBuka'],
                ],
				[
                    'name' => 'fasum_close_time',
                    'contents' => $input['jamTutup'],
                ], 
            ];
        } else {
            $dummy = [
                [
                    'name' => 'fasum_name',
                    'contents' => $input['namaFasum'],
                ],
                [
                    'name' => 'fasum_type',
                    'contents' => $input['jenisFasum'],
                ],
                [
                    'name' => 'fasum_address',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'fasum_lat',
                    'contents' => $input['latitude'],
                ],
				[
                    'name' => 'fasum_lng',
                    'contents' => $input['longitude'],
                ],
				[
                    'name' => 'fasum_description',
                    'contents' => $input['deskripsiFasum'],
                ],
				[
                    'name' => 'fasum_phone',
                    'contents' => $input['kontakFasum'],
                ],
				[
                    'name' => 'fasum_status',
                    'contents' => $input['statusFasum'],
                ],
				[
                    'name' => 'fasum_open_time',
                    'contents' => $input['jamBuka'],
                ],
				[
                    'name' => 'fasum_close_time',
                    'contents' => $input['jamTutup'],
                ],
			];
        }
        $data = guzzle_request('PUT', 'fasum/edit/' . $input['id'] . '', [
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
