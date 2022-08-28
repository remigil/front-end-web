<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sim extends MY_Controller
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
        $page_content["title"] = "Ditregident";
        $page_content["data"] = ['menu' => 'Ditregident', 'submenu' => 'SIM', 'headline' => 'SIM'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "ditregident/korlantas/ditregident_sim";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditregident/polda/ditregident_sim";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditregident/polres/ditregident_sim";
        }


        $this->templates->loadTemplate($page_content);
    }
}