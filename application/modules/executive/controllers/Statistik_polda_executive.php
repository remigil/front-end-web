<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_polda_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("executive/M_detail_statistik_polda");
    }

    public function getDetailStatistikLakaLantas($id)
    {
        $title = 'TOP DATA KECELAKAAN LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
                'limit' => $limit,
                'yesterday' => $yesterday
            ];
            $getdata = $this->M_detail_statistik_polda->getKecelakaanPolda($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik_polda->getKecelakaanPolda($filterbaru);
        }
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }



    // public function getLakalantasByDate()
    // {
    //     $title = 'DATA KECELAKAAN TAHUN' . date('Y') . '';
    //     $filterbaru = [
    //         'filter' => true,
    //         'start_date' => $this->input->post('start_date'),
    //         'end_date' => $this->input->post('end_date'),
    //     ];

    //     $getdata = $this->M_detail_statistik_polda->getLakaByDate($filterbaru);
    //     $data = [
    //         'data' => $getdata,
    //         'title' => $title,
    //     ];
    //     echo json_encode($data);
    // }

    // public function exportDatalakalantas()
    // {
    //     $start_date = $this->input->post('start_date');
    //     $end_date = $this->input->post('end_date');
    //     $filter = $this->input->post('filter');
    //     if ($start_date == '' && $end_date == '') {
    //         $url = 'laporan_harian/export_laphar';
    //         $lakalantasnasional = guzzle_request('GET', $url, [
    //             'headers' => [
    //                 'Authorization' => $this->session->userdata['token']
    //             ]
    //         ]);
    //         echo json_encode($lakalantasnasional);
    //     } elseif ($start_date != '' && $end_date != '') {
    //         $filterbaru = [
    //             'start_date' => $this->input->post('start_date'),
    //             'end_date' => $this->input->post('end_date'),
    //         ];
    //         $url = 'laporan_harian/export_laphar?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
    //         $lakalantasnasional = guzzle_request('GET', $url, [
    //             'headers' => [
    //                 'Authorization' => $this->session->userdata['token']
    //             ]
    //         ]);
    //         echo json_encode($lakalantasnasional);
    //     }
    // }
    // public function getTopLaka()
    // {
    //     $yesterday = $this->input->post('yesterday');
    //     $url = 'laka_lantas/daily?date=' . $yesterday . '&topPolda=true';
    //     $lakaTopPolda = guzzle_request('GET', $url, [
    //         'headers' => [
    //             'Authorization' => $this->session->userdata['token']
    //         ]
    //     ]);

    //     $data['topLaka'] = $lakaTopPolda['data']['rows'];
    //     echo json_encode($data['topLaka']);
    // }

    // public function getLakaMonth()
    // {
    //     $firstDay = $this->input->post('firstDay');
    //     $lastDay = $this->input->post('lastDay');

    //     $url = 'laka_lantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
    //     $lakaTopPolda = guzzle_request('GET', $url, [
    //         'headers' => [
    //             'Authorization' => $this->session->userdata['token']
    //         ]
    //     ]);

    //     $data['topLaka'] = $lakaTopPolda['data']['rows'];
    //     echo json_encode($data['topLaka']);
    // }

    // public function getLakaYear()
    // {
    //     $firstDay = $this->input->post('firstDay');
    //     $lastDay = $this->input->post('lastDay');

    //     $url = 'laka_lantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
    //     $lakaTopPolda = guzzle_request('GET', $url, [
    //         'headers' => [
    //             'Authorization' => $this->session->userdata['token']
    //         ]
    //     ]);

    //     $data['topLaka'] = $lakaTopPolda['data']['rows'];
    //     echo json_encode($data['topLaka']);
    // }
    public function getLineLaka($id)
    {
        $start = $this->input->post('start_date');
        $asd = explode('-', $start);
        $end = $this->input->post('end_date');
        $zxc = explode('-', $end);
        $title = 'DATA KECELAKAAN LALU LINTAS TANGGAL <span class="text-danger">' . $asd[2] . '/' . $asd[1] . '/' . $asd[0] . ' - ' . $zxc[2] . '/' . $zxc[1] . '/' . $zxc[0] . "</span>";
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik_polda->getKecelakaanPoldaDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik_polda->getKecelakaanPoldaDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    // End Laka

    // Garlantas


    public function getDetailStatistikGarlantas($id)
    {
        $title = 'TOP DATA PELANGGARAN LALU LINTAS';
        $id = $this->input->post('id');
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
                'limit' => $limit,
                'yesterday' => $yesterday
            ];
            $getdata = $this->M_detail_statistik_polda->getPelanggaranPolda($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik_polda->getPelanggaranPolda($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    // public function exportDatagarlantas()
    // {
    //     $start_date = $this->input->post('start_date');
    //     $end_date = $this->input->post('end_date');
    //     $filter = $this->input->post('filter');
    //     if ($start_date == '' && $end_date == '') {
    //         $url = 'laporan_harian/export_laphar';
    //         $garlantasnasional = guzzle_request('GET', $url, [
    //             'headers' => [
    //                 'Authorization' => $this->session->userdata['token']
    //             ]
    //         ]);
    //         echo json_encode($garlantasnasional);
    //     } elseif ($start_date != '' && $end_date != '') {
    //         $filterbaru = [
    //             'start_date' => $this->input->post('start_date'),
    //             'end_date' => $this->input->post('end_date'),
    //         ];
    //         $url = 'laporan_harian/export_laphar?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
    //         $garlantasnasional = guzzle_request('GET', $url, [
    //             'headers' => [
    //                 'Authorization' => $this->session->userdata['token']
    //             ]
    //         ]);
    //         echo json_encode($garlantasnasional);
    //     }
    // }

    // public function getTopGarlantas()
    // {
    //     $yesterday = $this->input->post('yesterday');
    //     $url = 'garlantas/daily?date=' . $yesterday . '&topPolda=true';
    //     $lakaTopPolda = guzzle_request('GET', $url, [
    //         'headers' => [
    //             'Authorization' => $this->session->userdata['token']
    //         ]
    //     ]);

    //     $data['topGarlantas'] = $lakaTopPolda['data']['rows'];
    //     echo json_encode($data['topGarlantas']);
    // }

    // public function getGarlantasMonth()
    // {
    //     $firstDay = $this->input->post('firstDay');
    //     $lastDay = $this->input->post('lastDay');

    //     $url = 'garlantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
    //     $lakaTopPolda = guzzle_request('GET', $url, [
    //         'headers' => [
    //             'Authorization' => $this->session->userdata['token']
    //         ]
    //     ]);

    //     $data['topGarlantas'] = $lakaTopPolda['data']['rows'];
    //     echo json_encode($data['topGarlantas']);
    // }

    // public function getGarlantasYear()
    // {
    //     $firstDay = $this->input->post('firstDay');
    //     $lastDay = $this->input->post('lastDay');

    //     $url = 'garlantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
    //     $lakaTopPolda = guzzle_request('GET', $url, [
    //         'headers' => [
    //             'Authorization' => $this->session->userdata['token']
    //         ]
    //     ]);

    //     $data['topGarlantas'] = $lakaTopPolda['data']['rows'];
    //     echo json_encode($data['topGarlantas']);
    // }
    public function getLineGarlantas($id)
    {
        $title = 'DATA PELANGGARAN LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getGarlantasPoldaDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getGarlantasPoldaDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
    // End Garlantas


    public function getLineBpkb($id)
    {
        $start = $this->input->post('start_date');
        $asd = explode('-', $start);
        $end = $this->input->post('end_date');
        $zxc = explode('-', $end);
        $title = 'DATA BPKB TANGGAL <span class="text-danger">' . $asd[2] . '/' . $asd[1] . '/' . $asd[0] . ' - ' . $zxc[2] . '/' . $zxc[1] . '/' . $zxc[0] . "</span>";
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik_polda->getBpkbPoldaDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik_polda->getBpkbPoldaDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getBpkbDate($id)
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'bpkb/date?polda_id=' . $id . '&type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'bpkb/date?polda_id=' . $id . '&type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'bpkb/date?polda_id=' . $id . '&type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        $thisDay = guzzle_request('GET', $url_thisDay, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisMonth = guzzle_request('GET', $url_thisMonth, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisYear = guzzle_request('GET', $url_thisYear, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $totalDay = 0;
        $totalMonth = 0;
        $totalYear = 0;

        $dbbn_1 = 0;
        $dbbn_2 = 0;
        $dmutasi_masuk = 0;
        $dmutasi_keluar = 0;
        $dperubahan_pergantian = 0;

        foreach ($thisDay['data'] as $key) {
            $dbbn_1 += $key['bbn_1'];
            $dbbn_2 += $key['bbn_2'];
            $dmutasi_masuk += $key['mutasi_masuk'];
            $dmutasi_keluar += $key['mutasi_keluar'];
            $dperubahan_pergantian += $key['perubahan_pergantian'];
        }

        $data['thisDay'] = [
            'bbn_1' => $dbbn_1,
            'bbn_2' => $dbbn_2,
            'mutasi_masuk' => $dmutasi_masuk,
            'mutasi_keluar' => $dmutasi_keluar,
            'perubahan_pergantian' => $dperubahan_pergantian,
            'date' => date("Y-m-d"),
        ];

        $mbbn_1 = 0;
        $mbbn_2 = 0;
        $mmutasi_masuk = 0;
        $mmutasi_keluar = 0;
        $mperubahan_pergantian = 0;

        foreach ($thisMonth['data'] as $key) {
            $mbbn_1 += $key['bbn_1'];
            $mbbn_2 += $key['bbn_2'];
            $mmutasi_masuk += $key['mutasi_masuk'];
            $mmutasi_keluar += $key['mutasi_keluar'];
            $mperubahan_pergantian += $key['perubahan_pergantian'];
        }

        $data['thisMonth'] = [
            'bbn_1' => $mbbn_1,
            'bbn_2' => $mbbn_2,
            'mutasi_masuk' => $mmutasi_masuk,
            'mutasi_keluar' => $mmutasi_keluar,
            'perubahan_pergantian' => $mperubahan_pergantian,
            'date' => date("F", strtotime($firstDay)),
        ];

        $ybbn_1 = 0;
        $ybbn_2 = 0;
        $ymutasi_masuk = 0;
        $ymutasi_keluar = 0;
        $yperubahan_pergantian = 0;

        foreach ($thisYear['data'] as $key) {
            $ybbn_1 += $key['bbn_1'];
            $ybbn_2 += $key['bbn_2'];
            $ymutasi_masuk += $key['mutasi_masuk'];
            $ymutasi_keluar += $key['mutasi_keluar'];
            $yperubahan_pergantian += $key['perubahan_pergantian'];
        }

        $data['thisYear'] = [
            'bbn_1' => $ybbn_1,
            'bbn_2' => $ybbn_2,
            'mutasi_masuk' => $ymutasi_masuk,
            'mutasi_keluar' => $ymutasi_keluar,
            'perubahan_pergantian' => $yperubahan_pergantian,
            'date' => date("Y", strtotime($firstDay)),
        ];
        // $dataDay = $data['thisDay'];
        $dataDay = array_values($data['thisDay']);
        array_pop($dataDay);
        $dataMonth = array_values($data['thisMonth']);
        array_pop($dataMonth);
        $dataYear = array_values($data['thisYear']);
        array_pop($dataYear);;



        for ($i = 0; $i < count($dataDay); $i++) {
            $totalDay += $dataDay[$i];
        }
        for ($i = 0; $i < count($dataMonth); $i++) {
            $totalMonth += $dataMonth[$i];
        }
        for ($i = 0; $i < count($dataYear); $i++) {
            $totalYear += $dataYear[$i];
        }

        $data['simDate'] = [
            'thisDay' => number_format($totalDay),
            'detailsthisDay' => $data['thisDay'],
            'thisMonth' => number_format($totalMonth),
            'detailsthisMonth' => $data['thisMonth'],
            'thisYear' => number_format($totalYear),
            'detailsthisYear' => $data['thisYear'],
            // 'thisYear' => $data['thisYear']
        ];

        echo json_encode($data['simDate']);
    }
    // Turjagwali

    public function getDetailStatistikTurjawali()
    {
        $title = 'TOP DATA TURJAWALI';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
                'limit' => $limit,
                'yesterday' => $yesterday
            ];
            $getdata = $this->M_detail_statistik_polda->getTurjawaliNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik_polda->getTurjawaliNasional($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
    public function getTopTurjagwali()
    {
        $yesterday = $this->input->post('yesterday');
        $url = 'turjagwali/daily?date=' . $yesterday . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topTurjagwali'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topTurjagwali']);
    }

    public function getTurjagwaliMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'turjagwali/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topTurjagwali'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topTurjagwali']);
    }

    public function getTurjagwaliYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'turjagwali/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topTurjagwali'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topTurjagwali']);
    }

    public function getLineTurjagwali()
    {
        $title = 'DATA TURJAGWALI LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getTurjagwaliNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getTurjagwaliNasionalDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
    public function exportDataturjawali()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filter = $this->input->post('filter');
        if ($start_date == '' && $end_date == '') {
            $url = 'laporan_harian/export_laphar';
            $turjawalinasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
            echo json_encode($turjawalinasional);
        } elseif ($start_date != '' && $end_date != '') {
            $filterbaru = [
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $url = 'laporan_harian/export_laphar?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $turjawalinasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
            echo json_encode($turjawalinasional);
        }
    }
    // End Turjagwali

    // Sim
    public function getDetailStatistikSim()
    {
        $title = 'TOP DATA SIM LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
                'limit' => $limit,
                'yesterday' => $yesterday
            ];
            $getdata = $this->M_detail_statistik_polda->getSimNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik_polda->getSimNasional($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getTopSim()
    {
        $yesterday = $this->input->post('yesterday');
        $url = 'sim/daily?date=' . $yesterday . '&topPolda=true';
        $simTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topSim'] = $simTopPolda['data']['rows'];
        echo json_encode($data['topSim']);
    }

    public function getSimMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'sim/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $simTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topsim'] = $simTopPolda['data']['rows'];

        echo json_encode($data['topsim']);
    }

    public function getSimYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'sim/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $simTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topsim'] = $simTopPolda['data']['rows'];
        echo json_encode($data['topsim']);
    }

    public function getLineSim($id)
    {
        $title = 'DATA SIM LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getSimPoldaDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'id' => $id,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getSimPoldaDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
    // End Sim
    // STNK
    public function getDetailStatistikStnk()
    {
        $title = 'TOP DATA STNK LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
                'limit' => $limit,
                'yesterday' => $yesterday
            ];
            $getdata = $this->M_detail_statistik_polda->getStnkNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik_polda->getStnkNasional($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
    public function getStnkDate($id)
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'stnk/date?polda_id=' . $id . '&type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'stnk/date?polda_id=' . $id . '&type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'stnk/date?polda_id=' . $id . '&type=year&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        $thisDay = guzzle_request('GET', $url_thisDay, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisMonth = guzzle_request('GET', $url_thisMonth, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisYear = guzzle_request('GET', $url_thisYear, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);


        $totalDay = 0;
        $totalMonth = 0;
        $totalYear = 0;

        $ybbn_1_r2 = 0;
        $ybbn_1_r4 = 0;
        $yperubahan_r2 = 0;
        $yperubahan_r4 = 0;
        $yperpanjangan_r2 = 0;
        $yperpanjangan_r4 = 0;
        $ymutasi_keluar_r2 = 0;
        $ymutasi_keluar_r4 = 0;
        $ymutasi_masuk_r2 = 0;
        $ymutasi_masuk_r4 = 0;
        $ypengesahan_r2 = 0;
        $ypengesahan_r4 = 0;
        $ysamolnas_r2 = 0;
        $ysamolnas_r4 = 0;
        foreach ($thisYear['data'] as $key) {
            $ybbn_1_r2 += $key['bbn_1_r2'];
            $ybbn_1_r4 += $key['bbn_1_r4'];
            $yperubahan_r2 += $key['perubahan_r2'];
            $yperubahan_r4 += $key['perubahan_r4'];
            $yperpanjangan_r2 += $key['perpanjangan_r2'];
            $yperpanjangan_r4 += $key['perpanjangan_r4'];
            $ymutasi_keluar_r2 += $key['mutasi_keluar_r2'];
            $ymutasi_keluar_r4 += $key['mutasi_keluar_r4'];
            $ymutasi_masuk_r2 += $key['mutasi_masuk_r2'];
            $ymutasi_masuk_r4 += $key['mutasi_masuk_r4'];
            $ypengesahan_r2 += $key['pengesahan_r2'];
            $ypengesahan_r4 += $key['pengesahan_r4'];
            $ysamolnas_r2 += $key['samolnas_r2'];
            $ysamolnas_r4 += $key['samolnas_r4'];
        }

        $data['thisYear'] = [
            'bbn_1_r2' => $ybbn_1_r2,
            'bbn_1_r4' => $ybbn_1_r4,
            'perubahan_r2' => $yperubahan_r2,
            'perubahan_r4' => $yperubahan_r4,
            'perpanjangan_r2' => $yperpanjangan_r2,
            'perpanjangan_r4' => $yperpanjangan_r4,
            'mutasi_keluar_r2' => $ymutasi_keluar_r2,
            'mutasi_keluar_r4' => $ymutasi_keluar_r4,
            'mutasi_masuk_r2' => $ymutasi_masuk_r2,
            'mutasi_masuk_r4' => $ymutasi_masuk_r4,
            'pengesahan_r2' => $ypengesahan_r2,
            'pengesahan_r4' => $ypengesahan_r4,
            'samolnas_r2' => $ysamolnas_r2,
            'samolnas_r4' => $ysamolnas_r4,
            'date' => date("Y", strtotime($firstDay)),
        ];

        $dataDay = array_values($thisDay['data'][0]);
        array_pop($dataDay);
        $dataMonth = array_values($thisMonth['data'][0]);
        array_pop($dataMonth);
        $dataYear = array_values($data['thisYear']);
        array_pop($dataYear);


        for ($i = 0; $i < count($dataDay); $i++) {
            $totalDay += $dataDay[$i];
        }
        for ($i = 0; $i < count($dataMonth); $i++) {
            $totalMonth += $dataMonth[$i];
        }
        for ($i = 0; $i < count($dataYear); $i++) {
            $totalYear += $dataYear[$i];
        }

        $data['stnkDate'] = [
            'thisDay' => number_format($thisDay['data'][0]['total']),
            // 'detailsthisDay' => $thisDay['data'][0],
            'thisMonth' => number_format($thisMonth['data'][0]['total']),
            // 'detailsthisMonth' => $thisMonth['data'][0],
            'thisYear' => number_format($thisYear['data'][0]['total']),
            // 'detailsthisYear' => $data['thisYear'],
            // 'thisYear' => $data['thisYear']
        ];

        echo json_encode($data['stnkDate']);
    }
    public function getLineStnk($id)
    {
        $title = 'DATA STNK';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getStnkPoldaDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getStnkPoldaDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getTopStnk()
    {
        $yesterday = $this->input->post('yesterday');
        $url = 'stnk/daily?date=' . $yesterday . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    public function getStnkMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'stnk/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    public function getStnkYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'stnk/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    // END STNK


    // Dikmaslantas
    public function getDetailStatistikDikmaslantas()
    {
        $title = 'TOP DATA DIKMASLANTAS LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
                'limit' => $limit,
                'yesterday' => $yesterday
            ];
            $getdata = $this->M_detail_statistik_polda->getDikmasNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik_polda->getDikmasNasional($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getLineDikmas($id)
    {
        $title = 'DATA DIKMASLANTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getDikmasPoldaDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getDikmasPoldaDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getTopDikmas()
    {
        $yesterday = $this->input->post('yesterday');
        $url = 'dikmaslantas/daily?date=' . $yesterday . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    public function getDikmasMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'dikmaslantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    public function getDikmasYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'dikmaslantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    // END Dikmas


    // Wal Pjr
    public function getDetailStatistikWalpjr()
    {
        $title = 'TOP DATA';
        // $filter = $this->input->post('filter');
        // $limit = $this->input->post('limit');
        // $yesterday = $this->input->post('yesterday');
        // if ($filter == 0) {
        //     $filterbaru = [
        //         'filter' => $filter,
        //         'start_date' => '',
        //         'end_date' => '',
        //         'limit' => $limit,
        //         'yesterday' => $yesterday
        //     ];
        //     $getdata = $this->M_detail_statistik_polda->getSimNasional($filterbaru);
        // } elseif ($filter != 0) {
        //     $filterbaru = [
        //         'filter' => $filter,
        //         'start_date' => $this->input->post('start_date'),
        //         'end_date' => $this->input->post('end_date'),
        //         'limit' => $limit
        //     ];
        //     $getdata = $this->M_detail_statistik_polda->getSimNasional($filterbaru);
        // }

        // $data = [

        //     'data' => $getdata,
        //     'title' => $title,
        // ];
        $data = [
            'data' => [
                'polda_name' => ['Banten', 'Jawa Barat', 'Jawa Tengah', 'Jawa Timur', 'Metro Jaya '],
                'polda_walpjr' => ['0', '0', '0', '0', '0']
            ],
            'title' => $title,
        ];

        echo json_encode($data);
    }
    public function getWalpjrDate()
    {
        // $yesterday = $this->input->post('yesterday');
        // $firstDayMonth = $this->input->post('firstDayMonth');
        // $lastDayMonth = $this->input->post('lastDayMonth');
        // $firstDay = $this->input->post('firstDay');
        // $lastDay = $this->input->post('lastDay');

        // $url_thisDay = 'ditgakkum/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        // $url_thisMonth = 'ditgakkum/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        // $url_thisYear = 'ditgakkum/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        // $thisDay = guzzle_request('GET', $url_thisDay, [
        //     'headers' => [
        //         'Authorization' => $this->session->userdata['token']
        //     ]
        // ]);

        // $thisMonth = guzzle_request('GET', $url_thisMonth, [
        //     'headers' => [
        //         'Authorization' => $this->session->userdata['token']
        //     ]
        // ]);

        // $thisYear = guzzle_request('GET', $url_thisYear, [
        //     'headers' => [
        //         'Authorization' => $this->session->userdata['token']
        //     ]
        // ]);

        // $turjagwali = 0;
        // $lakalantas = 0;
        // $garlantas = 0;
        // $lakalanggar = 0;
        // foreach ($thisYear['data'] as $key) {
        //     $turjagwali += $key['turjagwali'];
        //     $lakalantas += $key['lakalantas'];
        //     $garlantas += $key['garlantas'];
        //     $lakalanggar  += $key['lakalanggar'];
        // }

        // $data['thisYear'] = [
        //     'lakalantas' => $lakalantas,
        //     'garlantas' => $garlantas,
        //     'lakalanggar' => $lakalanggar,
        //     'turjagwali' => $turjagwali
        // ];

        // $data['ditgakkumDate'] = [
        //     'thisDay' => $thisDay['data'],
        //     'thisMonth' => $thisMonth['data'],
        //     'thisYear' => $data['thisYear']
        // ];
        $data['walpjrDate'] = [
            'thisDay' => 0,
            'thisMonth' => 0,
            'thisYear' => 0
        ];

        echo json_encode($data['walpjrDate']);
    }


    public function getTopWalpjr()
    {
        $url = 'vehicle?search=korlantas';
        $walpjr = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data = $walpjr['data']['data'];

        echo json_encode($data);
    }
    public function getBrandWalpjr()
    {
        $url = 'vehicle?search=korlantas';
        $walpjr = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data = $walpjr['data']['data'];
        $arr = [];
        $kendaraan = [];

        foreach ($data as $key => $item) {
            $arr[$item['brand_vehicle']][$key] = $item;
        }
        foreach ($arr as $key => $item) {
            $kendaraan[$item['brand_vehicle']][$key] = count($item);
        }

        $data = [
            'nodesc' => $kendaraan[""]['no desc'],
            'yamaha' => $kendaraan[""]['Yamaha'],
            'honda' => $kendaraan[""]['Honda'],
            'hyundai' => $kendaraan[""]['Hyundai'],
        ];

        echo json_encode($data);
    }

    public function getWalpjrMonth()
    {
        // $firstDay = $this->input->post('firstDay');
        // $lastDay = $this->input->post('lastDay');

        // $url = 'sim/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        // $simTopPolda = guzzle_request('GET', $url, [
        //     'headers' => [
        //         'Authorization' => $this->session->userdata['token']
        //     ]
        // ]);

        // $data['topsim'] = $simTopPolda['data']['rows'];

        // echo json_encode($data['topsim']);
        $dummy = [
            [
                'name_polda' => 'Banten',
                'walpjr' => '0'
            ],
            [
                'name_polda' => 'Jawa Barat',
                'walpjr' => '0'
            ],
            [
                'name_polda' => 'Jawa Timur',
                'walpjr' => '0'
            ],
            [
                'name_polda' => 'Jawa Tengah',
                'walpjr' => '0'
            ],
            [
                'name_polda' => 'Metro Jaya',
                'walpjr' => '0'
            ],
        ];
        echo json_encode($dummy);
    }

    public function getWalpjrYear()
    {
        // $firstDay = $this->input->post('firstDay');
        // $lastDay = $this->input->post('lastDay');

        // $url = 'sim/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        // $simTopPolda = guzzle_request('GET', $url, [
        //     'headers' => [
        //         'Authorization' => $this->session->userdata['token']
        //     ]
        // ]);


        $dummy = [
            [
                'name_polda' => 'Banten',
                'walpjr' => '0'
            ],
            [
                'name_polda' => 'Jawa Barat',
                'walpjr' => '0'
            ],
            [
                'name_polda' => 'Jawa Timur',
                'walpjr' => '0'
            ],
            [
                'name_polda' => 'Jawa Tengah',
                'walpjr' => '0'
            ],
            [
                'name_polda' => 'Metro Jaya',
                'walpjr' => '0'
            ],
        ];
        echo json_encode($dummy);
        // $data['topsim'] = $simTopPolda['data']['rows'];
        // echo json_encode($data['topsim']);
    }

    public function getTypeWalpjr($id)
    {
        $url = 'vehicle?search=korlantas';
        $walpjr = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data = $walpjr['data']['data'];
        $arr = [];
        $kendaraan = [];

        foreach ($data as $key => $item) {
            $arr[$item['type_vehicle']][$key] = $item;
        }
        foreach ($arr as $key => $item) {
            $kendaraan[$item['type_vehicle']][$key] = count($item);
        }

        $data = [
            'type' => ['Sepeda Motor', 'Tanpa Kendaraan', 'Mobil'],
            'total' => [$kendaraan[""]['Sepeda Motor'], $kendaraan[""]['Tanpa Kendaraan'], $kendaraan[""]['Mobil'] + $kendaraan[""]['mobil'],],
        ];
        echo json_encode($data);
    }

    public function Ranmor()
    {
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
        $data['polda'] = $this->M_detail_statistik_polda->get_Polda();
        $data['title'] = 'DATA KENDARAAN BERMOTOR';
        $this->load->view('executive/statistik/detail_statistik_ranmor', $data);
    }









    public function getDetailStatistikRanmor()
    {
        $title = 'DATA KENDARAAN BERMOTOR';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
                'limit' => $limit,
                'yesterday' => $yesterday
            ];
            $getdata = $this->M_detail_statistik_polda->getRanmorNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik_polda->getRanmorNasional($filterbaru);
        }
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
    public function exportDataranmor()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filter = $this->input->post('filter');
        if ($start_date == '' && $end_date == '') {
            $url = 'laporan_harian/export_laphar';
            $ranmornasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
            echo json_encode($ranmornasional);
        } elseif ($start_date != '' && $end_date != '') {
            $filterbaru = [
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $url = 'laporan_harian/export_laphar?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $ranmornasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
            echo json_encode($ranmornasional);
        }
    }
    public function getTopRanmor()
    {
        $yesterday = $this->input->post('yesterday');
        $url = 'ranmor/daily?date=' . $yesterday . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topRanmor'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topRanmor']);
    }
    public function getRanmorMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'ranmor/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topRanmor'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topRanmor']);
    }
    public function getRanmorYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'ranmor/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topRanmor'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topRanmor']);
    }
    public function getSimDate($id)
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'sim/date?type=day&polda_id=' . $id . 'filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'sim/date?type=month&polda_id=' . $id . 'filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'sim/date?type=month&polda_id=' . $id . 'filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        $thisDay = guzzle_request('GET', $url_thisDay, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisMonth = guzzle_request('GET', $url_thisMonth, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisYear = guzzle_request('GET', $url_thisYear, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);


        $totalDay = 0;
        $totalMonth = 0;
        $totalYear = 0;

        $dbaru_a = 0;
        $dbaru_c = 0;
        $dbaru_c1 = 0;
        $dbaru_c2 = 0;
        $dbaru_d = 0;
        $dbaru_d1 = 0;
        $dperpanjangan_a = 0;
        $dperpanjangan_au = 0;
        $dperpanjangan_c = 0;
        $dperpanjangan_c1 = 0;
        $dperpanjangan_c2 = 0;
        $dperpanjangan_d = 0;
        $dperpanjangan_d1 = 0;
        $dperpanjangan_b1 = 0;
        $dperpanjangan_b1u = 0;
        $dperpanjangan_b2 = 0;
        $dperpanjangan_b2u = 0;
        $dpeningkatan_au = 0;
        $dpeningkatan_b1 = 0;
        $dpeningkatan_b1u = 0;
        $dpeningkatan_b2 = 0;
        $dpeningkatan_b2u = 0;

        foreach ($thisDay['data'] as $key) {
            $dbaru_a += $key['baru_a'];
            $dbaru_c += $key['baru_c'];
            $dbaru_c1 += $key['baru_c1'];
            $dbaru_c2 += $key['baru_c2'];
            $dbaru_d += $key['baru_d'];
            $dbaru_d1 += $key['baru_d1'];
            $dperpanjangan_a += $key['perpanjangan_a'];
            $dperpanjangan_au += $key['perpanjangan_au'];
            $dperpanjangan_c += $key['perpanjangan_c'];
            $dperpanjangan_c1 += $key['perpanjangan_c1'];
            $dperpanjangan_c2 += $key['perpanjangan_c2'];
            $dperpanjangan_d += $key['perpanjangan_d'];
            $dperpanjangan_d1 += $key['perpanjangan_d1'];
            $dperpanjangan_b1 += $key['perpanjangan_b1'];
            $dperpanjangan_b1u += $key['perpanjangan_b1u'];
            $dperpanjangan_b2 += $key['perpanjangan_b2'];
            $dperpanjangan_b2u += $key['perpanjangan_b2u'];
            $dpeningkatan_au += $key['peningkatan_au'];
            $dpeningkatan_b1 += $key['peningkatan_b1'];
            $dpeningkatan_b1u += $key['peningkatan_b1u'];
            $dpeningkatan_b2 += $key['peningkatan_b2'];
            $dpeningkatan_b2u += $key['peningkatan_b2u'];
        }

        $data['thisDay'] = [
            'baru_a' => $dbaru_a,
            'baru_c' => $dbaru_c,
            'baru_c1' => $dbaru_c1,
            'baru_c2' => $dbaru_c2,
            'baru_d' => $dbaru_d,
            'baru_d1' => $dbaru_d1,
            'perpanjangan_a' => $dperpanjangan_a,
            'perpanjangan_au' => $dperpanjangan_au,
            'perpanjangan_c' => $dperpanjangan_c,
            'perpanjangan_c1' => $dperpanjangan_c1,
            'perpanjangan_c2' => $dperpanjangan_c2,
            'perpanjangan_d' => $dperpanjangan_d,
            'perpanjangan_d1' => $dperpanjangan_d1,
            'perpanjangan_b1' => $dperpanjangan_b1,
            'perpanjangan_b1u' => $dperpanjangan_b1u,
            'perpanjangan_b2' => $dperpanjangan_b2,
            'perpanjangan_b2u' => $dperpanjangan_b2u,
            'peningkatan_au' => $dpeningkatan_au,
            'peningkatan_b1' => $dpeningkatan_b1,
            'peningkatan_b1u' => $dpeningkatan_b1u,
            'peningkatan_b2' => $dpeningkatan_b2,
            'peningkatan_b2u' => $dpeningkatan_b2u,
            'date' => date("Y-m-d"),
        ];

        $mbaru_a = 0;
        $mbaru_c = 0;
        $mbaru_c1 = 0;
        $mbaru_c2 = 0;
        $mbaru_d = 0;
        $mbaru_d1 = 0;
        $mperpanjangan_a = 0;
        $mperpanjangan_au = 0;
        $mperpanjangan_c = 0;
        $mperpanjangan_c1 = 0;
        $mperpanjangan_c2 = 0;
        $mperpanjangan_d = 0;
        $mperpanjangan_d1 = 0;
        $mperpanjangan_b1 = 0;
        $mperpanjangan_b1u = 0;
        $mperpanjangan_b2 = 0;
        $mperpanjangan_b2u = 0;
        $mpeningkatan_au = 0;
        $mpeningkatan_b1 = 0;
        $mpeningkatan_b1u = 0;
        $mpeningkatan_b2 = 0;
        $mpeningkatan_b2u = 0;

        foreach ($thisMonth['data'] as $key) {
            $mbaru_a += $key['baru_a'];
            $mbaru_c += $key['baru_c'];
            $mbaru_c1 += $key['baru_c1'];
            $mbaru_c2 += $key['baru_c2'];
            $mbaru_d += $key['baru_d'];
            $mbaru_d1 += $key['baru_d1'];
            $mperpanjangan_a += $key['perpanjangan_a'];
            $mperpanjangan_au += $key['perpanjangan_au'];
            $mperpanjangan_c += $key['perpanjangan_c'];
            $mperpanjangan_c1 += $key['perpanjangan_c1'];
            $mperpanjangan_c2 += $key['perpanjangan_c2'];
            $mperpanjangan_d += $key['perpanjangan_d'];
            $mperpanjangan_d1 += $key['perpanjangan_d1'];
            $mperpanjangan_b1 += $key['perpanjangan_b1'];
            $mperpanjangan_b1u += $key['perpanjangan_b1u'];
            $mperpanjangan_b2 += $key['perpanjangan_b2'];
            $mperpanjangan_b2u += $key['perpanjangan_b2u'];
            $mpeningkatan_au += $key['peningkatan_au'];
            $mpeningkatan_b1 += $key['peningkatan_b1'];
            $mpeningkatan_b1u += $key['peningkatan_b1u'];
            $mpeningkatan_b2 += $key['peningkatan_b2'];
            $mpeningkatan_b2u += $key['peningkatan_b2u'];
        }

        $data['thisMonth'] = [
            'baru_a' => $mbaru_a,
            'baru_c' => $mbaru_c,
            'baru_c1' => $mbaru_c1,
            'baru_c2' => $mbaru_c2,
            'baru_d' => $mbaru_d,
            'baru_d1' => $mbaru_d1,
            'perpanjangan_a' => $mperpanjangan_a,
            'perpanjangan_au' => $mperpanjangan_au,
            'perpanjangan_c' => $mperpanjangan_c,
            'perpanjangan_c1' => $mperpanjangan_c1,
            'perpanjangan_c2' => $mperpanjangan_c2,
            'perpanjangan_d' => $mperpanjangan_d,
            'perpanjangan_d1' => $mperpanjangan_d1,
            'perpanjangan_b1' => $mperpanjangan_b1,
            'perpanjangan_b1u' => $mperpanjangan_b1u,
            'perpanjangan_b2' => $mperpanjangan_b2,
            'perpanjangan_b2u' => $mperpanjangan_b2u,
            'peningkatan_au' => $mpeningkatan_au,
            'peningkatan_b1' => $mpeningkatan_b1,
            'peningkatan_b1u' => $mpeningkatan_b1u,
            'peningkatan_b2' => $mpeningkatan_b2,
            'peningkatan_b2u' => $mpeningkatan_b2u,
            'date' => date("F", strtotime($firstDay)),
        ];

        $ybaru_a = 0;
        $ybaru_c = 0;
        $ybaru_c1 = 0;
        $ybaru_c2 = 0;
        $ybaru_d = 0;
        $ybaru_d1 = 0;
        $yperpanjangan_a = 0;
        $yperpanjangan_au = 0;
        $yperpanjangan_c = 0;
        $yperpanjangan_c1 = 0;
        $yperpanjangan_c2 = 0;
        $yperpanjangan_d = 0;
        $yperpanjangan_d1 = 0;
        $yperpanjangan_b1 = 0;
        $yperpanjangan_b1u = 0;
        $yperpanjangan_b2 = 0;
        $yperpanjangan_b2u = 0;
        $ypeningkatan_au = 0;
        $ypeningkatan_b1 = 0;
        $ypeningkatan_b1u = 0;
        $ypeningkatan_b2 = 0;
        $ypeningkatan_b2u = 0;

        foreach ($thisYear['data'] as $key) {
            $ybaru_a += $key['baru_a'];
            $ybaru_c += $key['baru_c'];
            $ybaru_c1 += $key['baru_c1'];
            $ybaru_c2 += $key['baru_c2'];
            $ybaru_d += $key['baru_d'];
            $ybaru_d1 += $key['baru_d1'];
            $yperpanjangan_a += $key['perpanjangan_a'];
            $yperpanjangan_au += $key['perpanjangan_au'];
            $yperpanjangan_c += $key['perpanjangan_c'];
            $yperpanjangan_c1 += $key['perpanjangan_c1'];
            $yperpanjangan_c2 += $key['perpanjangan_c2'];
            $yperpanjangan_d += $key['perpanjangan_d'];
            $yperpanjangan_d1 += $key['perpanjangan_d1'];
            $yperpanjangan_b1 += $key['perpanjangan_b1'];
            $yperpanjangan_b1u += $key['perpanjangan_b1u'];
            $yperpanjangan_b2 += $key['perpanjangan_b2'];
            $yperpanjangan_b2u += $key['perpanjangan_b2u'];
            $ypeningkatan_au += $key['peningkatan_au'];
            $ypeningkatan_b1 += $key['peningkatan_b1'];
            $ypeningkatan_b1u += $key['peningkatan_b1u'];
            $ypeningkatan_b2 += $key['peningkatan_b2'];
            $ypeningkatan_b2u += $key['peningkatan_b2u'];
        }

        $data['thisYear'] = [
            'baru_a' => $ybaru_a,
            'baru_c' => $ybaru_c,
            'baru_c1' => $ybaru_c1,
            'baru_c2' => $ybaru_c2,
            'baru_d' => $ybaru_d,
            'baru_d1' => $ybaru_d1,
            'perpanjangan_a' => $yperpanjangan_a,
            'perpanjangan_au' => $yperpanjangan_au,
            'perpanjangan_c' => $yperpanjangan_c,
            'perpanjangan_c1' => $yperpanjangan_c1,
            'perpanjangan_c2' => $yperpanjangan_c2,
            'perpanjangan_d' => $yperpanjangan_d,
            'perpanjangan_d1' => $yperpanjangan_d1,
            'perpanjangan_b1' => $yperpanjangan_b1,
            'perpanjangan_b1u' => $yperpanjangan_b1u,
            'perpanjangan_b2' => $yperpanjangan_b2,
            'perpanjangan_b2u' => $yperpanjangan_b2u,
            'peningkatan_au' => $ypeningkatan_au,
            'peningkatan_b1' => $ypeningkatan_b1,
            'peningkatan_b1u' => $ypeningkatan_b1u,
            'peningkatan_b2' => $ypeningkatan_b2,
            'peningkatan_b2u' => $ypeningkatan_b2u,
            'date' => date("Y", strtotime($firstDay)),
        ];
        // $dataDay = $data['thisDay'];
        $dataDay = array_values($data['thisDay']);
        array_pop($dataDay);
        $dataMonth = array_values($data['thisMonth']);
        array_pop($dataMonth);
        $dataYear = array_values($data['thisYear']);
        array_pop($dataYear);;



        for ($i = 0; $i < count($dataDay); $i++) {
            $totalDay += $dataDay[$i];
        }
        for ($i = 0; $i < count($dataMonth); $i++) {
            $totalMonth += $dataMonth[$i];
        }
        for ($i = 0; $i < count($dataYear); $i++) {
            $totalYear += $dataYear[$i];
        }

        $data['simDate'] = [
            'thisDay' => number_format($totalDay),
            'detailsthisDay' => $data['thisDay'],
            'thisMonth' => number_format($totalMonth),
            'detailsthisMonth' => $data['thisMonth'],
            'thisYear' => number_format($totalYear),
            'detailsthisYear' => $data['thisYear'],
            // 'thisYear' => $data['thisYear']
        ];

        echo json_encode($data['simDate']);
    }
    public function getLakaDate($id)
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'laka_lantas/date?type=day&polda_id=' . $id . '&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'laka_lantas/date?type=month&polda_id=' . $id . '&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'laka_lantas/date?type=month&polda_id=' . $id . '&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        $thisDay = guzzle_request('GET', $url_thisDay, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisMonth = guzzle_request('GET', $url_thisMonth, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisYear = guzzle_request('GET', $url_thisYear, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $insiden_kecelakaan = 0;
        $luka_ringan = 0;
        $luka_berat = 0;
        $meninggal_dunia = 0;
        foreach ($thisYear['data'] as $key) {
            $insiden_kecelakaan += $key['insiden_kecelakaan'];
            $luka_ringan += $key['luka_ringan'];
            $luka_berat += $key['luka_berat'];
            $meninggal_dunia  += $key['meninggal_dunia'];
        }

        $data['thisYear'] = [
            'insiden_kecelakaan' => $insiden_kecelakaan,
            'luka_ringan' => $luka_ringan,
            'luka_berat' => $luka_berat,
            'meninggal_dunia' => $meninggal_dunia
        ];

        $data['lakaDate'] = [
            'thisDay' => number_format($thisDay['data'][0]['insiden_kecelakaan']),
            'thisDayLR' => number_format($thisDay['data'][0]['luka_ringan']),
            'thisDayLB' => number_format($thisDay['data'][0]['luka_berat']),
            'thisDayMD' => number_format($thisDay['data'][0]['meninggal_dunia']),
            'thisMonth' => number_format($thisMonth['data'][0]['insiden_kecelakaan']),
            'thisMonthLR' => number_format($thisMonth['data'][0]['luka_ringan']),
            'thisMonthLB' => number_format($thisMonth['data'][0]['luka_berat']),
            'thisMonthMD' => number_format($thisMonth['data'][0]['meninggal_dunia']),
            'thisYear' => number_format($insiden_kecelakaan),
            'thisYearLR' => number_format($luka_ringan),
            'thisYearLB' => number_format($luka_berat),
            'thisYearMD' => number_format($meninggal_dunia)

        ];

        echo json_encode($data['lakaDate']);
    }

    public function getGarlantasDate($id)
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'garlantas/daily?type=day&polda_id=' . $id . '&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'garlantas/daily?type=month&polda_id=' . $id . '&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'garlantas/daily?type=month&polda_id=' . $id . '&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        $thisDay = guzzle_request('GET', $url_thisDay, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisMonth = guzzle_request('GET', $url_thisMonth, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisYear = guzzle_request('GET', $url_thisYear, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisDayPB = 0;
        $thisDayPS = 0;
        $thisDayPR = 0;
        $thisDayT = 0;
        $thisDayTL = 0;
        foreach ($thisDay['data']['rows'] as $key) {
            $thisDayPB += $key['pelanggaran_berat'];
            $thisDayPS += $key['pelanggaran_sedang'];
            $thisDayPR += $key['pelanggaran_ringan'];
            $thisDayT  += $key['teguran'];
            $thisDayTL  += $key['total'];
        }

        $data['thisDay'] = [
            'pelanggaran_berat' => $thisDayPB,
            'pelanggaran_sedang' => $thisDayPS,
            'pelanggaran_ringan' => $thisDayPR,
            'teguran' => $thisDayT,
            'total' => $thisDayTL,
        ];
        $thisMonthPB = 0;
        $thisMonthPS = 0;
        $thisMonthPR = 0;
        $thisMonthT = 0;
        $thisMonthTL = 0;
        foreach ($thisMonth['data']['rows'] as $key) {
            $thisMonthPB += $key['pelanggaran_berat'];
            $thisMonthPS += $key['pelanggaran_sedang'];
            $thisMonthPR += $key['pelanggaran_ringan'];
            $thisMonthT  += $key['teguran'];
            $thisMonthTL  += $key['total'];
        }

        $data['thisMonth'] = [
            'pelanggaran_berat' => $thisMonthPB,
            'pelanggaran_sedang' => $thisMonthPS,
            'pelanggaran_ringan' => $thisMonthPR,
            'teguran' => $thisMonthT,
            'total' => $thisMonthTL,
        ];
        $thisYearPB = 0;
        $thisYearPS = 0;
        $thisYearPR = 0;
        $thisYearT = 0;
        $thisYearTL = 0;
        foreach ($thisYear['data']['rows'] as $key) {
            $thisYearPB += $key['pelanggaran_berat'];
            $thisYearPS += $key['pelanggaran_sedang'];
            $thisYearPR += $key['pelanggaran_ringan'];
            $thisYearT  += $key['teguran'];
            $thisYearTL  += $key['total'];
        }

        $data['thisYear'] = [
            'pelanggaran_berat' => $thisYearPB,
            'pelanggaran_sedang' => $thisYearPS,
            'pelanggaran_ringan' => $thisYearPR,
            'teguran' => $thisYearT,
            'total' => $thisYearTL,
        ];

        $data['garlantasDate'] = [
            'thisDayTotal' => number_format($data['thisDay']['total']),
            'thisDayPB' => number_format($data['thisDay']['pelanggaran_berat']),
            'thisDayPS' => number_format($data['thisDay']['pelanggaran_sedang']),
            'thisDayPR' => number_format($data['thisDay']['pelanggaran_ringan']),
            'thisDayT' => number_format($data['thisDay']['total']),
            'thisMonthTotal' => number_format($data['thisMonth']['total']),
            'thisMonthPB' => number_format($data['thisMonth']['pelanggaran_berat']),
            'thisMonthPS' => number_format($data['thisMonth']['pelanggaran_sedang']),
            'thisMonthPR' => number_format($data['thisMonth']['pelanggaran_ringan']),
            'thisMonthT' => number_format($data['thisMonth']['total']),
            'thisYearTotal' => number_format($data['thisYear']['total']),
            'thisYearPB' => number_format($data['thisYear']['pelanggaran_berat']),
            'thisYearPS' => number_format($data['thisYear']['pelanggaran_sedang']),
            'thisYearPR' => number_format($data['thisYear']['pelanggaran_ringan']),
            'thisYearT' => number_format($data['thisYear']['total']),
        ];

        echo json_encode($data['garlantasDate']);
    }
    public function getDitgakkumDate($id)
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'ditgakkum/date?type=day&polda_id=' . $id . '&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'ditgakkum/date?type=month&polda_id=' . $id . '&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'ditgakkum/date?type=month&polda_id=' . $id . '&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        $thisDay = guzzle_request('GET', $url_thisDay, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisMonth = guzzle_request('GET', $url_thisMonth, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisYear = guzzle_request('GET', $url_thisYear, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $turjagwali = 0;
        $lakalantas = 0;
        $garlantas = 0;
        $lakalanggar = 0;
        foreach ($thisYear['data'] as $key) {
            $turjagwali += $key['turjagwali'];
            $lakalantas += $key['lakalantas'];
            $garlantas += $key['garlantas'];
            $lakalanggar  += $key['lakalanggar'];
        }

        $data['thisYear'] = [
            'lakalantas' => $lakalantas,
            'garlantas' => $garlantas,
            'lakalanggar' => $lakalanggar,
            'turjagwali' => $turjagwali
        ];

        $data['ditgakkumDate'] = [
            'thisDay' => $thisDay['data'],
            'thisMonth' => $thisMonth['data'],
            'thisYear' => $data['thisYear']
        ];

        echo json_encode($data['ditgakkumDate']);
    }
    public function getDitkamselDate($id)
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'ditkamsel/date?type=day&polda_id=' . $id . '&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'ditkamsel/date?type=month&polda_id=' . $id . '&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'ditkamsel/date?type=month&polda_id=' . $id . '&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        $thisDay = guzzle_request('GET', $url_thisDay, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisMonth = guzzle_request('GET', $url_thisMonth, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisYear = guzzle_request('GET', $url_thisYear, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $dikmaslantas = 0;
        $penyebaran = 0;

        foreach ($thisYear['data'] as $key) {
            $dikmaslantas += $key['dikmaslantas'];
            $penyebaran += $key['penyebaran'];
        }

        $data['thisYear'] = [
            'penyebaran' => $penyebaran,
            'dikmaslantas' => $dikmaslantas
        ];

        $data['ditkamselDate'] = [
            'thisDay' => $thisDay['data'],
            'thisMonth' => $thisMonth['data'],
            'thisYear' => $data['thisYear']
        ];

        echo json_encode($data['ditkamselDate']);
    }

    public function getDitregidentDate($id)
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'ditregident/date?polda_id=' . $id . '&type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'ditregident/date?polda_id=' . $id . '&type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'ditregident/date?polda_id=' . $id . '&type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        $thisDay = guzzle_request('GET', $url_thisDay, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisMonth = guzzle_request('GET', $url_thisMonth, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisYear = guzzle_request('GET', $url_thisYear, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $stnk = 0;
        $sim = 0;
        $bpkb = 0;
        $ranmor = 0;
        foreach ($thisYear['data'] as $key) {
            $stnk += $key['stnk'];
            $sim += $key['sim'];
            $bpkb += $key['bpkb'];
            $ranmor  += $key['ranmor'];
        }

        $data['thisYear'] = [
            'sim' => $sim,
            'bpkb' => $bpkb,
            'ranmor' => $ranmor,
            'stnk' => $stnk
        ];

        $data['ditregidentDate'] = [
            'thisDay' => $thisDay['data'],
            'thisMonth' => $thisMonth['data'],
            'thisYear' => $data['thisYear']
        ];

        echo json_encode($data['ditregidentDate']);
    }

    public function getRanmorDate()
    {
        $id = $this->input->post('id');
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'ranmor/date?polda_id=' . $id . '&type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'ranmor/date?polda_id=' . $id . '&type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'ranmor/date?polda_id=' . $id . '&type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


        $thisDay = guzzle_request('GET', $url_thisDay, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisMonth = guzzle_request('GET', $url_thisMonth, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $thisYear = guzzle_request('GET', $url_thisYear, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $ranmor = 0;

        foreach ($thisYear['data'] as $key) {
            $ranmor += $key['ranmor'];
        } {
            $yesterday = $this->input->post('yesterday');
            $firstDayMonth = $this->input->post('firstDayMonth');
            $lastDayMonth = $this->input->post('lastDayMonth');
            $firstDay = $this->input->post('firstDay');
            $lastDay = $this->input->post('lastDay');

            $url_thisDay = 'ranmor/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
            $url_thisMonth = 'ranmor/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
            $url_thisYear = 'ranmor/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


            $thisDay = guzzle_request('GET', $url_thisDay, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);

            $thisMonth = guzzle_request('GET', $url_thisMonth, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);

            $thisYear = guzzle_request('GET', $url_thisYear, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);

            $thisDayMP = 0;
            $thisDayMS = 0;
            $thisDayMB = 0;
            $thisDaySM = 0;
            $thisDayRN = 0;
            $thisDayTL = 0;
            foreach ($thisDay['data']['rows'] as $key) {
                $thisDayMP += $key['mobil_penumpang'];
                $thisDayMS += $key['mobil_bus'];
                $thisDayMB += $key['mobil_barang'];
                $thisDaySM  += $key['sepeda_motor'];
                $thisDayRN  += $key['ransus'];
                $thisDayTL  += $key['total'];
            }

            $data['thisDay'] = [
                'mobil_barang' => $thisDayMB,
                'mobil_penumpang' => $thisDayMP,
                'mobil_bus' => $thisDayMS,
                'sepeda_motor' => $thisDaySM,
                'ransus' => $thisDayRN,
                'total' => $thisDayTL,
            ];
            $thisMonthMP = 0;
            $thisMonthMS = 0;
            $thisMonthMB = 0;
            $thisMonthSM = 0;
            $thisMonthRN = 0;
            $thisMonthTL = 0;
            foreach ($thisMonth['data']['rows'] as $key) {
                $thisMonthMP += $key['mobil_penumpang'];
                $thisMonthMS += $key['mobil_bus'];
                $thisMonthMB += $key['mobil_barang'];
                $thisMonthSM += $key['sepeda_motor'];
                $thisMonthRN += $key['ransus'];
                $thisMonthTL  += $key['total'];
            }

            $data['thisMonth'] = [
                'mobil_penumpang' => $thisMonthMP,
                'mobil_bus' => $thisMonthMS,
                'mobil_barang' => $thisMonthMB,
                'sepeda_motor' => $thisMonthSM,
                'ransus' => $thisMonthRN,
                'total' => $thisMonthTL,
            ];
            $thisYearMP = 0;
            $thisYearMS = 0;
            $thisYearMB = 0;
            $thisYearSM = 0;
            $thisYearRN = 0;
            $thisYearTL = 0;
            foreach ($thisYear['data']['rows'] as $key) {
                $thisYearMP += $key['mobil_penumpang'];
                $thisYearMS += $key['mobil_bus'];
                $thisYearMB += $key['mobil_barang'];
                $thisYearSM  += $key['sepeda_motor'];
                $thisYearRN  += $key['ransus'];
                $thisYearTL  += $key['total'];
            }

            $data['thisYear'] = [
                'mobil_penumpang' => $thisYearMP,
                'mobil_bus' => $thisYearMS,
                'mobil_barang' => $thisYearMB,
                'ransus' => $thisYearSM,
                'total' => $thisYearTL,
            ];

            $data['RanmorDate'] = [
                'thisDay' => number_format($data['thisDay']['total']),
                'thisDayMP' => number_format($data['thisDay']['mobil_penumpang']),
                'thisDayMS' => number_format($data['thisDay']['mobil_bus']),
                'thisDayMB' => number_format($data['thisDay']['mobil_barang']),
                'thisDaySM' => number_format($data['thisDay']['sepeda_motor']),
                'thisDayRN' => number_format($data['thisDay']['ransus']),
                'thisMonth' => number_format($data['thisMonth']['total']),
                'thisMonthMP' => number_format($data['thisMonth']['mobil_penumpang']),
                'thisMonthMS' => number_format($data['thisMonth']['mobil_bus']),
                'thisMonthMB' => number_format($data['thisMonth']['mobil_barang']),
                'thisMonthSM' => number_format($data['thisMonth']['sepeda_motor']),
                'thisMonthRN' => number_format($data['thisMonth']['ransus']),
                'thisYear' => number_format($data['thisYear']['total']),
                'thisYearMP' => number_format($data['thisYear']['mobil_penumpang']),
                'thisYearMS' => number_format($data['thisYear']['mobil_bus']),
                'thisYearMB' => number_format($data['thisYear']['mobil_barang']),
                'thisYearSM' => number_format($data['thisYear']['sepeda_motor']),
                'thisYearRN' => number_format($data['thisYear']['ransus']),
            ];

            echo json_encode($data['RanmorDate']);
        }
    }
    public function getLineRanmor()
    {
        $title = 'DATA RANMOR LALU LINTAS';
        $id = $this->input->post('id');
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getRanmorNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'id' => $id,
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik_polda->getRanmorNasionalDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
}
