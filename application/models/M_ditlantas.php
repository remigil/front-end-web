<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_ditlantas extends CI_Model {


    public function __construct(){

        parent::__construct();

        $this->load->helper('guzzle_request_helper');

    }

    public function get_Poldaid($id)
    {
        $polda = guzzle_request('GET', 'polda/getId/' . $id, [
        
        ]);
        $polres = guzzle_request('GET', 'polres/getPolda/' . $id, [
        ]);

		$data = [
			'polda' => $polda['data']['data'],
			'polres' => $polres['data']['data']
		];
        return $data;
    }

  

}
