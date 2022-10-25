<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_operasi_detail extends CI_Model
{


    public function __construct()
    {

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


        $data = array();


        $search = $postData['search']['value'];

        $id = $postData['id'];

        // $filter_tgl2 = $postData['filterTgl2'];

        // $filter_status = $postData['filterStatus'];

        // $filter_name = $postData['filterName'];

        // $filter_poc_name = $postData['filterPocName'];

        // $filter_phone = $postData['filterPhone'];

        // $filter_threat = $postData['filterThreat']; 



        // if ($search) {

        //     $searchData = '&search=' . $search . '';
        // } else {

        //     $searchData = '';
        // }

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


        // $url = 'operation-profile/getId/VTJGc2RHVmtYMTlzN01nbjl0R1lBOGt2cnRGQ2FTamdQaFg4WFI3ZXQvND0';
        $url = 'operation-profile/getId/' . $id;

        $result = guzzle_request('GET', $url, [

            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);

        $no = 1;

        foreach ($result['data']['data']['polda'] as $field) {
            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id']                =  $no++;
            $row['name_polda']         = $field['name_polda'];
            // $row['name_polda']         = $field['name_polda'];
            // $row['name_polda']         = $field['name_polda'];

            $row['action']         = '   
                
			<a href="' . base_url() . 'operasi/RencanaOperasi/detail/' . $field['id'] . '"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>
                
            ';

            $data[] = $row;
        }


        $response = array(

            "draw" => intval($draw),

            "iTotalRecords" => count($result['data']['data']['polda']),

            // "iTotalDisplayRecords" => $result['data']['recordsFiltered'],

            "aaData" => $data,

            "apa" => $postData

        );


        return $response;
    }
}
