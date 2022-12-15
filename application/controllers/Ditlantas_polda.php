<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ditlantas_polda extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_berita','berita');
    }
 
	public function index($id)
	{ 
        $url = 'polda_front/getId/' . $id;
        $getPolda = guzzle_request('GET', $url, [
        ]);
        $getPolda = $getPolda['data']['data'];
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();

		$data['breadcrumb'] = "Ditlantas Polda ".$getPolda['name_polda'];
		$data['headline'] = "Ditlantas Polda ".$getPolda['name_polda'];

		$data['title'] = "Ditlantas Polda ".$getPolda['name_polda']." | K3I Korlantas";
		$data['polda'] = $getPolda;


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
        $this->template->load('templates/template', 'detail_polda', $data);
	}

	public function error()
	{
		$this->load->view('404_notfound');
	}
}
