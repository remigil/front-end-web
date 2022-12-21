<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_stakeholder extends CI_Model {


    public function __construct(){

        parent::__construct();

        $this->load->helper('guzzle_request_helper');

    }
	public function get_Stakeholderid($id)
    {
        $stakeholder = guzzle_request('GET', 'stackholder/getId/' . $id, [
        
        ]);
        

		$data = [
			'stakeholder' => $stakeholder['data']['data'],
			
		];
        return $data;
    }

    

  

}
