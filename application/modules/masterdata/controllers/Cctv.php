<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cctv extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('masterdata/m_cctv'); 
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "CCTV";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "masterdata/G20/cctv_view";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/cctv_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/cctv_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/cctv_view";
        }else{
            redirect(base_url('dashboard'));
        }
 


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_cctv->get_datatables($postData);  
		echo json_encode($data); 
    }

    public function thumbnail() 
    {  
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Thumbnail CCTV";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor'  || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "masterdata/G20/cctv_viewgrid";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/cctv_viewgrid";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/cctv_viewgrid";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/cctv_viewgrid";
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
        $page_content["title"] = "Full Screen CCTV";

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
        $this->load->view('masterdata/G20/cctv_viewFull', $page_content);
    }

    public function getCCTVFullScreen()
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


        $url = 'cctv?serverSide=True&length=900000&start='.$page.'&order=id&orderDirection=asc'.$searchData.''.$kategoriFilter.'';
        // print_r($url);
        // die;
        $getCCTV = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getCCTV'] = $getCCTV['data'];

        echo json_encode($data['getCCTV']);
    }

    public function getCCTV()
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


        $url = 'cctv?serverSide=True&length=8&start='.$page.'&order=id&orderDirection=asc'.$searchData.''.$kategoriFilter.'';
        // print_r($url);
        // die;
        $getCCTV = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getCCTV'] = $getCCTV['data'];

        echo json_encode($data['getCCTV']);
    }

    public function getIdCCTV()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();   

        $url = 'cctv/getId/'.$input['id'].'';
        // print_r($url);
        // die;
        $getIdCCTV = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getIdCCTV'] = $getIdCCTV['data'];

        echo json_encode($data['getIdCCTV']);
    }

    public function store() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 


        if( 
            backdoorCek($input['address']) == 1 ||
            backdoorCek($input['type_cctv']) == 1 ||
            backdoorCek($input['ip_cctv']) == 1 ||
            backdoorCek($input['gateway_cctv']) == 1 ||
            backdoorCek($input['username']) == 1 ||
            backdoorCek($input['password']) == 1  ||
            backdoorCek($input['link_cctv']) == 1 
        ){
            $res = array(
                'status' => false,
                'message' => 'Terindikasi inputan tidak sesuai standart!',
                'data' => []
            );
            echo json_encode($res);
            die;
        }

        $latlng = explode(",",$input['cordinate']); 
        $dummy = [
            [
                'name' => 'address_cctv',
                'contents' => $input['address'],
            ],
            [
                'name' => 'vms_cctv',
                'contents' => $input['address'],
            ],
            [
                'name' => 'jenis_cctv',
                'contents' => "CCTV",
            ],
			[
                'name' => 'merek_cctv',
                'contents' => "CCTV",
            ],
			[
                'name' => 'type_cctv',
                'contents' => $input['type_cctv'],
            ],
            [
                'name' => 'ip_cctv',
                'contents' => $input['ip_cctv'],
            ],
			[
				'name' => 'gateway_cctv',
				'contents' => $input['gateway_cctv'],
			],
			[
				'name' => 'username_cctv',
				'contents' => $input['username'],
			],
			[
				'name' => 'password_cctv',
				'contents' => $input['password'],
			],
            [
                'name' => 'lat_cctv',
                'contents' => $latlng[0],
            ],
            [
				'name' => 'lng_cctv',
                'contents' => $latlng[1],
            ],
			[
				'name' => 'link_cctv',
				'contents' => $input['link_cctv'],
			],
            [
                'name' => 'status_cctv',
                'contents' => 1,
            ]
        ];

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('POST', 'cctv/add', [ 
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

	public function detailCCTV()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_cctv');

        $getDetail = guzzle_request('GET', 'cctv/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

	public function updateCCTV()
    {
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 

        if( 
            backdoorCek($input['address']) == 1 ||
            backdoorCek($input['type_cctv']) == 1 ||
            backdoorCek($input['ip_cctv']) == 1 ||
            backdoorCek($input['gateway_cctv']) == 1 ||
            backdoorCek($input['username']) == 1 ||
            backdoorCek($input['password']) == 1 ||
            backdoorCek($input['link_cctv']) == 1 
        ){
            $res = array(
                'status' => false,
                'message' => 'Terindikasi inputan tidak sesuai standart!',
                'data' => []
            );
            echo json_encode($res);
            die;
        }

        $latlng = explode(",",$input['cordinate']); 
        $dummy = [
            [
                'name' => 'address_cctv',
                'contents' => $input['address'],
            ],
            [
                'name' => 'vms_cctv',
                'contents' => $input['address'],
            ],
            [
                'name' => 'jenis_cctv',
                'contents' => "CCTV",
            ],
			[
                'name' => 'merek_cctv',
                'contents' => "CCTV",
            ],
			[
                'name' => 'type_cctv',
                'contents' => $input['type_cctv'],
            ],
            [
                'name' => 'ip_cctv',
                'contents' => $input['ip_cctv'],
            ],
			[
				'name' => 'gateway_cctv',
				'contents' => $input['gateway_cctv'],
			],
			[
				'name' => 'username_cctv',
				'contents' => $input['username'],
			],
			[
				'name' => 'password_cctv',
				'contents' => $input['password'],
			],
            [
                'name' => 'lat_cctv',
                'contents' => $latlng[0],
            ],
            [
				'name' => 'lng_cctv',
                'contents' => $latlng[1],
            ],
			[
				'name' => 'link_cctv',
				'contents' => $input['link_cctv'],
			],
            [
                'name' => 'status_cctv',
                // 'contents' => $input['status_cctv'],
                'contents' => 1,
            ]
        ];

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('PUT', 'cctv/edit/' . $input['id'] . '', [
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

	public function hapusCCTV()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'cctv/delete', [
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
