<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Troublespot extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Troublespot";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "troublespot/G20/list_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "troublespot/Korlantas/list_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "troublespot/Kapolda/list_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "troublespot/Polres/list_polres";
        }


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function detail()
    // public function detail($id)
    {
        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Troublespot";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "troublespot/G20/detail_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "troublespot/Korlantas/detail_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "troublespot/Kapolda/detail_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "troublespot/Polres/detail_polres";
        }


        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
