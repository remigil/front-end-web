<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LakaLantas extends MY_Controller
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
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Kecelakaan Lalu Lintas', 'headline' => 'kecelakaan lalu lintas'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "ditgakkum/korlantas/ditgakkum_kecelakaan_lalulintas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditgakkum/polda/ditgakkum_kecelakaan_lalulintas";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditgakkum/polres/ditgakkum_kecelakaan_lalulintas";
        }


        $this->templates->loadTemplate($page_content);
    }
}
