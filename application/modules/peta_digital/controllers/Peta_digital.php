<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta_digital extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		// $this->load->model("masterdata/m_fasum");
    }

    public function index()
    {
		$headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = ''; 

        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "Peta Digital";
            $page_content["page"] = "peta_digital/Kakor/peta_digital_view";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["title"] = "Peta Digital";
            $page_content["page"] = "peta_digital/Ditkamsel/peta_digital_view";
        } else if ($this->session->userdata['role'] == 'Ditgakkum') {
            $page_content["title"] = "Peta Digital";
            $page_content["page"] = "peta_digital/Ditgakkum/peta_digital_view";
        } else if ($this->session->userdata['role'] == 'Ditregident') {
            $page_content["title"] = "Peta Digital";
            $page_content["page"] = "peta_digital/Ditregident/peta_digital_view";
		} else if ($this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "Peta Digital";
            $page_content["page"] = "peta_digital/Bagops/peta_digital_view";
		} else if ($this->session->userdata['role'] == 'KaBagRenmin') {
            $page_content["title"] = "Peta Digital";
            $page_content["page"] = "peta_digital/Bagrenmin/peta_digital_view";
		} else if ($this->session->userdata['role'] == 'KaBagTIK') {
            $page_content["title"] = "Peta Digital";
            $page_content["page"] = "peta_digital/Bagtik/peta_digital_view";
		} else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["title"] = "Peta Digital";
            $page_content["page"] = "peta_digital/Kapolda/peta_digital_view";
		} else if ($this->session->userdata['role'] == 'Kapolres') {
            $page_content["title"] = "Peta Digital";
            $page_content["page"] = "peta_digital/Kapolres/peta_digital_view";
        }

        // var_dump($getCategory);
        // die;

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

	public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_fasum->get_datatables($postData);
		// var_dump($data);
		// die;
        echo json_encode($data);
    }

    public function detailFasum()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_fasum');

        $getDetail = guzzle_request('GET', 'fasum/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }

}
