<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitasumum extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model("M_fasum");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Fasilitas Umum";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "masterdata/Korlantas/fasum_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "masterdata/Kapolda/fasum_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "masterdata/Polres/fasum_view";
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

	public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->M_fasum->get_datatables($postData);
		// var_dump($data);
		// die;
        echo json_encode($data);
    }
}
