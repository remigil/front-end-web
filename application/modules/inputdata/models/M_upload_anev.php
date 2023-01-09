<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_upload_anev extends CI_Model
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

        $url = 'upload_anev/getWeb?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';



        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);


        $no = 1;
        foreach ($result['data']['data'] as $field) {

            $row = array();
            $row['id']    =  $no++;
            $row['title']            = $field['title'];

            if ($field['tipe'] == 1) {
                $row['tipe'] = 'Harian';
            } else if ($field['tipe'] == 2) {
                $row['tipe'] = 'Mingguan';
            } else if ($field['tipe'] == 3) {
                $row['tipe'] = 'Bulanan';
            }
            $row['date']           = $field['date'];
            $row['action']         = ' 
                
				<a href="' . url_api() . 'laporan_upload_anev/' . $field['file'] . '" style="background-color:transparent ; border:none" type="button" target="_blank">
                    <h3 style=" color:#003A91"><i class="mdi mdi-file"></i></h3>
                </a>
                <button style="background-color:transparent ; border:none" onclick="hapus(`' . $field['id'] . '`)">
                        <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                </button>

            ';

            $data[] = $row;
        }


        $response = array(

            "draw" => intval($draw),

            "iTotalRecords" => $result['data']["recordsFiltered"],

            "iTotalDisplayRecords" => $result['data']["recordsFiltered"],

            "aaData" => $data,

            "apa" => $postData

        );


        return $response;
    }


    public function get_datatables_kakor($postData = null)

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

        $url = 'upload_anev/getWeb?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';



        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);


        $no = 1;
        foreach ($result['data']['data'] as $field) {

            $row = array();
            $row['id']    =  $no++;
            $row['title']            = $field['title'];

            if ($field['tipe'] == 1) {
                $row['tipe'] = 'Harian';
            } else if ($field['tipe'] == 2) {
                $row['tipe'] = 'Mingguan';
            } else if ($field['tipe'] == 3) {
                $row['tipe'] = 'Bulanan';
            }
            $row['date']           = $field['date'];
            $row['action']         = ' 
                
				<a href="' . url_api() . 'laporan_upload_anev/' . $field['file'] . '" style="background-color:transparent ; border:none" type="button" target="_blank">
                    <h3 style=" color:#003A91"><i class="mdi mdi-file"></i></h3>
                </a>

            ';

            $data[] = $row;
        }


        $response = array(

            "draw" => intval($draw),

            "iTotalRecords" => $result['data']["recordsFiltered"],

            "iTotalDisplayRecords" => $result['data']["recordsFiltered"],

            "aaData" => $data,

            "apa" => $postData

        );


        return $response;
    }
}
