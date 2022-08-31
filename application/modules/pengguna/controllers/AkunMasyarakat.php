<?php
class AkunMasyarakat extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
    }
    public function index()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Manajemen Pengguna";
        $page_content["data"] = ['menu' => 'Data Akun', 'submenu' => 'Daftar Akun Umum'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "pengguna/korlantas/pengguna_umum";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "pengguna/polda/pengguna_umum";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "pengguna/polres/pengguna_umum";
        }


        $this->templates->loadTemplate($page_content);
    }
}
