<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Strukturorganisasi extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("masterdata/m_strukturorganisasi");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Struktur Organisasi Korlantas Polri";

        $page_content["page"] = "masterdata/Korlantas/Strukturorganisasi/strukturorganisasi_view";

        $url = 'strukturorganisasi';

        $result = guzzle_request('GET', $url, [

            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);
        $page_content["data"] = $result;
        $this->templates->loadTemplate($page_content);
    }

    public function edit()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Edit Struktur Organisasi Korlantas Polri";

        $page_content["page"] = "masterdata/Korlantas/Strukturorganisasi/edit_strukturorganisasi";

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function update()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $tugas = implode("+", $input['tugas']);
        $fungsi = implode("+", $input['fungsi']);

        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];

		if($_FILES['photo']['name']){ 
            $dummy = [
                [
					'name' => 'foto',
					'contents' => fopen($path,'r'),
					'filename' => $filename,
				],
                [
                    'name' => 'tugas',
                    'contents' => $tugas,
                ],
                [
                    'name' => 'fungsi',
                    'contents' => $fungsi,
                ],
            ];

        }else{
            $dummy = [
                [
                    'name' => 'tugas',
                    'contents' => $tugas,
                ],
                [
                    'name' => 'fungsi',
                    'contents' => $fungsi,
                ],
            ];
            

        }

        $data = guzzle_request('PUT', 'strukturorganisasi/edit/' . $input['id'] . '', [
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
}
