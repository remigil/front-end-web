
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ht extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper"); 
        $this->load->model('operasi/m_ht'); 
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Operasi HT";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/ht_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/ht_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/ht_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/ht_polres";
        } 

        $getHT = guzzle_request('GET', 'ht?serverSide=true&order=id&orderDirection=desc&length=999999&start=1', [  
            'headers' => $headers 
        ]); 
        $data['getHT'] = $getHT['data']['data']; 

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_ht->get_datatables($postData);  
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
                'name' => 'no_lambung',
                'contents' => $input['no_lambung'],
            ],
            [
                'name' => 'identitas_rt',
                'contents' => $input['identitas_rt'],
            ],
            [
                'name' => 'dari_pukul',
                'contents' => $input['dari_pukul'],
            ],
            [
                'name' => 'tujuan_pukul',
                'contents' => $input['tujuan_pukul'],
            ],
            [
                'name' => 'jumlah_kendaraan',
                'contents' => $input['jumlah_kendaraan'],
            ],
            [
                'name' => 'ket',
                'contents' => $input['ket'],
            ]
        ];

        $data = guzzle_request('POST', 'ht/add', [ 
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

     
     


    public function storeEdit() 
    {  
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 
        $dummy = [
            [
                'name' => 'no_lambung',
                'contents' => $input['no_lambung'],
            ],
            [
                'name' => 'identitas_rt',
                'contents' => $input['identitas_rt'],
            ],
            [
                'name' => 'dari_pukul',
                'contents' => $input['dari_pukul'],
            ],
            [
                'name' => 'tujuan_pukul',
                'contents' => $input['tujuan_pukul'],
            ],
            [
                'name' => 'jumlah_kendaraan',
                'contents' => $input['jumlah_kendaraan'],
            ],
            [
                'name' => 'ket',
                'contents' => $input['ket'],
            ]
        ];

        $data = guzzle_request('PUT', 'ht/edit/'.$input['id'].'', [ 
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

        $data = guzzle_request('DELETE', 'ht/delete', [ 
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
