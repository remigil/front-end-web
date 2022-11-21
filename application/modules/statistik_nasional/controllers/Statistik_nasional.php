<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_nasional extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('berita/m_berita');
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Statistik Nasional";
        $page_content["page"] = "statistik_nasional/statistik_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_berita->get_datatables($postData);
        echo json_encode($data);
    }
}
