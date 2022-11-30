<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_nasional extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('berita/m_berita');
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Statistik Nasional";
        $page_content["page"] = "statistik_nasional/statistik_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_berita->get_datatables($postData);
        echo json_encode($data);
    }


    public function getStatistik()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $getGakkum = guzzle_request('GET', 'ditgakkum/daily', [
            'headers' => $headers
        ]);
        $getGakkum = $getGakkum["data"];


        $totalwalpjr = 72;
        $totalgarlantas = 0;
        $totallakalantas = 0;
        $totalturjagwali = 0;
        for ($i = 0; $i < count($getGakkum); $i++) {
            $totalgarlantas += $getGakkum[$i]['garlantas'];
            $totallakalantas += $getGakkum[$i]['lakalantas'];
            $totalturjagwali += $getGakkum[$i]['turjagwali'];
        }

        $getKamsel = guzzle_request('GET', 'ditkamsel/daily', [
            'headers' => $headers
        ]);
        $getKamsel = $getKamsel["data"];

        $totaldikmas = 0;
        $totaljemenopsrek = 0;
        $totalcegah = 0;
        $totalaudit = 0;
        for ($i = 0; $i < count($getKamsel); $i++) {
            $totaldikmas += $getKamsel[$i]['dikmaslantas'];
            // $totaljemenopsrek += $getKamsel[$i]['jemenopsrek'];
            // $totalcegah += $getKamsel[$i]['cegah'];
            // $totalaudit += $getKamsel[$i]['audit'];
        }

        $getRegident = guzzle_request('GET', 'ditregident/daily', [
            'headers' => $headers
        ]);
        $getRegident = $getRegident["data"];

        $totalbpkb = 0;
        $totalstnk = 0;
        $totalsim = 0;
        $totalsbst = 0;
        for ($i = 0; $i < count($getRegident); $i++) {
            $totalbpkb += $getRegident[$i]['bpkb'];
            $totalstnk += $getRegident[$i]['stnk'];
            $totalsim += $getRegident[$i]['sim'];
            // $totalsbst += $getRegident[$i]['sbst'];
        }

        // $getOps = guzzle_request('GET', 'bagops/daily', [
        //     'headers' => $headers
        // ]);
        // $getOps = $getOps["data"];

        $totalsubrenop = 0;
        $totalsubdalops = 0;
        $totalsubkerma = 0;
        $totalsubanev = 0;
        // for ($i = 0; $i < count($getOps); $i++) {
        //     $totalsubrenop += $getOps[$i]['subrenop'];
        //     $totalsubdalops += $getOps[$i]['subdalops'];
        //     $totalsubkerma += $getOps[$i]['subkerma'];
        // $totalsubanev += $getOps[$i]['subanev'];
        // }


        $data = [
            'lakalantas' =>  number_format($totallakalantas, 0, '', '.'),
            'garlantas' => number_format($totalgarlantas, 0, '', '.'),
            'turjagwali' => number_format($totalturjagwali, 0, '', '.'),
            'walpjr' =>  number_format($totalwalpjr, 0, '', '.'),

            'bpkb' => number_format($totalbpkb, 0, '', '.'),
            'stnk' =>  number_format($totalstnk, 0, '', '.'),
            'sim' =>  number_format($totalsim, 0, '', '.'),
            'sbst' => number_format($totalsbst, 0, '', '.'),

            'dikmas' => number_format($totaldikmas, 0, '', '.'),
            'jemenopsrek' =>  number_format($totaljemenopsrek, 0, '', '.'),
            'cegah' =>  number_format($totalcegah, 0, '', '.'),
            'audit' => number_format($totalaudit, 0, '', '.'),

            'subrenop' => number_format($totalsubrenop, 0, '', '.'),
            'subdalops' =>  number_format($totalsubdalops, 0, '', '.'),
            'subkerma' =>  number_format($totalsubkerma, 0, '', '.'),
            'subanev' => number_format($totalsubanev, 0, '', '.'),
        ];

        echo json_encode($data);
    }

    public function getGarlantas()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $data['garlantas'] = '123';
        // $date = date("Y-m-d");
        // $url = 'garlantas/daily?date=' . $date . '&topPolda=true&limit=10';
        $url = 'garlantas/daily?topPolda=true&limit=10';

        $getGarlantas = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $data['garlantas'] = $getGarlantas["data"]["rows"];
        echo json_encode($data['garlantas']);
    }

    public function getLakaLantas()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $data['lakalantas'] = '123';
        // $date = date("Y-m-d");
        // $url = 'laka_lantas/daily?date=' . $date . '&topPolda=true&limit=10';
        $url = 'laka_lantas/daily?topPolda=true&limit=10';

        $getLakalantas = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $data['lakalantas'] = $getLakalantas["data"]["rows"];
        echo json_encode($data['lakalantas']);
    }

    public function getTurjagwali()
    {
        // Turjagwali
        // $date = date("Y-m-d");
        $turjagwali = guzzle_request('GET', 'turjagwali/daily?topPolda=true&limit=10', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        // var_dump($turjagwali);
        // die;
        $poldaName = array();
        $polda_pengawalan = array();
        $polda_penjagaan = array();
        $polda_pengaturan = array();
        $polda_patroli = array();
        $polda_jumlah = array();
        foreach ($turjagwali['data']['rows'] as $key) {
            $row[] = array();
            $poldaName[] = $key['name_polda'];
            $polda_pengawalan[] = $key['pengawalan'];
            $polda_penjagaan[] = $key['penjagaan'];
            $polda_pengaturan[] = $key['pengaturan'];
            $polda_patroli[] = $key['patroli'];
            $polda_jumlah[] = $key['total'];
        }

        $data['turjagwali'] = [
            'polda_name' => $poldaName,
            'polda_pengawalan' => $polda_pengawalan,
            'polda_penjagaan' => $polda_penjagaan,
            'polda_pengaturan' => $polda_pengaturan,
            'polda_patroli' => $polda_patroli,
            'polda_jumlah' => $polda_jumlah
        ];
        echo json_encode($data['turjagwali']);
    }

    public function Lakalantas()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Kecelakaan Nasional";
        $page_content["page"] = "statistik_nasional/statistik_laka_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function Garlantas()
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Pelanggaran Nasional";
        $page_content["page"] = "statistik_nasional/statistik_langgar_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function Turjagwali()
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Turjagwali Nasional";
        $page_content["page"] = "statistik_nasional/statistik_turjagwali_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function Walpjr()
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data WAL & PJR Nasional";
        $page_content["page"] = "statistik_nasional/statistik_walpjr_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Sim()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Sim Nasional";
        $page_content["page"] = "statistik_nasional/statistik_sim_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Bpkb()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Bpkb Nasional";
        $page_content["page"] = "statistik_nasional/statistik_bpkb_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Stnk()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Stnk Nasional";
        $page_content["page"] = "statistik_nasional/statistik_stnk_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Sbst()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Fasmat Sbst Nasional";
        $page_content["page"] = "statistik_nasional/statistik_sbst_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Dikmas()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Dikmaslantas Nasional";
        $page_content["page"] = "statistik_nasional/statistik_dikmaslantas_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Jemenopsrek()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Jemenopsrek Nasional";
        $page_content["page"] = "statistik_nasional/statistik_jemenopsrek_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Cegah()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Cegah Nasional";
        $page_content["page"] = "statistik_nasional/statistik_cegah_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Audit()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Audit Nasional";
        $page_content["page"] = "statistik_nasional/statistik_audit_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Subrenop()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Subbag Renop Nasional";
        $page_content["page"] = "statistik_nasional/statistik_renop_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Subdalops()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Subbag Dalops Nasional";
        $page_content["page"] = "statistik_nasional/statistik_dalops_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Subkerma()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Subbag Kerma Nasional";
        $page_content["page"] = "statistik_nasional/statistik_kerma_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Subanev()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Subbag Anev Nasional";
        $page_content["page"] = "statistik_nasional/statistik_anev_view";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
}
