<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');


class M_tripon extends CI_Model {


    public function __construct(){

        parent::__construct();

        $this->load->helper('guzzle_request_helper');

    }

    public function get_datatables($postData=null)

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


        // $url_trip_on = 'trip_on';
        $url_trip_on = 'trip_on?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';
        // $url_passanger_trip_on = 'passanger_trip_on?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';
        

        $result = guzzle_request('GET', $url_trip_on,  [

            'headers' => [

                'Authorization' => $this->session->userdata['token'] 

            ]

        ]);  

        // echo "<pre>";
        // var_dump($result['data']['trip_on']['rows']);die;
        
        // $asd = $result['data']['data'];
        // var_dump($asd);die;
        
		
        $no=1;
		foreach  ($result['data']['trip_on']['rows'] as $field) { 
		// foreach  ($result['data']['data'] as $field) { 
            
            $row = array();   
			// $row ['id']	=  $field['id']; 
            $row ['id']	=  $no++; 
            $row ['person_name']	= $field['society']['person_name'];
            $row ['no_vehicle']	= $field["public_vehicle"]['no_vehicle'];
            $row ['type_vehicle']	= $field['type_vehicle']['type_name'];
            $row ['brand_vehicle']	= $field['brand_vehicle']['brand_name'];
            // $row ['brand_vehicle']	= $field['brand_vehicle'];  
            // $row ['type_vehicle'] = $field['type_vehicle'];
            // foreach ($field['passenger_trip_ons'] as $tes){
            //     $row ['passenger']	= $tes['name'];
            // }
            $row ['action']         = '
            
            <a href="'.base_url().'tripon/Tripon/detail/'.$field['id'].'"><button class="btn btn-sm btn-primary" type="button">Detail</button></a>
            
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
