<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_kegiatan extends CI_Model {


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


        $url = 'schedule?length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

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
            $row ['kegiatan']	= $field['activity']; 
            
            // $row ['namaVip']	= $field['vips'][0]['name_vip'];  
            // $row ['account']   	= $field['accounts'][0]['name_account'];

            $row ['alamat']   	= $field['address_schedule'];  
            $row ['tanggal']   	= $field['date_schedule'];
            $row ['waktu']   	= ''.substr($field['start_time'],0,5).' - '.substr($field['end_time'],0,5).' WITA';
            if($field['status_schedule'] == 1){
                $row ['status'] = '
                    <div class="rounded-circle m-auto" style="background:green; height:20px ; width:20px"></div>
                ';
            }else{
                $row ['status'] = '
                    <div class="rounded-circle m-auto" style="background:red; height:20px ; width:20px"></div>
                ';
            } 
            $row ['action']         = ' 
                <a href="'.base_url().'operasi/Kegiatan/Detail/'.$field['id'].'"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>  
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