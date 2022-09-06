<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_cctv extends CI_Model {


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


        $url = 'cctv?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

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
            $row ['type_cctv']   	= $field['type_cctv'];
            $row ['ip_cctv']   	= $field['ip_cctv'];  
            $row ['address_cctv']	= $field['address_cctv'];  
            $row ['lat_cctv']   	= $field['lat_cctv'];  
            $row ['lng_cctv']   	= $field['lng_cctv']; 
            if($field['status_cctv'] == 1){
                $row ['status_cctv']   	= 'Active'; 
            }else{
                $row ['status_cctv']   	= 'Inactive'; 
            } 
            $row ['action']         = '   
                <div class="d-flex flex-row justify-content-between">
                    <button style="background-color:transparent ; border:none" class="detailRow" data-nama="'.$field['type_cctv'].'" data-ip="'.$field['ip_cctv'].'" data-provinsi="'.$field['address_cctv'].'" data-kota="'.$field['vms_cctv'].'" data-lat="'.$field['lat_cctv'].'" data-long="'.$field['lng_cctv'].'" data-username="'.$field['username_cctv'].'" data-password="'.$field['password_cctv'].'">
                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                    </button>
                    <button style="background-color:transparent ; border:none" class="editRow" data-nama="'.$field['type_cctv'].'" data-ip="'.$field['ip_cctv'].'" data-provinsi="'.$field['address_cctv'].'" data-kota="'.$field['vms_cctv'].'" data-lat="'.$field['lat_cctv'].'" data-long="'.$field['lng_cctv'].'" data-username="'.$field['username_cctv'].'" data-password="'.$field['password_cctv'].'">
                        <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                    </button>
                    <button style="background-color:transparent ; border:none" onclick="hapus('.$field['id'].')">
                        <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                    </button>
                </div>
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
