<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_operator extends CI_Model {


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


        $url = 'operation-profile?length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

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

            if($field['banner'] != null || $field['banner'] != ''){
                $banner = '<img class="rounded-circle avatar-xl" alt="200x200" src="'.url_api().'banner/'.$field['banner'].'" data-holder-rendered="true">';
            }else{
                $banner = '<img class="rounded-circle avatar-xl" alt="200x200" src="'.base_url().'assets/no_image.png" data-holder-rendered="true">';
            }
            $row ['banner']	= $banner;  

            $row ['name_operation']	= $field['name_operation']; 

            if($field['document_sprint'] != null || $field['document_sprint'] != ''){
                $sprint = '<img class="rounded-circle avatar-xl" alt="200x200" src="'.url_api().'document_sprint/'.$field['document_sprint'].'" data-holder-rendered="true">';
            }else{
                $sprint = '<img class="rounded-circle avatar-xl" alt="200x200" src="'.base_url().'assets/no_image.png" data-holder-rendered="true">';
            }
            $row ['document_sprint']	= $sprint;  

            if($field['background_image'] != null || $field['background_image'] != ''){
                $bg = '<img class="rounded-circle avatar-xl" alt="200x200" src="'.url_api().'background_image/'.$field['background_image'].'" data-holder-rendered="true">';
            }else{
                $bg = '<img class="rounded-circle avatar-xl" alt="200x200" src="'.base_url().'assets/no_image.png" data-holder-rendered="true">';
            }
            $row ['background_image']	= $bg;  

            if($field['logo'] != null || $field['logo'] != ''){
                $logo = '<img class="rounded-circle avatar-xl" alt="200x200" src="'.url_api().'logo/'.$field['logo'].'" data-holder-rendered="true">';
            }else{
                $logo = '<img class="rounded-circle avatar-xl" alt="200x200" src="'.base_url().'assets/no_image.png" data-holder-rendered="true">';
            }
            $row ['logo']	= $logo; 

            $row ['date']	= ''.format_indo($field['date_start_operation']).' to '.format_indo($field['date_end_operation']).''; 
            $row ['action']         = ' 
                <a href="'.base_url().'user/operator/Detail/'.$field['id'].'"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>  
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
