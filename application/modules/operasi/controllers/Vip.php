
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vip extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('operasi/m_vip');
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
            $page_content["page"] = "operasi/G20/vip_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/vip_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/vip_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/vip_polres";
        } else {
            redirect(base_url('404_notfound'));
             
        }

        $getPosition = guzzle_request('GET', 'position', [  
            'headers' => $headers 
        ]); 
        $data['getPosition'] = $getPosition['data']['data']; 

        $getCountry = guzzle_request('GET', 'country', [  
            'headers' => $headers 
        ]); 
        $data['getCountry'] = $getCountry['data']['data']; 


        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_vip->get_datatables($postData);
        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();

        if( 
            backdoorCek($input['namaVIP']) == 1 ||
            backdoorCek($input['asalNegara']) == 1 ||
            backdoorCek($input['jabatan']) == 1 ||
            backdoorCek($input['keterangan']) == 1 
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
                'name' => 'name_vip',
                'contents' => $input['namaVIP'],
            ],
            [
                'name' => 'country_arrival_vip',
                'contents' => $input['asalNegara'],
            ],
            [
                'name' => 'position_vip',
                'contents' => $input['jabatan'],
            ],
            [
                'name' => 'description_vip',
                'contents' => $input['keterangan'],
            ]
        ];

        $data = guzzle_request('POST', 'vip/add', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
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
            $page_content["page"] = "operasi/G20/detail_vip_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/detail_vip_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/detail_vip_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/detail_vip_polres";
        }

        $getDetail = guzzle_request('GET', 'vip/getId/' . $id . '', [
            'headers' => $headers
        ]);
        if($getDetail['isSuccess'] == false){
            redirect(base_url('404_notfound'));
            die;
        }
        $data['getDetail'] = $getDetail['data'];
        // echo json_encode($data['getDetail']['data']['name']);
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
            $page_content["page"] = "operasi/G20/edit_vip_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_vip_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_vip_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_vip_polres";
        }

        $getDetail = guzzle_request('GET', 'vip/getId/' . $id . '', [
            'headers' => $headers
        ]);
        if($getDetail['isSuccess'] == false){
            redirect(base_url('404_notfound'));
            die;
        }
        $data['getDetail'] = $getDetail['data'];


        $getPosition = guzzle_request('GET', 'position', [  
            'headers' => $headers 
        ]); 
        $data['getPosition'] = $getPosition['data']['data']; 

        $getCountry = guzzle_request('GET', 'country', [  
            'headers' => $headers 
        ]); 
        $data['getCountry'] = $getCountry['data']['data']; 

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
            backdoorCek($input['namaVIP']) == 1 ||
            backdoorCek($input['asalNegara']) == 1 ||
            backdoorCek($input['jabatan']) == 1 ||
            backdoorCek($input['keterangan']) == 1 
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
                'name' => 'name_vip',
                'contents' => $input['namaVIP'],
            ],
            [
                'name' => 'country_arrival_vip',
                'contents' => $input['asalNegara'],
            ],
            [
                'name' => 'position_vip',
                'contents' => $input['jabatan'],
            ],
            [
                'name' => 'description_vip',
                'contents' => $input['keterangan'],
            ]
        ];

        $data = guzzle_request('PUT', 'vip/edit/' . $input['id'] . '', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

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

        $data = guzzle_request('DELETE', 'vip/delete', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }
}
