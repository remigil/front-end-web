<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanHarian extends MY_Controller
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
        $page_content["title"] = "Laporan Harian";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "InputData/Korlantas/InputData_Korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "InputData/Kapolda/InputData_Kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "InputData/Polres/InputData_Polres";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
