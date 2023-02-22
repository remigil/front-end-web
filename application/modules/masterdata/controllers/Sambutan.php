<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sambutan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("masterdata/m_sambutan");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Sambutan";

        $page_content["page"] = "masterdata/Korlantas/sambutan_view";

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_visimisi->get_datatables($postData);
        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();

        // echo "<pre>";
        // var_dump($input);
        // die;
        $misi = [];

        for ($i = 0; $i < count($input['misi']); $i++) {
            $misi[] = $i + 1 . '.' . $input['misi'][$i] . '<br>';
        }
        $misiimplode =  implode("<br>", $misi);


        $dummy = [
            [
                'name' => 'visi',
                'contents' => $input['visi'],
            ],
            [
                'name' => 'misi',
                'contents' => $misiimplode,
            ]
        ];

        $data = guzzle_request('POST', 'sambutan/add', [
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
    public function detailVisimisi()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id');

        $getDetail = guzzle_request('GET', 'visimisi/getIdWeb/' . $id . '', [
            'headers' => $headers
        ]);
        $data = [
            'getDetail' => $getDetail['data']['data']
        ];

        echo json_encode($data);
    }

    public function hapusVisimisi()
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

        $data = guzzle_request('DELETE', 'visimisi/delete', [
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

    public function updateVisimisi()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();

        $dummy = [
            [
                'name' => 'teks_sambutan',
                'contents' => $input['teks_sambutan'],
            ],
        ];
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
