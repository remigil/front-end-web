<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Div_tik extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_DivTik");
    }

    public function index()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "Statistik Nasional - DivTik Mabes Polri";
            $page_content["page"] = "divtik/divtik_view";
        } else if ($this->session->userdata['role'] == 'DivTikMabesPolri') {
            $page_content["title"] = "Statistik Nasional - DivTik Mabes Polri";
            $page_content["page"] = "divtik/divtik_view";
        }
        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function getKecelakaan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $yesterday = date('Y-m-d', strtotime("-1 days"));
        $today = date('Y-m-d', time());


        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $data['lakalantas'] = '123';
        // $date = date("Y-m-d");
        // $url = 'laka_lantas/daily?date=' . $date . '&topPolda=true&limit=10';
        http: //34.143.227.90:3001/v1/laka_lantas/daily?date=2022-11-22
        $url_today = 'laka_lantas/daily?date=' . $today . '';
        $url_yesterday = 'laka_lantas/daily?date=' . $yesterday . '';


        $getLakalantas_today = guzzle_request('GET', $url_today, [
            'headers' => $headers
        ]);

        $getLakalantas_yesterday = guzzle_request('GET', $url_yesterday, [
            'headers' => $headers
        ]);

        $insiden_today = array();
        $insiden_yesterday = array();
        $polda_name = array();
        foreach ($getLakalantas_today['data']['rows'] as $key) {
            $insiden_today[] = $key['insiden_kecelakaan'];
            $polda_name[] = $key['name_polda'];
        }

        foreach ($getLakalantas_yesterday['data']['rows'] as $key) {
            $insiden_yesterday[] = $key['insiden_kecelakaan'];
        }




        $data['lakalantas'] = [
            'laka_date_today' => 'Total Kecelakaan ' . $today . '',
            'laka_date_yesterday' => 'Total Kecelakaan ' . $yesterday . '',
            'laka_insiden_today' => $insiden_today,
            'laka_insiden_yesterday' => $insiden_yesterday,
            'laka_polda_name' => $polda_name
        ];

        echo json_encode($data['lakalantas']);
    }


    public function getPelanggaran()
    {
        date_default_timezone_set('Asia/Jakarta');
        $yesterday = date('Y-m-d', strtotime("-1 days"));
        $today = date('Y-m-d', time());


        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $data['lakalantas'] = '123';
        // $date = date("Y-m-d");
        // $url = 'laka_lantas/daily?date=' . $date . '&topPolda=true&limit=10';
        http: //34.143.227.90:3001/v1/laka_lantas/daily?date=2022-11-22
        $url_today = 'garlantas/daily?date=' . $today . '';
        $url_yesterday = 'garlantas/daily?date=' . $yesterday . '';


        $getGarlantas_today = guzzle_request('GET', $url_today, [
            'headers' => $headers
        ]);

        $getGarlantas_yesterday = guzzle_request('GET', $url_yesterday, [
            'headers' => $headers
        ]);

        $insiden_today = array();
        $insiden_yesterday = array();
        $polda_name = array();
        foreach ($getGarlantas_today['data']['rows'] as $key) {
            $insiden_today[] = $key['total'];
            $polda_name[] = $key['name_polda'];
        }

        foreach ($getGarlantas_yesterday['data']['rows'] as $key) {
            $insiden_yesterday[] = $key['total'];
        }




        $data['garlantas'] = [
            'pelanggaran_date_today' => 'Total Pelanggaran ' . $today . '',
            'pelanggaran_date_yesterday' => 'Total Pelanggaran ' . $yesterday . '',
            'pelanggaran_insiden_today' => $insiden_today,
            'pelanggaran_insiden_yesterday' => $insiden_yesterday,
            'pelanggaran_polda_name' => $polda_name
        ];

        echo json_encode($data['garlantas']);
    }

    public function getTurjagwali()
    {
        date_default_timezone_set('Asia/Jakarta');
        $yesterday = date('Y-m-d', strtotime("-1 days"));
        $today = date('Y-m-d', time());

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $data['lakalantas'] = '123';
        // $date = date("Y-m-d");
        // $url = 'laka_lantas/daily?date=' . $date . '&topPolda=true&limit=10';
        // http://34.143.227.90:3001/v1/turjagwali/daily?date=2022-11-24&topPolda=true&limit=5
        $url_today = 'turjagwali/daily?date=' . $today . '&topPolda=true&limit=5';

        $getTurjagwali_today = guzzle_request('GET', $url_today, [
            'headers' => $headers
        ]);

        foreach ($getTurjagwali_today['data']['rows'] as $key) {
            $insiden_today[] = $key['total'];
            $polda_name[] = $key['name_polda'];
        }

        $data['turjagwali'] = [
            'turjagwali_date_today' => 'Total Turjagwali' . $today . '',
            'turjagwali_insiden_today' => $insiden_today,
            'turjagwali_polda_name' => $polda_name
        ];


        echo json_encode($data['turjagwali']);
    }

    public function getRanmor()
    {
        date_default_timezone_set('Asia/Jakarta');
        $yesterday = date('Y-m-d', strtotime("-1 days"));
        $today = date('Y-m-d', time());

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $data['lakalantas'] = '123';
        // $date = date("Y-m-d");
        // $url = 'laka_lantas/daily?date=' . $date . '&topPolda=true&limit=10';
        // http://34.143.227.90:3001/v1/turjagwali/daily?date=2022-11-24&topPolda=true&limit=5
        $url_today = 'ranmor/daily?date=' . $today . '&topPolda=true&limit=5';

        $getRanmor_today = guzzle_request('GET', $url_today, [
            'headers' => $headers
        ]);



        foreach ($getRanmor_today['data']['rows'] as $key) {
            $poldaName[] = $key['name_polda'];
            $mobil_penumpang[] = $key['mobil_penumpang'];
            $mobil_bus[] = $key['mobil_bus'];
            $mobil_barang[] = $key['mobil_barang'];
            $ransus[] = $key['ransus'];
            $sepeda_motor[] = $key['sepeda_motor'];
        }

        $data['ranmor'] = [
            'ranmor_date_today' => 'Total ranmor' . $today . '',
            'ranmor_polda_name' => $poldaName,
            'ranmor_mobil_penumpang' => $mobil_penumpang,
            'ranmor_mobil_barang' => $mobil_barang,
            'ranmor_mobil_bus' => $mobil_bus,
            'ranmor_ransus' => $ransus,
            'ranmor_sepeda_motor' => $sepeda_motor
        ];


        echo json_encode($data['ranmor']);
    }
}
