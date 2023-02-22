<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_profilpejabat extends CI_Model
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


        $url = 'profilepejabat?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';

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
            if ($field['id_jenis_pejabat'] != null) {
                $row['id_jenis_pejabat'] = $field['jenispejabats'][0]['jenis_pejabat'];
            } else {
                $row['id_jenis_pejabat'] = '-';
            }
            $row['name_pejabat'] = $field['name_pejabat'];
            $row['foto_pejabat'] = $field['foto_pejabat'];
            $row['agama'] = $field['agama'];
            $row['tempat_lahir'] = $field['tempat_lahir'];
            $row['date_birth'] = $field['date_birth'];
            $row['pendidikan_kepolisian'] = $field['pendidikan_kepolisian'];
            $row['riwayat_jabatan'] = $field['riwayat_jabatan'];
            $row['pengembangan'] = $field['pengembangan'];
            $row['tanda_kehormatan'] = $field['tanda_kehormatan'];

            $row['action'] = '   
            <a href="Profilpejabat/edit/' . $field['id'] . '"><button style="background-color:transparent ; border:none" >
            <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
        </button></a>
				
				<button style="background-color:transparent ; border:none" id="HapusVisimisi" onclick="hapus(`' . $field['id'] . '`)">
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