
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harian extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("laporan/m_harian");
    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Laporan Harian";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "laporan/G20/harian";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "laporan/Korlantas/harian_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "laporan/Kapolda/harian_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "laporan/Polres/harian_polres";
        } else {
            redirect(base_url('dashboard'));
        }




        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }


    
    public function getDayReport()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ]; 
        $input = $this->input->post(); 
 
        $url = 'day_report?serverSide=True&length=1000&start=1&start_date='.$input['start_date'].'&end_date='.$input['end_date'].'';
        $getData = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getData'] = $getData['data'];

        // $data['getData'] = $getData['data']['data'];
        // if(count($data['getData']) > 0){
        //     $t_report_kriminal = array_map (function($value){
        //         return intval($value['t_report_kriminal']);
        //     } , $data['getData']);


        //     $res = array(
        //         'status' => true,
        //         'message' => 'Data berhasil',
        //         'data' => $t_report_kriminal
        //     );
        // }else{
        //     $res = array(
        //         'status' => false,
        //         'message' => 'Data gagal',
        //         'data' => null
        //     );
        // }

        echo json_encode($data['getData']);
    }

    public function getDayReportIrsms(){
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ]; 
        $input = $this->input->post(); 
        // .$input['start_date']
        $url = 'day_report/getDateMonth?date=2022-11-05';
        $getData = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getData'] = $getData['data'];

        echo json_encode($data['getData']);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_harian->get_datatables($postData);
        echo json_encode($data);
    }

    public function Detail($id)
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Laporan Harian";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "laporan/G20/detail_harian";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "laporan/Korlantas/detail_harian_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "laporan/Kapolda/detail_harian_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "laporan/Polres/detail_harian_polres";
        } else {
            redirect(base_url('dashboard'));
        }



        $getDetail = guzzle_request('GET', 'report/getLaporanById/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'][0];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function delete()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $input      = $this->input->post();
        $dummy = [
            [
                'name' => 'id',
                'contents' => $input['id'],
            ]
        ];

        $data = guzzle_request('DELETE', 'report/delete', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }
}
