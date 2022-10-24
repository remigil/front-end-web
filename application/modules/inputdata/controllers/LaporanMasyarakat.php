<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class LaporanMasyarakat extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Laporan Harian Masyarakat";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas' || $this->session->userdata['role'] == "OperatorKorlantas") {
            $getPolda = guzzle_request('GET', 'polda', [
                'headers' => ['Authorization' => $this->session->userdata['token']]
            ]);
            $data['getPolda'] = $getPolda['data']['data'];
            $page_content["page"] = "inputdata/Korlantas/InputData_Masyarakat";
        } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'OperatorPolda') {
            $id = $this->session->userdata['polda_id'];
            $getPolda = guzzle_request('GET', 'polda/getId/' . $id, [
                'headers' => ['Authorization' => $this->session->userdata['token']]
            ]);
            $data['getPolda'] = $getPolda['data']['data'];
            $page_content["page"] = "inputdata/Kapolda/InputData_Kapolda";
        } else if ($this->session->userdata['role'] == 'Polres' || $this->session->userdata['role'] == 'OperatorPolres') {
            $id = $this->session->userdata['polres_id'];
            $getPolda = guzzle_request('GET', 'polres/getId/' . $id, [
                'headers' => $headers
            ]);
            $data['getPolres'] = $getPolda['data']['data'];
            $page_content["page"] = "inputdata/Polres/InputData_Polres";
        }

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function getPolres()
    {
        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('polda_id');

        $getDetail = guzzle_request('GET', 'polres/getPolda/' . $id . '', [
            'headers' => $headers
        ]);

        $results = $getDetail['data']['data'];
        echo json_encode($results);
    }

    public function storePolda()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $polda_id = $this->input->post('polda_id');
        $date = $this->input->post('date');
        $polres_id = $this->input->post('polres_id');
        $jenis_laporan = $this->input->post('jenis_laporan');
        $value = [];
        $url = '';


        $max_loop = count($this->input->post('polres_id'));

        if ($jenis_laporan == 1) {
            // Data Dakgar lantas

            $url = 'laporan_masyarakat/giat_prokes?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'tegur_prokes' => $this->input->post('tegur_prokes')[$i],
                    'masker' => $this->input->post('masker')[$i],
                    'sosial_prokes' => $this->input->post('sosial_prokes')[$i],
                    'baksos' => $this->input->post('baksos')[$i],
                ];
                array_push($value, $object);
            }
        }

        $dummy = [
            [
                'name' => 'polda_id',
                'contents' => $polda_id
            ],
            [
                'name' => 'date',
                'contents' => $date
            ],
            [
                'name' => 'value',
                'contents' => $value
            ]
        ];


        $data = guzzle_request('POST', $url, [
            'json' => [
                'polda_id' => $polda_id,
                'date' => $date,
                'value' => $value
            ],
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

    public function getPolresID()
    {
        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('polres_id');

        $getDetail = guzzle_request('GET', 'polres/getId/' . $id . '', [
            'headers' => $headers
        ]);

        $results = $getDetail['data']['data'];
        echo json_encode($results);
    }

    public function storePolres()
    {
        echo 'ok';
    }
}
