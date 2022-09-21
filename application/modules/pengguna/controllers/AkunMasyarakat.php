<?php
class AkunMasyarakat extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
		$this->load->model("pengguna/m_pengguna_umum");
    }
    public function index()
    {
		$headers = [
            'Token' => $this->session->userdata['token'],    
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Manajemen Pengguna";
        $page_content["data"] = ['menu' => 'Data Akun', 'submenu' => 'Daftar Akun Umum'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "pengguna/korlantas/pengguna_umum";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "pengguna/polda/pengguna_umum";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "pengguna/polres/pengguna_umum";
        }


        $this->templates->loadTemplate($page_content);
    }

	public function serverSideTable() 
    {  
        $postData = $this->input->post();   
        $data = $this->m_pengguna_umum->get_datatables($postData);  
		echo json_encode($data); 
    }

	public function detailPenggunaUmum()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('id_pengguna_umum');

        $getDetail = guzzle_request('GET', 'society/getid/' . $id . '', [
            'headers' => $headers
        ]);
		
        $data['getDetail'] = $getDetail['data']['data'];

        echo json_encode($data['getDetail']);
    }
}
