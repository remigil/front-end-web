<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Dashboard";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";

            $getVip = guzzle_request('GET', 'vip', [
                'headers' => $headers
            ]);
            $data['getVip'] = $getVip['data']['data'];

            $getAccount = guzzle_request('GET', 'account', [
                'headers' => $headers
            ]);
            $data['getAccount'] = $getAccount['data']['data'];


            $page_content["data"] = $data;
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "dashboard/dashboard_view";

            $page_content["data"] = '';
            // } else if ($this->session->userdata['role'] == 'Kapolda') {
        } else if ($this->session->userdata['role'] == 'Kapolda') {

            $page_content["page"] = "dashboard/Kapolda/dashboard_view";

            $page_content["data"] = '';
            // } else if ($this->session->userdata['role'] == 'Polres') {
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dashboard/Polres/dashboard_view";

            $page_content["data"] = '';
        }

        $this->templates->loadTemplate($page_content);
    }

    public function getTracking()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];


        $url = 'getMe?date=' . date('Y-m-d') . '';
        $getMe = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getMe);
    }

    public function getCCTV()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'cctv';
        $getCCTV = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getCCTV'] = $getCCTV['data'];

        echo json_encode($data['getCCTV']);
    }

    public function getFasum()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'fasum';
        $getFasum = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getFasum'] = $getFasum['data'];

        echo json_encode($data['getFasum']);
    }

    public function getPolres()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'polres';
        $getPolres = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getPolres'] = $getPolres['data'];

        echo json_encode($data['getPolres']);
    }

    public function getJadwal()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'schedule';
        $getJadwal = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getJadwal'] = $getJadwal['data'];

        echo json_encode($data['getJadwal']);
    }

    public function getRenpam()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'renpam';
        $getRenpam = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getRenpam'] = $getRenpam['data'];

        echo json_encode($data['getRenpam']);
    }
}
