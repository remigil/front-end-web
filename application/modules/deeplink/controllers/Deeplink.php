<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deeplink extends MX_Controller
{


    public function __construct()
    {
        parent::__construct(); 
    }
    public function index()
    {
        $this->load->view('deeplink/officer');
    }

    public function google()
    {
        $this->load->view('dashboard/google');
    }
}
