<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subditregident extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_subditgakkum");
    }

    public function index($id)
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Subgakkum Polda";
        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["page"] = "ditgakkum/korlantas/subditgakkum_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditgakkum/polda/subditgakkum_view";
        }
        $data['poldaid'] = $this->M_subditgakkum->get_Poldaid($id);
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
}
