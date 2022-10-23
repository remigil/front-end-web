<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cctv extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model('cctv/m_cctv'); 
    }

    public function index()
    {
		$headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = ''; 

        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "CCTV Lantas";
            $page_content["page"] = "cctv/Kakor/cctv_view";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["title"] = "CCTV Lantas";
            $page_content["page"] = "cctv/Ditkamsel/cctv_view";
        } else if ($this->session->userdata['role'] == 'Ditgakkum') {
            $page_content["title"] = "CCTV Lantas";
            $page_content["page"] = "cctv/Ditgakkum/cctv_view";
        } else if ($this->session->userdata['role'] == 'Ditregident') {
            $page_content["title"] = "CCTV Lantas";
            $page_content["page"] = "cctv/Ditregident/cctv_view";
		} else if ($this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "CCTV Lantas";
            $page_content["page"] = "cctv/bagops/cctv_view";
		} else if ($this->session->userdata['role'] == 'KaBagRenmin') {
            $page_content["title"] = "CCTV Lantas";
            $page_content["page"] = "cctv/Bagrenmin/cctv_view";
		} else if ($this->session->userdata['role'] == 'KaBagTIK') {
            $page_content["title"] = "CCTV Lantas";
            $page_content["page"] = "cctv/Bagtik/cctv_view";
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
}
