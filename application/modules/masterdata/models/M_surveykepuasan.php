<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_surveykepuasan extends CI_Model
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


        $url = 'satisfactionsurvey?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';

        $result = guzzle_request('GET', $url, [

            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);

        // var_dump($result);die;



        $no = 1;

        foreach ($result['data']['data'] as $field) {
            if ($field['design_survey'] == 1) {
				$desain = "Sangat Bagus";
			} else if($field['design_survey'] == 2){
				$desain = "Bagus";
			}else if($field['design_survey'] == 3){
				$desain = "Kurang Bagus";
			}else if($field['design_survey'] == 4){
				$desain = "Jelek";
			}else if($field['design_survey'] == 5){
				$desain = "Jelek Sekali";
			}

            if ($field['convenience_survey'] == 1) {
				$kemudahan = "Sangat Mudah";
			} else if($field['convenience_survey'] == 2){
				$kemudahan = "Mudah";
			}else if($field['convenience_survey'] == 3){
				$kemudahan = "Kurang Mudah";
			}else if($field['convenience_survey'] == 4){
				$kemudahan = "Tidak Mudah";
			}

            if ($field['accurate_survey'] == 1) {
				$akurat = "Sangat Puas";
			} else if($field['accurate_survey'] == 2){
				$akurat = "Puas";
			}else if($field['accurate_survey'] == 3){
				$akurat = "Kurang Puas";
			}else if($field['accurate_survey'] == 4){
				$akurat = "Tidak Puas";
			}

            if ($field['fast_survey'] == 1) {
				$kecepatan = "Sangat Cepat";
			} else if($field['fast_survey'] == 2){
				$kecepatan = "Cepat";
			}else if($field['fast_survey'] == 3){
				$kecepatan = "Kurang Cepat";
			}else if($field['fast_survey'] == 4){
				$kecepatan = "Tidak Cepat";
			}
            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id']    =  $no++;
            $row['name_survey']      = $field['name_survey'];
            $row['email_survey']     = $field['email_survey'];
            $row['address_survey']   = $field['address_survey'];
            $row['action']             = '   
                
				<button style="background-color:transparent ; border:none" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target=".Detail">
					<h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
				</button>
				<button style="background-color:transparent ; border:none" id="Hapus" onclick="hapus(`' . $field['id'] . '`)">
					<h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
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
