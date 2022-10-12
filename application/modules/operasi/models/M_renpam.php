<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_renpam extends CI_Model
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

        $filter_tgl = $postData['filterTgl'];

        $filter_tgl2 = $postData['filterTgl2'];

        // $filter_status = $postData['filterStatus'];

        $filter_schedule = $postData['filterSchedule'];

        $filter_type_renpam = $postData['filterTypeRenpam'];

        $filter_category_renpam = $postData['filterCategoryRenpam'];

        // $filter_phone = $postData['filterPhone'];

        // $filter_threat = $postData['filterThreat']; 



        if ($search) {

            $searchData = '&search=' . $search . '';
        } else {

            $searchData = '';
        }

        if ($filter_schedule) {

            $schedule_id = '&filter[]=schedule_id&filterSearch[]=' . $filter_schedule . '';
        } else {

            $schedule_id = '';
        }

        if ($filter_type_renpam) {

            $type_renpam = '&filter[]=type_renpam&filterSearch[]=' . $filter_type_renpam . '';
        } else {

            $type_renpam = '';
        }

        if ($filter_category_renpam) {

            $category_renpam = '&filter[]=category_renpam&filterSearch[]=' . $filter_category_renpam . '';
        } else {

            $category_renpam = '';
        }

        if ($filter_tgl != "") {

            $start_date = '&start_date=' . $filter_tgl . '';
        } else {

            $start_date = '';
        }

        if ($filter_tgl2 != "") {

            $end_date = '&end_date=' . $filter_tgl2 . '';
        } else {

            $end_date = '';
        }


        // if($orderFieldRess == ''){

        // }

        $url = 'renpam?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '' . $schedule_id . '' . $type_renpam . ''.$category_renpam.'' . $start_date . '' . $end_date . '';

        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        if($this->uri->segment(1) == "dashboard"){ 
            $filterRenpam = array_filter($result['data']['data'], fn ($n) => $n['start_time'] != null );
            $dataGet = $filterRenpam;
        }else{
            $dataGet = $result['data']['data'];
        }
       

        $no = 1;

        foreach ($dataGet as $field) {
            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['id']    =  $no++;
            if ($field['status_renpam'] == 1) {
                $row['status_renpam'] = '
                    <div class="rounded-circle m-auto flag" id="flag' . $no . '" data-id="' . $field['id'] . '" style="background:green; height:30px; width:30px; color: white; text-align: center;font-size: 20px;cursor: pointer;">
                        <i class="mdi mdi-eye "></i> 
                    </div>
                ';
            } else {
                $row['status_renpam'] = '
                    <div class="rounded-circle m-auto flag" id="flag' . $no . '" data-id="' . $field['id'] . '" style="background:red; height:30px; width:30px; color: white; text-align: center;font-size: 20px;cursor: pointer;">
                        <i class="mdi mdi-eye "></i> 
                    </div>
                ';
            }
            $row['name_renpam']    = $field['name_renpam'];
            $row['start_time']    = '' . substr($field['start_time'], 0, 5) . ' WITA';
            $row['deligasi']    = '-';
            $row['keterangan']    = '';

            if ($field['route'] != null) {
                $route = '';
                // $route .= ''.$field['title_start'].'';
                if ($field['type_renpam'] == 2 || $field['type_renpam'] == 1) {

                    if (count($field['route']) > 2) {
                        for ($i = 0; $i < count($field['route']); $i++) {
                            if ($i == 0) {
                                $route .= '<span>' . $field['title_start'] . '</span><p>' . $field['route'][0]['name'] . '</p><p>To</p>   ';
                            } else if ($i == count($field['route']) - 1) {
                                $route .= '<span>' . $field['title_end'] . '</span><p>' . $field['route'][count($field['route']) - 1]['name'] . '</p>';
                            } else {
                                $route .= '<span>' . $field['title_start'] . '</span><p>' . $field['route'][$i]['name'] . '</p><p>To</p>   ';
                            }
                        }
                    } else {
                        $route .= '<span>' . $field['title_start'] . '</span><p>' . $field['route'][0]['name'] . '</p><p>To</p>   ';
                        $route .= '<span>' . $field['title_end'] . '</span><p>' . $field['route'][count($field['route']) - 1]['name'] . '</p>';
                    }
                    $row['route']    = '' . substr($field['start_time'], 0, 5) . ' - ' . substr($field['end_time'], 0, 5) . ' WITA' . '<br><br>' . $route;
                } else {
                    $row['route']    = '' . $field['title_start'] . ' - ' . $field['route'][0]['name'] . '';
                }
            } else {
                $row['route']    = '-';
            }

            if ($field['route_alternatif_1'] != null) {
                $route1 = '';
                foreach ($field['route_alternatif_1'] as $fieldRoute1) {
                    $route1 .= '' . $fieldRoute1['name'] . ' To ';
                }
                $row['route_alternatif_1']    = $route1;
            } else {
                $row['route_alternatif_1']    = '-';
            }

            if ($field['route_alternatif_2'] != null) {
                $route2 = '';
                foreach ($field['route_alternatif_2'] as $fieldRoute2) {
                    $route2 .= '' . $fieldRoute2['name'] . ' <br> To <br> ';
                }
                $row['route_alternatif_2']    = $route2;
            } else {
                $row['route_alternatif_2']    = '-';
            }

            if ($field['route_masyarakat'] != null) {
                $route3 = '';
                foreach ($field['route_masyarakat'] as $fieldRoute3) {
                    $route3 .= '' . $fieldRoute3['name'] . ' <br> To <br> ';
                }
                $row['route_masyarakat']    = $route3;
            } else {
                $row['route_masyarakat']    = '-';
            }

            if ($field['route_umum'] != null) {
                $route4 = '';
                foreach ($field['route_umum'] as $fieldRoute4) {
                    $route4 .= '' . $fieldRoute4['name'] . ' <br> To <br> ';
                }
                $row['route_umum']    = $route4;
            } else {
                $row['route_umum']    = '-';
            }

            $row['note_kakor'] = $field['note_kakor'];
            $row['note']    = '-';


            

            if ($field['accounts'] != null) {
                $accounts = '';
                $ketuaTim = '';
                $dummyTrack = '';
                foreach ($field['accounts'] as $fieldAccount) {
                    $resultAkun = guzzle_request('GET', 'account/getId/'.$fieldAccount['id'].'', [ 
                        'headers' => [ 
                            'Authorization' => $this->session->userdata['token'] 
                        ] 
                    ]); 
                     
                    if(isset($resultAkun['data']['data']['officers'])  || count($resultAkun['data']['data']['officers']) > 0){
                        foreach ($resultAkun['data']['data']['officers'] as $fieldPetugas) {
                            // $petugas .= ''.$fieldPetugas['name_officer'].'';
                            if($resultAkun['data']['data']['officer'] != null && $resultAkun['data']['data']['officer']['name_officer'] == $fieldPetugas['name_officer']){
                                $ketuaTim = '<span class="badge rounded-pill bg-primary">Ketua Tim</span> </br>';
                            }else{
                                $ketuaTim = '';
                            }
     
                            if($this->uri->segment(1) == "dashboard"){ 
                                $url = 'getMe?date=' . date('Y-m-d') . '&name_officer='.$fieldPetugas['name_officer'].'';
                                // $url = 'getMe?date=2022-10-09&name_officer='.$fieldPetugas['name_officer'].'';
                                $filterTracking = guzzle_requestTracking('GET', $url, [
                                    'headers' => [ 
                                        'Authorization' => $this->session->userdata['token'] 
                                    ]
                                ]);
                                if($filterTracking['data']){
                                    $dummyTrack = '<button type="button" class="btn btn-primary goPetugas" data-lat="'.$filterTracking['data'][0]['latitude'].'"  data-lng="'.$filterTracking['data'][0]['longitude'].'"><i class="mdi mdi-eye "></i></button>';
                                }else{
                                    $dummyTrack = '';
                                }
                            }else{
                                $dummyTrack = '';
                            }
    
                            $accounts .= '<p>'.$ketuaTim.' '.$fieldPetugas['rank_officer'].' - '.$fieldPetugas['name_officer'].' </br>'.$fieldPetugas['nrp_officer'].' </br> '.$dummyTrack.'</p> ';
                        }
                    }

                }
                $row['accounts']    = $accounts;
            } else {
                $row['accounts']    = '-';
            }
            if ($field['vips'] != null) {
                $vips = '';
                foreach ($field['vips'] as $fieldVips) {
                    $vips .= '' . $fieldVips['country_arrival_vip'] . ' - '.$fieldVips['position_vip'].', ';
                }
                $row['vips']    = $vips;
            } else {
                $row['vips']    = '-';
            }

            if ($field['type_renpam'] == 1) {
                $row['type_renpam']    = 'Patroli - '.$field['name_renpam'].'';
            } else if ($field['type_renpam'] == 2) {
                $row['type_renpam']    = 'Pengawalan - '.$field['name_renpam'].'';
            } else if ($field['type_renpam'] == 3) {
                $row['type_renpam']    = 'Penjagaan - '.$field['name_renpam'].'';
            } else if ($field['type_renpam'] == 4) {
                $row['type_renpam']    = 'Pengaturan - '.$field['name_renpam'].'';
            } else if ($field['type_renpam'] == 5) {
                $row['type_renpam']    = 'Penutupan - '.$field['name_renpam'].'';
            } else {
                $row['type_renpam']    = '-';
            }

            if ($field['category_renpam'] == 1) {
                $row['category_renpam']    = 'Operasi';
            } else if ($field['category_renpam'] == 2) {
                $row['category_renpam']    = 'Harian'; 
            } else {
                $row['category_renpam']    = '-';
            }

            $row['name_renpam']    = $field['name_renpam'];
            if ($field['schedule'] > 0) {
                $row['lokasi']    = $field['schedule']['address_schedule'];
            } else {
                $row['lokasi']    = '-';
            }

            if ($field['choose_rute'] == 1) {
                $row['choose_rute']    = 'Route';
            } else if ($field['choose_rute'] == 2) {
                $row['choose_rute']    = 'Alternative';
            } else if ($field['choose_rute'] == 3) {
                $row['choose_rute']    = 'Escape';
            } else {
                $row['choose_rute']    = '-';
            }

            if($field['accounts'] != null){
                // $row['nama_tim']    = $field['accounts'][0]['name_account'];
                $accounts = '';
                foreach ($field['accounts'] as $fieldAccounts) {
                    $accounts .= '<p>'.$fieldAccounts['name_account'] . '</p> ';
                }
                $row['nama_tim']    = $accounts;
            }else{
                $row['nama_tim']    = '-';
            }
            $row['date']    = format_indo($field['date']);
            $row ['waktu']   	= ''.substr($field['start_time'],0,5).' - '.substr($field['end_time'],0,5).' WITA';



            // $sum = strtotime('00:00:00');
 
            // $totaltime = 0;
             
         
                 
            //     // Converting the time into seconds
            //     $timeinsec = strtotime($element) - $sum;
                 
            //     // Sum the time with previous value
            //     $totaltime = $totaltime + $timeinsec;
       
            
            
            if($field['start_time'] != null && $field['end_time'] != null){
                $totalTime = strtotime( $field['end_time']) - strtotime($field['start_time']); 
                $h = intval($totalTime / 3600);
                 
                $totalTime = $totalTime - ($h * 3600);
                  
                $m = intval($totalTime / 60);
            
                $s = $totalTime - ($m * 60); 
                
                

                $row['estimasi']    = $field['estimasi'];
                $row['estimasi_time']    = ("$h:$m:$s");
            }else{
                $row['estimasi']    = '-';
                $row['estimasi_time']    = '-';
            }

            // $row['icon']    = '';

            $row['action']         = ' 

            <div style="position: absolute;">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-cog "></i></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="' . base_url() . 'operasi/renpam/Detail/' . $field['id'] . '"> Detail</a>
                    <a class="dropdown-item" href="' . base_url() . 'operasi/renpam/Edit/' . $field['id'] . '"> Edit</a>
                    <a class="deletedata dropdown-item" href="javascript:void(0);" data-id="' . $field['id'] . '"> Hapus</a> 
                </div>
            </div> 
 
            ';

            // $row ['lihat']         = ' 
            // <button class="btn btn-primary flag" id="flag'.$no.'" data-id="'.$field['id'].'" ><i class="mdi mdi-eye "></i></button>  
            // '; 
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
