
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Renpam extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('operasi/m_renpam');
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Uraian Kegiatan";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "operasi/G20/renpam_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/renpam_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/renpam_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/renpam_polres";
        } else {
            redirect(base_url('dashboard'));
        }

        $getVip = guzzle_request('GET', 'vip', [
            'headers' => $headers
        ]);
        $data['getVip'] = $getVip['data']['data'];

        $getAccount = guzzle_request('GET', 'account', [
            'headers' => $headers
        ]);
        $data['getAccount'] = $getAccount['data']['data'];
        // echo json_encode($data['getAccount']);
        // die;

        $data["category"] = "";

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function operasi()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Rencana Kegiatan Operasi - G20";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "operasi/G20/renpam_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/renpam_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/renpam_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/renpam_polres";
        } else {
            redirect(base_url('dashboard'));
        }

        $getVip = guzzle_request('GET', 'vip', [
            'headers' => $headers
        ]);
        $data['getVip'] = $getVip['data']['data'];

        $getAccount = guzzle_request('GET', 'account', [
            'headers' => $headers
        ]);
        $data['getAccount'] = $getAccount['data']['data'];
        // echo json_encode($data['getAccount']);
        // die;


        $data["category"] = "1";

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function harian()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Rencana Kegiatan Harian - G20";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "operasi/G20/renpam_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/renpam_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/renpam_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/renpam_polres";
        } else {
            redirect(base_url('dashboard'));
        }

        $getVip = guzzle_request('GET', 'vip', [
            'headers' => $headers
        ]);
        $data['getVip'] = $getVip['data']['data'];

        $getAccount = guzzle_request('GET', 'account', [
            'headers' => $headers
        ]);
        $data['getAccount'] = $getAccount['data']['data'];
        // echo json_encode($data['getAccount']);
        // die;

        $data["category"] = "2";

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_renpam->get_datatables($postData);
        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $dummy = array();

        $dummy['operation_id']    = 'VTJGc2RHVmtYMS9NRFZlT25BWWlhUUsvY1ZYVEkyeFoyRUJua3o0a1N6bz0';
        $dummy['schedule_id']    = null;
        $dummy['name_renpam']    = $input['instruksi'];
        $dummy['type_renpam']    = $input['subjek'];
        $dummy['category_renpam']    = $input['category_renpam'];

        $dummy['date']    = $input['date'];
        $dummy['start_time']    = $input['startTime'];
        // $dummy ['end_time']	= $input['endTime']; 
        $dummy['accounts']    = json_encode($input['id_account']);

        // echo json_encode($input['id_vip']);
        // die; 

        if (isset($input['id_vip'])) {
            $dummy['vips']    = json_encode($input['id_vip']);
        }

        $dummy['total_vehicle']    = $input['total_vehicle'];
        $dummy['title_start']    = $input['title_start'];
        $dummy['title_end']    = $input['title_end'];

        $dummy['route']    = $input['ruteawal'];
        $dummy['note_kakor'] = $input['note_kakor'];
        $dummy['route_alternatif_1']    = $input['coordsAlternative1'];
        $dummy['route_alternatif_2']    = $input['coordsAlternative2'];
        $dummy['route_masyarakat']    = $input['coordsAlternative3'];
        $dummy['route_umum']    = $input['coordsAlternative4'];

        


        $data = guzzle_request('POST', 'renpam/add', [
            'form_params' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function storeFromJadwal()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $dummy = array();

        $dummy['operation_id']    = 'VTJGc2RHVmtYMS9NRFZlT25BWWlhUUsvY1ZYVEkyeFoyRUJua3o0a1N6bz0';
        $dummy['schedule_id']    = $input['schedule_id'];
        $dummy['name_renpam']    = $input['instruksiR'];
        $dummy['type_renpam']    = $input['subjekR'];
        $dummy['category_renpam']    = $input['category_renpam'];
        $dummy['date']    = $input['dateR'];
        $dummy['start_time']    = $input['startTimeR'];
        // $dummy ['end_time']	= $input['endTimeR']; 
        $dummy['accounts']    = json_encode($input['id_accountR']);

        if (isset($input['id_vipR'])) {
            $dummy['vips']    = json_encode($input['id_vipR']);
        }

        $dummy['total_vehicle']    = $input['total_vehicle'];
        $dummy['title_start']    = $input['title_start'];
        $dummy['title_end']    = $input['title_end'];
        $dummy['route']    = $input['ruteawalR'];
        $dummy['note_kakor'] = $input['note_kakor'];
        // $dummy ['route_alternatif_1']	= $input['coordsAlternative1']; 
        // $dummy ['route_alternatif_2']	= $input['coordsAlternative2']; 
        $dummy['route_masyarakat']    = $input['coordsAlternative3'];
        $dummy['route_umum']    = $input['coordsAlternative4'];
        // echo json_encode($dummy);
        // die; 


        $data = guzzle_request('POST', 'renpam/add', [
            'form_params' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function storeEditNoteKakor()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $dummy = array();

        // $dummy ['operation_id']	= 'VTJGc2RHVmtYMS9NRFZlT25BWWlhUUsvY1ZYVEkyeFoyRUJua3o0a1N6bz0'; 
        // $dummy ['schedule_id']	= 'VTJGc2RHVmtYMTllR0hHVUZEZVdxY3pRZFNxTXZjLzRLQkRUNEQ0RTVHMD0'; 
        // $dummy ['name_renpam']	= $input['instruksi']; 
        // $dummy ['type_renpam']	= $input['subjek']; 
        // $dummy ['date']	= $input['date']; 
        // $dummy ['start_time']	= $input['startTime']; 
        // $dummy ['end_time']	= $input['endTime']; 
        $dummy ['accounts']	= $input['accountsNoteKakor']; 
        // $dummy ['vips']	= json_encode($input['id_vip']); 
        // $dummy ['route']	= $input['ruteawal']; 
        // $dummy ['route_alternatif_1']	= $input['coordsAlternative1']; 
        // $dummy ['route_alternatif_2']	= $input['coordsAlternative2']; 
        // $dummy ['route_masyarakat']	= $input['coordsAlternative3']; 
        // $dummy ['route_umum']	= $input['coordsAlternative4']; 
        $dummy['note_kakor'] = $input['note_kakor'];

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('PUT', 'renpam/instruksiKakor/' . $input['id'] . '', [
            'form_params' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil edit data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal edit data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function Detail($id)
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Operasi";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "operasi/G20/detail_renpam_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/detail_renpam_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/detail_renpam_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/detail_renpam_polres";
        } else {
            redirect(base_url('dashboard'));
        }

        $getDetail = guzzle_request('GET', 'renpam/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'];
        $data['getRoute'] = $getDetail['data']['data']['route'];
        // echo json_encode($data['getRoute']);
        // die;

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Edit($id)
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Operasi";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU' || $this->session->userdata['role'] == 'Operator') {
            $page_content["page"] = "operasi/G20/edit_renpam_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "operasi/Korlantas/edit_renpam_korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "operasi/Kapolda/edit_renpam_kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "operasi/Polres/edit_renpam_polres";
        } else {
            redirect(base_url('dashboard'));
        }

        $getDetail = guzzle_request('GET', 'renpam/getId/' . $id . '', [
            'headers' => $headers
        ]);
        $data['getDetail'] = $getDetail['data'];

        $getVip = guzzle_request('GET', 'vip', [
            'headers' => $headers
        ]);
        $data['getVip'] = $getVip['data']['data'];

        $getAccount = guzzle_request('GET', 'account', [
            'headers' => $headers
        ]);
        $data['getAccount'] = $getAccount['data']['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function storeEdit()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $dummy = array();

        // $dummy ['operation_id']	= 'VTJGc2RHVmtYMS9NRFZlT25BWWlhUUsvY1ZYVEkyeFoyRUJua3o0a1N6bz0'; 
        // $dummy ['schedule_id']	= 'VTJGc2RHVmtYMTllR0hHVUZEZVdxY3pRZFNxTXZjLzRLQkRUNEQ0RTVHMD0'; 
        $dummy['name_renpam']    = $input['instruksi'];
        $dummy['type_renpam']    = $input['subjek'];
        $dummy['date']    = $input['date'];
        $dummy['start_time']    = $input['startTime'];
        // $dummy ['end_time']	= $input['endTime']; 
        $dummy['accounts']    = json_encode($input['id_account']);

        if (isset($input['id_vip'])) {
            $dummy['vips']    = json_encode($input['id_vip']);
        }

        $dummy['total_vehicle']    = $input['total_vehicle'];
        $dummy['title_start']    = $input['title_start'];
        $dummy['title_end']    = $input['title_end'];
        $dummy['route']    = $input['ruteawal'];
        $dummy['route_alternatif_1']    = $input['coordsAlternative1'];
        $dummy['route_alternatif_2']    = $input['coordsAlternative2'];
        $dummy['route_masyarakat']    = $input['coordsAlternative3'];
        $dummy['route_umum']    = $input['coordsAlternative4'];
        $dummy['note_kakor'] = $input['note_kakor'];

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('PUT', 'renpam/edit/' . $input['id'] . '', [
            'form_params' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil edit data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal edit data.',
                'data' => $data
            );
        }

        echo json_encode($res);
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

        $data = guzzle_request('DELETE', 'renpam/delete', [
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
