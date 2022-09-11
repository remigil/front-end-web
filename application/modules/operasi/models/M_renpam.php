<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_renpam extends CI_Model {


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

		$filter_schedule = $postData['filterSchedule'];

		// $filter_poc_name = $postData['filterPocName'];

		// $filter_phone = $postData['filterPhone'];

		// $filter_threat = $postData['filterThreat']; 

 

        if($search){

            $searchData = '&search='.$search.'';

        }else{

            $searchData = '';

        } 

        if($filter_schedule){

            $schedule_id = '&filter[]=schedule_id&filterSearch[]='.$filter_schedule.'';

        }else{

            $schedule_id = '';

        }

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


        // if($orderFieldRess == ''){
            
        // }

        $url = 'renpam?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.''.$schedule_id.'';

        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token'] 

            ]

        ]);   

        // print_r($url);
        // die;

        $no=1;

		foreach  ($result['data']['data'] as $field) { 
            $row = array();   
			// $row ['id']	=  $field['id']; 
            $row ['id']	=  $no++; 
            if($field['accounts'] != null){
                $accounts = '';
                foreach  ($field['accounts'] as $fieldAccount) { 
                    $accounts .= ''.$fieldAccount['name_account'].', ';
                }
                $row ['accounts']	= $accounts; 
            }else {
                $row ['accounts']	= '-'; 
            }
            if($field['vips'] != null){
                $vips = '';
                foreach  ($field['vips'] as $fieldVips) { 
                    $vips .= ''.$fieldVips['name_vip'].', ';
                }
                $row ['vips']	= $vips; 
            }else {
                $row ['vips']	= '-'; 
            } 

            if($field['type_renpam'] == 1){
                $row ['type_renpam']	= 'Patroli'; 
            } else if($field['type_renpam'] == 2){
                $row ['type_renpam']	= 'Pengawalan'; 
            } else if($field['type_renpam'] == 3){
                $row ['type_renpam']	= 'Penjagaan';  
            } else if($field['type_renpam'] == 4){
                $row ['type_renpam']	= 'Pengaturan';  
            }
            $row ['name_renpam']	= $field['name_renpam'];   
            if($field['schedule'] > 0){
                $row ['lokasi']	= $field['schedule']['address_schedule'];  
            }else{
                $row ['lokasi']	= '-'; 
            }
            $row ['date']	= format_indo($field['date']);  
            $row ['waktu']   	= ''.substr($field['start_time'],0,5).' - '.substr($field['end_time'],0,5).' WITA';
 
            $row ['action']         = ' 
                <a href="'.base_url().'operasi/renpam/Detail/'.$field['id'].'"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>  
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
