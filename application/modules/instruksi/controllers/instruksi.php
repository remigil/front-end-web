<?php
defined('BASEPATH') or exit('No direct script access allowed');

class instruksi extends MY_Controller
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
        $page_content["title"] = "Instruksi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "instruksi/G20/instruksi_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "instruksi/Korlantas/instruksi";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "instruksi/Kapolda/instruksi_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "instruksi/Polres/instruksi_view";
        }

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function Detail()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Instruksi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "instruksi/G20/detail_instruksi_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "instruksi/Korlantas/instruksi";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "instruksi/Kapolda/detail_instruksi_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "instruksi/Polres/detail_instruksi_view";
        }
        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function Edit()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Instruksi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "instruksi/G20/edit_instruksi_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "instruksi/Korlantas/instruksi";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "instruksi/Kapolda/edit_instruksi_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "instruksi/Polres/edit_instruksi_view";
        }
        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
