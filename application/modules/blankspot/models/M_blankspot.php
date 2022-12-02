<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_blankspot extends CI_Model
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


        $url = 'blankspot?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';


        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        $no = 1;
        // var_dump($result);
        // die;
        // kategori berita berdasarkan nomor
        foreach ($result['data']['data'] as $field) {
            // if ($field['polda_id'] == 1) {
            //     $polda = "Polda jawa barat";
            // } else if ($field['polda_id'] == 2) {
            //     $polda = "Polda metro jaya";
            // } else if ($field['polda_id'] == 3) {
            //     $polda = "Polda banten";
            // }
            // if ($field['polres_id'] == 1) {
            //     $polres = "polrestabes bandung";
            // } else if ($field['polres_id'] == 2) {
            //     $polres = "polresta bogor";
            // } else if ($field['polres_id'] == 3) {
            //     $polres = "polres bogor";
            // }

            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id']    =  $no++;
            $row['polda_id']    = $field['polda']['name_polda'];
            $row['polres_id']    = $field['polre']['name_polres'];
            $row['location']            = $field['location'];
            $row['created_at']           = date('H:i:s d-m-Y', strtotime($field['report_date']));

            $row['action']         = '
            
            <a href="' . base_url() . 'blankspot/Blankspot/detail/' . $field['id'] . '"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>

			
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
