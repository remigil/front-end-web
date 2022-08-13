<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ditgakkum extends MY_Controller
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
        $page_content["title"] = "Dashboard";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dashboard/dashboard_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function data_dakgar_lantas()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["page"] = "ditgakkum/ditgakkum_dakgar_lantas";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Data Dakgar Lantas', 'headline' => 'data dakgar lalu lintas'];
        $this->templates->loadTemplate($page_content);
    }

    public function garlantas_konvensional()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["page"] = "ditgakkum/ditgakkum_garlantas_konvensional";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Pelanggaran Lalu Lintas Konvensional', 'headline' => 'pelanggaran lalu lintas konvensional'];
        $this->templates->loadTemplate($page_content);
    }

    public function kecelakaan_lalulintas()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["page"] = "ditgakkum/ditgakkum_kecelakaan_lalulintas";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Kecelakaan Lalu Lintas', 'headline' => 'kecelakaan lalu lintas'];
        $this->templates->loadTemplate($page_content);
    }

    public function turjagwali()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["page"] = "ditgakkum/ditgakkum_turjagwali";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Data Turjagwali', 'headline' => 'data turjagwali'];
        $this->templates->loadTemplate($page_content);
    }
}
