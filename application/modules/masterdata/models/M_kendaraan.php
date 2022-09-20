<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_kendaraan extends CI_Model {


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


        $url = 'vehicle?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';


        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token'] 

            ]

        ]);   
		
        $no=1;
		
		foreach  ($result['data']['data'] as $field) { 
			
			
            $row = array();   
			// $row ['id']	=  $field['id']; 
            $row ['id']	=  $no++; 
            $row ['no_vehicle'] 			= $field['no_vehicle'];
            $row ['type_vehicle']			= $field['type_vehicle'];  
            $row ['brand_vehicle']			= $field['brand_vehicle'];  
            $row ['ownership_vehicle']		= $field['ownership_vehicle'];  
            $row ['action']         = ' 
                
				<button style="background-color:transparent ; border:none" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target=".DetailKendaraan">
					<h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
				</button>
				<button style="background-color:transparent ; border:none" data-bs-toggle="modal" onclick="detailEdit(`' . $field['id'] . '`)" data-bs-target=".UbahKendaraan">
					<h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
				</button>
				<button style="background-color:transparent ; border:none" id="HapusKendaraan" onclick="hapus(`' . $field['id'] . '`)">
					<h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
				</button>

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