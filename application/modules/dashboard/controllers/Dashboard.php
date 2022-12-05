<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('operasi/m_renpam');
        $this->load->model('dashboard/m_dashboard');
    }

    public function index()
    {
        // print_r($this->session->userdata['polda_id']);
        // die;

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Dashboard";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Operator' || $this->session->userdata['role'] == 'ITDC') {
            $page_content["page"] = "dashboard/dashboard_g20";

            $getVip = guzzle_request('GET', 'vip', [
                'headers' => $headers
            ]);
            $data['getVip'] = $getVip['data']['data'];

            $getAccount = guzzle_request('GET', 'account', [
                'headers' => $headers
            ]);
            $data['getAccount'] = $getAccount['data']['data'];

            $page_content["data"] = $data;
        } else if ($this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU') {

            $page_content["page"] = "dashboard/dashboard_kakor";

            $getRenpam = guzzle_request('GET', 'renpam', [
                'headers' => $headers
            ]);
            $resGetRenpam = $getRenpam['data']['data'];




            $url = parse_url($_SERVER['REQUEST_URI']);
            if ($url['query']) {
                parse_str($url['query'], $params);
                $data['start_date'] = $params['start_date'];
                $data['end_date'] = $params['end_date'];


                $filterProses = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 0 && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $filterDone = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 1 && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $data['filterProses'] = count($filterProses);
                $data['filterDone'] = count($filterDone);


                $filterProsesPatroli = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 0 && $n['type_renpam'] == 1 && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $filterDonePatroli = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 1 && $n['type_renpam'] == 1 && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $data['filterProsesPatroli'] = count($filterProsesPatroli);
                $data['filterDonePatroli'] = count($filterDonePatroli);

                $filterProsesPengawalan = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 0 && $n['type_renpam'] == 2 && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $filterDonePengawalan = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 1 && $n['type_renpam'] == 2  && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $data['filterProsesPengawalan'] = count($filterProsesPengawalan);
                $data['filterDonePengawalan'] = count($filterDonePengawalan);

                $filterProsesPenjagaan = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 0 && $n['type_renpam'] == 3 && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $filterDonePenjagaan = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 1 && $n['type_renpam'] == 3 && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $data['filterProsesPenjagaan'] = count($filterProsesPenjagaan);
                $data['filterDonePenjagaan'] = count($filterDonePenjagaan);

                $filterProsesPengaturan = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 0 && $n['type_renpam'] == 4 && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $filterDonePengaturan = array_filter($resGetRenpam, fn ($n) => $n['status_renpam'] == 1 && $n['type_renpam'] == 4 && $n['date'] >= $params['start_date'] && $n['date'] <= $params['end_date']);
                $data['filterProsesPengaturan'] = count($filterProsesPengaturan);
                $data['filterDonePengaturan'] = count($filterDonePengaturan);
            } else {
                redirect(base_url('404_notfound'));
            }



            $page_content["data"] = $data;
        } else if ($this->session->userdata['role'] == 'Korlantas') {


            // Ditkamsel
            $ditkamsel = guzzle_request('GET', 'ditkamsel?nasional=true', [

                'headers' => [

                    'Authorization' => $this->session->userdata['token']

                ]

            ]);

            $polda_ditkamsel = array();
            $dikmaslantas = array();
            $penyebaran = array();
            foreach ($ditkamsel['data'] as $key) {
                $polda_ditkamsel[] = $key['name_polda'];
                $dikmaslantas[] = $key['dikmaslantas'];
                $penyebaran[] = $key['penyebaran'];
            }

            // Ditgakkum
            $ditgakkum = guzzle_request('GET', 'ditgakkum?nasional=true', [

                'headers' => [

                    'Authorization' => $this->session->userdata['token']

                ]

            ]);

            $polda_ditgakkum = array();
            $lakalanggar = array();
            $lakalantas = array();
            $garlantas = array();
            $turjagwali = array();
            $topPolda = array();
            foreach ($ditgakkum['data'] as $key) {
                $row = array();

                $polda_ditgakkum[] = $key['name_polda'];
                $lakalantas[] = $key['lakalantas'];
                $lakalanggar[] = $key["lakalanggar"];
                $garlantas[] = $key['garlantas'];
                $turjagwali[] = $key['turjagwali'];

                $row['name_polda'] = $key['name_polda'];
                $row['garlantas'] = $key['garlantas'];
                $row['lakalantas'] = $key['lakalantas'];
                $row['kemacetan'] = 0;
                $row['total'] = $key['garlantas'] + $key['lakalantas'];

                $topPolda[] = $row;
            }


            // Ditregident
            $ditregident = guzzle_request('GET', 'ditregident?nasional=true', [

                'headers' => [

                    'Authorization' => $this->session->userdata['token']

                ]

            ]);

            $polda_ditregident = array();
            $sim = array();
            $stnk = array();
            $bpkb = array();
            $ranmor = array();
            foreach ($ditregident['data'] as $key) {
                $polda_ditregident[] = $key['name_polda'];
                $stnk[] = $key['stnk'];
                $sim[] = $key["sim"];
                $bpkb[] = $key['bpkb'];
                $ranmor[] = $key['ranmor'];
            }

            // TripOn Pie Chart
            $TripOn = guzzle_request(
                'GET',
                'count-trip-on',
                [
                    'headers' => [
                        'Authorization' => $this->session->userdata['token']
                    ]
                ]
            );
            $polda_tripOn = array();
            $polda_tripOn[] = $TripOn['data']['tripOn_mobil'];
            $polda_tripOn[] = $TripOn['data']['tripOn_motor'];


            // TroubleSpot
            $TroubleSpot = guzzle_request(
                'GET',
                'troublespot',
                [
                    'headers' => [
                        'Authorization' => $this->session->userdata['token']
                    ]
                ]
            );

            $polda_troublespot = $TroubleSpot['data'];


            // Top Polda
            array_multisort(array_column($topPolda, "total"), SORT_DESC, $topPolda);
            $bestPolda = array_slice($topPolda, 0, 10);


            $page_content["data"] = ['polda_ditkamsel' => $polda_ditkamsel, 'dikmaslantas' => $dikmaslantas, 'penyebaran' => $penyebaran, 'polda_ditgakkum' => $polda_ditgakkum, 'lakalantas' => $lakalantas, 'lakalanggar' => $lakalanggar, 'garlantas' => $garlantas, 'turjagwali' => $turjagwali, 'polda_ditregident' => $polda_ditregident, 'sim' => $sim, 'stnk' => $stnk, 'bpkb' => $bpkb, 'ranmor' => $ranmor, 'polda_tripon' => $polda_tripOn, 'polda_troublespot' => $polda_troublespot, 'best_polda' => $bestPolda];
            $page_content["page"] = "dashboard/dashboard_view";

            // } else if ($this->session->userdata['role'] == 'Polres') {
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dashboard/Polres/dashboard_view";

            $page_content["data"] = '';
            // } else if ($this->session->userdata['role'] == 'Ditkamsel') {
            //     $page_content["page"] = "dashboard/Ditkamsel/dashboard_view";

            //     $data['turjagwali'] = $this->m_dashboard->turjagwali_nasional();
            //     $data['ditgakkum'] = $this->m_dashboard->ditgakkum_nasional();
            //     $data['ditregident'] =  $this->m_dashboard->ditregident_nasional();
            //     $data['tripOn'] = $this->m_dashboard->tripOn_nasional();
            //     $data['troublespot'] = $this->m_dashboard->troublespot_nasional();
            //     $data['pelanggaran'] = $this->m_dashboard->pelanggaran_nasional();
            //     $data['kecelakaan'] = $this->m_dashboard->kecelakaan_nasional();
            //     $data['ranmor'] = $this->m_dashboard->ranmor_nasional();
            //     $data['sim'] = $this->m_dashboard->sim_nasional();
            //     $data['stnk'] = $this->m_dashboard->stnk_nasional();
            //     $data['dikmaslantas'] = $this->m_dashboard->dikmaslantas_nasional();
            //     $data['penyebaran_pemasangan'] = $this->m_dashboard->penyebaran_pemasangan_nasional();

            //     $page_content["data"] = $data;
            // } else if ($this->session->userdata['role'] == 'Ditgakkum') {
            //     $page_content["page"] = "dashboard/Ditgakkum/dashboard_view";

            //     $data['turjagwali'] = $this->m_dashboard->turjagwali_nasional();
            //     $data['ditgakkum'] = $this->m_dashboard->ditgakkum_nasional();
            //     $data['ditregident'] =  $this->m_dashboard->ditregident_nasional();
            //     $data['tripOn'] = $this->m_dashboard->tripOn_nasional();
            //     $data['troublespot'] = $this->m_dashboard->troublespot_nasional();

            //     $page_content["data"] = $data;
            // } else if ($this->session->userdata['role'] == 'Ditregident') {
            //     $page_content["page"] = "dashboard/Ditregident/dashboard_view";

            //     $data['turjagwali'] = $this->m_dashboard->turjagwali_nasional();
            //     $data['ditgakkum'] = $this->m_dashboard->ditgakkum_nasional();
            //     $data['ditregident'] =  $this->m_dashboard->ditregident_nasional();
            //     $data['tripOn'] = $this->m_dashboard->tripOn_nasional();
            //     $data['troublespot'] = $this->m_dashboard->troublespot_nasional();

            //     $page_content["data"] = '';
            // } else if ($this->session->userdata['role'] == 'KaBagOps') {
            //     $page_content["page"] = "dashboard/Bagops/dashboard_view";

            //     $page_content["data"] = '';
            // } else if ($this->session->userdata['role'] == 'KaBagRenmin') {
            //     $page_content["page"] = "dashboard/Bagrenmin/dashboard_view";

            //     $page_content["data"] = '';
            // } else if ($this->session->userdata['role'] == 'KaBagTIK') {
            //     $page_content["page"] = "dashboard/Bagtik/dashboard_view";

            //     $page_content["data"] = '';
        } else if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditkamsel' || $this->session->userdata['role'] == 'Ditgakkum' || $this->session->userdata['role'] == 'Ditregident' || $this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'KaBagRenmin' || $this->session->userdata['role'] == 'KaBagTIK' || $this->session->userdata['role'] == 'DivTikMabesPolri') {

            // } else if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'KaBagOps') {

            $mobile = detect_mobile();
            if ($mobile === true) {
                redirect('statistik_nasional');
                die;
            } else {
                $data["title"] = "Dashboard Executive";
                $page_content["page"] = "dashboard/dashboard_eksekutif";

                $page_content["data"] = $data;
            }
        } else if ($this->session->userdata['role'] == 'DivTikMabesPolri') {
            redirect('divtik/div_tik');
            die;
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $id = $this->session->userdata('polda_id');
            $data['poldaid'] = $this->m_dashboard->get_Poldaid($id);
            $page_content["page"] = "dashboard/Kapolda/dashboard_view";
            $page_content["data"] = $data;
        } else if ($this->session->userdata['role'] == 'Kapolres') {
            $page_content["page"] = "dashboard/Kapolres/dashboard_view";

            $data['ditgakkum'] = $this->m_dashboard->ditgakkum_polres();
            // echo $this->session->userdata['id_polres'];
            // die;
            $data['ditregident'] =  $this->m_dashboard->ditregident_polres();
            $data['tripOn'] = $this->m_dashboard->tripOn_nasional();
            $data['troublespot'] = $this->m_dashboard->troublespot_polres();
            $data['pelanggaran'] = $this->m_dashboard->pelanggaran_polres();
            $data['kecelakaan'] = $this->m_dashboard->kecelakaan_polres();
            $data['ranmor'] = $this->m_dashboard->ranmor_polres();
            $data['sim'] = $this->m_dashboard->sim_polres();
            $data['stnk'] = $this->m_dashboard->stnk_polres();
            $data['dikmaslantas'] = $this->m_dashboard->dikmaslantas_polres();
            $data['penyebaran_pemasangan'] = $this->m_dashboard->penyebaran_pemasangan_polres();

            $page_content["data"] = $data;
        } else {
            $this->session->set_flashdata('error', 'Role Tidak Di Temukan');
            redirect('login/logout');
        }

        // print_r($this->agent->is_mobile());

        $this->templates->loadTemplate($page_content);
        // $this->load->view('dashboard/dashboard_g20',);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_renpam->get_datatables($postData);
        echo json_encode($data);
    }

    public function getIdRenpam()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $input = $this->input->post();


        $url = 'renpam/getId/' . $input['id'] . '';
        // echo json_encode($url);
        // die;
        $getMe = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getMe);
    }

    public function getAccount()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $input = $this->input->post();


        $url = 'account/getId/' . $input['id'] . '';
        // echo json_encode($url);
        // die;
        $getMe = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getMe);
    }

    public function getFilter()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $input = $this->input->post();
        if ($input['filter']) {
            $filter = '&filter=' . $input['filter'] . '';
        } else {
            $filter = '';
        }
        if ($input['radius']) {
            $radius = '?radius=' . $input['radius'] . '';
        } else {
            $radius = '?radius=1500';
        }
        if ($input['coordinate']) {
            $coordinate = '&coordinate=' . $input['coordinate'] . '';
        } else {
            $coordinate = '&coordinate=-8.451740, 115.089643';
        }

        if (isset($input['polda_id'])) {
            $polda_id = '&polda_id=' . $input['polda_id'] . '';
        } else {
            $polda_id = '';
        }

        if ($input['type']) {
            $type = '&type=' . $input['type'] . '';
        } else {
            // $type = '&type=mosque,school,cafe,hospital,lodging,restaurant,tourist_attraction,fire_station,shopping_mall,gas_station';
            $type = '&type=mosque';
        }

        $url = 'filter-search' . $radius . '' . $filter . '' . $coordinate . '' . $type . '' . $polda_id . '';
        // echo json_encode($url);
        // die;
        $getMe = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getMe);
    }

    public function storeEditDayReport()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();
        $dummy = [
            [
                'name' => 't_officer_active',
                'contents' => $input['t_officer_active'],
            ],
            [
                'name' => 't_officer_active_car',
                'contents' => $input['t_officer_active_car'],
            ],
            [
                'name' => 't_officer_active_bike',
                'contents' => $input['t_officer_active_bike'],
            ],
            [
                'name' => 't_officer_active_not_driving',
                'contents' => $input['t_officer_active_not_driving'],
            ]
        ];


        $addManual = guzzle_request('POST', 'day_report/addManual', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);
        if ($addManual['isSuccess'] == true) {
            $data = guzzle_request('PUT', 'day_report/byEdit/' . date('Y-m-d') . '', [
                'multipart' => $dummy,
                'headers' => $headers
            ]);

            if ($data['isSuccess'] == true) {
                $res = array(
                    'status' => true,
                    'message' => 'Berhasil edit data.',
                    'data' => $data
                );
            } else {
                $res = array(
                    'status' => false,
                    'message' => 'Gagal edit data.',
                    'data' => $data
                );
            }
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal edit data.',
                'data' => $data
            );
        }



        echo json_encode($res);
    }

    public function getLogout()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'reportMobile/history-logout';
        $getData = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getData);
    }

    public function getTracking()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];


        // $date = date('Y-m-d');
        // $date = strtotime($date);
        // $date = strtotime("-1 day", $date);
        // echo date('Y-m-d', $date);

        $url = 'getMe';
        $getMe = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getMe);
    }

    public function getGatur()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'track-gatur';
        $getData = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getData['data']);
    }

    public function getR2Listrik()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'track-r2-listrik';
        $getData = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getData['data']);
    }

    public function getR4Listrik()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'track-r4-listrik';
        $getData = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getData['data']);
    }

    public function getR2Fosil()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'track-r2-fosil';
        $getData = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getData['data']);
    }

    public function getR4Fosil()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'track-r4-fosil';
        $getData = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getData['data']);
    }

    public function getTrackingName()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $input = $this->input->post();

        // $date = date('Y-m-d');
        // $date = strtotime($date);
        // $date = strtotime("-1 day", $date);

        $url = 'getName?name_officer=' . $input['name_officer'] . '';
        $getMe = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getMe);
    }

    public function getCCTV()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'cctv';
        $getCCTV = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getCCTV'] = $getCCTV['data'];

        echo json_encode($data['getCCTV']);
    }

    public function gpsIdPost()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 

        $dummy = array();
        $dummy['username'] = 'siwalpjr';
        $dummy['apikey'] = '82a5c852c725d4cf5205b808d9f2f467';


        $url = 'pushData';
        $getData = guzzle_requestGpsId('POST', $url, [
            'form_params' => $dummy,
            'headers' => $headers
        ]);
        $data['getData'] = $getData;

        echo json_encode($data['getData']);
    }

    public function getIdCountry()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();


        $url = 'country/getIdNoEncrypt/' . $input['id_country'] . '';
        $getData = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getData'] = $getData['data'];

        echo json_encode($data['getData']);
    }

    public function getFasum()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'fasum';
        $getFasum = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getFasum'] = $getFasum['data'];

        echo json_encode($data['getFasum']);
    }

    public function getAddres()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input      = $this->input->post();

        $dummy = [
            [
                'name' => 'lat',
                'contents' => $input['lat'],
            ],
            [
                'name' => 'lng',
                'contents' => $input['lng'],
            ]
        ];

        // echo json_encode($dummy);
        // die;

        $data = guzzle_request('POST', 'gmaps-api/reverse-geocode', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        echo json_encode($data);
    }

    public function getPolres()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'polres';
        $getPolres = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getPolres'] = $getPolres['data'];

        echo json_encode($data['getPolres']);
    }

    public function getCategorySchedule()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'category_schedule?serverSide=true&order=order_category_schedule&orderDirection=asc&length=1000&start=1&filter[]=status_category_schedule&filterSearch[]=1';
        $getCategorySchedule = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getCategorySchedule'] = $getCategorySchedule['data'];

        echo json_encode($data['getCategorySchedule']);
    }

    public function getCategoryScheduleByName()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();


        $url = 'schedule?serverSide=True&order=id&orderDirection=desc&length=10&start=1&filter[]=activity&filterSearch[]=' . $input['activity'] . '';
        $getData = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getData'] = $getData['data'];

        echo json_encode($data['getData']);
    }

    public function getJadwalId()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();


        $url = 'schedule?serverSide=True&order=status_schedule&orderDirection=asc&length=100&start=1&filter%5B%5D=id_category_schedule&filterSearch%5B%5D=' . $input['id_category_schedule'] . '';
        $getJadwal = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getJadwal'] = $getJadwal['data'];

        echo json_encode($data['getJadwal']);
    }


    public function getAkunId()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();


        $url = 'account/getId/' . $input['id'] . '';
        $getAkun = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getAkun'] = $getAkun['data'];

        echo json_encode($data['getAkun']);
    }


    public function sendZoom()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();


        $dummy = [
            [
                'name' => 'officer_id',
                'contents' => $input['officer_id'],
            ],
            [
                'name' => 'link',
                'contents' => 'https://bit.ly/k3izoom',
            ],
        ];

        $data = guzzle_request('POST', 'notifikasi/send-zoom', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function sendZoomNonEncrpyt()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();


        $dummy = [
            [
                'name' => 'officer_id',
                'contents' => $input['officer_id'],
            ],
            [
                'name' => 'link',
                'contents' => 'https://bit.ly/k3izoom',
            ],
        ];

        $data = guzzle_request('POST', 'notifikasi/send-zoom-noencrypt', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function getJadwal()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $input = $this->input->post(); 


        $url = 'schedule';
        $getJadwal = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getJadwal'] = $getJadwal['data'];

        echo json_encode($data['getJadwal']);
    }


    public function getRenpam()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post();
        // if ($input['search']) {
        //     $search = '&search=' . $input['search'] . '';
        // } else {
        //     $search = '';
        // } 
        if ($input['schedule_id']) {
            $schedule_id = '&schedule_id=' . $input['schedule_id'] . '';
        } else {
            $schedule_id = '';
        }
        // if($input['page']){
        //     $page = ''.$input['page'].'';
        // }else{
        //     $page = '1';
        // } 

        $url = 'renpam?serverSide=True&order=id&orderDirection=desc&length=1000&start=1' . $schedule_id . '';
        $getRenpam = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getRenpam'] = $getRenpam['data'];

        echo json_encode($data['getRenpam']);
    }

    public function getRenpamForSoket()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $input = $this->input->post();

        // $url = 'renpam?serverSide=True&length=1000&start=1&start_date=2022-11-01&end_date=2022-11-01';
        $url = 'renpam?serverSide=True&length=1000&start=1&start_date=' . date('Y-m-d') . '&end_date=' . date('Y-m-d') . '';
        $getRenpamForSoket = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getRenpamForSoket'] = $getRenpamForSoket['data'];

        echo json_encode($data['getRenpamForSoket']);
    }


    public function peta()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Peta";

        $page_content["page"] = "dashboard/dashboard_g20";

        $getVip = guzzle_request('GET', 'vip', [
            'headers' => $headers
        ]);
        $data['getVip'] = $getVip['data']['data'];

        $getAccount = guzzle_request('GET', 'account', [
            'headers' => $headers
        ]);
        $data['getAccount'] = $getAccount['data']['data'];

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
        // $this->load->view('dashboard/dashboard_g20',);
    }
    public function Dashboardeksekutif()
    {
        // $data['csrf_name'] = $this->security->get_csrf_token_name();
        // $data['csrf_token'] = $this->security->get_csrf_hash();
        // $data["title"] = "Dashboard Executive";
        // $data["page"] = "dashboard/dashboard_eksekutif";
        // $this->load->view('dashboard/dashboard_eksekutif', $data);
    }


    public function getPolda()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];


        $date = date("Y-m-d");
        $url = 'polda';
        $getPolda = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $getPolda = $getPolda['data']['data'];

        $dit = [];
        $urldit = 'ditgakkum/daily?date=' . $date . '';
        $getDit = guzzle_request('GET', $urldit, [
            'headers' => $headers
        ]);
        $getDit = $getDit['data'];

        for ($i = 0; $i < count($getDit); $i++) {
            $datadit = [
                'garlantas' => $getDit[$i]['garlantas'],
                'lakalantas' => $getDit[$i]['lakalantas'],
                'turjagwali' => $getDit[$i]['turjagwali'],
            ];
            $dit[] = array_merge($getPolda[$i], $datadit);
        }
        $allData = [];

        $urlranmor = 'ranmor/daily?date=' . $date . '';
        $getRanmor = guzzle_request('GET', $urlranmor, [
            'headers' => $headers
        ]);
        $getRanmor = $getRanmor['data']['rows'];

        for ($i = 0; $i < count($getRanmor); $i++) {
            $dataranmor = [
                'sepeda_motor' => $getRanmor[$i]['sepeda_motor'],
            ];
            $allData[] = array_merge($dit[$i], $dataranmor);
        }


        $data = $allData;


        echo json_encode($data);
    }


    public function getGarlantas()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        // $data['garlantas'] = '123';
        $date = date("Y-m-d");
        $url = 'garlantas/daily?date=' . $date . '&topPolda=true&limit=10';
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
        $date = date("Y-m-d");
        $url = 'laka_lantas/daily?date=' . $date . '&topPolda=true&limit=10';
        $getLakalantas = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $data['lakalantas'] = $getLakalantas["data"]["rows"];
        echo json_encode($data['lakalantas']);
    }


    public function getTurjagwali()
    {
        $data['turjagwali'] = $this->m_dashboard->turjagwali_nasional();
        echo json_encode($data['turjagwali']);
    }

    public function getStatistik()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $date = date("Y-m-d");
        // $getGakkum = guzzle_request('GET', 'ditgakkum/daily?date=' . $date . '', [
        //     'headers' => $headers
        // ]);
        $getGakkum = guzzle_request('GET', 'ditgakkum/daily', [
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

        // $getRanmor = guzzle_request('GET', 'ditregident/daily?date=' . $date . '', [
        //     'headers' => $headers
        // ]);
        $getRanmor = guzzle_request('GET', 'ditregident/daily', [
            'headers' => $headers
        ]);
        $getRanmor = $getRanmor["data"];

        $totalmotor = 0;
        for ($i = 0; $i < count($getRanmor); $i++) {
            $totalmotor += $getRanmor[$i]['ranmor'];
        }

        $getSim = guzzle_request('GET', 'sim/daily', [
            'headers' => $headers
        ]);
        $getSim = $getSim["data"]["rows"];

        $totalsim = 0;
        for ($i = 0; $i < count($getSim); $i++) {
            $totalsim += $getSim[$i]['total'];
        }

        $data = [
            'garlantas' => number_format($totalgarlantas, 0, '', '.'),
            'lakalantas' =>  number_format($totallakalantas, 0, '', '.'),
            'motor' =>  number_format($totalmotor, 0, '', '.'),
            'turjagwali' => number_format($totalturjagwali, 0, '', '.'),
            'sim' =>  number_format($totalsim, 0, '', '.'),
        ];
        echo json_encode($data);
    }

    public function getTripOn()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        // $data['lakalantas'] = '123';

        $url = 'count-trip-on/jenis_kendaraan';
        $getTripon = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        $type = array();
        $jumlah = array();

        foreach ($getTripon['data'] as $key) {
            $type[] = $key['nama'];
            $jumlah[] = $key['jumlah'];
        }

        $data['tripOn'] = [
            'type' => $type,
            'jumlah' => $jumlah
        ];

        echo json_encode($data['tripOn']);
    }
}
