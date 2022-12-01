<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class LaporanRisetNTMC extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("inputdata/M_import");
        $this->load->model("inputdata/m_laporan_riset_ntmc");
        $this->load->library('phpexcel');
        $this->load->helper('download');
    }

    public function index()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Import Laporan Riset Media NTMC";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "inputdata/Korlantas/laporan_riset_ntmc";
        }

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_laporan_riset_ntmc->get_datatables($postData);
        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $path = $_FILES['file']['tmp_name'];
        $filename = $_FILES['file']['name'];

        $path_cover = $_FILES['cover']['tmp_name'];
        $filename_cover = $_FILES['cover']['name'];
        if ($_FILES['file']['name'] && $_FILES['cover']['name']) {
            $dummy = [
                [
                    'name' => 'file',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'cover',
                    'contents' => fopen($path_cover, 'r'),
                    'filename' => $filename_cover,
                ],
                [
                    'name' => 'tipe',
                    'contents' => $input['tipe'],
                ],
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date'],
                ],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'tipe',
                    'contents' => $input['tipe'],
                ],
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date'],
                ],

            ];
        }

        $data = guzzle_request('POST', 'laporan_media_ntmc/add', [
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

    public function delete()
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


        $data = guzzle_request('DELETE', 'laporan_media_ntmc/hard_delete', [
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
}
