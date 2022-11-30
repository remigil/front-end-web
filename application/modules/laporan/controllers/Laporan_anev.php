
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_anev extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        // $this->load->model("laporan/m_operasi");
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "laporan/G20/operasi_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "laporan/Korlantas/operasi_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "laporan/Kapolda/operasi_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "laporan/Polres/operasi_polres";
        } else if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "Laporan Anev";
            $page_content["page"] = "laporan/korlantas/laporan_anev_view";
        }



        $getPolda = guzzle_request('GET', 'polda/', [
            'headers' => $headers
        ]);

        $data['polda'] = $getPolda['data']['data'];


        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
}
