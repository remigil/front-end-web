<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');


class M_ngawas extends CI_Model {


    public function __construct(){

        parent::__construct();

        $this->load->helper('guzzle_request_helper');

    }

    public function get_datatables($postData = null)
    {

        $draw = $postData['draw'];

        $rowperpage = $postData['length']; // Rows display per page

        $columnName = $postData['columns']; // Column name

		$page = $postData['page'];

        $orderField = $postData['orderField'];

        $orderValue = $postData['orderValue'];

        $orderFieldRess =  $columnName[$orderField]['data'];


        $data = array();


        $search = $postData['search']['value'];

        // $filter_tgl = $postData['filterTgl'];

        // $filter_tgl2 = $postData['filterTgl2'];

		// $filter_status = $postData['filterStatus'];

		// $filter_name = $postData['filterName'];

		// $filter_poc_name = $postData['filterPocName'];

		// $filter_phone = $postData['filterPhone'];

		// $filter_threat = $postData['filterThreat'];



        if($search){

            $searchData = '&search='.$search.'';

        }else{

            $searchData = '';
        }

        // if($filter_threat){

        //     $threat_level = '&filterField[]=threat_level&filterValue[]='.$filter_threat.'';

        // }else{

        //     $threat_level = '';

        // }

        // if($filter_tgl != ""){

        //     $event_date = '&startDate='.$filter_tgl.'';

        // }else{

        //     $event_date = '';

        // }

        // if($filter_tgl2 != ""){

        //     $event_date_to = '&endDate='.$filter_tgl2.'';

        // }else{

        //     $event_date_to = '';

        // }

        $url = 'ngawas?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

        $result = guzzle_request('GET', $url,  [

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
            $row['duration'] = $field['duration'];
            $row['person_name']	= $field['society']['person_name'];
            $row['no_vehicle']	= $field["public_vehicle"]['no_vehicle'];
            $row['penumpang'] = count($field['penumpangs']);
            $row['type_vehicle']	= $field['type_vehicle']['type_name'];
            $row['brand_vehicle']    = $field['brand_vehicle']['brand_name'];
            $row['location_start'] = $field['district_start'] . ' , ' . $field['province_start'];
            $row['location_end'] = $field['district_end'] . ' , ' . $field['province_end'];

            $row['action']         = '

            <a href="'.base_url().'ngawas/Ngawas/detail/'.$field['id'].'"><button class="btn btn-sm btn-primary" type="button">Detail</button></a>
            <a href="'.base_url().'ngawas/delete/'.$field['id'].'"><button class="btn btn-sm btn-danger" type="button" id="delete">Delete</button></a>

            ';

            $data[] = $row;

        }


        $response = array(

            "draw" => intval($draw),

            "iTotalRecords" => $result['data']['recordsTotal'],

            "iTotalDisplayRecords" => $result['data']['recordsFiltered'],

            "aaData" => $data,

            "apa" => $postData

        );


        return $response;

    }



}
