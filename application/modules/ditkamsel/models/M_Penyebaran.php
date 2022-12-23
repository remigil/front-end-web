<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_Penyebaran extends CI_Model
{


    public function __construct()
    {

        parent::__construct();

        $this->load->helper('guzzle_request_helper');
    }

    public function getNasional()
    {
        $url = 'penyebaran?nasional=true';

        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        return $result;
    }

    public function getMonth()
    {
        $url = 'penyebaran/count-month?nasional=true';

        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        return $result;
    }

    // public function getTableByPolda($postData = null)
    // {
    //     $draw = $postData['draw'];

    //     $rowperpage = $postData['length']; // Rows display per page  

    //     $columnName = $postData['columns']; // Column name 

    //     $page = $postData['page'];

    //     $orderField = $postData['orderField'];

    //     $orderValue = $postData['orderValue'];

    //     $orderFieldRess =  $columnName[$orderField]['data'];


    //     $data = array();


    //     $search = $postData['search']['value'];

    //     // $filter_tgl = $postData['filterTgl'];

    //     // $filter_tgl2 = $postData['filterTgl2'];

    //     // $filter_status = $postData['filterStatus'];

    //     // $filter_name = $postData['filterName'];

    //     // $filter_poc_name = $postData['filterPocName'];

    //     // $filter_phone = $postData['filterPhone'];

    //     // $filter_threat = $postData['filterThreat']; 



    //     if ($search) {

    //         $searchData = '&search=' . $search . '';
    //     } else {

    //         $searchData = '';
    //     }

    //     // if($filter_threat){

    //     //     $threat_level = '&filterField[]=threat_level&filterValue[]='.$filter_threat.'';

    //     // }else{

    //     //     $threat_level = '';

    //     // }

    //     // if($filter_tgl != ""){

    //     //     $event_date = '&startDate='.$filter_tgl.'';

    //     // }else{

    //     //     $event_date = '';

    //     // }

    //     // if($filter_tgl2 != ""){

    //     //     $event_date_to = '&endDate='.$filter_tgl2.'';

    //     // }else{

    //     //     $event_date_to = '';

    //     // } 


    //     $url = 'dikmaslantas?nasional=true&serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';


    //     $result = guzzle_request('GET', $url, [

    //         'headers' => [
    //             'Authorization' => $this->session->userdata['token']
    //         ]

    //     ]);

    //     $no = 1;


    //     foreach ($result['data']['data'] as $field) {
    //         $row = array();
    //         // $row ['id']	=  $field['id']; 
    //         $row['id']    =  $no++;
    //         $row['name_polda']       = $field['name_polda'];
    //         $row['jumlah']       = $field['jumlah'];
    //         $row['media_cetak']    = $field['media_cetak'];
    //         $row['media_elektronik']       = $field['media_elektronik'];
    //         $row['media_sosial']       = $field['media_sosial'];
    //         $row['laka_langgar']       = $field['laka_langgar'];
    //         $data[] = $row;
    //     }


    //     $response = array(

    //         "draw" => intval($draw),

    //         "iTotalRecords" => $result['data']['recordsTotal'],

    //         "iTotalDisplayRecords" => $result['data']['recordsFiltered'],

    //         "aaData" => $data,

    //         "apa" => $postData

    //     );


    //     return $response;
    // }
}
