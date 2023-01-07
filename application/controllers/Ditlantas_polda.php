<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ditlantas_polda extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_berita','berita');
		$this->load->model('m_ditlantas','ditlantas');
    }
 
	public function index($id)
	{ 
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
        $headers = [
            'Authorization' => $this->session->userdata['token']
        ];

        $url = 'polda_front/getId/' . $id;
        $getPolda = guzzle_request('GET', $url, [
        ]);
		$getStakeholder = guzzle_request('GET', 'stackholder', []);
        $getPolda = $getPolda['data']['data'];
		

		$data['breadcrumb'] = "Ditlantas Polda ".$getPolda['name_polda'];
		$data['headline'] = "Ditlantas Polda ".$getPolda['name_polda'];

		$data['title'] = "Ditlantas Polda ".$getPolda['name_polda']." | K3I Korlantas";
		$data['polda'] = $getPolda;

		$data['getStakeholder'] = $getStakeholder['data']['data'];

        $getPolres = guzzle_request('GET' , 'polres?serverSide=true$start=1&length=10&order=id&orderDorection=desc&filter[]=polda_id&filterSearch[]='.$getPolda['polda_id'], []);
        $data['getPolres'] = $getPolres['data']['data'];
        // var_dump($data['getPolres']);die;

        $getsamsat = guzzle_request('GET' , 'filter-search?serverSide=true&start=1&filter=samsat',[
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]]
        );

        // var_dump($getsamsat);die;
        $data['getsamsat'] = $getsamsat['data']['samsat'];
        // var_dump($data['getsamsat']);die;


		$getBerita = guzzle_request('GET', 'news', [
            // 'headers' => $headers
        ]);

        $news = array();
        foreach ($getBerita['data']['datanya'] as $key) {
            foreach ($key['data'] as $k) {
                $news[] = $k;
            }
        }

        $polda_id = $this->uri->segment(2);
        $getDitgakkum = guzzle_request('GET', 'ditgakkum/daily?polda_id=' . $polda_id . '', [
            // 'headers' => $headers
        ]);
        $getDitregident = guzzle_request('GET', 'ditregident/daily?polda_id=' . $polda_id . '', [
            // 'headers' => $headers
        ]);


        $data["databerita"] = $news;
        $data['ditgakkum'] = $getDitgakkum;
        $data['ditregident'] = $getDitregident;
		// echo "<pre>";
		// var_dump($data);die;
        $this->template->load('templates/template', 'detail_polda', $data);
	}

	public function getDetailPolda()
    {
        $id = $this->input->post('id');
        $data = $this->ditlantas->get_Poldaid($id);
		
        echo json_encode($data);
    }
	public function error()
	{
		$this->load->view('404_notfound');
	}
}


