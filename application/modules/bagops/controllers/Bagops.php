<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bagops extends MY_Controller
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
        $page_content["title"] = "BagOps";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "bagops/Korlantas/bagops_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "bagops/Kapolda/bagops_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "bagops/Polres/bagops_view";
        }



        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
