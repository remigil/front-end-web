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
        //     $getdata = $this->M_detail_statistik_polda->getWalpjrNasionalDate($filterbaru);
        // } elseif ($filter != 0) {
        //     $filterbaru = [
        //         'filter' => $filter,
        //         'start_date' => $this->input->post('start_date'),
        //         'end_date' => $this->input->post('end_date'),
        //     ];
        //     $getdata = $this->M_detail_statistik_polda->getWalpjrNasionalDate($filterbaru);
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
            $getdata = $this->M_detail_statistik_polda->getRanmorNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
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
