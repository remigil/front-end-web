<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Penyebaran extends MY_Controller
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
        $page_content["title"] = "Ditkamsel";
        $page_content["data"] = ['menu' => 'Ditkamsel', 'submenu' => 'Penyebaran dan Pemasangan', 'headline' => 'Penyebaran dan Pemasangan'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "ditkamsel/korlantas/ditkamsel_penyebaran";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditkamsel/polda/ditkamsel_penyebaran";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditkamsel/polres/ditkamsel_penyebaran";
        }


        $this->templates->loadTemplate($page_content);
    }
}
