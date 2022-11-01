<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polda_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model("executive/M_detail_polda");
    }

    public function index()
    {
		$headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = ''; 
		$page_content["title"] = "Detail Polda";
        $page_content["page"] = "executive/polda/detail_polda_view";

		$data['kecelakaan'] = $this->M_detail_polda->kecelakaan_nasional();

        // if ($this->session->userdata['role'] == 'Kakorlantas') {
        //     $page_content["title"] = "Detail Polda";
		//  $data['kecelakaan'] = $this->M_detail_polda->kecelakaan_nasional();
			
        //     $page_content["page"] = "executive/polda/detail_polda_view";


        // } else if ($this->session->userdata['role'] == 'Ditkamsel') {
        //     $page_content["title"] = "Data Anev";
        //     $page_content["page"] = "anev/Ditkamsel/anev_view";
        // } else if ($this->session->userdata['role'] == 'Ditgakkum') {
        //     $page_content["title"] = "Data Anev";
        //     $page_content["page"] = "anev/Ditgakkum/anev_view";
        // } else if ($this->session->userdata['role'] == 'Ditregident') {
        //     $page_content["title"] = "Data Anev";
        //     $page_content["page"] = "anev/Ditregident/anev_view";
		// } else if ($this->session->userdata['role'] == 'KaBagOps') {
        //     $page_content["title"] = "Data Anev";
        //     $page_content["page"] = "anev/Bagops/anev_view";
		// } else if ($this->session->userdata['role'] == 'KaBagRenmin') {
        //     $page_content["title"] = "Data Anev";
        //     $page_content["page"] = "anev/Bagrenmin/anev_view";
		// } else if ($this->session->userdata['role'] == 'KaBagTIK') {
        //     $page_content["title"] = "Data Anev";
        //     $page_content["page"] = "anev/Bagtik/anev_view";
		// } else if ($this->session->userdata['role'] == 'Kapolda') {
        //     $page_content["title"] = "Data Anev";
        //     $page_content["page"] = "anev/Kapolda/anev_view";
		// } else if ($this->session->userdata['role'] == 'Kapolres') {
        //     $page_content["title"] = "Data Anev";
        //     $page_content["page"] = "anev/Kapolres/anev_view";
        // }


        // $data = '';
        // var_dump($getCategory);
        // die;

        $page_content["data"] = $data;
        $this->load->view('executive/polda/detail_polda_view', $page_content);
    }


}
