<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');


class M_ngawas2 extends CI_Model {


    public function __construct(){

        parent::__construct();

        $this->load->helper('guzzle_request_helper');

    }

    public function get_datatables($postData = null)
    {
        $data = array();

        // $url = 'ngawas?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

        $result = guzzle_request('GET', 'ngawas',  [

             'headers' => [
                  'Authorization' => $this->session->userdata['token']
                  ]
               ]);

        // echo "<pre>";
        // var_dump($result['data']['rows']);die;


        $no=1;
        foreach ($result['data']['rows'] as $field) {
               // echo '<pre>';
               // var_dump($field);die;

            $row = array();
			// $row ['id']	=  $field['id'];
            $row['id']	=  $no++;
            $row['date_departure'] = date($field['departure_date']);
            $row['time_departure'] = date($field['departure_time']);
            $row['distance'] = $field['distance'];
            // $row['duration'] = $field['duration'];
            $row['person_name']	= $field['society']['person_name'];
            $row['no_vehicle']	= $field["public_vehicle"]['no_vehicle'];
            // $row['penumpang'] = count($field['penumpangs']);
            $row['type_vehicle']	= $field['type_vehicle']['type_name'];
            // $row['brand_vehicle']    = $field['brand_vehicle']['brand_name'];
            $row['location_start'] = $field['district_start'] . ' , ' . $field['subdistrict_start'];
            $row['location_end'] = $field['district_end'] . ' , ' . $field['subdistrict_end'];

            $row['action']         = '

            <a href="'.base_url().'ngawas/Ngawas/detail/'.$field['id'].'"><button class="btn btn-sm btn-primary" type="button">Detail</button></a>
            ';

            $data[] = $row;

        }

        return $data;

    }
}