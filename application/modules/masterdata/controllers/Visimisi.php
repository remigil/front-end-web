<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visimisi extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("masterdata/m_visimisi");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Visi & misi Korlantas Polri";

        $page_content["page"] = "masterdata/Korlantas/Visimisi/visimisi_view";

        $url = 'visimisi';

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
        $page_content["title"] = "Edit Visi misi";

        $page_content["page"] = "masterdata/Korlantas/Visimisi/edit_visimisi";

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function updateVisimisi()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $misi = implode("+", $input['misi']);

        $path = $_FILES['photo']['tmp_name'];
        $filename = $_FILES['photo']['name'];

        if ($_FILES['photo']['name']) {
            $dummy = [
                [
                    'name' => 'picture',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'visi',
                    'contents' => $input['visi'],
                ],
                [
                    'name' => 'misi',
                    'contents' => $misi,
                ],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'visi',
                    'contents' => $input['visi'],
                ],
                [
                    'name' => 'misi',
                    'contents' => $misi,
                ],
            ];
        }

        $data = guzzle_request('PUT', 'visimisi/edit/' . $input['id'] . '', [
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
