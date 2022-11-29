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
        $data["title"] = "Detail Polda";
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
        $getGakkum = guzzle_request('GET', 'ditgakkum/daily?polda_id=' . $id, [
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

        $getKamsel = guzzle_request('GET', 'ditkamsel/daily?polda_id=' . $id, [
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

        $getRegident = guzzle_request('GET', 'ditregident/daily?polda_id=' . $id, [
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
}
