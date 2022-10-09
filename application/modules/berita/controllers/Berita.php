<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model('berita/m_berita');
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Berita";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "berita/Korlantas/berita_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "berita/Kapolda/berita_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "berita/Polres/berita_view";
        }

		
		
        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
	public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_berita->get_datatables($postData);  
		echo json_encode($data); 
    }
 
    public function store() 
    {  
		$author = $this->session->userdata['full_name'];
        $headers = [ 
            'Authorization' => $this->session->userdata['token'],  
        ]; 
        $input      = $this->input->post(); 
        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        if($_FILES['photo']['name']){ 
            $dummy = [
				[
					'name' => 'picture',
					'contents' => fopen($path,'r'),
					'filename' => $filename,
				], 
                [
                    'name' => 'news_category',
                    'contents' => $input['category'],
                ],
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'content',
                    'contents' => $input['content'],
                ],
                [
                    'name' => 'author',
                    'contents' => $author,
				],
				[
                    'name' => 'date',
                    'contents' => date('Y-m-d'),
				],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'news_category',
                    'contents' => $input['category'],
                ],
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'content',
                    'contents' => $input['content'],
                ],
                [
                    'name' => 'author',
                    'contents' => $author,
				],
				[
                    'name' => 'date',
                    'contents' => date('Y-m-d'),
				],

            ];
        }

        $data = guzzle_request('POST', 'news/add', [ 
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

    public function detailBerita()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_berita');

        $getDetail = guzzle_request('GET', 'news/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

    public function hapusBerita()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id_berita');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'news/delete', [
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

    public function updateBerita()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();

        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];
        if ($_FILES['photo']['name']) {
            $dummy = [
                [
                    'name' => 'news_category',
                    'contents' => $input['category'],
                ],
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'content',
                    'contents' => $input['content'],
                ],
                [
                    'name' => 'author',
                    'contents' => $this->session->userdata['full_name'],
                ],

                [
                    'name' => 'picture',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ]
            ];
        } else {
            $dummy = [
                [
                    'name' => 'news_category',
                    'contents' => $input['category'],
                ],
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'content',
                    'contents' => $input['content'],
                ],
                [
                    'name' => 'author',
                    'contents' => $this->session->userdata['full_name'],
                ],

            ];
        }
        $data = guzzle_request('PUT', 'news/edit/' . $input['id'] . '', [
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

        $getDetail = guzzle_request('GET', 'news/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
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
        $page_content["title"] = "Berita";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "operasi/G20/edit_vip_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_vip_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_vip_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_vip_polres";
        }

        $getDetail = guzzle_request('GET', 'news/getId/'.$id.'', [  
            'headers' => $headers 
        ]);
        $data['getDetail'] = $getDetail['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function storeEdit() 
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
                    'name' => 'news_category',
                    'contents' => $input['category'],
                ],
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'content',
                    'contents' => $input['content'],
                ],
                [
                    'name' => 'author',
                    'contents' => $this->session->userdata['full_name'],
                ],
                
                [
                    'name' => 'picture',
                    'contents' => fopen($path,'r'),
                    'filename' => $filename
                ] 
            ];
        } else {
            $dummy = [
                [
                    'name' => 'news_category',
                    'contents' => $input['category'],
                ],
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'content',
                    'contents' => $input['content'],
                ],
                [
                    'name' => 'author',
                    'contents' => $this->session->userdata['full_name'],
                ],
				
            ];
        }
        $data = guzzle_request('PUT', 'news/edit/'.$input['id'].'', [ 
            'multipart' => $dummy, 
            'headers' => $headers 
        ]);
        // echo json_encode($data);
        // die;

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

        $data = guzzle_request('DELETE', 'news/delete', [ 
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
