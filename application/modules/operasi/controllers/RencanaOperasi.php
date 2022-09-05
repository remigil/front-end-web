<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RencanaOperasi extends MY_Controller
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
        $page_content["title"] = "Rencana Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/operasi";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/operasi";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/operasi";
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
        $page_content["title"] = "Rencana Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/detail_operasi";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/detail_operasi";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/detail_operasi";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
