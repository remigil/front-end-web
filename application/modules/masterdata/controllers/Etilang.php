<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Etilang extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('masterdata/m_etilang'); 
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "E-Tilang";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "masterdata/G20/etilang_view";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/etilang_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/etilang_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/etilang_view";
        }else{
            redirect(base_url('dashboard'));
        }
 


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_etilang->get_datatables($postData);  
		echo json_encode($data); 
    }

    public function thumbnail() 
    {  
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Thumbnail ETLE";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor'  || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "masterdata/G20/etle_viewgrid";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/etle_viewgrid";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/etle_viewgrid";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/etle_viewgrid";
        }else{
            redirect(base_url('dashboard'));
        }
 


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function fullscreen() 
    {  
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Thumbnail ETLE";

        // if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor'  || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
        //     $page_content["page"] = "masterdata/G20/cctv_viewFull";
        // } else if ($this->session->userdata['role'] == 'Korlantas') {
        //     $page_content["page"] = "masterdata/Korlantas/cctv_viewFull";
        // } else if ($this->session->userdata['role'] == 'Kapolda') {
        //     $page_content["page"] = "masterdata/Kapolda/cctv_viewFull";
        // } else if ($this->session->userdata['role'] == 'Polres') {
        //     $page_content["page"] = "masterdata/Polres/cctv_viewFull";
        // }else{
        //     redirect(base_url('dashboard'));
        // }
 
 


        // $page_content["data"] = '';
        // $this->templates->loadTemplate($page_content);
        $this->load->view('masterdata/G20/etle_viewFull', $page_content);
    }

    public function getETLEFullScreen()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();  

        if($input['kategoriFilter']){
            $kategoriFilter = '&filter[]=type_cctv&filterSearch[]='.$input['kategoriFilter'].'';
        }else{
            $kategoriFilter = '';
        }

        if($input['searchFilter']){
            $searchData = '&search='.$input['searchFilter'].'';
        }else{
            $searchData = '';
        } 

        if($input['page']){
            $page = ''.$input['page'].'';
        }else{
            $page = '1';
        } 


        $url = 'etle?serverSide=True&length=10&start='.$page.'&order=id&orderDirection=asc'.$searchData.''.$kategoriFilter.'';
        // print_r($url);
        // die;
        $getETLE = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getETLE'] = $getETLE['data'];

        echo json_encode($data['getETLE']);
    }

    public function getETLE()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();  

        if($input['kategoriFilter']){
            $kategoriFilter = '&filter[]=type_etle&filterSearch[]='.$input['kategoriFilter'].'';
        }else{
            $kategoriFilter = '';
        }

        if($input['searchFilter']){
            $searchData = '&search='.$input['searchFilter'].'';
        }else{
            $searchData = '';
        } 

        if($input['page']){
            $page = ''.$input['page'].'';
        }else{
            $page = '1';
        } 


        $url = 'etle?serverSide=True&length=8&start='.$page.'&order=id&orderDirection=asc'.$searchData.''.$kategoriFilter.'';
        // print_r($url);
        // die;
        $getETLE = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getETLE'] = $getETLE['data'];

        echo json_encode($data['getETLE']);
    }

    public function store() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 


        $latlng = explode(",",$input['cordinate']); 
        $dummy = [
            [
                'name' => 'address_etle',
                'contents' => $input['lokasiETLE'],
            ],
            [
                'name' => 'vms_etle',
                'contents' => $input['vmsETLE'],
            ],
            [
                'name' => 'jenis_etle',
                'contents' => $input['jenisETLE'],
            ],
			[
                'name' => 'merek_etle',
                'contents' => $input['merekETLE'],
            ],
			[
                'name' => 'type_etle',
                'contents' => $input['tipeETLE'],
            ],
            [
                'name' => 'ip_etle',
                'contents' => $input['ipETLE'],
            ],
			[
				'name' => 'gateway_etle',
				'contents' => $input['gatewayETLE'],
			],
			[
				'name' => 'username_etle',
				'contents' => $input['username'],
			],
			[
				'name' => 'password_etle',
				'contents' => $input['password'],
			],
            [
                'name' => 'lat_etle',
                'contents' => $latlng[0],
            ],
            [
				'name' => 'lng_etle',
                'contents' => $latlng[1],
            ],
			[
				'name' => 'link_etle',
				'contents' => $input['linkETLE'],
			],
            [
                'name' => 'status_etle',
                'contents' => $input['status'],
            ]
        ];

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('POST', 'etle/add', [ 
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

	public function detailETLE()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_etle');

        $getDetail = guzzle_request('GET', 'etle/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

	public function updateETLE()
    {
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 


        $latlng = explode(",",$input['cordinate']); 
        $dummy = [
            [
                'name' => 'address_etle',
                'contents' => $input['lokasiETLE'],
            ],
            [
                'name' => 'vms_etle',
                'contents' => $input['vmsETLE'],
            ],
            [
                'name' => 'jenis_etle',
                'contents' => $input['jenisETLE'],
            ],
			[
                'name' => 'merek_etle',
                'contents' => $input['merekETLE'],
            ],
			[
                'name' => 'type_etle',
                'contents' => $input['tipeETLE'],
            ],
            [
                'name' => 'ip_etle',
                'contents' => $input['ipETLE'],
            ],
			[
				'name' => 'gateway_etle',
				'contents' => $input['gatewayETLE'],
			],
			[
				'name' => 'username_etle',
				'contents' => $input['username'],
			],
			[
				'name' => 'password_etle',
				'contents' => $input['password'],
			],
            [
                'name' => 'lat_etle',
                'contents' => $latlng[0],
            ],
            [
				'name' => 'lng_etle',
                'contents' => $latlng[1],
            ],
			[
				'name' => 'link_etle',
				'contents' => $input['linkETLE'],
			],
            [
                'name' => 'status_etle',
                'contents' => $input['status'],
            ]
        ];

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('PUT', 'etle/edit/' . $input['id'] . '', [
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

	public function hapusETLE()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_etle');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'etle/delete', [
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
}
