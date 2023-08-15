<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');


class M_ngawas3 extends CI_Model {


    public function __construct(){

        parent::__construct();

        $this->load->helper('guzzle_request_helper');

    }

    public function get_datatables($postData = null)
    {
        $data = array();

        // $url = 'ngawas?serverSide=True&length='.$rowperpage.'&start='.$page.'&order='.$orderFieldRess.'&orderDirection='.$orderValue.''.$searchData.'';

        $result = guzzle_request('GET', 'brand_vehicle',  [

             'headers' => [
                  'Authorization' => $this->session->userdata['token']
                  ]
               ]);

        // echo "<pre>";
        // var_dump($result['data']['data']);die;


        $no=1;
        foreach ($result['data']['data'] as $field) {
               // echo '<pre>';
               // var_dump($field);die;

            $row = array();
			// $row ['id']	=  $field['id'];
            $row['id']	=  $no++;
            $row['type_vehicle'] = $field['type_vehicle']['type_name'];
            $row['brand_name'] = $field['brand_name'];
          

            $row['action']  = '
            <button class="btn btn-sm btn-warning" id="Edit" data-bs-toggle="modal" data-bs-target="#editModal" onclick="editDetail(`' . $field['id'] . '`)">
                <h5 class="text-white"><i class="fas fa-pen "></i></h5>
            </button>
            <button class="btn btn-sm btn-danger" id="Hapus" onclick="hapus(`' . $field['id'] . '`)">
                <h5 class="text-white"><i class="fas fa-trash "></i></h5>
            </button>
            ';


            $data[] = $row;

        }

        return $data;

    }
}