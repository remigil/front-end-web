<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_fungsilain extends CI_Model
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

        $orderFieldRess = $columnName[$orderField]['data'];


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


        $url = 'fungsilain?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';

        $result = guzzle_request('GET', $url, [

            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);



        $no = 1;

        foreach ($result['data']['rows'] as $field) {
            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id'] = $no++;

            if ($field['logo_fungsi'] != null) {
                $row['logo'] = '<img src="' . url_api() . 'fungsilain/logo/' . $field['logo_fungsi'] . '" alt="" class="rounded-circle avatar-md">';
            } else {
                $row['logo'] = '<img src="' . base_url() . 'assets/no_image.png" alt="" class="rounded-circle avatar-md">';
            }

            $row['name_fungsi'] = $field['name_fungsi'];
            $row['fullname_fungsi'] = $field['fullname_fungsi'];
            $row['email_fungsi'] = $field['email_fungsi'];
            $row['address_fungsi'] = $field['address_fungsi'];
            $row['phone_fungsi'] = $field['phone_fungsi'];

            $row['facebook_fungsi'] = $field['facebook_fungsi'];
            $row['twitter_fungsi'] = $field['twitter_fungsi'];
            $row['instagram_fungsi'] = $field['instagram_fungsi'];
            $row['youtube_fungsi'] = $field['youtube_fungsi'];
            $row['link_youtube_fungsi'] = $field['link_youtube_fungsi'];
            $row['website_fungsi'] = $field['website_fungsi'];

            $row['sosialMedia'] = '
                <div>
                    <p>
                        Facebook : ' . $field['facebook_fungsi'] . ' </br>
                        Twitter : ' . $field['twitter_fungsi'] . ' </br>
                        Instagram : ' . $field['instagram_fungsi'] . ' </br>
                        Youtube : ' . $field['youtube_fungsi'] . ' </br>
                        Link Youtube : ' . $field['link_youtube_fungsi'] . ' </br>
                        Website : ' . $field['website_fungsi'] . ' </br>
                    </p>
                </div>
            ';

            $row['latitude_fungsi'] = $field['latitude_fungsi'];
            $row['longitude_fungsi'] = $field['longitude_fungsi'];

            $row['action'] = '   
                
            <a href="fungsilain/edit/' . $field['id'] . '"><button style="background-color:transparent ; border:none" >
            <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
        </button></a>
				
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