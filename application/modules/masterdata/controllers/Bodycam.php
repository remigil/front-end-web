<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bodycam extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('masterdata/m_bodycam'); 
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "BodyCam";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "masterdata/G20/bodycam_view";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/bodycam_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/bodycam_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/bodycam_view";
        }else{
            redirect(base_url('dashboard'));
        }
 


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_bodycam->get_datatables($postData);  
		echo json_encode($data); 
    }

    public function thumbnail() 
    {  
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Thumbnail BodyCam";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor'  || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "masterdata/G20/bodycam_viewgrid";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/bodycam_viewgrid";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/bodycam_viewgrid";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/bodycam_viewgrid";
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
        $page_content["title"] = "Full Screen BodyCam";

        // if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor'  || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
        //     $page_content["page"] = "masterdata/G20/bodycam_viewFull";
        // } else if ($this->session->userdata['role'] == 'Korlantas') {
        //     $page_content["page"] = "masterdata/Korlantas/bodycam_viewFull";
        // } else if ($this->session->userdata['role'] == 'Kapolda') {
        //     $page_content["page"] = "masterdata/Kapolda/bodycam_viewFull";
        // } else if ($this->session->userdata['role'] == 'Polres') {
        //     $page_content["page"] = "masterdata/Polres/bodycam_viewFull";
        // }else{
        //     redirect(base_url('dashboard'));
        // }
 
 


        // $page_content["data"] = '';
        // $this->templates->loadTemplate($page_content);
        $this->load->view('masterdata/G20/bodycam_viewFull', $page_content);
    }

    public function getBodyCamFullScreen()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();  

        if($input['kategoriFilter']){
            $kategoriFilter = '&filter[]=type_bodycam&filterSearch[]='.$input['kategoriFilter'].'';
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


        $url = 'bodycam?serverSide=True&length=900000&start='.$page.'&order=id&orderDirection=asc'.$searchData.''.$kategoriFilter.'';
        // print_r($url);
        // die;
        $getBodyCam = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getBodyCam'] = $getBodyCam['data'];

        echo json_encode($data['getBodyCam']);
    }

    public function getBodyCam()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();  

        if($input['kategoriFilter']){
            $kategoriFilter = '&filter[]=type_bodycam&filterSearch[]='.$input['kategoriFilter'].'';
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


        $url = 'bodycam?serverSide=True&length=8&start='.$page.'&order=id&orderDirection=asc'.$searchData.''.$kategoriFilter.'';
        // print_r($url);
        // die;
        $getBodyCam = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getBodyCam'] = $getBodyCam['data'];

        echo json_encode($data['getBodyCam']);
    }

    public function getIdBodyCam()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();   

        $url = 'bodycam/getId/'.$input['id'].'';
        // print_r($url);
        // die;
        $getIdBodyCam = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getIdBodyCam'] = $getIdBodyCam['data'];

        echo json_encode($data['getIdBodyCam']);
    }

    public function store() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 

        if( 
            backdoorCek($input['address']) == 1 ||
            backdoorCek($input['type_bodycam']) == 1 ||
            backdoorCek($input['ip_bodycam']) == 1 ||
            backdoorCek($input['gateway_bodycam']) == 1 ||
            backdoorCek($input['username']) == 1 ||
            backdoorCek($input['password']) == 1 
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
                'name' => 'address_bodycam',
                'contents' => $input['address'],
            ],
            [
                'name' => 'vms_bodycam',
                'contents' => $input['address'],
            ],
            [
                'name' => 'jenis_bodycam',
                'contents' => "BodyCam",
            ],
			[
                'name' => 'merek_bodycam',
                'contents' => "BodyCam",
            ],
			[
                'name' => 'type_bodycam',
                'contents' => $input['type_bodycam'],
            ],
            [
                'name' => 'ip_bodycam',
                'contents' => $input['ip_bodycam'],
            ],
			[
				'name' => 'gateway_bodycam',
				'contents' => $input['gateway_bodycam'],
			],
			[
				'name' => 'username_bodycam',
				'contents' => $input['username'],
			],
			[
				'name' => 'password_bodycam',
				'contents' => $input['password'],
			],
            [
                'name' => 'lat_bodycam',
                'contents' => $latlng[0],
            ],
            [
				'name' => 'lng_bodycam',
                'contents' => $latlng[1],
            ],
			[
				'name' => 'link_bodycam',
				'contents' => $input['link_bodycam'],
			],
            [
                'name' => 'status_bodycam',
                'contents' => 1,
            ]
        ];

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('POST', 'bodycam/add', [ 
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

	public function detailBodyCam()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_bodycam');

        $getDetail = guzzle_request('GET', 'bodycam/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

	public function updateBodyCam()
    {
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 

        if( 
            backdoorCek($input['addressEdit']) == 1 ||
            backdoorCek($input['type_bodycamEdit']) == 1 ||
            backdoorCek($input['ip_bodycamEdit']) == 1 ||
            backdoorCek($input['gateway_bodycamEdit']) == 1 ||
            backdoorCek($input['usernameEdit']) == 1 ||
            backdoorCek($input['passwordEdit']) == 1 
        ){
            $res = array(
                'status' => false,
                'message' => 'Terindikasi inputan tidak sesuai standart!',
                'data' => []
            );
            echo json_encode($res);
            die;
        }

        // $latlng = explode(",",$input['cordinate']); 
        $dummy = [
            [
                'name' => 'address_bodycam',
                'contents' => $input['addressEdit'],
            ],
            [
                'name' => 'vms_bodycam',
                'contents' => $input['addressEdit'],
            ],
            [
                'name' => 'jenis_bodycam',
                'contents' => "BodyCam",
            ],
			[
                'name' => 'merek_bodycam',
                'contents' => "BodyCam",
            ],
			[
                'name' => 'type_bodycam',
                'contents' => $input['type_bodycamEdit'],
            ],
            [
                'name' => 'ip_bodycam',
                'contents' => $input['ip_bodycamEdit'],
            ],
			[
				'name' => 'gateway_bodycam',
				'contents' => $input['gateway_bodycamEdit'],
			],
			[
				'name' => 'username_bodycam',
				'contents' => $input['usernameEdit'],
			],
			[
				'name' => 'password_bodycam',
				'contents' => $input['passwordEdit'],
			],
            // [
            //     'name' => 'lat_bodycam',
            //     'contents' => $latlng[0],
            // ],
            // [
			// 	'name' => 'lng_bodycam',
            //     'contents' => $latlng[1],
            // ],
			[
				'name' => 'link_bodycam',
				'contents' => $input['link_bodycamEdit'],
			],
            [
                'name' => 'status_bodycam',
                'contents' => 1,
            ]
        ];

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('PUT', 'bodycam/edit/' . $input['idEdit'] . '', [
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

	public function hapusBodyCam()
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

        $data = guzzle_request('DELETE', 'bodycam/delete', [
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
