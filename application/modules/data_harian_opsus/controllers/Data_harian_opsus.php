<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_harian_opsus extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("data_harian_opsus/M_data_harian_opsus");

        // $this->load->model("data_harian_opsus/m_data_harian_opsus");
    }

    public function index()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';

        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Kakor/data_harian_opsus_view";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Ditkamsel/data_harian_opsus_view";
        } else if ($this->session->userdata['role'] == 'Ditgakkum') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Ditgakkum/data_harian_opsus_view";
        } else if ($this->session->userdata['role'] == 'Ditregident') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Ditregident/data_harian_opsus_view";
        } else if ($this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Bagops/data_harian_opsus_view";
        } else if ($this->session->userdata['role'] == 'KaBagRenmin') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Bagrenmin/data_harian_opsus_view";
        } else if ($this->session->userdata['role'] == 'KaBagTIK') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Bagtik/data_harian_opsus_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Kapolda/data_harian_opsus_view";
        } else if ($this->session->userdata['role'] == 'Kapolres') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Kapolres/data_harian_opsus_view";
        }

        $getPolda = guzzle_request('GET', 'polda', [
            'headers' => [
                'Authorization' => $headers
            ]
        ]);
        $data['getPolda'] = $getPolda['data']['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->M_data_harian_opsus->get_datatables($postData);
        echo json_encode($data);
    }

    public function Detail($id)
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Laporan Harian";


        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Kakor/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Ditkamsel/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Ditgakkum') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Ditgakkum/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Ditregident') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Ditregident/detail_data_view";
        } else if ($this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Bagops/detail_data_view";
        } else if ($this->session->userdata['role'] == 'KaBagRenmin') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Bagrenmin/detail_data_view";
        } else if ($this->session->userdata['role'] == 'KaBagTIK') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Bagtik/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Kapolda/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Kapolres') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Kapolres/detail_data_view";
        }

        $getDetail = guzzle_request('GET', 'operation-profile/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'];

        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function detaildata()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';

        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Kakor/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Ditkamsel/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Ditgakkum') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Ditgakkum/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Ditregident') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Ditregident/detail_data_view";
        } else if ($this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Bagops/detail_data_view";
        } else if ($this->session->userdata['role'] == 'KaBagRenmin') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Bagrenmin/detail_data_view";
        } else if ($this->session->userdata['role'] == 'KaBagTIK') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Bagtik/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Kapolda/detail_data_view";
        } else if ($this->session->userdata['role'] == 'Kapolres') {
            $page_content["title"] = "Data Harian Operasi Khusus";
            $page_content["page"] = "data_harian_opsus/Kapolres/detail_data_view";
        }

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }
}
