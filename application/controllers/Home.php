<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_berita','berita');
    }
 
	public function index()
	{ 
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash(); 
        $data['title'] = "Home | K3I Korlantas";  
		
		// $url = 'news?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

		// $json = json_decode($url);
		// var_dump($json);
        // $page_content["css"] = '';
        // $page_content["js"] = '';
        // $page_content["title"] = "Berita";

		$getBerita = guzzle_request('GET', 'news', [
            // 'headers' => $headers
        ]);
		$databerita['getBerita'] = $getBerita['data']['datanya'][0]['data'];
		// var_dump($databerita['getBerita']);die;
		
		
        $data["databerita"] = $databerita;
		// $postData = $this->input->post();   
        // $data = $this->berita->get_datatables($postData);  
		// echo json_encode($data); 
        $this->template->load('templates/template','home', $data);
	}

	public function getPolda()
    {
		
        // $headers = [
        //     'Authorization' => $this->session->userdata['token']
        // ];

        $url = 'polda_front/get_web';
        $getPolda = guzzle_request('GET', $url, [
            // 'headers' => $headers
        ]);
		// var_dump($getPolda);die;
        $getPolda = $getPolda['data']['data'];


        $dit = [];
        $urldit = 'ditgakkum/daily';
        $getDit = guzzle_request('GET', $urldit, [
            // 'headers' => $headers
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

        $urlranmor = 'ranmor/daily';
        $getRanmor = guzzle_request('GET', $urlranmor, [
            // 'headers' => $headers
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

	public function getStatistik()
    {
        
        $getGakkum = guzzle_request('GET', 'ditgakkum/daily', [
            // 'headers' => $headers
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

        $getRanmor = guzzle_request('GET', 'ditregident/daily', [
            // 'headers' => $headers
        ]);
        $getRanmor = $getRanmor["data"];

        $totalmotor = 0;
        for ($i = 0; $i < count($getRanmor); $i++) {
            $totalmotor += $getRanmor[$i]['ranmor'];
        }

        $getSim = guzzle_request('GET', 'sim/daily', [
            // 'headers' => $headers
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

	public function getBerita()
	{
		// $headers = [
        //     'Authorization' => $this->session->userdata['token']
        // ];
		$getBerita = guzzle_request('GET', 'news', [
            // 'headers' => $headers
        ]);
        $getBeritaall = $getBerita['data']['datanya'][0]['data'];
		// var_dump($getBeritaall);die;

		$getTitle = $getBeritaall[0]['title'];

		// var_dump($getTitle);die;
		$data = [
			'title' => $getTitle,
		];

		
		

		// $data = [
        //     'garlantas' => number_format($totalgarlantas, 0, '', '.'),
        //     'lakalantas' =>  number_format($totallakalantas, 0, '', '.'),
        //     'motor' =>  number_format($totalmotor, 0, '', '.'),
        //     'turjagwali' => number_format($totalturjagwali, 0, '', '.'),
        //     'sim' =>  number_format($totalsim, 0, '', '.'),
        // ];
		echo json_encode($data);
	}

	public function error()
	{
		$this->load->view('404_notfound');
	}
}
