
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper"); 
        $this->load->model('operasi/m_kendaraan'); 
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/kendaraan_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/kendaraan_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/kendaraan_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/kendaraan_polres";
        } 

        $getFuel = guzzle_request('GET', 'fuel_vehicle?filter[]=status_fuelVehicle&filterSearch[]=1', [  
            'headers' => $headers 
        ]); 
        $data['getFuel'] = $getFuel['data']['data']; 

        $getOwnership = guzzle_request('GET', 'ownership_vehicle?filter[]=status_ownershipVehicle&filterSearch[]=1', [  
            'headers' => $headers 
        ]); 
        $data['getOwnership'] = $getOwnership['data']['data']; 

        $page_content["data"] = $data;
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

        if( 
            backdoorCek($input['noKendaraan']) == 1 ||
            backdoorCek($input['jenisKendaraan']) == 1 ||
            backdoorCek($input['jenisBahanBakar']) == 1 ||
            backdoorCek($input['merek']) == 1 ||
            backdoorCek($input['kepemilikan']) == 1
        ){
            $res = array(
                'status' => false,
                'message' => 'Terindikasi inputan tidak sesuai standart!',
                'data' => []
            );
            echo json_encode($res);
            die;
        }

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
                'name' => 'fuel_vehicle',
                'contents' => $input['jenisBahanBakar'],
            ],
            [
                'name' => 'brand_vehicle',
                'contents' => $input['merek'],
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

    public function Detail($id)
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/detail_kendaraan_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/detail_kendaraan_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/detail_kendaraan_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/detail_kendaraan_polres";
        }


        $getDetail = guzzle_request('GET', 'vehicle/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        $data['getDetail'] = $getDetail['data'];
        // echo json_encode($data['getDetail']['data']['no_vehicle']);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Edit($id)
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/edit_kendaraan_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_kendaraan_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_kendaraan_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_kendaraan_polres";
        }


        $getDetail = guzzle_request('GET', 'vehicle/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        $data['getDetail'] = $getDetail['data'];

        $getFuel = guzzle_request('GET', 'fuel_vehicle?filter[]=status_fuelVehicle&filterSearch[]=1', [  
            'headers' => $headers 
        ]); 
        $data['getFuel'] = $getFuel['data']['data']; 

        $getOwnership = guzzle_request('GET', 'ownership_vehicle?filter[]=status_ownershipVehicle&filterSearch[]=1', [  
            'headers' => $headers 
        ]); 
        $data['getOwnership'] = $getOwnership['data']['data']; 

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function storeEdit() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 

        if( 
            backdoorCek($input['noKendaraan']) == 1 ||
            backdoorCek($input['jenisKendaraan']) == 1 ||
            backdoorCek($input['jenisBahanBakar']) == 1 ||
            backdoorCek($input['merek']) == 1 ||
            backdoorCek($input['kepemilikan']) == 1
        ){
            $res = array(
                'status' => false,
                'message' => 'Terindikasi inputan tidak sesuai standart!',
                'data' => []
            );
            echo json_encode($res);
            die;
        }

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
                'name' => 'fuel_vehicle',
                'contents' => $input['jenisBahanBakar'],
            ],
            [
                'name' => 'brand_vehicle',
                'contents' => $input['merek'],
            ],
            [
                'name' => 'ownership_vehicle',
                'contents' => $input['kepemilikan'],
            ]
        ];

        $data = guzzle_request('PUT', 'vehicle/edit/'.$input['id'].'', [ 
            'multipart' => $dummy, 
            'headers' => $headers 
        ]);

        if($data['isSuccess'] == true){  
            $res = array(
                'status' => true,
                'message' => 'Berhasil edit data.',
                'data' => $data
            );
        }else{
            $res = array(
                'status' => false,
                'message' => 'Gagal edit data.',
                'data' => $data
            );
        }
        
        echo json_encode($res);

    }


    public function delete() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ];  

        $input      = $this->input->post(); 
        $dummy = [
            [
                'name' => 'id',
                'contents' => $input['id'],
            ] 
        ];

        $data = guzzle_request('DELETE', 'vehicle/delete', [ 
            'multipart' => $dummy, 
            'headers' => $headers 
        ]);

        if($data['isSuccess'] == true){  
            $res = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        }else{
            $res = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }
        
        echo json_encode($res);

    }

}
