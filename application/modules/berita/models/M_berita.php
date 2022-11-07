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
        foreach ($result['data']['datanya'] as $field) {
            // $category = '';
            // if ($field['data'][0]['category_news'][0]['id'] == 1) {
			// 	$category = "Berita PPKM";
            // } else if ($field['data'][0]['category_news'][0]['id'] == 2) {
			// 	$category = "Berita Kecelakaan Lalu Lintas";
            // } else if ($field['data'][0]['category_news'][0]['id'] == 3) {
			// 	$category = "Berita Pelanggaran Lalu Lintas";
            // } else if ($field['data'][0]['category_news'][0]['id'] == 4) {
			// 	$category = "Berita Kemacetan Lalu Lintas";
            // } else if ($field['data'][0]['category_news'][0]['id'] == 5) {
			// 	$category = "Berita Satpas";
            // } else if ($field['data'][0]['category_news'][0]['id'] == 6) {
			// 	$category = "Berita ETLE";
            // } else if ($field['data'][0]['category_news'][0]['id'] == 7) {
			// 	$category = "Berita Kontjensi";
			// }
            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id']    =  $no++;
            $row['news_category']    = $field['data'][0]['category_news'][0]['name_category_news'];
            $row['title']            = $field['data'][0]['title'];
            $row['content']           = $field['data'][0]['content'];
            $row['author']           = $field['data'][0]['author'];
            $row['date']           = $field['data'][0]['date'];  
            $row ['action']         = ' 
                
				<button style="background-color:transparent ; border:none" data-bs-toggle="modal" onclick="detail(`' . $field['data'][0]['id'] . '`)" data-bs-target=".DetailBerita">
                    <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                </button>
                <button style="background-color:transparent ; border:none" data-bs-toggle="modal" id="btnEdit" onclick="detailEdit(`' . $field['data'][0]['id'] . '`)" data-bs-target=".UbahBerita">
                    <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                </button>
                <button style="background-color:transparent ; border:none" onclick="hapus(`' . $field['data'][0]['id'] . '`)">
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

  

}
