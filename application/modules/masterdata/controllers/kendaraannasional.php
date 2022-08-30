<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kendaraannasional extends MY_Controller
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
        $page_content["title"] = "Kendaraan";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/kendaraan_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/kendaraan_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/kendaraan_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
