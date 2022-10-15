<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OperasiRutin extends MY_Controller
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
        $page_content["title"] = "Operasi Rutin";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/operasi_rutin_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/operasi_rutin_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/operasi_rutin_view";
        }


        $getPolda = guzzle_request('GET', 'polda', [
            'headers' => [
                'Authorization' => $headers
            ]
        ]);
        $data['getPolda'] = $getPolda['data']['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
}
