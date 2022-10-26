<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap_kecelakaan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model("M_Rekap_Kecelakaan");
    }

    public function index()
    {
		$headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
		$data["title"] = "Rekapitulasi dan grafik data Kecelakaan"; 

        if ($this->session->userdata['role'] == 'Kakorlantas') {
            $page_content["title"] = "Data Kecelakaan";

			$data['kecelakaan'] = $this->M_Rekap_Kecelakaan->kecelakaan_nasional();


            $page_content["page"] = "rekapitulasi/Kakor/rekap_kecelakaan_view";
        } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            $page_content["title"] = "Data Kecelakaan";

            $data['kecelakaan'] = $this->M_Rekap_Kecelakaan->kecelakaan_nasional();


            $page_content["page"] = "rekapitulasi/Ditkamsel/rekap_kecelakaan_view";
        } else if ($this->session->userdata['role'] == 'Ditgakkum') {
            $page_content["title"] = "Data Kecelakaan";

            $data['kecelakaan'] = $this->M_Rekap_Kecelakaan->kecelakaan_nasional();


            $page_content["page"] = "rekapitulasi/Ditgakkum/rekap_kecelakaan_view";
        } else if ($this->session->userdata['role'] == 'Ditregident') {
            $page_content["title"] = "Data Kecelakaan";

            $data['kecelakaan'] = $this->M_Rekap_Kecelakaan->kecelakaan_nasional();


            $page_content["page"] = "rekapitulasi/Ditregident/rekap_kecelakaan_view";
		} else if ($this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "Data Kecelakaan";

            $data['kecelakaan'] = $this->M_Rekap_Kecelakaan->kecelakaan_nasional();


            $page_content["page"] = "rekapitulasi/Bagops/rekap_kecelakaan_view";
		} else if ($this->session->userdata['role'] == 'KaBagRenmin') {
            $page_content["title"] = "Data Kecelakaan";

            $data['kecelakaan'] = $this->M_Rekap_Kecelakaan->kecelakaan_nasional();


            $page_content["page"] = "rekapitulasi/Bagrenmin/rekap_kecelakaan_view";
		} else if ($this->session->userdata['role'] == 'KaBagTIK') {
            $page_content["title"] = "Data Kecelakaan";
            
            $data['kecelakaan'] = $this->M_Rekap_Kecelakaan->kecelakaan_nasional();


            $page_content["page"] = "rekapitulasi/Bagtik/rekap_kecelakaan_view";
		} else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["title"] = "Data Kecelakaan";

            $data['kecelakaan'] = $this->M_Rekap_Kecelakaan->kecelakaan_nasional();


            $page_content["page"] = "rekapitulasi/Kapolda/rekap_kecelakaan_view";
		} else if ($this->session->userdata['role'] == 'Kapolres') {
            $page_content["title"] = "Data Kecelakaan";

            $data['kecelakaan'] = $this->M_Rekap_Kecelakaan->kecelakaan_nasional();

            
            $page_content["page"] = "rekapitulasi/Kapolres/rekap_kecelakaan_view";
        }

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

	public function getCategory($id){
		$headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

		$getCategory = guzzle_request('GET', 'category_fasum/getId/' .$id, [
            'headers' => $headers
        ]);

		echo json_encode($getCategory['data']['data']);
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
