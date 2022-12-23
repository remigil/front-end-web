<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blackspot extends MY_Controller
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
        $page_content["title"] = "Blackspot";


        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "troublespot/G20/list_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "troublespot/Korlantas/blackspot_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "troublespot/Kapolda/blackspot_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "troublespot/Polres/blackspot_view";
        }

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
