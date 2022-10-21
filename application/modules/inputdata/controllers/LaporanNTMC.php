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
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $getPolda = guzzle_request('GET', 'polda', [
                'headers' => $headers
            ]);
            $data['getPolda'] = $getPolda['data']['data'];
            $page_content["page"] = "inputdata/Korlantas/InputData_NTMC";
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

            $object = (object) [
                'web_ntmc' => $this->input->post('web_ntmc'),
                'web_korlantas' => $this->input->post('web_korlantas'),
            ];

            array_push($value, $object);
        } else if ($jenis_laporan == 3) {
            // Data Media Sosial

            $url = 'ntmc/onair-medsos';
            $object = (object) [
                'facebook' => $this->input->post('facebook'),
                'instagram' => $this->input->post('instagram'),
                'twitter' => $this->input->post('twitter'),
            ];

            array_push($value, $object);
        } else if ($jenis_laporan == 4) {
            $url = 'ntmc/onair-tv';

            $object = (object) [
                'sosialisasi' => $this->input->post('sosialisasi'),
                'timtam' => $this->input->post('timtam'),
            ];

            array_push($value, $object);
        } else if ($jenis_laporan == 5) {
            $url = 'ntmc/onair-tv';

            $object = (object) [
                'media_tv' => $this->input->post('media_tv'),
            ];

            array_push($value, $object);
        } else if ($jenis_laporan == 6) {
            $url = 'ntmc/onair-medsos';

            $object = (object) [
                'positif_korlantas' => $this->input->post('positif_korlantas'),
                'negatif_korlantas' => $this->input->post('negatif_korlantas'),
                'lakalantas' => $this->input->post('lakalantas'),
                'positif_polri' => $this->input->post('positif_polri'),
                'negatif_polri' => $this->input->post('negatif_polri'),
                'liputan' => $this->input->post('liputan')
            ];

            array_push($value, $object);
        } else if ($jenis_laporan == 7) {
            $url = 'ntmc/onair-medsos';

            $object = (object) [
                'positif_korlantas' => $this->input->post('positif_korlantas'),
                'negatif_korlantas' => $this->input->post('negatif_korlantas'),
                'lakalantas' => $this->input->post('lakalantas'),
                'positif_polri' => $this->input->post('positif_polri'),
                'negatif_polri' => $this->input->post('negatif_polri'),
                'liputan' => $this->input->post('liputan')
            ];

            array_push($value, $object);
        } else if ($jenis_laporan == 8) {
            $url = 'ntmc/onair-medsos';

            $object = (object) [
                'positif_korlantas' => $this->input->post('positif_korlantas'),
                'negatif_korlantas' => $this->input->post('negatif_korlantas'),
                'lakalantas' => $this->input->post('lakalantas'),
                'positif_polri' => $this->input->post('positif_polri'),
                'negatif_polri' => $this->input->post('negatif_polri'),
                'liputan' => $this->input->post('liputan')
            ];

            array_push($value, $object);
        } else if ($jenis_laporan == 9) {
            $url = 'ntmc/onair-medsos';

            $object = (object) [
                'positif_korlantas' => $this->input->post('positif_korlantas'),
                'negatif_korlantas' => $this->input->post('negatif_korlantas'),
                'lakalantas' => $this->input->post('lakalantas'),
                'positif_polri' => $this->input->post('positif_polri'),
                'negatif_polri' => $this->input->post('negatif_polri'),
                'liputan' => $this->input->post('liputan')
            ];

            array_push($value, $object);
        } else if ($jenis_laporan ==  10) {
            $url =  'ntmc/onair-medsos';

            $object = (object) [
                'facebook' => $this->input->post('facebook'),
                'twitter' => $this->input->post('twitter'),
            ];

            array_push($value, $object);

            // Data On Air TV
        } else if ($jenis_laporan ==  11) {
            $url =  'ntmc/onair-online';

            $object = (object) [
                'gen_fm' => $this->input->post('gen_fm'),
                'jak_fm' => $this->input->post('jak_fm'),
                'most_fm' => $this->input->post('most_fm'),
                'kiss_fm' => $this->input->post('kiss_fm'),
            ];

            array_push($value, $object);
        } else if ($jenis_laporan ==  12) {
            $url =  'ntmc/onair-online';

            $object = (object) [
                'radio_pjr' => $this->input->post('radio_pjr'),
                'sms_9119' => $this->input->post('sms_9119'),
                'wa_center' => $this->input->post('wa_center'),
                'call_center' => $this->input->post('call_center'),
            ];

            array_push($value, $object);
        }


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
