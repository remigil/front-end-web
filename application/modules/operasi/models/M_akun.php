<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_akun extends CI_Model
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



        if ($search) {

            $searchData = '&search=' . $search . '';
        } else {

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


        $url = 'account?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';


        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        $no = 1;

        foreach ($result['data']['data'] as $field) {
            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id']    =  $no++;
            $row['name_account']    = ''.$field['name_account'].''; 

            if($field['country'] != null){
                $delegasi = $field['country']['name_country'];
            }else{
                $delegasi = '-';
            }
            $row['delegasi']    = ''.$delegasi.''; 

            if($field['officers'] != null){
                $petugas = '';
                foreach  ($field['officers'] as $fieldPetugas) { 
                    $petugas .= ''.$fieldPetugas['name_officer'].', ';
                }
                $row ['officers']	= $petugas; 
            }else {
                $row ['officers']	= '-'; 
            } 

            if($field['officer'] != null){
                $row['leader_team']    = $field['officer']['name_officer']; 
            }else{
                $row['leader_team']    = '-';
            }
            // $row['vehicle']       = $field['vehicle']['no_vehicle']; 
            $row['action']         = ' 
                <a href="' . base_url() . 'operasi/akun/Detail/' . $field['id'] . '"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>  
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
