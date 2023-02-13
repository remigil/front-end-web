<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_dokumenperaturan extends CI_Model {


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


        $url = 'regulation_doc?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';


        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token'] 

            ]

        ]);   
		
		// echo "<pre>";
		// var_dump($result);
		// echo "<pre>";
		// die;

        $no=1;
		// kategori berita berdasarkan nomor
		foreach  ($result['data']['data'] as $field) { 
			
			if ($field['regulation_category'] == 1) {
				$category = "Undang-undang";
			} else if($field['regulation_category'] == 2){
				$category = "Peraturan Pemerintah";
			}else if($field['regulation_category'] == 3){
				$category = "Peraturan Presiden";
			}else if($field['regulation_category'] == 4){
				$category = "Peraturan Kepolisian";
			}else if($field['regulation_category'] == 5){
				$category = "Peraturan Kapolri";
			}else if($field['regulation_category'] == 6){
				$category = "Peraturan Kakorlantas POLRI";
			}else if($field['regulation_category'] == 7){
				$category = "Peraturan Lain-lain";
			}else if($field['regulation_category'] == 8){
				$category = "Kemendagri";
			}else if($field['regulation_category'] == 9){
				$category = "Kemenhub";
			}else if($field['regulation_category'] == 10){
				$category = "Kemenkes";
			}else if($field['regulation_category'] == 11){
				$category = "Kemenperin";
			}else if($field['regulation_category'] == 12){
				$category = "Kemenpupr";
			}else if($field['regulation_category'] == 13){
				$category = "Badan Riset";
			}else if($field['regulation_category'] == 14){
				$category = "Kemenkeu";
			}else if($field['regulation_category'] == 15){
				$category = "Kemendikbud";
			}else if($field['regulation_category'] == 16){
				$category = "Kemenhan";
			}else if($field['regulation_category'] == 17){
				$category = "Ditjen Bina Marga";
			}else if($field['regulation_category'] == 18){
				$category = "Dukcapil";
			}else if($field['regulation_category'] == 19){
				$category = "Jasa Raharja";
			}else if($field['regulation_category'] == 20){
				$category = "Jasa Marga";
			}else if($field['regulation_category'] == 21){
				$category = "Mabes TNI";
			}else if($field['regulation_category'] == 22){
				$category = "Satgas Covid";
			}else if($field['regulation_category'] == 23){
				$category = "BMKG";
			}else if($field['regulation_category'] == 24){
				$category = "BNN";
			}else if($field['regulation_category'] == 25){
				$category = "BNPB";
			}else if($field['regulation_category'] == 26){
				$category = "BNPT";
			}else if($field['regulation_category'] == 27){
				$category = "BPS";
			}else if($field['regulation_category'] == 28){
				$category = "POLANTAS DALAM ANGKA";
			}else if($field['regulation_category'] == 29){
				$category = "Ditgakkum";
			}else if($field['regulation_category'] == 30){
				$category = "Ditkamsel";
			}else if($field['regulation_category'] == 31){
				$category = "Ditregident";
			}else if($field['regulation_category'] == 32){
				$category = "Bagops";
			}else if($field['regulation_category'] == 33){
				$category = "Bagrenmin";
			}else if($field['regulation_category'] == 34){
				$category = "Bagtik";
			}else{
                $category = "-";
            }
            $row = array();   
			// $row ['id']	=  $field['id']; 
            $row ['id']	=  $no++; 
            $row ['regulation_category']	= $category; 
            $row ['regulation_name']		= $field['regulation_name'];  
            $row ['year']   				= $field['year'];  
            $row ['action']         = ' 
                
				<button style="background-color:transparent ; border:none" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target=".DetailDokumenPeraturan">
                    <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                </button>
                <button style="background-color:transparent ; border:none" data-bs-toggle="modal" id="btnEdit" onclick="detailEdit(`' . $field['id'] . '`)" data-bs-target=".UbahDokumenPeraturan">
                    <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                </button>
                <button style="background-color:transparent ; border:none" onclick="hapus(`' . $field['id'] . '`)">
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
