<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_executive extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("executive/M_detail_statistik");
    }

    // public function index()
    // {

    //     $data['polda'] = $this->M_detail_statistik->get_Polda();
    //     $data["js"] = '';
    //     $data["title"] = "Detail Statistik";
    //     $this->load->view('executive/statistik/detail_statistik_view', $data);
    // }
    public function getPolda()
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

        $data = [
            'polda' => $getPolda['data']['data'],
            'poldaall' => $getPoldaall['data']['data'],
        ];
        echo json_encode($data);
    }

    // Laka
    public function LakaLantas()
    {
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "DATA KECELEKAAN LALU LINTAS";
        $page_content["page"] = "executive/statistik/detail_statistik_lakalantas";
        $page_content["data"] = '';
        // $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function getLakaDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'laka_lantas/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'laka_lantas/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'laka_lantas/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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
            'thisDay' => $thisDay['data'][0]['insiden_kecelakaan'],
            'thisDayLR' => $thisDay['data'][0]['luka_ringan'],
            'thisDayLB' => $thisDay['data'][0]['luka_berat'],
            'thisDayMD' => $thisDay['data'][0]['meninggal_dunia'],
            'thisMonth' => $thisMonth['data'][0]['insiden_kecelakaan'],
            'thisMonthLR' => $thisMonth['data'][0]['luka_ringan'],
            'thisMonthLB' => $thisMonth['data'][0]['luka_berat'],
            'thisMonthMD' => $thisMonth['data'][0]['meninggal_dunia'],
            'thisYear' => $insiden_kecelakaan,
            'thisYearLR' => $luka_ringan,
            'thisYearLB' => $luka_berat,
            'thisYearMD' => $meninggal_dunia

        ];

        echo json_encode($data['lakaDate']);
    }
    public function getDetailStatistikLakaLantas()
    {
        $title = 'TOP DATA KECELAKAAN LALU LINTAS';
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
            $getdata = $this->M_detail_statistik->getKecelakaanNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik->getKecelakaanNasional($filterbaru);
        }

        // } elseif ($id == 2) {
        //     $title = 'DATA PELANGGARAN LALU LINTAS';
        //     $getGakkum = guzzle_request('GET', 'ditgakkum/daily', [
        //         'headers' => $headers
        //     ]);

        //     $getdata = $getGakkum['data'];
        // } elseif ($id == 3) {
        //     $title = 'DATA KENDARAAN BERMOTOR';
        //     $getRanmor = guzzle_request('GET', 'ranmor/daily', [
        //         'headers' => $headers
        //     ]);

        //     $getdata = $getRanmor["data"]["rows"];
        // } elseif ($id == 4) {
        //     $title = 'JUMLAH SIM NASIONAL';
        //     $getSim = guzzle_request('GET', 'sim/daily', [
        //         'headers' => $headers
        //     ]);

        //     $getdata = $getSim["data"]["rows"];
        // }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getLakalantasByDate()
    {
        $title = 'DATA KECELAKAAN TAHUN' . date('Y') . '';
        $filterbaru = [
            'filter' => true,
            'start_date' => $this->input->post('start_date'),
            'end_date' => $this->input->post('end_date'),
        ];

        $getdata = $this->M_detail_statistik->getLakaByDate($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function exportDatalakalantas()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filter = $this->input->post('filter');
        if ($start_date == '' && $end_date == '') {
            $url = 'laporan_harian/export_laphar';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
            echo json_encode($lakalantasnasional);
        } elseif ($start_date != '' && $end_date != '') {
            $filterbaru = [
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $url = 'laporan_harian/export_laphar?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
            echo json_encode($lakalantasnasional);
        }
    }
    public function getTopLaka()
    {
        $yesterday = $this->input->post('yesterday');
        $url = 'laka_lantas/daily?date=' . $yesterday . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    public function getLakaMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'laka_lantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    public function getLakaYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'laka_lantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }
    public function getLineLaka()
    {
        $title = 'DATA KECELAKAAN LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getKecelakaanNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getKecelakaanNasionalDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    // End Laka

    // Garlantas
    public function Garlantas()
    {
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
        $data['polda'] = $this->M_detail_statistik->get_Polda();
        $data['title'] = 'DATA PELANGGARAN LALU LINTAS';
        $this->load->view('executive/statistik/detail_statistik_garlantas', $data);
    }
    public function getGarlantasDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'garlantas/daily?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'garlantas/daily?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'garlantas/daily?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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
            'thisDayTotal' => $data['thisDay']['total'],
            'thisDayPB' => $data['thisDay']['pelanggaran_berat'],
            'thisDayPS' => $data['thisDay']['pelanggaran_sedang'],
            'thisDayPR' => $data['thisDay']['pelanggaran_ringan'],
            'thisDayT' => $data['thisDay']['total'],
            'thisMonthTotal' => $data['thisMonth']['total'],
            'thisMonthPB' => $data['thisMonth']['pelanggaran_berat'],
            'thisMonthPS' => $data['thisMonth']['pelanggaran_sedang'],
            'thisMonthPR' => $data['thisMonth']['pelanggaran_ringan'],
            'thisMonthT' => $data['thisMonth']['total'],
            'thisYearTotal' => $data['thisYear']['total'],
            'thisYearPB' => $data['thisYear']['pelanggaran_berat'],
            'thisYearPS' => $data['thisYear']['pelanggaran_sedang'],
            'thisYearPR' => $data['thisYear']['pelanggaran_ringan'],
            'thisYearT' => $data['thisYear']['total'],
        ];

        echo json_encode($data['garlantasDate']);
    }
    public function getDetailStatistikGarlantas()
    {
        $title = 'TOP DATA PELANGGARAN LALU LINTAS';
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
            $getdata = $this->M_detail_statistik->getPelanggaranNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik->getPelanggaranNasional($filterbaru);
        }

        // } elseif ($id == 2) {
        //     $title = 'DATA PELANGGARAN LALU LINTAS';
        //     $getGakkum = guzzle_request('GET', 'ditgakkum/daily', [
        //         'headers' => $headers
        //     ]);

        //     $getdata = $getGakkum['data'];
        // } elseif ($id == 3) {
        //     $title = 'DATA KENDARAAN BERMOTOR';
        //     $getRanmor = guzzle_request('GET', 'ranmor/daily', [
        //         'headers' => $headers
        //     ]);

        //     $getdata = $getRanmor["data"]["rows"];
        // } elseif ($id == 4) {
        //     $title = 'JUMLAH SIM NASIONAL';
        //     $getSim = guzzle_request('GET', 'sim/daily', [
        //         'headers' => $headers
        //     ]);

        //     $getdata = $getSim["data"]["rows"];
        // }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function exportDatagarlantas()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filter = $this->input->post('filter');
        if ($start_date == '' && $end_date == '') {
            $url = 'laporan_harian/export_laphar';
            $garlantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
            echo json_encode($garlantasnasional);
        } elseif ($start_date != '' && $end_date != '') {
            $filterbaru = [
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $url = 'laporan_harian/export_laphar?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $garlantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
            echo json_encode($garlantasnasional);
        }
    }

    public function getTopGarlantas()
    {
        $yesterday = $this->input->post('yesterday');
        $url = 'garlantas/daily?date=' . $yesterday . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topGarlantas'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topGarlantas']);
    }

    public function getGarlantasMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'garlantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topGarlantas'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topGarlantas']);
    }

    public function getGarlantasYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'garlantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topGarlantas'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topGarlantas']);
    }
    public function getLineGarlantas()
    {
        $title = 'DATA PELANGGARAN LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getGarlantasNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getGarlantasNasionalDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
    // End Garlantas

    // Turjagwali
    public function Turjagwali()
    {
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
        $data['polda'] = $this->M_detail_statistik->get_Polda();
        $data['title'] = 'DATA TURJAGWALI';
        $this->load->view('executive/statistik/detail_statistik_turjawali', $data);
    }

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
            $getdata = $this->M_detail_statistik->getTurjawaliNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik->getTurjawaliNasional($filterbaru);
        }

        // } elseif ($id == 2) {
        //     $title = 'DATA PELANGGARAN LALU LINTAS';
        //     $getGakkum = guzzle_request('GET', 'ditgakkum/daily', [
        //         'headers' => $headers
        //     ]);

        //     $getdata = $getGakkum['data'];
        // } elseif ($id == 3) {
        //     $title = 'DATA KENDARAAN BERMOTOR';
        //     $getRanmor = guzzle_request('GET', 'ranmor/daily', [
        //         'headers' => $headers
        //     ]);

        //     $getdata = $getRanmor["data"]["rows"];
        // } elseif ($id == 4) {
        //     $title = 'JUMLAH SIM NASIONAL';
        //     $getSim = guzzle_request('GET', 'sim/daily', [
        //         'headers' => $headers
        //     ]);

        //     $getdata = $getSim["data"]["rows"];
        // }

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
            $getdata = $this->M_detail_statistik->getTurjagwaliNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getTurjagwaliNasionalDate($filterbaru);
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
            $getdata = $this->M_detail_statistik->getSimNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik->getSimNasional($filterbaru);
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
        $baru_a = 0;
        $baru_c = 0;
        $baru_c1 = 0;
        $baru_c2 = 0;
        $baru_d = 0;
        $baru_d1 = 0;
        $perpanjangan_a = 0;
        $perpanjangan_au = 0;
        $perpanjangan_c = 0;
        $perpanjangan_c1 = 0;
        $perpanjangan_c2 = 0;
        $perpanjangan_d = 0;
        $perpanjangan_d1 = 0;
        $perpanjangan_b1 = 0;
        $perpanjangan_b1u = 0;
        $perpanjangan_b2 = 0;
        $perpanjangan_b2u = 0;
        $peningkatan_au = 0;
        $peningkatan_b1 = 0;
        $peningkatan_b1u = 0;
        $peningkatan_b2 = 0;
        $peningkatan_b2u = 0;
        $total = 0;

        foreach ($simTopPolda['data']['rows'] as $key) {
            $baru_a += $key['baru_a'];
            $baru_c += $key['baru_c'];
            $baru_c1 += $key['baru_c1'];
            $baru_c2 += $key['baru_c2'];
            $baru_d += $key['baru_d'];
            $baru_d1 += $key['baru_d1'];
            $perpanjangan_a += $key['perpanjangan_a'];
            $perpanjangan_au += $key['perpanjangan_au'];
            $perpanjangan_c += $key['perpanjangan_c'];
            $perpanjangan_c1 += $key['perpanjangan_c1'];
            $perpanjangan_c2 += $key['perpanjangan_c2'];
            $perpanjangan_d += $key['perpanjangan_d'];
            $perpanjangan_d1 += $key['perpanjangan_d1'];
            $perpanjangan_b1 += $key['perpanjangan_b1'];
            $perpanjangan_b1u += $key['perpanjangan_b1u'];
            $perpanjangan_b2 += $key['perpanjangan_b2'];
            $perpanjangan_b2u += $key['perpanjangan_b2u'];
            $peningkatan_au += $key['peningkatan_au'];
            $peningkatan_b1 += $key['peningkatan_b1'];
            $peningkatan_b1u += $key['peningkatan_b1u'];
            $peningkatan_b2 += $key['peningkatan_b2'];
            $peningkatan_b2u += $key['peningkatan_b2u'];
            $total += $key['total'];
        }


        $data = [
            'topSim' => $simTopPolda['data']['rows'],
            'baru_a' => number_format($baru_a),
            'baru_c' => number_format($baru_c),
            'baru_c1' => number_format($baru_c1),
            'baru_c2' => number_format($baru_c2),
            'baru_d' => number_format($baru_d),
            'baru_d1' => number_format($baru_d1),
            'perpanjangan_a' => number_format($perpanjangan_a),
            'perpanjangan_au' => number_format($perpanjangan_au),
            'perpanjangan_c' => number_format($perpanjangan_c),
            'perpanjangan_c1' => number_format($perpanjangan_c1),
            'perpanjangan_c2' => number_format($perpanjangan_c2),
            'perpanjangan_d' => number_format($perpanjangan_d),
            'perpanjangan_d1' => number_format($perpanjangan_d1),
            'perpanjangan_b1' => number_format($perpanjangan_b1),
            'perpanjangan_b1u' => number_format($perpanjangan_b1u),
            'perpanjangan_b2' => number_format($perpanjangan_b2),
            'perpanjangan_b2u' => number_format($perpanjangan_b2u),
            'peningkatan_au' => number_format($peningkatan_au),
            'peningkatan_b1' => number_format($peningkatan_b1),
            'peningkatan_b1u' => number_format($peningkatan_b1u),
            'peningkatan_b2' => number_format($peningkatan_b2),
            'peningkatan_b2u' => number_format($peningkatan_b2u),
            'total' => number_format($total)
        ];
        echo json_encode($data);
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

        $baru_a = 0;
        $baru_c = 0;
        $baru_c1 = 0;
        $baru_c2 = 0;
        $baru_d = 0;
        $baru_d1 = 0;
        $perpanjangan_a = 0;
        $perpanjangan_au = 0;
        $perpanjangan_c = 0;
        $perpanjangan_c1 = 0;
        $perpanjangan_c2 = 0;
        $perpanjangan_d = 0;
        $perpanjangan_d1 = 0;
        $perpanjangan_b1 = 0;
        $perpanjangan_b1u = 0;
        $perpanjangan_b2 = 0;
        $perpanjangan_b2u = 0;
        $peningkatan_au = 0;
        $peningkatan_b1 = 0;
        $peningkatan_b1u = 0;
        $peningkatan_b2 = 0;
        $peningkatan_b2u = 0;
        $total = 0;

        foreach ($simTopPolda['data']['rows'] as $key) {
            $baru_a += $key['baru_a'];
            $baru_c += $key['baru_c'];
            $baru_c1 += $key['baru_c1'];
            $baru_c2 += $key['baru_c2'];
            $baru_d += $key['baru_d'];
            $baru_d1 += $key['baru_d1'];
            $perpanjangan_a += $key['perpanjangan_a'];
            $perpanjangan_au += $key['perpanjangan_au'];
            $perpanjangan_c += $key['perpanjangan_c'];
            $perpanjangan_c1 += $key['perpanjangan_c1'];
            $perpanjangan_c2 += $key['perpanjangan_c2'];
            $perpanjangan_d += $key['perpanjangan_d'];
            $perpanjangan_d1 += $key['perpanjangan_d1'];
            $perpanjangan_b1 += $key['perpanjangan_b1'];
            $perpanjangan_b1u += $key['perpanjangan_b1u'];
            $perpanjangan_b2 += $key['perpanjangan_b2'];
            $perpanjangan_b2u += $key['perpanjangan_b2u'];
            $peningkatan_au += $key['peningkatan_au'];
            $peningkatan_b1 += $key['peningkatan_b1'];
            $peningkatan_b1u += $key['peningkatan_b1u'];
            $peningkatan_b2 += $key['peningkatan_b2'];
            $peningkatan_b2u += $key['peningkatan_b2u'];
            $total += $key['total'];
        }


        $data = [
            'topSim' => $simTopPolda['data']['rows'],
            'baru_a' => number_format($baru_a),
            'baru_c' => number_format($baru_c),
            'baru_c1' => number_format($baru_c1),
            'baru_c2' => number_format($baru_c2),
            'baru_d' => number_format($baru_d),
            'baru_d1' => number_format($baru_d1),
            'perpanjangan_a' => number_format($perpanjangan_a),
            'perpanjangan_au' => number_format($perpanjangan_au),
            'perpanjangan_c' => number_format($perpanjangan_c),
            'perpanjangan_c1' => number_format($perpanjangan_c1),
            'perpanjangan_c2' => number_format($perpanjangan_c2),
            'perpanjangan_d' => number_format($perpanjangan_d),
            'perpanjangan_d1' => number_format($perpanjangan_d1),
            'perpanjangan_b1' => number_format($perpanjangan_b1),
            'perpanjangan_b1u' => number_format($perpanjangan_b1u),
            'perpanjangan_b2' => number_format($perpanjangan_b2),
            'perpanjangan_b2u' => number_format($perpanjangan_b2u),
            'peningkatan_au' => number_format($peningkatan_au),
            'peningkatan_b1' => number_format($peningkatan_b1),
            'peningkatan_b1u' => number_format($peningkatan_b1u),
            'peningkatan_b2' => number_format($peningkatan_b2),
            'peningkatan_b2u' => number_format($peningkatan_b2u),
            'total' => number_format($total)
        ];
        echo json_encode($data);
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

        $baru_a = 0;
        $baru_c = 0;
        $baru_c1 = 0;
        $baru_c2 = 0;
        $baru_d = 0;
        $baru_d1 = 0;
        $perpanjangan_a = 0;
        $perpanjangan_au = 0;
        $perpanjangan_c = 0;
        $perpanjangan_c1 = 0;
        $perpanjangan_c2 = 0;
        $perpanjangan_d = 0;
        $perpanjangan_d1 = 0;
        $perpanjangan_b1 = 0;
        $perpanjangan_b1u = 0;
        $perpanjangan_b2 = 0;
        $perpanjangan_b2u = 0;
        $peningkatan_au = 0;
        $peningkatan_b1 = 0;
        $peningkatan_b1u = 0;
        $peningkatan_b2 = 0;
        $peningkatan_b2u = 0;
        $total = 0;

        foreach ($simTopPolda['data']['rows'] as $key) {
            $baru_a += $key['baru_a'];
            $baru_c += $key['baru_c'];
            $baru_c1 += $key['baru_c1'];
            $baru_c2 += $key['baru_c2'];
            $baru_d += $key['baru_d'];
            $baru_d1 += $key['baru_d1'];
            $perpanjangan_a += $key['perpanjangan_a'];
            $perpanjangan_au += $key['perpanjangan_au'];
            $perpanjangan_c += $key['perpanjangan_c'];
            $perpanjangan_c1 += $key['perpanjangan_c1'];
            $perpanjangan_c2 += $key['perpanjangan_c2'];
            $perpanjangan_d += $key['perpanjangan_d'];
            $perpanjangan_d1 += $key['perpanjangan_d1'];
            $perpanjangan_b1 += $key['perpanjangan_b1'];
            $perpanjangan_b1u += $key['perpanjangan_b1u'];
            $perpanjangan_b2 += $key['perpanjangan_b2'];
            $perpanjangan_b2u += $key['perpanjangan_b2u'];
            $peningkatan_au += $key['peningkatan_au'];
            $peningkatan_b1 += $key['peningkatan_b1'];
            $peningkatan_b1u += $key['peningkatan_b1u'];
            $peningkatan_b2 += $key['peningkatan_b2'];
            $peningkatan_b2u += $key['peningkatan_b2u'];
            $total += $key['total'];
        }


        $data = [
            'topSim' => $simTopPolda['data']['rows'],
            'baru_a' => number_format($baru_a),
            'baru_c' => number_format($baru_c),
            'baru_c1' => number_format($baru_c1),
            'baru_c2' => number_format($baru_c2),
            'baru_d' => number_format($baru_d),
            'baru_d1' => number_format($baru_d1),
            'perpanjangan_a' => number_format($perpanjangan_a),
            'perpanjangan_au' => number_format($perpanjangan_au),
            'perpanjangan_c' => number_format($perpanjangan_c),
            'perpanjangan_c1' => number_format($perpanjangan_c1),
            'perpanjangan_c2' => number_format($perpanjangan_c2),
            'perpanjangan_d' => number_format($perpanjangan_d),
            'perpanjangan_d1' => number_format($perpanjangan_d1),
            'perpanjangan_b1' => number_format($perpanjangan_b1),
            'perpanjangan_b1u' => number_format($perpanjangan_b1u),
            'perpanjangan_b2' => number_format($perpanjangan_b2),
            'perpanjangan_b2u' => number_format($perpanjangan_b2u),
            'peningkatan_au' => number_format($peningkatan_au),
            'peningkatan_b1' => number_format($peningkatan_b1),
            'peningkatan_b1u' => number_format($peningkatan_b1u),
            'peningkatan_b2' => number_format($peningkatan_b2),
            'peningkatan_b2u' => number_format($peningkatan_b2u),
            'total' => number_format($total)
        ];
        echo json_encode($data);
    }

    public function getLineSim()
    {
        $title = 'DATA SIM LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getSimNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getSimNasionalDate($filterbaru);
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
            $getdata = $this->M_detail_statistik->getStnkNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik->getStnkNasional($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getLineStnk()
    {
        $title = 'DATA STNK';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getStnkNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getStnkNasionalDate($filterbaru);
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

        $bbn_1_r2 = 0;
        $bbn_1_r4 = 0;
        $perubahan_r2 = 0;
        $perubahan_r4 = 0;
        $perpanjangan_r2 = 0;
        $perpanjangan_r4 = 0;
        $mutasi_masuk_r2 = 0;
        $mutasi_keluar_r2 = 0;
        $mutasi_masuk_r4 = 0;
        $mutasi_keluar_r4 = 0;
        $pengesahan_r2 = 0;
        $pengesahan_r4 = 0;
        $samolnas_r2 = 0;
        $samolnas_r4 = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $bbn_1_r2 += $key['bbn_1_r2'];
            $bbn_1_r4 += $key['bbn_1_r4'];
            $perubahan_r2 += $key['perubahan_r2'];
            $perubahan_r4 += $key['perubahan_r4'];
            $perpanjangan_r2 += $key['perpanjangan_r2'];
            $perpanjangan_r4 += $key['perpanjangan_r4'];
            $mutasi_masuk_r2 += $key['mutasi_masuk_r2'];
            $mutasi_masuk_r4 += $key['mutasi_masuk_r4'];
            $mutasi_keluar_r2 += $key['mutasi_keluar_r2'];
            $mutasi_keluar_r4 += $key['mutasi_keluar_r4'];
            $pengesahan_r2 += $key['pengesahan_r2'];
            $pengesahan_r4 += $key['pengesahan_r4'];
            $samolnas_r2 += $key['samolnas_r2'];
            $samolnas_r4 += $key['samolnas_r4'];
            $total += $key['total'];
        }


        $data = [
            'topStnk' => $lakaTopPolda['data']['rows'],
            'bbn_1_r2' => number_format($bbn_1_r2),
            'bbn_1_r4' => number_format($bbn_1_r4),
            'perubahan_r2' => number_format($perubahan_r2),
            'perubahan_r4' => number_format($perubahan_r4),
            'perpanjangan_r2' => number_format($perpanjangan_r2),
            'perpanjangan_r4' => number_format($perpanjangan_r4),
            'mutasi_masuk_r2' => number_format($mutasi_masuk_r2),
            'mutasi_masuk_r4' => number_format($mutasi_masuk_r4),
            'mutasi_keluar_r2' => number_format($mutasi_keluar_r2),
            'mutasi_keluar_r4' => number_format($mutasi_keluar_r4),
            'pengesahan_r2' => number_format($pengesahan_r2),
            'pengesahan_r4' => number_format($pengesahan_r4),
            'samolnas_r2' => number_format($samolnas_r2),
            'samolnas_r4' => number_format($samolnas_r4),
            'total' => number_format($total)
        ];
        echo json_encode($data);
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


        $bbn_1_r2 = 0;
        $bbn_1_r4 = 0;
        $perubahan_r2 = 0;
        $perubahan_r4 = 0;
        $perpanjangan_r2 = 0;
        $perpanjangan_r4 = 0;
        $mutasi_masuk_r2 = 0;
        $mutasi_keluar_r2 = 0;
        $mutasi_masuk_r4 = 0;
        $mutasi_keluar_r4 = 0;
        $pengesahan_r2 = 0;
        $pengesahan_r4 = 0;
        $samolnas_r2 = 0;
        $samolnas_r4 = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $bbn_1_r2 += $key['bbn_1_r2'];
            $bbn_1_r4 += $key['bbn_1_r4'];
            $perubahan_r2 += $key['perubahan_r2'];
            $perubahan_r4 += $key['perubahan_r4'];
            $perpanjangan_r2 += $key['perpanjangan_r2'];
            $perpanjangan_r4 += $key['perpanjangan_r4'];
            $mutasi_masuk_r2 += $key['mutasi_masuk_r2'];
            $mutasi_masuk_r4 += $key['mutasi_masuk_r4'];
            $mutasi_keluar_r2 += $key['mutasi_keluar_r2'];
            $mutasi_keluar_r4 += $key['mutasi_keluar_r4'];
            $pengesahan_r2 += $key['pengesahan_r2'];
            $pengesahan_r4 += $key['pengesahan_r4'];
            $samolnas_r2 += $key['samolnas_r2'];
            $samolnas_r4 += $key['samolnas_r4'];
            $total += $key['total'];
        }


        $data = [
            'topStnk' => $lakaTopPolda['data']['rows'],
            'bbn_1_r2' => number_format($bbn_1_r2),
            'bbn_1_r4' => number_format($bbn_1_r4),
            'perubahan_r2' => number_format($perubahan_r2),
            'perubahan_r4' => number_format($perubahan_r4),
            'perpanjangan_r2' => number_format($perpanjangan_r2),
            'perpanjangan_r4' => number_format($perpanjangan_r4),
            'mutasi_masuk_r2' => number_format($mutasi_masuk_r2),
            'mutasi_masuk_r4' => number_format($mutasi_masuk_r4),
            'mutasi_keluar_r2' => number_format($mutasi_keluar_r2),
            'mutasi_keluar_r4' => number_format($mutasi_keluar_r4),
            'pengesahan_r2' => number_format($pengesahan_r2),
            'pengesahan_r4' => number_format($pengesahan_r4),
            'samolnas_r2' => number_format($samolnas_r2),
            'samolnas_r4' => number_format($samolnas_r4),
            'total' => number_format($total)
        ];
        echo json_encode($data);
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


        $bbn_1_r2 = 0;
        $bbn_1_r4 = 0;
        $perubahan_r2 = 0;
        $perubahan_r4 = 0;
        $perpanjangan_r2 = 0;
        $perpanjangan_r4 = 0;
        $mutasi_masuk_r2 = 0;
        $mutasi_keluar_r2 = 0;
        $mutasi_masuk_r4 = 0;
        $mutasi_keluar_r4 = 0;
        $pengesahan_r2 = 0;
        $pengesahan_r4 = 0;
        $samolnas_r2 = 0;
        $samolnas_r4 = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $bbn_1_r2 += $key['bbn_1_r2'];
            $bbn_1_r4 += $key['bbn_1_r4'];
            $perubahan_r2 += $key['perubahan_r2'];
            $perubahan_r4 += $key['perubahan_r4'];
            $perpanjangan_r2 += $key['perpanjangan_r2'];
            $perpanjangan_r4 += $key['perpanjangan_r4'];
            $mutasi_masuk_r2 += $key['mutasi_masuk_r2'];
            $mutasi_masuk_r4 += $key['mutasi_masuk_r4'];
            $mutasi_keluar_r2 += $key['mutasi_keluar_r2'];
            $mutasi_keluar_r4 += $key['mutasi_keluar_r4'];
            $pengesahan_r2 += $key['pengesahan_r2'];
            $pengesahan_r4 += $key['pengesahan_r4'];
            $samolnas_r2 += $key['samolnas_r2'];
            $samolnas_r4 += $key['samolnas_r4'];
            $total += $key['total'];
        }


        $data = [
            'topStnk' => $lakaTopPolda['data']['rows'],
            'bbn_1_r2' => number_format($bbn_1_r2),
            'bbn_1_r4' => number_format($bbn_1_r4),
            'perubahan_r2' => number_format($perubahan_r2),
            'perubahan_r4' => number_format($perubahan_r4),
            'perpanjangan_r2' => number_format($perpanjangan_r2),
            'perpanjangan_r4' => number_format($perpanjangan_r4),
            'mutasi_masuk_r2' => number_format($mutasi_masuk_r2),
            'mutasi_masuk_r4' => number_format($mutasi_masuk_r4),
            'mutasi_keluar_r2' => number_format($mutasi_keluar_r2),
            'mutasi_keluar_r4' => number_format($mutasi_keluar_r4),
            'pengesahan_r2' => number_format($pengesahan_r2),
            'pengesahan_r4' => number_format($pengesahan_r4),
            'samolnas_r2' => number_format($samolnas_r2),
            'samolnas_r4' => number_format($samolnas_r4),
            'total' => number_format($total)
        ];
        echo json_encode($data);
    }

    // END STNK
    //BPKB
    public function getDetailStatistikBpkb()
    {
        $title = 'TOP DATA BPKB LALU LINTAS';
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
            $getdata = $this->M_detail_statistik->getBpkbNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik->getBpkbNasional($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getLineBpkb()
    {
        $title = 'DATA BPKB';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getBpkbNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getBpkbNasionalDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getTopBpkb()
    {
        $yesterday = $this->input->post('yesterday');
        $url = 'bpkb/daily?date=' . $yesterday . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    public function getBpkbMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'bpkb/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }

    public function getBpkbYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'bpkb/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['topLaka'] = $lakaTopPolda['data']['rows'];
        echo json_encode($data['topLaka']);
    }
    //END BPKB

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
            $getdata = $this->M_detail_statistik->getDikmasNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik->getDikmasNasional($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getLineDikmas()
    {
        $title = 'DATA DIKMASLANTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getDikmasNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getDikmasNasionalDate($filterbaru);
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
        //     $getdata = $this->M_detail_statistik->getSimNasional($filterbaru);
        // } elseif ($filter != 0) {
        //     $filterbaru = [
        //         'filter' => $filter,
        //         'start_date' => $this->input->post('start_date'),
        //         'end_date' => $this->input->post('end_date'),
        //         'limit' => $limit
        //     ];
        //     $getdata = $this->M_detail_statistik->getSimNasional($filterbaru);
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
        // $yesterday = $this->input->post('yesterday');
        // $url = 'sim/daily?date=' . $yesterday . '&topPolda=true';
        // $simTopPolda = guzzle_request('GET', $url, [
        //     'headers' => [
        //         'Authorization' => $this->session->userdata['token']
        //     ]
        // ]);

        // $data['topSim'] = $simTopPolda['data']['rows'];
        // echo json_encode($data['topSim']);
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

    public function getLineWalpjr()
    {
        $title = 'DATA';
        // $filter = $this->input->post('filter');
        // $limit = $this->input->post('limit');
        // $yesterday = $this->input->post('yesterday');
        // if ($filter == 0) {
        //     $filterbaru = [
        //         'filter' => $filter,
        //         'start_date' => $this->input->post('start_date'),
        //         'end_date' => $this->input->post('end_date'),
        //     ];
        //     $getdata = $this->M_detail_statistik->getWalpjrNasionalDate($filterbaru);
        // } elseif ($filter != 0) {
        //     $filterbaru = [
        //         'filter' => $filter,
        //         'start_date' => $this->input->post('start_date'),
        //         'end_date' => $this->input->post('end_date'),
        //     ];
        //     $getdata = $this->M_detail_statistik->getWalpjrNasionalDate($filterbaru);
        // }

        // $data = [
        //     'data' => $getdata,
        //     'title' => $title,
        // ];

        // $date = date("d-m-Y");
        $date = date("d-m-Y");
        $onedays = date('d-m-Y', strtotime($date . "-1 days"));
        $twodays = date('d-m-Y', strtotime($date . "-2 days"));
        $threedays = date('d-m-Y', strtotime($date . "-3 days"));
        $fourdays = date('d-m-Y', strtotime($date . "-4 days"));
        $fivedays = date('d-m-Y', strtotime($date . "-5 days"));
        $sixdays = date('d-m-Y', strtotime($date . "-6 days"));
        $data = [
            'data' => [
                'polda_name' => [$sixdays, $fivedays, $fourdays, $threedays, $twodays, $onedays, $date],
                'polda_walpjr' => ['0', '0', '0', '0', '0', '0', '0']
            ],
            'title' => $title,
        ];

        echo json_encode($data);
    }

    public function Ranmor()
    {
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
        $data['polda'] = $this->M_detail_statistik->get_Polda();
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
            $getdata = $this->M_detail_statistik->getRanmorNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'limit' => $limit
            ];
            $getdata = $this->M_detail_statistik->getRanmorNasional($filterbaru);
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

        $mobil_penumpang = 0;
        $mobil_bus = 0;
        $mobil_barang = 0;
        $sepeda_motor = 0;
        $ransus = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $mobil_penumpang += $key['mobil_penumpang'];
            $mobil_bus += $key['mobil_bus'];
            $mobil_barang += $key['mobil_barang'];
            $sepeda_motor += $key['sepeda_motor'];
            $ransus += $key['ransus'];
            $total += $key['total'];
        }


        $data = [
            'topRanmor' => $lakaTopPolda['data']['rows'],
            'mobil_penumpang' => number_format($mobil_penumpang),
            'mobil_bus' => number_format($mobil_bus),
            'mobil_barang' => number_format($mobil_barang),
            'sepeda_motor' => number_format($sepeda_motor),
            'ransus' => number_format($ransus),
            'total' => number_format($total)
        ];
        echo json_encode($data);
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
        $mobil_penumpang = 0;
        $mobil_bus = 0;
        $mobil_barang = 0;
        $sepeda_motor = 0;
        $ransus = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $mobil_penumpang += $key['mobil_penumpang'];
            $mobil_bus += $key['mobil_bus'];
            $mobil_barang += $key['mobil_barang'];
            $sepeda_motor += $key['sepeda_motor'];
            $ransus += $key['ransus'];
            $total += $key['total'];
        }


        $data = [
            'topRanmor' => $lakaTopPolda['data']['rows'],
            'mobil_penumpang' => number_format($mobil_penumpang),
            'mobil_bus' => number_format($mobil_bus),
            'mobil_barang' => number_format($mobil_barang),
            'sepeda_motor' => number_format($sepeda_motor),
            'ransus' => number_format($ransus),
            'total' => number_format($total)
        ];
        echo json_encode($data);
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
        $mobil_penumpang = 0;
        $mobil_bus = 0;
        $mobil_barang = 0;
        $sepeda_motor = 0;
        $ransus = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $mobil_penumpang += $key['mobil_penumpang'];
            $mobil_bus += $key['mobil_bus'];
            $mobil_barang += $key['mobil_barang'];
            $sepeda_motor += $key['sepeda_motor'];
            $ransus += $key['ransus'];
            $total += $key['total'];
        }


        $data = [
            'topRanmor' => $lakaTopPolda['data']['rows'],
            'mobil_penumpang' => number_format($mobil_penumpang),
            'mobil_bus' => number_format($mobil_bus),
            'mobil_barang' => number_format($mobil_barang),
            'sepeda_motor' => number_format($sepeda_motor),
            'ransus' => number_format($ransus),
            'total' => number_format($total)
        ];
        echo json_encode($data);
    }
    public function getSimDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'sim/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'sim/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'sim/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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
            // $ybaru_a += $key['baru_a'];
            // $ybaru_c += $key['baru_c'];
            // $ybaru_c1 += 0;
            // $ybaru_c2 += 0;
            // $ybaru_d += $key['baru_d'];
            // $ybaru_d1 += 0;
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

        $dataDay = array_values($thisDay['data'][0]);
        array_pop($dataDay);
        array_pop($dataDay);
        array_pop($dataDay);
        array_pop($dataDay);
        array_pop($dataDay);
        array_pop($dataDay);
        $dataMonth = array_values($thisMonth['data'][0]);
        array_pop($dataMonth);
        array_pop($dataMonth);
        array_pop($dataMonth);
        array_pop($dataMonth);
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

        $data['simDate'] = [
            'thisDay' => $totalDay,
            'detailsthisDay' => $thisDay['data'][0],
            'thisMonth' => $totalMonth,
            'detailsthisMonth' => $thisMonth['data'][0],
            'thisYear' => $totalYear,
            'detailsthisYear' => $data['thisYear'],
            // 'thisYear' => $data['thisYear']
        ];

        echo json_encode($data['simDate']);
    }
    public function getDitgakkumDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'ditgakkum/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'ditgakkum/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'ditgakkum/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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
    public function getDitkamselDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'ditkamsel/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'ditkamsel/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'ditkamsel/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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

    public function getDitregidentDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'ditregident/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'ditregident/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'ditregident/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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
    public function getStnkDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'stnk/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'stnk/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'stnk/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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
            'thisDay' => $totalDay,
            'detailsthisDay' => $thisDay['data'][0],
            'thisMonth' => $totalMonth,
            'detailsthisMonth' => $thisMonth['data'][0],
            'thisYear' => $totalYear,
            'detailsthisYear' => $data['thisYear'],
            // 'thisYear' => $data['thisYear']
        ];

        echo json_encode($data['stnkDate']);
    }

    public function getRanmorDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'ditregident/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'ditregident/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'ditregident/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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
        }

        $data['thisYear'] = [
            'ranmor' => $ranmor,
        ];

        $data['ranmorDate'] = [
            'thisDay' => $thisDay['data'],
            'thisMonth' => $thisMonth['data'],
            'thisYear' => $data['thisYear']
        ];

        echo json_encode($data['ranmorDate']);
    }
    public function getLineRanmor()
    {
        $title = 'DATA RANMOR LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getRanmorNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getRanmorNasionalDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }
}
