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

    public function LakaLantas()
    {
        $data['polda'] = $this->M_detail_statistik->get_Polda();
        $data['title'] = 'DATA KECELAKAAN LALU LINTAS';
        $this->load->view('executive/statistik/detail_statistik_lakalantas', $data);
    }
    public function Garlantas()
    {
        $data['polda'] = $this->M_detail_statistik->get_Polda();
        $data['title'] = 'DATA PELANGGARAN LALU LINTAS';
        $this->load->view('executive/statistik/detail_statistik_garlantas', $data);
    }
    public function Turjagwali()
    {
        $data['polda'] = $this->M_detail_statistik->get_Polda();
        $data['title'] = 'DATA TURJAGWALI';
        $this->load->view('executive/statistik/detail_statistik_turjawali', $data);
    }
    public function Ranmor()
    {
        $data['polda'] = $this->M_detail_statistik->get_Polda();
        $data['title'] = 'DATA KENDARAAN BERMOTOR';
        $this->load->view('executive/statistik/detail_statistik_ranmor', $data);
    }

    public function getDetailStatistikLakaLantas()
    {
        $title = 'DATA KECELAKAAN LALU LINTAS';
        $filter = $this->input->post('filter');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
            ];
            $getdata = $this->M_detail_statistik->getKecelakaanNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
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

    public function getDetailStatistikGarlantas()
    {
        $title = 'DATA PELANGGARAN LALU LINTAS';
        $filter = $this->input->post('filter');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
            ];
            $getdata = $this->M_detail_statistik->getPelanggaranNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
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

    public function getDetailStatistikTurjawali()
    {
        $title = 'DATA TURJAWALI';
        $filter = $this->input->post('filter');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
            ];
            $getdata = $this->M_detail_statistik->getTurjawaliNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
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

    public function getDetailStatistikRanmor()
    {
        $title = 'DATA KENDARAAN BERMOTOR';
        $filter = $this->input->post('filter');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
            ];
            $getdata = $this->M_detail_statistik->getRanmorNasional($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $getdata = $this->M_detail_statistik->getRanmorNasional($filterbaru);
        }
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
}
