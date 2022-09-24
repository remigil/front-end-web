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

        $filter_tgl = $postData['filterTgl'];

        $filter_tgl2 = $postData['filterTgl2'];

		// $filter_status = $postData['filterStatus'];

		$filter_schedule = $postData['filterSchedule'];

		$filter_type_renpam = $postData['filterTypeRenpam'];

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

        if($filter_type_renpam){

            $type_renpam = '&filter[]=type_renpam&filterSearch[]='.$filter_type_renpam.'';

        }else{

            $type_renpam = '';

        }

        if($filter_tgl != ""){

            $start_date = '&start_date='.$filter_tgl.'';

        }else{

            $start_date = '';

        }

        if($filter_tgl2 != ""){

            $end_date = '&end_date='.$filter_tgl2.'';

        }else{

            $end_date = '';

        } 


        // if($orderFieldRess == ''){
            
        // }

        $url = 'renpam?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.''.$schedule_id.''.$type_renpam.''.$start_date.''.$end_date.'';

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
            if($field['status_renpam'] == 1){
                $row ['status_renpam'] = '
                    <div class="rounded-circle m-auto flag" id="flag'.$no.'" data-id="'.$field['id'].'" style="background:green; height:30px; width:30px; color: white; text-align: center;font-size: 20px;cursor: pointer;">
                        <i class="mdi mdi-eye "></i> 
                    </div>
                ';
            }else{
                $row ['status_renpam'] = '
                    <div class="rounded-circle m-auto flag" id="flag'.$no.'" data-id="'.$field['id'].'" style="background:red; height:30px; width:30px; color: white; text-align: center;font-size: 20px;cursor: pointer;">
                        <i class="mdi mdi-eye "></i> 
                    </div>
                ';
            }  
            $row ['name_renpam']	= $field['name_renpam']; 
            $row ['start_time']	= ''.substr($field['start_time'],0,5).' WITA'; 
            $row ['deligasi']	= '-'; 
             
            if($field['route'] != null){
                $route = '';
                foreach  ($field['route'] as $fieldRoute) { 
                    $route .= ''.$fieldRoute['name'].' To ';
                }
                $row ['route']	= $route; 
            }else {
                $row ['route']	= '-'; 
            }

            if($field['route_alternatif_1'] != null){
                $route1 = '';
                foreach  ($field['route_alternatif_1'] as $fieldRoute1) { 
                    $route1 .= ''.$fieldRoute1['name'].' To ';
                }
                $row ['route_alternatif_1']	= $route1; 
            }else {
                $row ['route_alternatif_1']	= '-'; 
            }

            if($field['route_alternatif_2'] != null){
                $route2 = '';
                foreach  ($field['route_alternatif_2'] as $fieldRoute2) { 
                    $route2 .= ''.$fieldRoute2['name'].' <br> To <br> ';
                }
                $row ['route_alternatif_2']	= $route2; 
            }else {
                $row ['route_alternatif_2']	= '-'; 
            } 

            if($field['route_masyarakat'] != null){
                $route3 = '';
                foreach  ($field['route_masyarakat'] as $fieldRoute3) { 
                    $route3 .= ''.$fieldRoute3['name'].' <br> To <br> ';
                }
                $row ['route_masyarakat']	= $route3; 
            }else {
                $row ['route_masyarakat']	= '-'; 
            } 

            if($field['route_umum'] != null){
                $route4 = '';
                foreach  ($field['route_umum'] as $fieldRoute4) { 
                    $route4 .= ''.$fieldRoute4['name'].' <br> To <br> ';
                }
                $row ['route_umum']	= $route4; 
            }else {
                $row ['route_umum']	= '-'; 
            } 
            
            $row ['note']	= '-';

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
            
            if($field['choose_rute'] == 1){
                $row ['choose_rute']	= 'Route';  
            }else if($field['choose_rute'] == 2){
                $row ['choose_rute']	= 'Alternative';  
            }else if($field['choose_rute'] == 3){
                $row ['choose_rute']	= 'Escape';  
            }else{
                $row ['choose_rute']	= '-';  
            }

            $row ['date']	= format_indo($field['date']);  
            $row ['waktu']   	= ''.substr($field['start_time'],0,5).' - '.substr($field['end_time'],0,5).' WITA';
 
            $row ['action']         = ' 
                <a href="'.base_url().'operasi/renpam/Detail/'.$field['id'].'"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>  
            '; 

            // $row ['lihat']         = ' 
            // <button class="btn btn-primary flag" id="flag'.$no.'" data-id="'.$field['id'].'" ><i class="mdi mdi-eye "></i></button>  
            // '; 
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
