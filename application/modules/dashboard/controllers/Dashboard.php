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
            foreach ($ditgakkum['data'] as $key) {
                $polda_ditgakkum[] = $key['name_polda'];
                $lakalantas[] = $key['lakalantas'];
                $lakalanggar[] = $key["lakalanggar"];
                $garlantas[] = $key['garlantas'];
                $turjagwali[] = $key['turjagwali'];
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



            $page_content["data"] = ['polda_ditkamsel' => $polda_ditkamsel, 'dikmaslantas' => $dikmaslantas, 'penyebaran' => $penyebaran, 'polda_ditgakkum' => $polda_ditgakkum, 'lakalantas' => $lakalantas, 'lakalanggar' => $lakalanggar, 'garlantas' => $garlantas, 'turjagwali' => $turjagwali, 'polda_ditregident' => $polda_ditregident, 'sim' => $sim, 'stnk' => $stnk, 'bpkb' => $bpkb, 'ranmor' => $ranmor];
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
