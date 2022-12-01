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

        $baru = 0;
        $perpanjangan = 0;
        foreach ($thisYear['data'] as $key) {
            $baru += $key['baru'];
            $perpanjangan += $key['perpanjangan'];
        }

        $data['thisYear'] = [
            'baru' => $baru,
            'perpanjangan' => $perpanjangan,
        ];

        $data['simDate'] = [
            'thisDay' => $thisDay['data'],
            'thisMonth' => $thisMonth['data'],
            'thisYear' => $data['thisYear']
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
