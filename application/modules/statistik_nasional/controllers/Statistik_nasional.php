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
    public function getStatistikDivtik()
    {
        // var_dump($this->input->post());
        // die;
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input      = $this->input->post();
        // echo json_encode($input);
        // die;

        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?filter=true&start_date=' . $input['startDate'] . '&end_date=' . $input['endDate'] . '', [
            'headers' => $headers
        ]);
        $getGakkum = $getGakkum["data"];


        $totalmotor = 0;
        $totalgarlantas = 0;
        $totallakalantas = 0;
        $totalturjagwali = 0;
        for ($i = 0; $i < count($getGakkum); $i++) {
            $totalgarlantas += $getGakkum[$i]['garlantas'];
            $totallakalantas += $getGakkum[$i]['lakalantas'];
            $totalturjagwali += $getGakkum[$i]['turjagwali'];
        }
        $data = [
            'lakalantas' =>  number_format($totallakalantas, 0, '', '.'),
            'garlantas' => number_format($totalgarlantas, 0, '', '.'),
            'turjagwali' => number_format($totalturjagwali, 0, '', '.'),
            'motor' =>  number_format($totalmotor, 0, '', '.'),



        ];

        echo json_encode($data);
    }
    public function getStatistik()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input      = $this->input->post();
        // echo json_encode($input);
        // die;

        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?filter=true&start_date=' . $input['startDate'] . '&end_date=' . $input['endDate'] . '', [
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

        $getKamsel = guzzle_request('GET', 'ditkamsel/daily?filter=true&start_date=' . $input['startDate'] . '&end_date=' . $input['endDate'] . '', [
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

        $getRegident = guzzle_request('GET', 'ditregident/daily?filter=true&start_date=' . $input['startDate'] . '&end_date=' . $input['endDate'] . '', [
            'headers' => $headers
        ]);
        $getRegident = $getRegident["data"];


        $totalbpkb = 0;
        $totalstnk = 0;
        $totalsim = 0;
        $totalsbst = 0;
        $totalranmor = 0;
        for ($i = 0; $i < count($getRegident); $i++) {
            $totalbpkb += $getRegident[$i]['bpkb'];
            $totalstnk += $getRegident[$i]['stnk'];
            $totalsim += $getRegident[$i]['sim'];
            $totalranmor += $getRegident[$i]['ranmor'];
            $totalsbst += 0;
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

        if ($input['type'] == 'day') {
            $date1 = date('Y-m-d', strtotime("-1 days"));
        } else if ($input['type'] == 'month') {
            $date1 = date('Y-m-d', strtotime("-1 month"));
        } else if ($input['type'] == 'year') {
            $date1 = date('Y-m-d', strtotime("-1 year"));
        }

        $getCompareDitgakum = guzzle_request('GET', 'ditgakkum/date?type=' . $input['type'] . '&filter=true&start_date=' . $date1 . '&end_date=' . $input['endDate'] . '', [
            'headers' => $headers
        ]);
        $getCompareDitgakum = $getCompareDitgakum["data"];

        $arrLaka = array_map(function ($value) {
            return intval($value['lakalantas']);
        }, $getCompareDitgakum);
        // $nilaiCompareLaka = max($arrLaka);
        if ($arrLaka[0] > $arrLaka[1]) {
            $findCompareLaka = '<i class="fa fas fa-arrow-circle-down"></i>';
        } else if ($arrLaka[0] == 0 && $arrLaka[1] == 0) {
            $findCompareLaka = '<i class="fa fas fa-minus-circle"></i>';
        } else {
            $findCompareLaka = '<i class="fa fas fa-arrow-alt-circle-up"></i>';
        }

        $arrgarla = array_map(function ($value) {
            return intval($value['garlantas']);
        }, $getCompareDitgakum);
        // $nilaiComparegarla = max($arrgarla);
        if ($arrgarla[0] > $arrgarla[1]) {
            $findComparegarla = '<i class="fa fas fa-arrow-circle-down"></i>';
        } else if ($arrgarla[0] == 0 && $arrgarla[1] == 0) {
            $findComparegarla = '<i class="fa fas fa-minus-circle"></i>';
        } else {
            $findComparegarla = '<i class="fa fas fa-arrow-alt-circle-up"></i>';
        }

        $arrturja = array_map(function ($value) {
            return intval($value['turjagwali']);
        }, $getCompareDitgakum);
        // $nilaiCompareturja = max($arrturja);
        if ($arrturja[0] > $arrturja[1]) {
            $findCompareturja = '<i class="fa fas fa-arrow-circle-down"></i>';
        } else if ($arrturja[0] == 0 && $arrturja[1] == 0) {
            $findCompareturja = '<i class="fa fas fa-minus-circle"></i>';
        } else {
            $findCompareturja = '<i class="fa fas fa-arrow-alt-circle-up"></i>';
        }

        $getCompareDitkamsel = guzzle_request('GET', 'ditkamsel/date?type=' . $input['type'] . '&filter=true&start_date=' . $date1 . '&end_date=' . $input['endDate'] . '', [
            'headers' => $headers
        ]);
        $getCompareDitkamsel = $getCompareDitkamsel["data"];

        $arrdikmas = array_map(function ($value) {
            return intval($value['dikmaslantas']);
        }, $getCompareDitkamsel);
        // $nilaiComparedikmas = max($arrdikmas);
        if ($arrdikmas[0] > $arrdikmas[1]) {
            $findComparedikmas = '<i class="fa fas fa-arrow-circle-down"></i>';
        } else if ($arrdikmas[0] == 0 && $arrdikmas[1] == 0) {
            $findComparedikmas = '<i class="fa fas fa-minus-circle"></i>';
        } else {
            $findComparedikmas = '<i class="fa fas fa-arrow-alt-circle-up"></i>';
        }


        $getCompareDitregident = guzzle_request('GET', 'ditregident/date?type=' . $input['type'] . '&filter=true&start_date=' . $date1 . '&end_date=' . $input['endDate'] . '', [
            'headers' => $headers
        ]);
        $getCompareDitregident = $getCompareDitregident["data"];

        $arrbpkb = array_map(function ($value) {
            return intval($value['bpkb']);
        }, $getCompareDitregident);
        // $nilaiComparebpkb = max($arrbpkb);
        if ($arrbpkb[0] > $arrbpkb[1]) {
            $findComparebpkb = '<i class="fa fas fa-arrow-circle-down"></i>';
        } else if ($arrbpkb[0] == 0 && $arrbpkb[1] == 0) {
            $findComparebpkb = '<i class="fa fas fa-minus-circle"></i>';
        } else {
            $findComparebpkb = '<i class="fa fas fa-arrow-alt-circle-up"></i>';
        }

        $arrstnk = array_map(function ($value) {
            return intval($value['stnk']);
        }, $getCompareDitregident);
        // $nilaiComparestnk = max($arrstnk);
        if ($arrstnk[0] > $arrstnk[1]) {
            $findComparestnk = '<i class="fa fas fa-arrow-circle-down"></i>';
        } else if ($arrstnk[0] == 0 && $arrstnk[1] == 0) {
            $findComparestnk = '<i class="fa fas fa-minus-circle"></i>';
        } else {
            $findComparestnk = '<i class="fa fas fa-arrow-alt-circle-up"></i>';
        }

        $arrsim = array_map(function ($value) {
            return intval($value['sim']);
        }, $getCompareDitregident);
        // $nilaiComparesim = max($arrsim);
        if ($arrsim[0] > $arrsim[1]) {
            $findComparesim = '<i class="fa fas fa-arrow-circle-down"></i>';
        } else if ($arrsim[0] == 0 && $arrsim[1] == 0) {
            $findComparesim = '<i class="fa fas fa-minus-circle"></i>';
        } else {
            $findComparesim = '<i class="fa fas fa-arrow-alt-circle-up"></i>';
        }

        $arrranmor = array_map(function ($value) {
            return intval($value['ranmor']);
        }, $getCompareDitregident);
        // $nilaiCompareranmor = max($arrranmor);
        if ($arrranmor[0] > $arrranmor[1]) {
            $findCompareranmor = '<i class="fa fas fa-arrow-circle-down"></i>';
        } else if ($arrranmor[0] == 0 && $arrranmor[1] == 0) {
            $findCompareranmor = '<i class="fa fas fa-minus-circle"></i>';
        } else {
            $findCompareranmor = '<i class="fa fas fa-arrow-alt-circle-up"></i>';
        }

        $data = [
            'date' => $date1,
            'compare' => [
                'lakalantas' => $findCompareLaka,
                'garlantas' => $findComparegarla,
                'turjagwali' => $findCompareturja,
                'walpjr' =>  '',

                'bpkb' => $findComparebpkb,
                'stnk' => $findComparestnk,
                'sim' => $findComparesim,
                'ranmor' => $findCompareranmor,
                'sbst' => '',

                'dikmas' => $findComparedikmas,
                'jemenopsrek' => '',
                'cegah' => '',
                'audit' => '',

                'subrenop' => '',
                'subdalops' => '',
                'subkerma' => '',
                'subanev' => '',

            ],
            'lakalantas' =>  number_format($totallakalantas, 0, '', '.'),
            'garlantas' => number_format($totalgarlantas, 0, '', '.'),
            'turjagwali' => number_format($totalturjagwali, 0, '', '.'),
            'walpjr' =>  number_format($totalwalpjr, 0, '', '.'),

            'bpkb' => number_format($totalbpkb, 0, '', '.'),
            'stnk' =>  number_format($totalstnk, 0, '', '.'),
            'sim' =>  number_format($totalsim, 0, '', '.'),
            'ranmor' => number_format($totalranmor, 0, '', '.'),
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

    public function getDetLakaLantas()
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
    public function Ranmor()
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Ranmor Nasional";
        $page_content["page"] = "statistik_nasional/statistik_ranmor_view";
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
