<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_berita extends CI_Model {


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


        $url = 'news?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';



        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token'] 

            ]

            ]);


        // var_dump($result['data']['data']);
		// echo "<pre>";
		// var_dump($result);
		// echo "</pre>";
        $no=1;
		// kategori berita berdasarkan nomor
		foreach  ($result['data']['data'] as $field) { 
			
			if ($field['news_category'] == 1) {
				$category = "Berita PPKM";
			} else if($field['news_category'] == 2){
				$category = "Berita Kecelakaan Lalu Lintas";
			}else if($field['news_category'] == 3){
				$category = "Berita Pelanggaran Lalu Lintas";
			}else if($field['news_category'] == 4){
				$category = "Berita Kemacetan Lalu Lintas";
			}else if($field['news_category'] == 5){
				$category = "Berita Satpas";
			}else if($field['news_category'] == 6){
				$category = "Berita ETLE";
			}else if($field['news_category'] == 7){
				$category = "Berita Kontjensi";
			}
            $row = array();   
			// $row ['id']	=  $field['id']; 
            $row ['id']	=  $no++; 
            $row ['news_category']	= $category; 
            $row ['title']			= $field['title'];  
            $row ['content']   		= $field['content'];
            $row ['author']  	 	= $field['author'];  
            $row ['date']   		= $field['date'];  
            $row ['action']         = ' 
                
				<button style="background-color:transparent ; border:none" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target=".DetailBerita">
                    <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                </button>
                <button style="background-color:transparent ; border:none" data-bs-toggle="modal" id="btnEdit" onclick="detailEdit(`' . $field['id'] . '`)" data-bs-target=".UbahBerita">
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
