<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_pengaduan extends CI_Model
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


        $url_polres = 'complaint?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';
        // $url_polda = 'polda?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';

        $result = guzzle_request('GET', $url_polres, [

            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);

		// $result = guzzle_request('GET', $url_polda, [

        //     'headers' => [
        //         'Authorization' => $this->session->userdata['token']
        //     ]

        // ]);

        $no = 1;

        foreach ($result['data']['data'] as $field) {

			// if ($field['polda_id'] == 1) {
			// 	$polda = "Polda Metro Jaya";
			// }else if($field['polda_id'] == 2){
			// 	$polda = "Polda Jawa Barat";
			// }
			// else if($field['polda_id'] == 3){
			// 	$polda = "Polda Bali";
			// }

            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id']    			=  $no++;
            $row['name_polda'] 		= $field['polda']['name_polda'];
            $row['name_polres']     = $field['name_polres'];
            $row['code_satpas']     = $field['code_satpas'];
            $row['address']       	= $field['address'];
            $row['latitude']       	= $field['latitude'];
            $row['longitude']      	= $field['longitude'];
            $row['action']         = '   
                
			<button style="background-color:transparent ; border:none" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target=".DetailPolres">
				<h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
			</button>
			<button style="background-color:transparent ; border:none" data-bs-toggle="modal" id="btnEdit" onclick="detailEdit(`' . $field['id'] . '`)" data-bs-target=".UbahPolres">
				<h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
			</button>
			<button style="background-color:transparent ; border:none" id="Hapuspolres" onclick="hapus(`' . $field['id'] . '`)">
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
