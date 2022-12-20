<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_petugas extends CI_Model {


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

		$filter_polda = $postData['filterPolda'];

		// $filter_name = $postData['filterName'];

		// $filter_poc_name = $postData['filterPocName'];

		// $filter_phone = $postData['filterPhone'];

		$filter_statusLog = $postData['filterStatusLog']; 

 

        if($search){

            $searchData = '&search='.$search.'';

        }else{

            $searchData = '';

        }  

        if($filter_polda != ""){

            $polda_id = '&filter[]=polda_id&filterSearch[]='.$filter_polda.'';

        }else{

            $polda_id = '';

        }

        // if($filter_tgl2 != ""){

        //     $event_date_to = '&endDate='.$filter_tgl2.'';

        // }else{

        //     $event_date_to = '';

        // } 


        $url = 'officer?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.''.$polda_id.'';

        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token'] 

            ]

        ]);   

        $no=1;

        
        if(count($result['data']['data']) > 0){
            
            foreach  ($result['data']['data'] as $field) { 
                $row = array();   
                // $row ['id']	=  $field['id']; 
                $row ['id']	=  $no++; 
                $row ['name_officer']	= $field['name_officer']; 
                $row ['polda_id']	= $field['polda'] ? $field['polda']['name_polda'] :'-';  
                $row ['nrp_officer']	= $field['nrp_officer'];  
                $row ['replacementNrp_officer']	= $field['replacementNrp_officer'] != null ? $field['replacementNrp_officer'] : '-';  
                $row ['rank_officer']   	= $field['rank_officer'];
                $row ['structural_officer']   	= $field['structural_officer'];  
                $row ['pam_officer']   	= $field['pam_officer']; 
                $row ['phone_officer']   	= $field['phone_officer']; 
                if($field['status_officer'] == 1){
                    $row ['status_officer']   	= 'Active'; 
                }else{
                    $row ['status_officer']   	= 'Inactive'; 
                } 
    
    
                if($filter_statusLog == 1){
                    $getStatusPetugasDownload = guzzle_request('GET', 'track-notif?serverSide=True&order=id&orderDirection=desc&length=10&start=1&filter%5B%5D=nrp_user&filterSearch%5B%5D='.$field['nrp_officer'].'', [
                        'headers' => [ 
                            'Authorization' => $this->session->userdata['token']  
                        ]
                    ]);  
                    if(count($getStatusPetugasDownload['data']['data']) > 0){ 
                        $row ['status_petugasdownload']   	= '<span class="badge rounded-pill bg-success" style="font-size: 10px;">Berhasil</span>';
                    }else{
                        $row ['status_petugasdownload']   	= '<span class="badge rounded-pill bg-danger" style="font-size: 10px;">Download</span>';
                    }
        
        
                    $getStatusLogin = guzzle_requestTracking('GET', 'getName?name_officer='.$field['name_officer'].'', [
                        'headers' => [ 
                            'Authorization' => $this->session->userdata['token']  
                        ]
                    ]);
                    if($getStatusLogin['data'] != null){
                        if($getStatusLogin['data']['status_login'] == 1){
                            $stLogin = '<span class="badge rounded-pill bg-primary" style="font-size: 10px;">Aktif</span>';
                        }else{
                            $stLogin = '<span class="badge rounded-pill bg-danger" style="font-size: 10px;">Tidak Aktif</span>';
                        }
                        $row ['status_login']   	= $stLogin;
                    }else{
                        $row ['status_login']   	= '<span class="badge rounded-pill bg-danger" style="font-size: 10px;">Tidak Aktif</span>';
                    } 
                }
    
                $row ['action']         = ' 
                    <a href="'.base_url().'operasi/Petugas/Detail/'.$field['id'].'"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>  
                '; 
    
                $data[] = $row;
    
            } 

        }else{
            $data[] = array(
                "id" => 1,
                "name_officer" => "Tidak ada data",
                "polda_id" => "Tidak ada data",
                "nrp_officer" => "Tidak ada data",
                "replacementNrp_officer" => "Tidak ada data",
                "rank_officer" => "Tidak ada data",
                "structural_officer" => "Tidak ada data",
                "pam_officer" => "Tidak ada data",
                "phone_officer" => "Tidak ada data",
                "status_officer" => "Tidak ada data",
                "action" => ""
            );
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
