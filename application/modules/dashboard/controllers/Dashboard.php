<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('operasi/m_renpam');
    }

    public function index()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Dashboard";

        if ($this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Operator') {
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

            // } else if ($this->session->userdata['role'] == 'Kapolda') {
        } else if ($this->session->userdata['role'] == 'Kapolda') {

            $page_content["page"] = "dashboard/Kapolda/dashboard_view";

            $page_content["data"] = '';
            // } else if ($this->session->userdata['role'] == 'Polres') {
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dashboard/Polres/dashboard_view";

            $page_content["data"] = '';
        } else if ($this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU') {
            $page_content["page"] = "dashboard/Kakor/dashboard_view";

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
        } else {
            redirect(base_url('dashboard'));
        }

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
 
        if($input['type']){
            $type = '&type='.$input['type'].'';
        }else{
            // $type = '&type=mosque,school,cafe,hospital,lodging,restaurant,tourist_attraction,fire_station,shopping_mall,gas_station';
            $type = '&type=mosque'; 
        }

        $url = 'filter-search' . $radius . '' . $filter . '' . $coordinate . '' . $type . '';
        // echo json_encode($url);
        // die;
        $getMe = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getMe);
    }

    public function getTracking()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];


        $url = 'getMe?date=' . date('Y-m-d') . '';
        $getMe = guzzle_requestTracking('GET', $url, [
            'headers' => $headers
        ]);

        echo json_encode($getMe);
    }

    public function getTrackingName()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];
        $input = $this->input->post(); 

        $url = 'getMe?date=' . date('Y-m-d') . '&name_officer='.$input['name_officer'].'';
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


        $url = 'category_schedule?serverSide=true&order=order_category_schedule&orderDirection=asc&length=1000&start=1';
        $getCategorySchedule = guzzle_request('GET', $url, [
            'headers' => $headers
        ]);
        $data['getCategorySchedule'] = $getCategorySchedule['data'];

        echo json_encode($data['getCategorySchedule']);
    }

    public function getJadwalId()
    { 
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $input = $this->input->post(); 


        $url = 'schedule?serverSide=True&order=status_schedule&orderDirection=asc&length=100&start=1&filter%5B%5D=id_category_schedule&filterSearch%5B%5D='.$input['id_category_schedule'].'';
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


        $url = 'account/getId/'.$input['id'].'';
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

        if($data['isSuccess'] == true){  
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        }else{
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

        if($data['isSuccess'] == true){  
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        }else{
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
        if ($input['type']) {
            $type = '&filter[]=type_renpam&filterSearch[]=' . $input['type'] . '';
        } else {
            $type = '';
        }
        // if($input['page']){
        //     $page = ''.$input['page'].'';
        // }else{
        //     $page = '1';
        // } 

        $url = 'renpam?serverSide=True&length=1000'.$type.'';
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
        $url = 'renpam?serverSide=True&length=1000&start=1&start_date='.date('Y-m-d').'&end_date='.date('Y-m-d').'';
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


   
}
