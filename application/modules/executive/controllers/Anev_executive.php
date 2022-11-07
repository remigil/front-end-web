<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anev_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        // $this->load->model("executive/M_detail_polda");
    }

    public function index()
    {
        $data["title"] = "Detail Anev";
        $this->load->view('executive/anev/detail_anev_view', $data);
    }

    
}
