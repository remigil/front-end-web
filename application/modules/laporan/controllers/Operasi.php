
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operasi extends MY_Controller
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

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "laporan/G20/operasi_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "laporan/Korlantas/operasi_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "laporan/Kapolda/operasi_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "laporan/Polres/operasi_polres";
        }else{
            redirect(base_url('dashboard'));
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
        $page_content["title"] = "Laporan";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "laporan/G20/detail_operasi_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "laporan/Korlantas/detail_operasi_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "laporan/Kapolda/detail_operasi_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "laporan/Polres/detail_operasi_polres";
        }else{
            redirect(base_url('dashboard'));
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
