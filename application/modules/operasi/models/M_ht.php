<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_ht extends CI_Model {


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


        $url = 'ht?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

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
            $row ['no_lambung']	= $field['no_lambung']; 
            $row ['identitas_rt']	= $field['identitas_rt'];  
            $row ['dari_pukul']	= $field['dari_pukul'];  
            $row ['tujuan_pukul']   	= $field['tujuan_pukul'];
            $row ['jumlah_kendaraan']   	= $field['jumlah_kendaraan'];  
            $row ['ket']   	= $field['ket'];  
            $row ['created_at']   	= $field['created_at'];  
            $row ['action']         = ' 
                <div style="position: absolute;">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-cog "></i></button>
                    <div class="dropdown-menu"> 
                        <a class="dropdown-item" href="javascript:void(0);" 
                        data-id="'.$field['id'].'" 
                        data-no="'.$field['no_lambung'].'" 
                        data-identitas="'.$field['identitas_rt'].'" 
                        data-dari="'.$field['dari_pukul'].'" 
                        data-tujuan="'.$field['tujuan_pukul'].'" 
                        data-jml="'.$field['jumlah_kendaraan'].'" 
                        data-ket="'.$field['ket'].'" 
                        data-bs-toggle="modal" data-bs-target=".EditHt"> Edit</a>
                        <a class="deletedata dropdown-item" href="javascript:void(0);" data-id="' . $field['id'] . '"> Hapus</a> 
                    </div>
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
