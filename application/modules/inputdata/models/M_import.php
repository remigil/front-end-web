<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_import extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }

    public function get_datatables_harian($postData = null)
    {
        $draw = $postData['draw'];
        $rowperpage = $postData['length'];
        $columnName = $postData['columns'];
        $page = $postData['page'];
        $orderField = $postData['orderField'];
        $orderValue = $postData['orderValue'];
        $orderFieldRess =  $columnName[$orderField]['data'];
        $data = array();
        $search = $postData['search']['value'];

        if ($search) {
            $searchData = '&search=' . $search . '';
        } else {
            $searchData = '';
        }

        $url = 'import/list?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';
        $result = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $no = 1;
        foreach ($result['data']['data'] as $field) {
            switch ($field['status']) {
                case '0':
                    $status = 'New';
                    break;

                case '1':
                    $status = 'Success';
                    break;

                case '2':
                    $status = 'Failed';
                    break;
                
                default:
                    $status = '-';
                    break;
            }
            $row = array();
            $row['id'] = $no++;
            $row['file_name'] = $field['file_name'];
            $row['created_at'] = $field['created_at'];
            $row['status'] = $status;
            if($field['status']==0){
                /**
                 * Action Process
                 */
                $row['action'] = '<button onclick="process('.$field['jenis_laporan'].')" id="btn-process" data-id="'.$field['id'].'" data-polda_id="'.$field['polda_id'].'" data-tanggal="'.$field['tanggal'].'" data-status="'.$field['status'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-primary">Process</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .=' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-danger">Delete</button>';
            }if($field['status']==2){
                /**
                 * Action Reprocess
                 */
                $row['action'] = '<button onclick="process('.$field['jenis_laporan'].')" id="btn-process" data-id="'.$field['id'].'" data-polda_id="'.$field['polda_id'].'" data-tanggal="'.$field['tanggal'].'" data-status="'.$field['status'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-primary">Reprocess</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .=' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-danger">Delete</button>';
            }else if($field['status']==1){
                $row['action'] = '<span class="btn btn-sm btn-success">Done</span>';
            }
            /**
             * Action View
             */
            $row['action'] .=' &nbsp; <button onclick="view()" id="btn-view" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-warning">View</button>';
            
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

    public function get_datatables_operasi($postData = null)
    {
        $draw = $postData['draw'];
        $rowperpage = $postData['length'];
        $columnName = $postData['columns'];
        $page = $postData['page'];
        $orderField = $postData['orderField'];
        $orderValue = $postData['orderValue'];
        $orderFieldRess =  $columnName[$orderField]['data'];
        $data = array();
        $search = $postData['search']['value'];

        if ($search) {
            $searchData = '&search=' . $search . '';
        } else {
            $searchData = '';
        }

        $url = 'import/listops?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';
        $result = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $no = 1;
        foreach ($result['data']['data'] as $field) {
            switch ($field['status']) {
                case '0':
                    $status = 'New';
                    break;

                case '1':
                    $status = 'Success';
                    break;

                case '2':
                    $status = 'Failed';
                    break;
                
                default:
                    $status = '-';
                    break;
            }
            $row = array();
            $row['id'] = $no++;
            $row['file_name'] = $field['file_name'];
            $row['created_at'] = $field['created_at'];
            $row['status'] = $status;
            if($field['status']==0){
                /**
                 * Action Process
                 */
                $row['action'] = '<button onclick="process('.$field['jenis_laporan'].')" id="btn-process" data-id="'.$field['id'].'" data-operasi_id="'.$field['operasi_id'].'" data-tanggal="'.$field['tanggal'].'" data-status="'.$field['status'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-primary">Process</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .=' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-danger">Delete</button>';
            }if($field['status']==2){
                /**
                 * Action Reprocess
                 */
                $row['action'] = '<button onclick="process('.$field['jenis_laporan'].')" id="btn-process" data-id="'.$field['id'].'" data-operasi_id="'.$field['operasi_id'].'" data-tanggal="'.$field['tanggal'].'" data-status="'.$field['status'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-primary">Reprocess</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .=' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-danger">Delete</button>';
            }else if($field['status']==1){
                $row['action'] = '<span class="btn btn-sm btn-success">Done</span>';
            }
            /**
             * Action View
             */
            $row['action'] .=' &nbsp; <button onclick="view()" id="btn-view" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-warning">View</button>';
            
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

    public function get_datatables_ntmc($postData = null)
    {
        $draw = $postData['draw'];
        $rowperpage = $postData['length'];
        $columnName = $postData['columns'];
        $page = $postData['page'];
        $orderField = $postData['orderField'];
        $orderValue = $postData['orderValue'];
        $orderFieldRess =  $columnName[$orderField]['data'];
        $data = array();
        $search = $postData['search']['value'];

        if ($search) {
            $searchData = '&search=' . $search . '';
        } else {
            $searchData = '';
        }

        $url = 'import/listntmc?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';
        $result = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $no = 1;
        foreach ($result['data']['data'] as $field) {
            switch ($field['status']) {
                case '0':
                    $status = 'New';
                    break;

                case '1':
                    $status = 'Success';
                    break;

                case '2':
                    $status = 'Failed';
                    break;
                
                default:
                    $status = '-';
                    break;
            }
            $row = array();
            $row['id'] = $no++;
            $row['file_name'] = $field['file_name'];
            $row['created_at'] = $field['created_at'];
            $row['status'] = $status;
            if($field['status']==0){
                /**
                 * Action Process
                 */
                $row['action'] = '<button onclick="process('.$field['jenis_laporan'].')" id="btn-process" data-id="'.$field['id'].'" data-tanggal="'.$field['tanggal'].'" data-status="'.$field['status'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-primary">Process</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .=' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-danger">Delete</button>';
            }if($field['status']==2){
                /**
                 * Action Reprocess
                 */
                $row['action'] = '<button onclick="process('.$field['jenis_laporan'].')" id="btn-process" data-id="'.$field['id'].'" data-tanggal="'.$field['tanggal'].'" data-status="'.$field['status'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-primary">Reprocess</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .=' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-danger">Delete</button>';
            }else if($field['status']==1){
                $row['action'] = '<span class="btn btn-sm btn-success">Done</span>';
            }
            /**
             * Action View
             */
            $row['action'] .=' &nbsp; <button onclick="view()" id="btn-view" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-warning">View</button>';
            
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

    public function get_datatables_harian_masyarakat($postData = null)
    {
        $draw = $postData['draw'];
        $rowperpage = $postData['length'];
        $columnName = $postData['columns'];
        $page = $postData['page'];
        $orderField = $postData['orderField'];
        $orderValue = $postData['orderValue'];
        $orderFieldRess =  $columnName[$orderField]['data'];
        $data = array();
        $search = $postData['search']['value'];

        if ($search) {
            $searchData = '&search=' . $search . '';
        } else {
            $searchData = '';
        }

        $url = 'import/listmasy?serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';
        $result = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $no = 1;
        foreach ($result['data']['data'] as $field) {
            switch ($field['status']) {
                case '0':
                    $status = 'New';
                    break;

                case '1':
                    $status = 'Success';
                    break;

                case '2':
                    $status = 'Failed';
                    break;
                
                default:
                    $status = '-';
                    break;
            }
            $row = array();
            $row['id'] = $no++;
            $row['file_name'] = $field['file_name'];
            $row['created_at'] = $field['created_at'];
            $row['status'] = $status;
            if($field['status']==0){
                /**
                 * Action Process
                 */
                $row['action'] = '<button onclick="process('.$field['jenis_laporan'].')" id="btn-process" data-id="'.$field['id'].'" data-polda_id="'.$field['polda_id'].'" data-tanggal="'.$field['tanggal'].'" data-status="'.$field['status'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-primary">Process</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .=' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-danger">Delete</button>';
            }if($field['status']==2){
                /**
                 * Action Reprocess
                 */
                $row['action'] = '<button onclick="process('.$field['jenis_laporan'].')" id="btn-process" data-id="'.$field['id'].'" data-polda_id="'.$field['polda_id'].'" data-tanggal="'.$field['tanggal'].'" data-status="'.$field['status'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-primary">Reprocess</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .=' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-danger">Delete</button>';
            }else if($field['status']==1){
                $row['action'] = '<span class="btn btn-sm btn-success">Done</span>';
            }
            /**
             * Action View
             */
            $row['action'] .=' &nbsp; <button onclick="view()" id="btn-view" data-id="'.$field['id'].'" data-file_name="'.$field['file_name'].'" class="btn btn-sm btn-warning">View</button>';
            
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
