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
    public function getTurjagwaliDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'turjagwali/daily?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'turjagwali/daily?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'turjagwali/daily?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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

        $thisDayTUR = 0;
        $thisDayJAG = 0;
        $thisDayWAL = 0;
        $thisDayLI = 0;
        $thisDayTL = 0;
        foreach ($thisDay['data']['rows'] as $key) {
            $thisDayTUR += $key['pengaturan'];
            $thisDayJAG += $key['penjagaan'];
            $thisDayWAL += $key['pengawalan'];
            $thisDayLI  += $key['patroli'];
            $thisDayTL  += $key['total'];
        }

        $data['thisDay'] = [
            'pengaturan' => $thisDayTUR,
            'penjagaan' => $thisDayJAG,
            'pengawalan' => $thisDayWAL,
            'patroli' => $thisDayLI,
            'total' => $thisDayTL,
        ];
        $thisMonthTUR = 0;
        $thisMonthJAG = 0;
        $thisMonthWAL = 0;
        $thisMonthLI = 0;
        $thisMonthTL = 0;
        foreach ($thisMonth['data']['rows'] as $key) {
            $thisMonthTUR += $key['pengaturan'];
            $thisMonthJAG += $key['penjagaan'];
            $thisMonthWAL += $key['pengawalan'];
            $thisMonthLI += $key['patroli'];
            $thisMonthTL  += $key['total'];
        }

        $data['thisMonth'] = [
            'pengaturan' => $thisMonthTUR,
            'penjagaan' => $thisMonthJAG,
            'pengawalan' => $thisMonthWAL,
            'patroli' => $thisMonthLI,
            'total' => $thisMonthTL,
        ];
        $thisYearTUR = 0;
        $thisYearJAG = 0;
        $thisYearWAL = 0;
        $thisYearLI = 0;
        $thisYearTL = 0;
        foreach ($thisYear['data']['rows'] as $key) {
            $thisYearTUR += $key['pengaturan'];
            $thisYearJAG += $key['penjagaan'];
            $thisYearWAL += $key['pengawalan'];
            $thisYearLI  += $key['patroli'];
            $thisYearTL  += $key['total'];
        }

        $data['thisYear'] = [
            'pengaturan' => $thisYearTUR,
            'penjagaan' => $thisYearJAG,
            'pengawalan' => $thisYearWAL,
            'patroli' => $thisYearLI,
            'total' => $thisYearTL,
        ];

        $data['TurjagwaliDate'] = [
            'thisDayTotal' => number_format($data['thisDay']['total']),
            'thisDayTUR' => number_format($data['thisDay']['pengaturan']),
            'thisDayJAG' => number_format($data['thisDay']['penjagaan']),
            'thisDayWAL' => number_format($data['thisDay']['pengawalan']),
            'thisDayLI' => number_format($data['thisDay']['patroli']),
            'thisMonthTotal' => number_format($data['thisMonth']['total']),
            'thisMonthTUR' => number_format($data['thisMonth']['pengaturan']),
            'thisMonthJAG' => number_format($data['thisMonth']['penjagaan']),
            'thisMonthWAL' => number_format($data['thisMonth']['pengawalan']),
            'thisMonthLI' => number_format($data['thisMonth']['patroli']),
            'thisYearTotal' => number_format($data['thisYear']['total']),
            'thisYearTUR' => number_format($data['thisYear']['pengaturan']),
            'thisYearJAG' => number_format($data['thisYear']['penjagaan']),
            'thisYearWAL' => number_format($data['thisYear']['pengawalan']),
            'thisYearLI' => number_format($data['thisYear']['patroli']),
        ];

        echo json_encode($data['TurjagwaliDate']);
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
        // $yesterday = $this->input->post('yesterday');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url = 'laka_lantas/daily?filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '&topPolda=true';
        // $url = 'laka_lantas/daily?date=' . $yesterday . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $insiden_kecelakaan = 0;
        $kerugian_material = 0;
        $luka_berat = 0;
        $luka_ringan = 0;
        $meninggal_dunia = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $insiden_kecelakaan += $key['insiden_kecelakaan'];
            $kerugian_material += $key['kerugian_material'];
            $luka_berat += $key['luka_berat'];
            $luka_ringan += $key['luka_ringan'];
            $meninggal_dunia += $key['meninggal_dunia'];
            $total += $key['total'];
        }
        $data = [
            'topLaka' => $lakaTopPolda['data']['rows'],
            'insiden_kecelakaan' => number_format($insiden_kecelakaan),
            'kerugian_material' => number_format($kerugian_material),
            'luka_berat' => number_format($luka_berat),
            'luka_ringan' => number_format($luka_ringan),
            'meninggal_dunia' => number_format($meninggal_dunia),
            'start_date' => format_indo($start_date),
            'end_date' => format_indo($end_date),
            'total' => number_format($total)
        ];

        echo json_encode($data);
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
        $insiden_kecelakaan = 0;
        $kerugian_material = 0;
        $luka_berat = 0;
        $luka_ringan = 0;
        $meninggal_dunia = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $insiden_kecelakaan += $key['insiden_kecelakaan'];
            $kerugian_material += $key['kerugian_material'];
            $luka_berat += $key['luka_berat'];
            $luka_ringan += $key['luka_ringan'];
            $meninggal_dunia += $key['meninggal_dunia'];
            $total += $key['total'];
        }
        $data = [
            'topLaka' => $lakaTopPolda['data']['rows'],
            'insiden_kecelakaan' => number_format($insiden_kecelakaan),
            'kerugian_material' => number_format($kerugian_material),
            'luka_berat' => number_format($luka_berat),
            'luka_ringan' => number_format($luka_ringan),
            'meninggal_dunia' => number_format($meninggal_dunia),
            'total' => number_format($total)
        ];

        echo json_encode($data);
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
        $insiden_kecelakaan = 0;
        $kerugian_material = 0;
        $luka_berat = 0;
        $luka_ringan = 0;
        $meninggal_dunia = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $insiden_kecelakaan += $key['insiden_kecelakaan'];
            $kerugian_material += $key['kerugian_material'];
            $luka_berat += $key['luka_berat'];
            $luka_ringan += $key['luka_ringan'];
            $meninggal_dunia += $key['meninggal_dunia'];
            $total += $key['total'];
        }
        $data = [
            'topLaka' => $lakaTopPolda['data']['rows'],
            'insiden_kecelakaan' => number_format($insiden_kecelakaan),
            'kerugian_material' => number_format($kerugian_material),
            'luka_berat' => number_format($luka_berat),
            'luka_ringan' => number_format($luka_ringan),
            'meninggal_dunia' => number_format($meninggal_dunia),
            'total' => number_format($total)
        ];

        echo json_encode($data);
    }
    public function getLineLaka()
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
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik->getKecelakaanNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
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
        // $yesterday = $this->input->post('yesterday');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        // $url = 'garlantas/daily?date=' . $yesterday . '&topPolda=true';
        $url = 'garlantas/daily?filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '&topPolda=true';

        $garlantasTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $pelanggaran_berat = 0;
        $pelanggaran_ringan = 0;
        $pelanggaran_sedang = 0;
        $teguran = 0;
        $total = 0;

        foreach ($garlantasTopPolda['data']['rows'] as $key) {
            $pelanggaran_berat += $key['pelanggaran_berat'];
            $pelanggaran_ringan += $key['pelanggaran_ringan'];
            $pelanggaran_sedang += $key['pelanggaran_sedang'];
            $teguran += $key['teguran'];
            $total += $key['total'];
        }


        $data = [
            'topGarlantas' => $garlantasTopPolda['data']['rows'],
            'pelanggaran_berat' => number_format($pelanggaran_berat),
            'pelanggaran_sedang' => number_format($pelanggaran_sedang),
            'pelanggaran_ringan' => number_format($pelanggaran_ringan),
            'teguran' => number_format($teguran),
            'start_date' => format_indo($start_date),
            'end_date' => format_indo($end_date),
            'total' => number_format($total)
        ];
        echo json_encode($data);
    }

    public function getGarlantasMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'garlantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $garlantasTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $pelanggaran_berat = 0;
        $pelanggaran_ringan = 0;
        $pelanggaran_sedang = 0;
        $teguran = 0;
        $total = 0;

        foreach ($garlantasTopPolda['data']['rows'] as $key) {
            $pelanggaran_berat += $key['pelanggaran_berat'];
            $pelanggaran_ringan += $key['pelanggaran_ringan'];
            $pelanggaran_sedang += $key['pelanggaran_sedang'];
            $teguran += $key['teguran'];
            $total += $key['total'];
        }


        $data = [
            'topGarlantas' => $garlantasTopPolda['data']['rows'],
            'pelanggaran_berat' => number_format($pelanggaran_berat),
            'pelanggaran_sedang' => number_format($pelanggaran_sedang),
            'pelanggaran_ringan' => number_format($pelanggaran_ringan),
            'teguran' => number_format($teguran),
            'total' => number_format($total)
        ];
        echo json_encode($data);
    }

    public function getGarlantasYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'garlantas/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $garlantasTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $pelanggaran_berat = 0;
        $pelanggaran_ringan = 0;
        $pelanggaran_sedang = 0;
        $teguran = 0;
        $total = 0;

        foreach ($garlantasTopPolda['data']['rows'] as $key) {
            $pelanggaran_berat += $key['pelanggaran_berat'];
            $pelanggaran_ringan += $key['pelanggaran_ringan'];
            $pelanggaran_sedang += $key['pelanggaran_sedang'];
            $teguran += $key['teguran'];
            $total += $key['total'];
        }


        $data = [
            'topGarlantas' => $garlantasTopPolda['data']['rows'],
            'pelanggaran_berat' => number_format($pelanggaran_berat),
            'pelanggaran_sedang' => number_format($pelanggaran_sedang),
            'pelanggaran_ringan' => number_format($pelanggaran_ringan),
            'teguran' => number_format($teguran),
            'total' => number_format($total)
        ];
        echo json_encode($data);
    }
    public function getLineGarlantas()
    {
        $start = $this->input->post('start_date');
        $asd = explode('-', $start);
        $end = $this->input->post('end_date');
        $zxc = explode('-', $end);
        $title = 'DATA GARLANTAS LALU LINTAS TANGGAL <span class="text-danger">' . $asd[2] . '/' . $asd[1] . '/' . $asd[0] . ' - ' . $zxc[2] . '/' . $zxc[1] . '/' . $zxc[0] . "</span>";

        // $title = 'DATA PELANGGARAN LALU LINTAS';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik->getGarlantasNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
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
        // $yesterday = $this->input->post('yesterday');
        // $url = 'turjagwali/daily?date=' . $yesterday . '&topPolda=true';
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url = 'turjagwali/daily?filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '&topPolda=true';

        $turjagwaliTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $pengaturan = 0;
        $penjagaan = 0;
        $pengawalan = 0;
        $patroli = 0;
        $total = 0;

        foreach ($turjagwaliTopPolda['data']['rows'] as $key) {
            $pengaturan += $key['pengaturan'];
            $penjagaan += $key['penjagaan'];
            $pengawalan += $key['pengawalan'];
            $patroli += $key['patroli'];
            $total += $key['total'];
        }
        $data = [
            'topTurjagwali' => $turjagwaliTopPolda['data']['rows'],
            'pengaturan' => number_format($pengaturan),
            'penjagaan' => number_format($penjagaan),
            'pengawalan' => number_format($pengawalan),
            'patroli' => number_format($patroli),
            'total' => number_format($total),

            'start_date' => format_indo($start_date),
            'end_date' => format_indo($end_date)
        ];
        echo json_encode($data);
    }

    public function getTurjagwaliMonth()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'turjagwali/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $turjagwaliTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $pengaturan = 0;
        $penjagaan = 0;
        $pengawalan = 0;
        $patroli = 0;
        $total = 0;

        foreach ($turjagwaliTopPolda['data']['rows'] as $key) {
            $pengaturan += $key['pengaturan'];
            $penjagaan += $key['penjagaan'];
            $pengawalan += $key['pengawalan'];
            $patroli += $key['patroli'];
            $total += $key['total'];
        }
        $data = [
            'topTurjagwali' => $turjagwaliTopPolda['data']['rows'],
            'pengaturan' => number_format($pengaturan),
            'penjagaan' => number_format($penjagaan),
            'pengawalan' => number_format($pengawalan),
            'patroli' => number_format($patroli),
            'total' => number_format($total)
        ];
        echo json_encode($data);
    }

    public function getTurjagwaliYear()
    {
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url = 'turjagwali/daily?filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '&topPolda=true';
        $turjagwaliTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $pengaturan = 0;
        $penjagaan = 0;
        $pengawalan = 0;
        $patroli = 0;
        $total = 0;

        foreach ($turjagwaliTopPolda['data']['rows'] as $key) {
            $pengaturan += $key['pengaturan'];
            $penjagaan += $key['penjagaan'];
            $pengawalan += $key['pengawalan'];
            $patroli += $key['patroli'];
            $total += $key['total'];
        }
        $data = [
            'topTurjagwali' => $turjagwaliTopPolda['data']['rows'],
            'pengaturan' => number_format($pengaturan),
            'penjagaan' => number_format($penjagaan),
            'pengawalan' => number_format($pengawalan),
            'patroli' => number_format($patroli),
            'total' => number_format($total)
        ];
        echo json_encode($data);
    }

    public function getLineTurjagwali()
    {
        $start = $this->input->post('start_date');
        $asd = explode('-', $start);
        $end = $this->input->post('end_date');
        $zxc = explode('-', $end);
        $title = 'DATA TURJAGWALI LALU LINTAS TANGGAL <span class="text-danger">' . $asd[2] . '/' . $asd[1] . '/' . $asd[0] . ' - ' . $zxc[2] . '/' . $zxc[1] . '/' . $zxc[0] . "</span>";
        $filter = $this->input->post('filter');

        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik->getTurjagwaliNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
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
    public function getDetailStatistikBlackspot()
    {
        $title = 'DATA BLACKSPOT';
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => '',
                'end_date' => '',
                'limit' => $limit,
            ];
            $url = 'blackspot/daily';
            $blackspot = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];
            $url = 'blackspot/daily?topPolda=true&limit=' . $filterbaru['limit'] . '&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $blackspot = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }
        $getdata = $blackspot;
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }

    public function getTopSim()
    {
        // $yesterday = $this->input->post('yesterday');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        // $url = 'garlantas/daily?date=' . $yesterday . '&topPolda=true';
        $url = 'sim/daily?filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '&topPolda=true';
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
        $start = $this->input->post('start_date');
        $asd = explode('-', $start);
        $end = $this->input->post('end_date');
        $zxc = explode('-', $end);
        $title = 'DATA SIM TANGGAL <span class="text-danger">' . $asd[2] . '/' . $asd[1] . '/' . $asd[0] . ' - ' . $zxc[2] . '/' . $zxc[1] . '/' . $zxc[0] . "</span>";
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik->getSimNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
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
        $start = $this->input->post('start_date');
        $asd = explode('-', $start);
        $end = $this->input->post('end_date');
        $zxc = explode('-', $end);
        $title = 'DATA STNK TANGGAL <span class="text-danger">' . $asd[2] . '/' . $asd[1] . '/' . $asd[0] . ' - ' . $zxc[2] . '/' . $zxc[1] . '/' . $zxc[0] . "</span>";
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik->getStnkNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
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
        // $yesterday = $this->input->post('yesterday');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        // $url = 'garlantas/daily?date=' . $yesterday . '&topPolda=true';
        $url = 'stnk/daily?filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '&topPolda=true';
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
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik->getBpkbNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
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
        // $yesterday = $this->input->post('yesterday');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        // $url = 'garlantas/daily?date=' . $yesterday . '&topPolda=true';
        $url = 'bpkb/daily?filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '&topPolda=true';
        $lakaTopPolda = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $bbn_1 = 0;
        $bbn_2 = 0;
        $mutasi_masuk = 0;
        $mutasi_keluar = 0;
        $perubahan_pergantian = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $bbn_1 += $key['bbn_1'];
            $bbn_2 += $key['bbn_2'];
            $mutasi_masuk += $key['mutasi_masuk'];
            $mutasi_keluar += $key['mutasi_keluar'];
            $perubahan_pergantian += $key['perubahan_pergantian'];
            $total += $key['total'];
        }


        $data = [
            'topBpkb' => $lakaTopPolda['data']['rows'],
            'bbn_1' => number_format($bbn_1),
            'bbn_2' => number_format($bbn_2),
            'mutasi_masuk' => number_format($mutasi_masuk),
            'mutasi_keluar' => number_format($mutasi_keluar),
            'perubahan_pergantian' => number_format($perubahan_pergantian),
            'total' => number_format($total)
        ];
        echo json_encode($data);
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
        $bbn_1 = 0;
        $bbn_2 = 0;
        $mutasi_masuk = 0;
        $mutasi_keluar = 0;
        $perubahan_pergantian = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $bbn_1 += $key['bbn_1'];
            $bbn_2 += $key['bbn_2'];
            $mutasi_masuk += $key['mutasi_masuk'];
            $mutasi_keluar += $key['mutasi_keluar'];
            $perubahan_pergantian += $key['perubahan_pergantian'];
            $total += $key['total'];
        }


        $data = [
            'topBpkb' => $lakaTopPolda['data']['rows'],
            'bbn_1' => number_format($bbn_1),
            'bbn_2' => number_format($bbn_2),
            'mutasi_masuk' => number_format($mutasi_masuk),
            'mutasi_keluar' => number_format($mutasi_keluar),
            'perubahan_pergantian' => number_format($perubahan_pergantian),
            'total' => number_format($total)
        ];
        echo json_encode($data);
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
        $bbn_1 = 0;
        $bbn_2 = 0;
        $mutasi_masuk = 0;
        $mutasi_keluar = 0;
        $perubahan_pergantian = 0;
        $total = 0;

        foreach ($lakaTopPolda['data']['rows'] as $key) {
            $bbn_1 += $key['bbn_1'];
            $bbn_2 += $key['bbn_2'];
            $mutasi_masuk += $key['mutasi_masuk'];
            $mutasi_keluar += $key['mutasi_keluar'];
            $perubahan_pergantian += $key['perubahan_pergantian'];
            $total += $key['total'];
        }


        $data = [
            'topBpkb' => $lakaTopPolda['data']['rows'],
            'bbn_1' => number_format($bbn_1),
            'bbn_2' => number_format($bbn_2),
            'mutasi_masuk' => number_format($mutasi_masuk),
            'mutasi_keluar' => number_format($mutasi_keluar),
            'perubahan_pergantian' => number_format($perubahan_pergantian),
            'total' => number_format($total)
        ];
        echo json_encode($data);
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
        $start = $this->input->post('start_date');
        $asd = explode('-', $start);
        $end = $this->input->post('end_date');
        $zxc = explode('-', $end);
        $title = 'DATA DIKMASLANTAS TANGGAL <span class="text-danger">' . $asd[2] . '/' . $asd[1] . '/' . $asd[0] . ' - ' . $zxc[2] . '/' . $zxc[1] . '/' . $zxc[0] . "</span>";
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik->getDikmasNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
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
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        // $url = 'garlantas/daily?date=' . $yesterday . '&topPolda=true';
        $url = 'ranmor/daily?filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '&topPolda=true';
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
    public function getBpkbDate()
    {
        $yesterday = $this->input->post('yesterday');
        $firstDayMonth = $this->input->post('firstDayMonth');
        $lastDayMonth = $this->input->post('lastDayMonth');
        $firstDay = $this->input->post('firstDay');
        $lastDay = $this->input->post('lastDay');

        $url_thisDay = 'bpkb/date?type=day&filter=true&start_date=' . $yesterday . '&end_date=' . $yesterday . '';
        $url_thisMonth = 'bpkb/date?type=month&filter=true&start_date=' . $firstDayMonth . '&end_date=' . $lastDayMonth . '';
        $url_thisYear = 'bpkb/date?type=month&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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
        $url_thisYear = 'stnk/date?type=year&filter=true&start_date=' . $firstDay . '&end_date=' . $lastDay . '';


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

    public function getRanmorDate()
    {
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

        $data['TurjagwaliDate'] = [
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

        echo json_encode($data['TurjagwaliDate']);
    }
    public function getLineRanmor()
    {
        $start = $this->input->post('start_date');
        $asd = explode('-', $start);
        $end = $this->input->post('end_date');
        $zxc = explode('-', $end);
        $title = 'DATA RANMOR TANGGAL <span class="text-danger">' . $asd[2] . '/' . $asd[1] . '/' . $asd[0] . ' - ' . $zxc[2] . '/' . $zxc[1] . '/' . $zxc[0] . "</span>";
        $filter = $this->input->post('filter');
        $limit = $this->input->post('limit');
        $yesterday = $this->input->post('yesterday');
        if ($filter == 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik->getRanmorNasionalDate($filterbaru);
        } elseif ($filter != 0) {
            $filterbaru = [
                'filter' => $filter,
                'start_date' => $start,
                'end_date' => $end,
            ];
            $getdata = $this->M_detail_statistik->getRanmorNasionalDate($filterbaru);
        }

        $data = [
            'data' => $getdata,
            'title' => $title,
        ];
        echo json_encode($data);
    }


    public function getBarTroublespot()
    {
        $filter = $this->input->post('filter');
        $end_date = $this->input->post('end_date');
        $start_date = $this->input->post('start_date');


        $limit = $this->input->post('limit');
        if ($filter == '2') {
            $url = 'troublespot/daily?topPolda=true&limit=' . $limit . '&filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '';
        } else {
            $url = 'troublespot/daily?topPolda=true&limit=' . $limit . '';
        }

        $troublespot = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        foreach ($troublespot['data']['rows'] as $key) {
            $total[] = $key['total'];
            $polda[] = $key['name_polda'];
        }


        $data = [
            'total' => $total,
            'name_polda' => $polda
        ];
        echo json_encode($data);
    }

    public function getLineTroublespot()
    {
        $filter = $this->input->post('filter');

        if ($filter == '2') {
            $start_date = $this->input->post('start_date');
        } else {
            $start_date = date('Y-m-d', strtotime("-5 year", strtotime($this->input->post('start_date'))));
        }
        $end_date = $this->input->post('end_date');
        $type = $this->input->post('type');
        $url = 'troublespot/date?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '&type=' . $type . '';
        $troublespot = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        foreach ($troublespot['data'] as $key) {
            $total[] = $key['total'];
            $date[] = $key['date'];
        }
        $data = [
            'total' => $total,
            'date' => $date,
            'title' => 'DATA TROUBLESPOT LALU LINTAS TANGGAL ' . $start_date . ' s.d ' . $end_date . ''
        ];
        echo json_encode($data);
    }

    public function getTroublespotStatistik()
    {
        $filter = $this->input->post('filter');
        $today = $this->input->post('yesterday');
        $first_dayMonth = $this->input->post('firstDayMonth');
        $last_dayMonth = $this->input->post('lastDayMonth');
        $first_dayYear = $this->input->post('firstDay');
        $last_dayYear = $this->input->post('lastDay');
        $troublespotToday = guzzle_request('GET',   $url = 'troublespot/date?filter=' . $filter . '&start_date=' . $today . '&end_date=' . $today . '&type=day', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $troublespotMonth = guzzle_request('GET',   $url = 'troublespot/date?filter=' . $filter . '&start_date=' . $first_dayMonth . '&end_date=' . $last_dayMonth . '&type=month', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $troublespotYear = guzzle_request('GET',   $url = 'troublespot/date?filter=' . $filter . '&start_date=' . $first_dayYear . '&end_date=' . $last_dayYear . '&type=year', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);


        $data = [
            'today' => $troublespotToday['data'][0]['total'],
            'month' => $troublespotMonth['data'][0]['total'],
            'year' => $troublespotYear['data'][0]['total'],

        ];

        echo json_encode($data);
    }

    public function troublespotToday()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url_list = 'troublespot/get_filter?start_date=' . $start_date . '&end_date=' . $end_date . '';
        $list_troublespot = guzzle_request('GET', $url_list, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        echo json_encode($list_troublespot['data']);
    }
    public function troublespotMonth()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url_list = 'troublespot/get_filter?start_date=' . $start_date . '&end_date=' . $end_date . '';
        $list_troublespot = guzzle_request('GET', $url_list, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        echo json_encode($list_troublespot['data']);
    }

    public function troublespotYear()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url_list = 'troublespot/get_filter?start_date=' . $start_date . '&end_date=' . $end_date . '';
        $list_troublespot = guzzle_request('GET', $url_list, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        echo json_encode($list_troublespot['data']);
    }


    public function getBarBlankspot()
    {
        $filter = $this->input->post('filter');
        $end_date = $this->input->post('end_date');
        $start_date = $this->input->post('start_date');


        $limit = $this->input->post('limit');
        if ($filter == '2') {
            $url = 'blankspot/daily?topPolda=true&limit=' . $limit . '&filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '';
        } else {
            $url = 'blankspot/daily?topPolda=true&limit=' . $limit . '';
        }

        $blankspot = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        foreach ($blankspot['data']['rows'] as $key) {
            $total[] = $key['total'];
            $polda[] = $key['name_polda'];
        }


        $data = [
            'total' => $total,
            'name_polda' => $polda
        ];
        echo json_encode($data);
    }

    public function getLineBlankspot()
    {
        $filter = $this->input->post('filter');

        if ($filter == '2') {
            $start_date = $this->input->post('start_date');
        } else {
            $start_date = date('Y-m-d', strtotime("-5 year", strtotime($this->input->post('start_date'))));
        }
        $end_date = $this->input->post('end_date');
        $type = $this->input->post('type');
        $url = 'blankspot/date?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '&type=' . $type . '';
        $blankspot = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        foreach ($blankspot['data'] as $key) {
            $total[] = $key['total'];
            $date[] = $key['date'];
        }
        $data = [
            'total' => $total,
            'date' => $date,
            'title' => 'DATA BLANKSPOT LALU LINTAS TANGGAL ' . $start_date . ' s.d ' . $end_date . ''
        ];
        echo json_encode($data);
    }

    public function getBlankspotStatistik()
    {
        $filter = $this->input->post('filter');
        $today = $this->input->post('yesterday');
        $first_dayMonth = $this->input->post('firstDayMonth');
        $last_dayMonth = $this->input->post('lastDayMonth');
        $first_dayYear = $this->input->post('firstDay');
        $last_dayYear = $this->input->post('lastDay');
        $blankspotToday = guzzle_request('GET',   $url = 'blankspot/date?filter=' . $filter . '&start_date=' . $today . '&end_date=' . $today . '&type=day', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $blankspotMonth = guzzle_request('GET',   $url = 'blankspot/date?filter=' . $filter . '&start_date=' . $first_dayMonth . '&end_date=' . $last_dayMonth . '&type=month', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $blankspotYear = guzzle_request('GET',   $url = 'blankspot/date?filter=' . $filter . '&start_date=' . $first_dayYear . '&end_date=' . $last_dayYear . '&type=year', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);


        $data = [
            'today' => $blankspotToday['data'][0]['total'],
            'month' => $blankspotMonth['data'][0]['total'],
            'year' => $blankspotYear['data'][0]['total'],

        ];

        echo json_encode($data);
    }

    public function blankspotToday()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url_list = 'blankspot/get_filter?start_date=' . $start_date . '&end_date=' . $end_date . '';
        $list_blankspot = guzzle_request('GET', $url_list, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        echo json_encode($list_blankspot['data']);
    }
    public function blankspotMonth()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url_list = 'blankspot/get_filter?start_date=' . $start_date . '&end_date=' . $end_date . '';
        $list_blankspot = guzzle_request('GET', $url_list, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        echo json_encode($list_blankspot['data']);
    }

    public function blankspotYear()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url_list = 'blankspot/get_filter?start_date=' . $start_date . '&end_date=' . $end_date . '';
        $list_blankspot = guzzle_request('GET', $url_list, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        echo json_encode($list_blankspot['data']);
    }

    public function getBarRekalantas()
    {
        $filter = $this->input->post('filter');
        $end_date = $this->input->post('end_date');
        $start_date = $this->input->post('start_date');


        $limit = $this->input->post('limit');
        if ($filter == '2') {
            $url = 'rekalantas/daily?topPolda=true&limit=' . $limit . '&filter=true&start_date=' . $start_date . '&end_date=' . $end_date . '';
        } else {
            $url = 'rekalantas/daily?topPolda=true&limit=' . $limit . '';
        }

        $rekalantas = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        foreach ($rekalantas['data']['rows'] as $key) {
            $total[] = $key['total'];
            $polda[] = $key['name_polda'];
            $jalan_nasional[] = $key['jalan_nasional'];
            $jalan_provinsi[] = $key['jalan_provinsi'];
            $lain_lain[] = $key['lain_lain'];
        }


        $data = [
            'total' => $total,
            'name_polda' => $polda,
            'jalan_nasional' => $jalan_nasional,
            'jalan_provinsi' => $jalan_provinsi,
            'lain_lain' => $lain_lain
        ];
        echo json_encode($data);
    }

    public function getLineRekalantas()
    {
        $filter = $this->input->post('filter');

        if ($filter == '2') {
            $start_date = $this->input->post('start_date');
        } else {
            $start_date = date('Y-m-d', strtotime("-5 year", strtotime($this->input->post('start_date'))));
        }
        $end_date = $this->input->post('end_date');
        $type = $this->input->post('type');
        $url = 'rekalantas/date?filter=' . $filter . '&start_date=' . $start_date . '&end_date=' . $end_date . '&type=' . $type . '';
        $rekalantas = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        foreach ($rekalantas['data'] as $key) {
            $total[] = $key['total'];
            $date[] = $key['date'];
            $jalan_nasional[] = $key['jalan_nasional'];
            $jalan_provinsi[] = $key['jalan_provinsi'];
            $lain_lain[] = $key['lain_lain'];
        }
        $data = [
            'total' => $total,
            'date' => $date,
            'jalan_nasional' => $jalan_nasional,
            'jalan_provinsi' => $jalan_provinsi,
            'lain_lain' => $lain_lain,
            'title' => 'DATA REKALANTAS LALU LINTAS TANGGAL ' . $start_date . ' s.d ' . $end_date . ''
        ];
        echo json_encode($data);
    }

    public function getRekalantasStatistik()
    {
        $filter = $this->input->post('filter');
        $today = $this->input->post('yesterday');
        $first_dayMonth = $this->input->post('firstDayMonth');
        $last_dayMonth = $this->input->post('lastDayMonth');
        $first_dayYear = $this->input->post('firstDay');
        $last_dayYear = $this->input->post('lastDay');
        $rekalantasToday = guzzle_request('GET',   $url = 'rekalantas/date?filter=' . $filter . '&start_date=' . $today . '&end_date=' . $today . '&type=day', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $rekalantasMonth = guzzle_request('GET',   $url = 'rekalantas/date?filter=' . $filter . '&start_date=' . $first_dayMonth . '&end_date=' . $last_dayMonth . '&type=month', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $rekalantasYear = guzzle_request('GET',   $url = 'rekalantas/date?filter=' . $filter . '&start_date=' . $first_dayYear . '&end_date=' . $last_dayYear . '&type=year', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);


        $data = [
            'today' => $rekalantasToday['data'][0]['total'],
            'month' => $rekalantasMonth['data'][0]['total'],
            'year' => $rekalantasYear['data'][0]['total'],

        ];

        echo json_encode($data);
    }

    public function rekalantasToday()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url_list = 'rekalantas/daily?topPolda=true&start_date=' . $start_date . '&end_date=' . $end_date . '';
        $list_rekalantas = guzzle_request('GET', $url_list, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        echo json_encode($list_rekalantas['data']['rows']);
    }
    public function rekalantasMonth()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url_list = 'rekalantas/daily?topPolda=true&start_date=' . $start_date . '&end_date=' . $end_date . '';
        $list_rekalantas = guzzle_request('GET', $url_list, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        echo json_encode($list_rekalantas['data']['rows']);
    }

    public function rekalantasYear()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $url_list = 'rekalantas/daily?topPolda=true&start_date=' . $start_date . '&end_date=' . $end_date . '';
        $list_rekalantas = guzzle_request('GET', $url_list, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        echo json_encode($list_rekalantas['data']['rows']);
    }
}
