<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GarlantasKonvensional extends MY_Controller
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
        $page_content["title"] = "Ditgakkum";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Pelanggaran Lalu Lintas Konvensional', 'headline' => 'pelanggaran lalu lintas konvensional'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "ditgakkum/korlantas/ditgakkum_garlantas_konvensional";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditgakkum/polda/ditgakkum_garlantas_konvensional";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditgakkum/polres/ditgakkum_garlantas_konvensional";
        }


        $this->templates->loadTemplate($page_content);
    }
}
