<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polda_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("executive/M_detail_polda");
    }

    public function index($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Detail Polda";
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
        $data['polda'] = $this->M_detail_polda->get_Polda();
        $data['poldaid'] = $this->M_detail_polda->get_Poldaid($id);
        $data["id"] = $id;
        $page_content["data"] = $data;
        $page_content["page"] = "executive/polda/detail_polda_view";
        $this->templates->loadTemplate($page_content);
    }


    public function getDetailPolda()
    {
        $id = $this->input->post('id');
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'polda/getId/' . $id;
        $getPolda = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $urlall = 'polda';
        $getPoldaall = guzzle_request('GET', $urlall, [
            'headers' => $headers
        ]);
        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getGakkum = $getGakkum["data"];

        $totalgarlantas = 0;
        $totallakalantas = 0;
        $totalturjagwali = 0;
        for ($i = 0; $i < count($getGakkum); $i++) {
            $totalgarlantas += $getGakkum[$i]['garlantas'];
            $totallakalantas += $getGakkum[$i]['lakalantas'];
            $totalturjagwali += $getGakkum[$i]['turjagwali'];
        }

        $getRanmor = guzzle_request('GET', 'ranmor/daily?polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getRanmor = $getRanmor["data"]["rows"];

        $totalmotor = 0;
        for ($i = 0; $i < count($getRanmor); $i++) {
            $totalmotor += $getRanmor[$i]['sepeda_motor'];
        }

        // $getTurjagwali = guzzle_request('GET', 'turjagwali/daily?polda_id=' . $id, [
        //     'headers' => $headers
        // ]);
        // $getTurjagwali = $getTurjagwali["data"]["rows"];

        // $totalsturjagwali = 0;
        // for ($i = 0; $i < count($getTurjagwali); $i++) {
        //     $totalsturjagwali += $getTurjagwali[$i]['total'];
        // }


        $data = [
            'polda' => $getPolda['data']['data'],
            'poldaall' => $getPoldaall['data']['data'],
            'garlantas' => number_format($totalgarlantas, 0, '', '.'),
            'lakalantas' => number_format($totallakalantas, 0, '', '.'),
            'motor' => number_format($totalmotor, 0, '', '.'),
            'turjagwali' => number_format($totalturjagwali, 0, '', '.'),
        ];
        echo json_encode($data);
    }

    public function getDetailPolda_filter()
    {
        $id = $this->input->post('id');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $search = '';



        if ($start_date != null || $end_date != null) {
            $search = 'filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '&';
        }

        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'polda/getId/' . $id;
        $getPolda = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);


        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?' . $search . 'polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getGakkum = $getGakkum["data"];


        $totalgarlantas = 0;
        $totallakalantas = 0;
        for ($i = 0; $i < count($getGakkum); $i++) {
            $totalgarlantas += $getGakkum[$i]['garlantas'];
            $totallakalantas += $getGakkum[$i]['lakalantas'];
        }

        $getRanmor = guzzle_request('GET', 'ranmor/daily?' . $search . 'polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getRanmor = $getRanmor["data"]["rows"];

        $totalmotor = 0;
        for ($i = 0; $i < count($getRanmor); $i++) {
            $totalmotor += $getRanmor[$i]['sepeda_motor'];
        }

        $getSim = guzzle_request('GET', 'sim/daily?' . $search . 'polda_id=' . $id, [
            'headers' => $headers
        ]);
        $getSim = $getSim["data"]["rows"];

        $totalsim = 0;
        for ($i = 0; $i < count($getSim); $i++) {
            $totalsim += $getSim[$i]['total'];
        }


        $data = [
            'polda' => $getPolda['data']['data'],
            'garlantas' => number_format($totalgarlantas, 0, '', '.'),
            'lakalantas' => number_format($totallakalantas, 0, '', '.'),
            'motor' => number_format($totalmotor, 0, '', '.'),
            'sim' => number_format($totalsim, 0, '', '.'),
        ];
        echo json_encode($data);
    }

    public function getChartDitgakkum()
    {
        $title = 'DATA DITGAKKUM POLDA';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        if ($filter == 1) {
            if ($start_date == '' || $end_date == '') {
                $start_date = date('Y-m-d', strtotime('first day of january this year'));
                $end_date = date('Y-m-d', strtotime('last day of december this year'));
                $type = 'month';
            } else {
                $type = 'day';
            }
        } else {
            $type = 'month';
        }
        $filterbaru = [
            'filter' => true,
            'type' => $type,
            'id' => $this->input->post('id'),
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_detail_polda->getDitgakkum($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getChartDitkamsel()
    {
        $title = 'DATA DITKAMSEL POLDA';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        if ($filter == 1) {
            if ($start_date == '' || $end_date == '') {
                $start_date = date('Y-m-d', strtotime('first day of january this year'));
                $end_date = date('Y-m-d', strtotime('last day of december this year'));
                $type = 'month';
            } else {
                $type = 'day';
            }
        } else {
            $type = 'month';
        }
        $filterbaru = [
            'filter' => true,
            'type' => $type,
            'id' => $this->input->post('id'),
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_detail_polda->getDitkamsel($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getChartDitregident()
    {
        $title = 'DATA DITREGIDENT POLDA';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        if ($filter == 1) {
            if ($start_date == '' || $end_date == '') {
                $start_date = date('Y-m-d', strtotime('first day of january this year'));
                $end_date = date('Y-m-d', strtotime('last day of december this year'));
                $type = 'month';
            } else {
                $type = 'day';
            }
        } else {
            $type = 'month';
        }
        $filterbaru = [
            'filter' => true,
            'type' => $type,
            'id' => $this->input->post('id'),
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_detail_polda->getDitregident($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function statistik_polda($id)
    {



        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Statistik Polda";
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
        $data['poldaid'] = $this->M_detail_polda->get_Poldaid($id);
        $data["id"] = $id;
        $page_content["data"] = $data;
        $page_content["page"] = "executive/polda/statistik_polda_view";
        $this->templates->loadTemplate($page_content);
    }

    public function getStatistik($id)
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $input      = $this->input->post();
        // echo json_encode($input);
        // die;

        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?polda_id=' . $id . 'filter=true&start_date=' . $input['startDate'] . '&end_date=' . $input['endDate'] . '', [
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

        $getKamsel = guzzle_request('GET', 'ditkamsel/daily?polda_id=' . $id . 'filter=true&start_date=' . $input['startDate'] . '&end_date=' . $input['endDate'] . '', [
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

        $getRegident = guzzle_request('GET', 'ditregident/daily?polda_id=' . $id . 'filter=true&start_date=' . $input['startDate'] . '&end_date=' . $input['endDate'] . '', [
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

        if ($input['type'] == 'day') {
            $date1 = date('Y-m-d', strtotime("-1 days"));
        } else if ($input['type'] == 'month') {
            $date1 = date('Y-m-d', strtotime("-1 month"));
        } else if ($input['type'] == 'year') {
            $date1 = date('Y-m-d', strtotime("-1 year"));
        }

        $getCompareDitgakum = guzzle_request('GET', 'ditgakkum/date?polda_id=' . $id . '&type=' . $input['type'] . '&filter=true&start_date=' . $date1 . '&end_date=' . $input['endDate'] . '', [
            'headers' => $headers
        ]);
        $getCompareDitgakum = $getCompareDitgakum["data"];

        // var_dump('ditgakkum/date?polda_id=' . $id . 'type=' . $input['type'] . '&filter=true&start_date=' . $date1 . '&end_date=' . $input['endDate'] . '.');
        // die;
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


        $data = [
            'date' => $date1,
            'compare' => [
                'lakalantas' => $findCompareLaka,
                'garlantas' => $findComparegarla,
                'turjagwali' => $findCompareturja,
                'walpjr' =>  '',

                'bpkb' => '',
                'stnk' => '',
                'sim' => '',
                'sbst' => '',

                'dikmas' => '',
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

    public function Lakalantas($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Kecelakaan Nasional";
        $page_content["page"] = "executive/polda/statistik_laka_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function Garlantas($id)
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Pelanggaran Nasional";
        $page_content["page"] = "executive/polda/statistik_langgar_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function Turjagwali($id)
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Turjagwali Nasional";
        $page_content["page"] = "executive/polda/statistik_turjagwali_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function Walpjr($id)
    {

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data WAL & PJR Nasional";
        $page_content["page"] = "executive/polda/statistik_walpjr_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Sim($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Sim Nasional";
        $page_content["page"] = "executive/polda/statistik_sim_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Bpkb($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Bpkb Nasional";
        $page_content["page"] = "executive/polda/statistik_bpkb_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Stnk($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Stnk Nasional";
        $page_content["page"] = "executive/polda/statistik_stnk_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Sbst($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Fasmat Sbst Nasional";
        $page_content["page"] = "executive/polda/statistik_sbst_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Dikmas($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Dikmaslantas Nasional";
        $page_content["page"] = "executive/polda/statistik_dikmaslantas_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Jemenopsrek($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Jemenopsrek Nasional";
        $page_content["page"] = "executive/polda/statistik_jemenopsrek_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Cegah($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Cegah Nasional";
        $page_content["page"] = "executive/polda/statistik_cegah_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Audit($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Audit Nasional";
        $page_content["page"] = "executive/polda/statistik_audit_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Subrenop($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Subbag Renop Nasional";
        $page_content["page"] = "executive/polda/statistik_renop_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Subdalops($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Subbag Dalops Nasional";
        $page_content["page"] = "executive/polda/statistik_dalops_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Subkerma($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Subbag Kerma Nasional";
        $page_content["page"] = "executive/polda/statistik_kerma_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
    public function Subanev($id)
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Data Subbag Anev Nasional";
        $page_content["page"] = "executive/polda/statistik_anev_view";
        // $page_content["data"] = '';
        $data["id"] = $id;
        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }
}
