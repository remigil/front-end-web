<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satker_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		// $this->load->model("masterdata/m_fasum");
    }

    public function index()
    {
		$headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = ''; 

        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "Detail Polda";
            $page_content["page"] = "executive/satker/detail_satker_view";



        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["title"] = "Data Anev";
            $page_content["page"] = "anev/Ditkamsel/anev_view";
        } else if ($this->session->userdata['role'] == 'Ditgakkum') {
            $page_content["title"] = "Data Anev";
            $page_content["page"] = "anev/Ditgakkum/anev_view";
        } else if ($this->session->userdata['role'] == 'Ditregident') {
            $page_content["title"] = "Data Anev";
            $page_content["page"] = "anev/Ditregident/anev_view";
		} else if ($this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "Data Anev";
            $page_content["page"] = "anev/Bagops/anev_view";
		} else if ($this->session->userdata['role'] == 'KaBagRenmin') {
            $page_content["title"] = "Data Anev";
            $page_content["page"] = "anev/Bagrenmin/anev_view";
		} else if ($this->session->userdata['role'] == 'KaBagTIK') {
            $page_content["title"] = "Data Anev";
            $page_content["page"] = "anev/Bagtik/anev_view";
		} else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["title"] = "Data Anev";
            $page_content["page"] = "anev/Kapolda/anev_view";
		} else if ($this->session->userdata['role'] == 'Kapolres') {
            $page_content["title"] = "Data Anev";
            $page_content["page"] = "anev/Kapolres/anev_view";
        }

        $getCategory = guzzle_request('GET', 'category_fasum', [
            'headers' => $headers
        ]);

        $data = '';
        // var_dump($getCategory);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


}
