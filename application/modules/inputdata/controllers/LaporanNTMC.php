<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class LaporanNTMC extends MY_Controller
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
        $page_content["title"] = "Laporan NTMC";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas' || $this->session->userdata['role'] == 'OperatorKorlantas') {
            $page_content["page"] = "inputdata/Korlantas/InputData_NTMC";
            $data = '';
        }

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function storeNtmc()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];


        $input = $this->input->post();
        $jenis_laporan = $this->input->post('jenis_laporan');
        $url = '';


        if ($jenis_laporan == 1) {
            // Data On Air TV
            $url = 'ntmc/onair-tv';
            $dummy = [
                [
                    'name' => 'program',
                    'contents' => $input['program'],
                ],
                [
                    'name' => 'live_report',
                    'contents' => $input['live_report'],
                ],
                [
                    'name' => 'live_program',
                    'contents' => $input['live_program'],
                ],
                [
                    'name' => 'tapping',
                    'contents' => $input['tapping'],
                ],
                [
                    'name' => 'vlog_cctv',
                    'contents' => $input['vlog_cctv'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan == 2) {
            // Data On Air Web

            $url = 'ntmc/onair-online';
            $dummy = [
                [
                    'name' => 'web_ntmc',
                    'contents' => $input['web_ntmc'],
                ],
                [
                    'name' => 'web_korlantas',
                    'contents' => $input['web_korlantas'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan == 3) {
            // Data Media Sosial

            $url = 'ntmc/onair-medsos';
            $dummy = [
                [
                    'name' => 'facebook',
                    'contents' => $input['facebook'],
                ],
                [
                    'name' => 'instagram',
                    'contents' => $input['instagram'],
                ],
                [
                    'name' => 'twitter',
                    'contents' => $input['twitter'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan == 4) {
            $url = 'ntmc/offair-program';
            $dummy = [
                [
                    'name' => 'sosialisasi',
                    'contents' => $input['sosialisasi'],
                ],
                [
                    'name' => 'timtam',
                    'contents' => $input['timtam'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan == 5) {
            $url = 'ntmc/dok-tv';
            $dummy = [
                [
                    'name' => 'media_tv',
                    'contents' => $input['media_tv'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan == 6) {
            $url = 'ntmc/dok-medsos';
            $dummy = [
                [
                    'name' => 'positif_korlantas',
                    'contents' => $input['positif_korlantas'],
                ],
                [
                    'name' => 'negatif_korlantas',
                    'contents' => $input['negatif_korlantas'],
                ],
                [
                    'name' => 'lakalantas',
                    'contents' => $input['lakalantas'],
                ],
                [
                    'name' => 'positif_polri',
                    'contents' => $input['positif_polri'],
                ],
                [
                    'name' => 'negatif_polri',
                    'contents' => $input['negatif_polri'],
                ],
                [
                    'name' => 'liputan',
                    'contents' => $input['liputan'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan == 7) {
            $url = 'ntmc/dok-medsos';
            $dummy = [
                [
                    'name' => 'positif_korlantas',
                    'contents' => $input['positif_korlantas'],
                ],
                [
                    'name' => 'negatif_korlantas',
                    'contents' => $input['negatif_korlantas'],
                ],
                [
                    'name' => 'lakalantas',
                    'contents' => $input['lakalantas'],
                ],
                [
                    'name' => 'positif_polri',
                    'contents' => $input['positif_polri'],
                ],
                [
                    'name' => 'negatif_polri',
                    'contents' => $input['negatif_polri'],
                ],
                [
                    'name' => 'liputan',
                    'contents' => $input['liputan'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan == 8) {
            $url = 'ntmc/dok-medsos';
            $dummy = [
                [
                    'name' => 'positif_korlantas',
                    'contents' => $input['positif_korlantas'],
                ],
                [
                    'name' => 'negatif_korlantas',
                    'contents' => $input['negatif_korlantas'],
                ],
                [
                    'name' => 'lakalantas',
                    'contents' => $input['lakalantas'],
                ],
                [
                    'name' => 'positif_polri',
                    'contents' => $input['positif_polri'],
                ],
                [
                    'name' => 'negatif_polri',
                    'contents' => $input['negatif_polri'],
                ],
                [
                    'name' => 'liputan',
                    'contents' => $input['liputan'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan == 9) {
            $url = 'ntmc/dok-medsos';
            $dummy = [
                [
                    'name' => 'positif_korlantas',
                    'contents' => $input['positif_korlantas'],
                ],
                [
                    'name' => 'negatif_korlantas',
                    'contents' => $input['negatif_korlantas'],
                ],
                [
                    'name' => 'lakalantas',
                    'contents' => $input['lakalantas'],
                ],
                [
                    'name' => 'positif_polri',
                    'contents' => $input['positif_polri'],
                ],
                [
                    'name' => 'negatif_polri',
                    'contents' => $input['negatif_polri'],
                ],
                [
                    'name' => 'liputan',
                    'contents' => $input['liputan'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan ==  10) {
            $url =  'ntmc/aktivitas-medsos';
            $dummy = [
                [
                    'name' => 'facebook',
                    'contents' => $input['facebook'],
                ],
                [
                    'name' => 'twitter',
                    'contents' => $input['twitter'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];

            // Data On Air TV
        } else if ($jenis_laporan ==  11) {
            $url = 'ntmc/aktivitas-radio';
            $dummy = [
                [
                    'name' => 'gen_fm',
                    'contents' => $input['gen_fm'],
                ],
                [
                    'name' => 'jak_fm',
                    'contents' => $input['jak_fm'],
                ],
                [
                    'name' => 'most_fm',
                    'contents' => $input['most_fm'],
                ],
                [
                    'name' => 'kiss_fm',
                    'contents' => $input['kiss_fm'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        } else if ($jenis_laporan ==  12) {
            $url = 'ntmc/aktivitas-pengaduan';
            $dummy = [
                [
                    'name' => 'radio_pjr',
                    'contents' => $input['radio_pjr'],
                ],
                [
                    'name' => 'sms_9119',
                    'contents' => $input['sms_9119'],
                ],
                [
                    'name' => 'wa_center',
                    'contents' => $input['wa_center'],
                ],
                [
                    'name' => 'call_center',
                    'contents' => $input['call_center'],
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
            ];
        }

        // var_dump($dummy);
        // die;

        $data = guzzle_request('POST', $url, [
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
}
