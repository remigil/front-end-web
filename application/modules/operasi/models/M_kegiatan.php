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

        $filter_tgl = $postData['filterTgl'];

        $filter_tgl2 = $postData['filterTgl2'];

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

        if ($filter_tgl != "") {

            $start_date = '&start_date=' . $filter_tgl . '';
        } else {

            $start_date = '';
        }

        if ($filter_tgl2 != "") {

            $end_date = '&end_date=' . $filter_tgl2 . '';
        } else {

            $end_date = '';
        }


        $url = 'schedule?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$start_date.''.$end_date.''.$searchData.'';

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
            $row ['activity']	= $field['activity']; 
            
            // $row ['namaVip']	= $field['vips'][0]['name_vip'];  
            // $row ['account']   	= $field['accounts'][0]['name_account'];
            $row ['id_category_schedule']   	= $field['id_category_schedule'];  

            $row ['address_schedule']   	= $field['address_schedule'];  
            $row ['date_schedule']   	= $field['date_schedule'];
            $row ['waktu']   	= ''.substr($field['start_time'],0,5).' - '.substr($field['end_time'],0,5).' WITA';
             
            if($field['renpams']){
                $row ['renpam']   	= '
                <div style="position: relative;">
                    <button class="btn btn-sm btn-success position-relative" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fas fa-user-check"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">'.count($field['renpams']).' <span class="visually-hidden">unread messages</span></span>
                    </button>
                
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item addRenpam" data-id="'.$field['id'].'" href="javascript:void(0);"><i class="fa fas fa-user-plus font-size-16 align-middle me-1"></i> Add Renpam</a>
                        <a class="dropdown-item detailRenpam" data-id="'.$field['renpams'][0]['schedule_id'].'" href="javascript:void(0);"><i class="fa fas fa-user-friends font-size-16 align-middle me-1"></i> Detail Renpam</a>
                    </div>
                </div>
                ';
            }else{
                $row ['renpam']   	= '<a href="javascript:void(0);" class="addRenpam" data-id="'.$field['id'].'"><button class="btn btn-sm btn-warning"><i class="fa fas fa-user-plus"></i></button></a>';
            }

            if($field['status_schedule'] == 1){
                $row ['status_schedule'] = '
                    <div class="rounded-circle m-auto" style="background:green; height:20px ; width:20px"></div>
                ';
            }else{
                $row ['status_schedule'] = '
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
