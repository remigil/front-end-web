
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panic extends MY_Controller
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
        $page_content["title"] = "Laporan";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "laporan/G20/panic_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "laporan/Korlantas/panic_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "laporan/Kapolda/panic_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "laporan/Polres/panic_polres";
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
        $page_content["title"] = "Operasi";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "laporan/G20/detail_panic_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "laporan/Korlantas/detail_panic_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "laporan/Kapolda/detail_panic_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "laporan/Polres/detail_panic_polres";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}