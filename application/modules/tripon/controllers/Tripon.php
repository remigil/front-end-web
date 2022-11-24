<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tripon extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("tripon/m_tripon");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "TripOn";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "tripon/Korlantas/tripon";
        } else if ($this->session->userdata['role'] == 'Kakorlantas') {
			$page_content["page"] = "tripon/Kakor/tripon";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
			$page_content["page"] = "tripon/Ditkamsel/tripon";
        } else if ($this->session->userdata['role'] == 'Ditgakkum') {
			$page_content["page"] = "tripon/Ditgakkum/tripon";
        } else if ($this->session->userdata['role'] == 'Ditregident') {
			$page_content["page"] = "tripon/Ditregident/tripon";
        } else if ($this->session->userdata['role'] == 'KaBagOps') {
			$page_content["page"] = "tripon/Bagops/tripon";
        } else if ($this->session->userdata['role'] == 'KaBagRenmin') {
			$page_content["page"] = "tripon/Bagrenmin/tripon";
        } else if ($this->session->userdata['role'] == 'KaBagTIK') {
			$page_content["page"] = "tripon/Bagtik/tripon";
        } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'OperatorPolda') {
			$page_content["page"] = "tripon/Kapolda/tripon";
        } else if ($this->session->userdata['role'] == 'Kapolres' || $this->session->userdata['role'] == 'OperatorPolres') {
			$page_content["page"] = "tripon/Kapolres/tripon";
        }

        $getVehicle = guzzle_request('GET', 'type_vehicle', [
            'headers' => [
                'Authorization' => $headers
                ]
        ]);
        $data['getVehicle'] = $getVehicle['data']['data'];
        
        // var_dump($getVehicle);
        // die;


        $page_content["data"] = $data;
        // $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_tripon->get_datatables($postData);  
		echo json_encode($data); 
    }


    public function detail($id)
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "TripOn";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "tripon/Korlantas/tripondetail";
        } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'OperatorPolda') {
            $page_content["page"] = "tripon/Kapolda/tripondetail";
        } else if ($this->session->userdata['role'] == 'Polres' || $this->session->userdata['role'] == 'OperatorPolres') {
            $page_content["page"] = "tripon/Polres/tripondetail";
		} else if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["page"] = "tripon/Kakor/tripondetail";
		} else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["page"] = "tripon/Ditkamsel/tripondetail";
        }
        $getDetail = guzzle_request('GET', 'trip_on/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'];
        // var_dump($data['getDetail']);die;
        // echo json_encode($data['getDetail']['data']);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function getTripOn()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $data['lakalantas'] = '123';

        $url = 'count-trip-on/jenis_kendaraan';
        $getTripon = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $jumlah = array();

        foreach ($getTripon['data'] as $key) {
            $type[] = $key['nama'];
            $jumlah[] = $key['jumlah'];
        }

        $data['tripOn'] = [
            'type' => $type,
            'jumlah' => $jumlah
        ];

        echo json_encode($data['tripOn']);
    }
}
