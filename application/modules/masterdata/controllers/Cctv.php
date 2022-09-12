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

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU') {
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

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor'  || $this->session->userdata['role'] == 'PJU') {
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
            $searchData = '?search='.$input['searchFilter'].'';
        }else{
            $searchData = '?search';
        } 


        $url = 'cctv'.$searchData.''.$kategoriFilter.'';
        // print_r($url);
        // die;
        $getCCTV = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getCCTV'] = $getCCTV['data'];

        echo json_encode($data['getCCTV']);
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
                'name' => 'jenis_cctv',
                'contents' => $input['type_cctv'],
            ],
            [
                'name' => 'merek_cctv',
                'contents' => $input['type_cctv'],
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
                'name' => 'link_cctv',
                'contents' => $input['link_cctv'],
            ],
            [
                'name' => 'gateway_cctv',
                'contents' => $input['gateway_cctv'],
            ],
            [
                'name' => 'address_cctv',
                'contents' => $input['address'],
            ], 
            [
                'name' => 'vms_cctv',
                'contents' => $input['address'],
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
                'name' => 'username_cctv',
                'contents' => $input['username'],
            ],
            [
                'name' => 'password_cctv',
                'contents' => $input['password'],
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
}
