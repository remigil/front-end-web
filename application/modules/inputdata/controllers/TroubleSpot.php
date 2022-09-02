<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TroubleSpot extends MY_Controller
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
        $page_content["title"] = "Trouble Spot";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "inputdata/Korlantas/TroubleSpot_Korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "inputdata/Kapolda/TroubleSpotta_Kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "inputdata/Polres/TroubleSpotata_Polres";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
