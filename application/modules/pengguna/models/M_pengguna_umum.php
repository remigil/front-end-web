<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_pengguna_umum extends CI_Model
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


        $url = 'society?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';


        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // echo "<pre>";
        // var_dump($result);
        // echo "</pre>";

        $no = 1;

        foreach ($result['data']['data'] as $field) {

            if ($field['status_verifikasi'] == 0) {
                $status = '
				<button style="border:none" class="btn btn-warning">
					belum aktivasi
				</button>';
            } else if ($field['status_verifikasi'] == 1) {
                $status = '
				<button style="border:none" class="btn btn-danger">
					Nonaktif
				</button>';
            } else if ($field['status_verifikasi'] == 2) {
                $status = '
				<button style="border:none" class="btn btn-success">
					Aktif
				</button>';
            }
            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id']                =  $no++;
            $row['person_name']    = $field['person_name'];
            $row['email']            = $field['email'];
            $row['no_hp']           = '+62 ' . $field['no_hp'];
            $row['created_at']       = $field['created_at'];
            // $row['action']         = $status . ' 
            $row['action']         = $status.' 
                
				<button class="btn btn-primary" style="border:none" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target=".DetailPenggunaUmum">
                    Detail
                </button>

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
