<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_harian extends CI_Model
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

        if ($postData == null) {
            $orderValue = 'DESC';
        } else {
            $orderValue = $postData['orderValue'];
        }


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


        $url = 'report?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '' . '&filter%5B%5D=type' . '&filterSearch%5B%5D=PNC';

        $result = guzzle_request('GET', $url, [

            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);

        $no = 1;

        foreach ($result['data']['data'] as $field) {

            if ($field['status'] == 0) {
                $status = ' <div class="rounded-circle m-auto" style="background:red; height:20px ; width:20px"></div>';
            } else if ($field['status'] == 1) {
                $status = ' <div class="rounded-circle m-auto" style="background:green; height:20px ; width:20px"></div>';
            }
            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id']    =  $no++;
            $row['name_officer']      = $field['officer']['name_officer'];
            $row['categori']      = $field['categori'];
            $row['description']           = $field['description'];
            $row['time']           = format_indoTglWkt($field['created_at']);
            $row['phone_officer']           = $field['officer']['phone_officer'];
            $row['status']           = $status;
            $row['action']             = '    
                <div style="position: absolute;">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-cog "></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="' . base_url() . 'laporan/harian/Detail/' . $field['id'] . '"> Detail</a>
                        <a class="dropdown-item" href="' . base_url() . 'laporan/harian/Edit/' . $field['id'] . '"> Edit</a>
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