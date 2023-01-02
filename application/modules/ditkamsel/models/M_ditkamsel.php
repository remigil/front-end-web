<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_ditkamsel extends CI_Model
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


        $url = 'import/list?filter%5B%5D=jenis_satker&filterSearch%5B%5D=2&serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';
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
            if ($field['status'] == 0) {
                /**
                 * Action Process
                 */
                $row['action'] = '<button onclick="process(' . $field['jenis_laporan'] . ')" id="btn-process" data-id="' . $field['id'] . '" data-polda_id="' . $field['polda_id'] . '" data-tanggal="' . $field['tanggal'] . '" data-status="' . $field['status'] . '" data-file_name="' . $field['file_name'] . '" class="btn btn-sm btn-primary">Process</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .= ' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="' . $field['id'] . '" data-file_name="' . $field['file_name'] . '" class="btn btn-sm btn-danger">Delete</button>';
            }
            if ($field['status'] == 2) {
                /**
                 * Action Reprocess
                 */
                $row['action'] = '<button onclick="process(' . $field['jenis_laporan'] . ')" id="btn-process" data-id="' . $field['id'] . '" data-polda_id="' . $field['polda_id'] . '" data-tanggal="' . $field['tanggal'] . '" data-status="' . $field['status'] . '" data-file_name="' . $field['file_name'] . '" class="btn btn-sm btn-primary">Reprocess</button>';

                /**
                 * Action Delete
                 */
                $row['action'] .= ' &nbsp; <button onclick="rmfile()" id="btn-delete" data-id="' . $field['id'] . '" data-file_name="' . $field['file_name'] . '" class="btn btn-sm btn-danger">Delete</button>';
            } else if ($field['status'] == 1) {
                $row['action'] = '<span class="btn btn-sm btn-success">Done</span>';
            }
            /**
             * Action View
             */
            $row['action'] .= ' &nbsp; <button onclick="view()" id="btn-view" data-id="' . $field['id'] . '" data-file_name="' . $field['file_name'] . '" class="btn btn-sm btn-warning">View</button>';

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

    public function getChartDitkamsel($filter)
    {
        $url = 'ditkamsel/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $ditkamsel = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);


        $poldaMonth = array();
        $month_dikmaslantas = array();
        $month_jemenopsrek = array();
        $month_cegah = array();
        $month_audit = array();
        foreach ($ditkamsel['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $month_dikmaslantas[] = $key['dikmaslantas'];
            $month_jemenopsrek[] = 0;
            $month_cegah[] = 0;
            $month_audit[] = 0;
        }
        return [
            'polda_month' => $poldaMonth,
            'dikmaslantas' => $month_dikmaslantas,
            'jemenopsrek' => $month_jemenopsrek,
            'cegah' => $month_cegah,
            'audit' => $month_audit
        ];
    }

    public function getChartBlackspot($filter)
    {
        $url = 'blackspot/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $blackspot = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $black = $blackspot['data'];

        $poldaMonth = [];
        $blackspot = [];
        $presentase_blackspot = [];
        for ($i = 0; $i < count($black); $i++) {
            if ($i == 0) {
                if ($blackspot[0]['total'] == 0) {
                    $presentase_blackspot[] = 0;
                } else {
                    $presentase_blackspot[] = $blackspot[0]['total'] / 100;
                }
            } elseif ($i != 0) {
                if ($blackspot[$i]['total'] == 0 && $blackspot[$i - 1]['total'] == 0) {
                    $presentase_blackspot[] = 0;
                } elseif ($blackspot[$i]['total'] != 0 && $blackspot[$i - 1]['total'] == 0) {
                    $presentase_blackspot[] = (float)substr($blackspot[$i]['total'], 0, 5);
                } elseif ($blackspot[$i]['total'] == 0 && $blackspot[$i - 1]['total'] != 0) {
                    $presentase_blackspot[] = -100;
                } elseif ($blackspot[$i]['total'] != 0 && $blackspot[$i - 1]['total'] != 0) {
                    $presentase_blackspot[] = (float)substr((($blackspot[$i]['total'] - $blackspot[$i - 1]['total'])  / $blackspot[$i - 1]['total']) * 100, 0, 5);
                }
            }
        }

        foreach ($blackspot['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $blackspot[] = $key['total'];
            $media_elektronik[] = $key['media_elektronik'];
            $media_sosial[] = $key['media_sosial'];
        }
        return [
            'polda_month' => $poldaMonth,
            'blackspot' => $blackspot,
            'presentase_blackspot' => $presentase_blackspot,
        ];
    }
    public function getChartTroublespot($filter)
    {
        $url = 'blackspot/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $troublespot = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $trouble = $troublespot['data'];

        $poldaMonth = [];
        $troublespot = [];
        $presentase_troublespot = [];
        for ($i = 0; $i < count($trouble); $i++) {
            if ($i == 0) {
                if ($troublespot[0]['total'] == 0) {
                    $presentase_troublespot[] = 0;
                } else {
                    $presentase_troublespot[] = $troublespot[0]['total'] / 100;
                }
            } elseif ($i != 0) {
                if ($troublespot[$i]['total'] == 0 && $troublespot[$i - 1]['total'] == 0) {
                    $presentase_troublespot[] = 0;
                } elseif ($troublespot[$i]['total'] != 0 && $troublespot[$i - 1]['total'] == 0) {
                    $presentase_troublespot[] = (float)substr($troublespot[$i]['total'], 0, 5);
                } elseif ($troublespot[$i]['total'] == 0 && $troublespot[$i - 1]['total'] != 0) {
                    $presentase_troublespot[] = -100;
                } elseif ($troublespot[$i]['total'] != 0 && $troublespot[$i - 1]['total'] != 0) {
                    $presentase_troublespot[] = (float)substr((($troublespot[$i]['total'] - $troublespot[$i - 1]['total'])  / $troublespot[$i - 1]['total']) * 100, 0, 5);
                }
            }
        }

        foreach ($troublespot['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $troublespot[] = $key['total'];
        }
        return [
            'polda_month' => $poldaMonth,
            'troublespot' => $troublespot,
            'presentase_troublespot' => $presentase_troublespot,
        ];
    }
    public function getChartDikmaslantas($filter)
    {
        $url = 'dikmaslantas/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $dikmaslantas = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $dikmas = $dikmaslantas['data'];

        $poldaMonth = [];
        $media_cetak = [];
        $media_elektronik = [];
        $media_sosial = [];
        $presentase_media_cetak = [];
        $presentase_media_elektronik = [];
        $presentase_media_sosial = [];
        for ($i = 0; $i < count($dikmas); $i++) {
            if ($i == 0) {
                if ($dikmas[0]['media_cetak'] == 0) {
                    $presentase_media_cetak[] = 0;
                } else {
                    $presentase_media_cetak[] = $dikmas[0]['media_cetak'] / 100;
                }
                if ($dikmas[0]['media_sosial'] == 0) {
                    $presentase_media_sosial[] = 0;
                } else {
                    $presentase_media_sosial[] = $dikmas[0]['media_sosial'] / 100;
                }
                if ($dikmas[0]['media_elektronik'] == 0) {
                    $presentase_media_elektronik[] = 0;
                } else {
                    $presentase_media_elektronik[] = $dikmas[0]['media_elektronik'] / 100;
                }
            } elseif ($i != 0) {
                if ($dikmas[$i]['media_cetak'] == 0 && $dikmas[$i - 1]['media_cetak'] == 0) {
                    $presentase_media_cetak[] = 0;
                } elseif ($dikmas[$i]['media_cetak'] != 0 && $dikmas[$i - 1]['media_cetak'] == 0) {
                    $presentase_media_cetak[] = (float)substr($dikmas[$i]['media_cetak'], 0, 5);
                } elseif ($dikmas[$i]['media_cetak'] == 0 && $dikmas[$i - 1]['media_cetak'] != 0) {
                    $presentase_media_cetak[] = -100;
                } elseif ($dikmas[$i]['media_cetak'] != 0 && $dikmas[$i - 1]['media_cetak'] != 0) {
                    $presentase_media_cetak[] = (float)substr((($dikmas[$i]['media_cetak'] - $dikmas[$i - 1]['media_cetak'])  / $dikmas[$i - 1]['media_cetak']) * 100, 0, 5);
                }
                if ($dikmas[$i]['media_sosial'] == 0 && $dikmas[$i - 1]['media_sosial'] == 0) {
                    $presentase_media_sosial[] = 0;
                } elseif ($dikmas[$i]['media_sosial'] != 0 && $dikmas[$i - 1]['media_sosial'] == 0) {
                    $presentase_media_sosial[] = (float)substr($dikmas[$i]['media_sosial'], 0, 5);
                } elseif ($dikmas[$i]['media_sosial'] == 0 && $dikmas[$i - 1]['media_sosial'] != 0) {
                    $presentase_media_sosial[] = -100;
                } elseif ($dikmas[$i]['media_sosial'] != 0 && $dikmas[$i - 1]['media_sosial'] != 0) {
                    $presentase_media_sosial[] = (float)substr((($dikmas[$i]['media_sosial'] - $dikmas[$i - 1]['media_sosial'])  / $dikmas[$i - 1]['media_sosial']) * 100, 0, 5);
                }
                if ($dikmas[$i]['media_elektronik'] == 0 && $dikmas[$i - 1]['media_elektronik'] == 0) {
                    $presentase_media_elektronik[] = 0;
                } elseif ($dikmas[$i]['media_elektronik'] != 0 && $dikmas[$i - 1]['media_elektronik'] == 0) {
                    $presentase_media_elektronik[] = (float)substr($dikmas[$i]['media_elektronik'],  0, 5);
                } elseif ($dikmas[$i]['media_elektronik'] == 0 && $dikmas[$i - 1]['media_elektronik'] != 0) {
                    $presentase_media_elektronik[] = -100;
                } elseif ($dikmas[$i]['media_elektronik'] != 0 && $dikmas[$i - 1]['media_elektronik'] != 0) {
                    $presentase_media_elektronik[] = (float)substr((($dikmas[$i]['media_elektronik'] - $dikmas[$i - 1]['media_elektronik'])  / $dikmas[$i - 1]['media_elektronik']) * 100, 0, 5);
                }
            }
        }

        foreach ($dikmaslantas['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $media_cetak[] = $key['media_cetak'];
            $media_elektronik[] = $key['media_elektronik'];
            $media_sosial[] = $key['media_sosial'];
        }
        return [
            'polda_month' => $poldaMonth,
            'media_cetak' => $media_cetak,
            'media_elektronik' => $media_elektronik,
            'media_sosial' => $media_sosial,
            'presentase_media_cetak' => $presentase_media_cetak,
            'presentase_media_elektronik' => $presentase_media_elektronik,
            'presentase_media_sosial' => $presentase_media_sosial,
        ];
    }
    public function getChartRekalantas($filter)
    {
        $url = 'rekalantas/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $rekalantas = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $reka = $rekalantas['data'];

        $poldaMonth = [];
        $jalan_nasional = [];
        $jalan_provinsi = [];
        $lain_lain = [];
        $presentase_jalan_nasional = [];
        $presentase_jalan_provinsi = [];
        $presentase_lain_lain = [];
        for ($i = 0; $i < count($reka); $i++) {
            if ($i == 0) {
                if ($reka[0]['jalan_nasional'] == 0) {
                    $presentase_jalan_nasional[] = 0;
                } else {
                    $presentase_jalan_nasional[] = $reka[0]['jalan_nasional'] / 100;
                }
                if ($reka[0]['lain_lain'] == 0) {
                    $presentase_lain_lain[] = 0;
                } else {
                    $presentase_lain_lain[] = $reka[0]['lain_lain'] / 100;
                }
                if ($reka[0]['jalan_provinsi'] == 0) {
                    $presentase_jalan_provinsi[] = 0;
                } else {
                    $presentase_jalan_provinsi[] = $reka[0]['jalan_provinsi'] / 100;
                }
            } elseif ($i != 0) {
                if ($reka[$i]['jalan_nasional'] == 0 && $reka[$i - 1]['jalan_nasional'] == 0) {
                    $presentase_jalan_nasional[] = 0;
                } elseif ($reka[$i]['jalan_nasional'] != 0 && $reka[$i - 1]['jalan_nasional'] == 0) {
                    $presentase_jalan_nasional[] = (float)substr($reka[$i]['jalan_nasional'], 0, 5);
                } elseif ($reka[$i]['jalan_nasional'] == 0 && $reka[$i - 1]['jalan_nasional'] != 0) {
                    $presentase_jalan_nasional[] = -100;
                } elseif ($reka[$i]['jalan_nasional'] != 0 && $reka[$i - 1]['jalan_nasional'] != 0) {
                    $presentase_jalan_nasional[] = (float)substr((($reka[$i]['jalan_nasional'] - $reka[$i - 1]['jalan_nasional'])  / $reka[$i - 1]['jalan_nasional']) * 100, 0, 5);
                }
                if ($reka[$i]['lain_lain'] == 0 && $reka[$i - 1]['lain_lain'] == 0) {
                    $presentase_lain_lain[] = 0;
                } elseif ($reka[$i]['lain_lain'] != 0 && $reka[$i - 1]['lain_lain'] == 0) {
                    $presentase_lain_lain[] = (float)substr($reka[$i]['lain_lain'], 0, 5);
                } elseif ($reka[$i]['lain_lain'] == 0 && $reka[$i - 1]['lain_lain'] != 0) {
                    $presentase_lain_lain[] = -100;
                } elseif ($reka[$i]['lain_lain'] != 0 && $reka[$i - 1]['lain_lain'] != 0) {
                    $presentase_lain_lain[] = (float)substr((($reka[$i]['lain_lain'] - $reka[$i - 1]['lain_lain'])  / $reka[$i - 1]['lain_lain']) * 100, 0, 5);
                }
                if ($reka[$i]['jalan_provinsi'] == 0 && $reka[$i - 1]['jalan_provinsi'] == 0) {
                    $presentase_jalan_provinsi[] = 0;
                } elseif ($reka[$i]['jalan_provinsi'] != 0 && $reka[$i - 1]['jalan_provinsi'] == 0) {
                    $presentase_jalan_provinsi[] = (float)substr($reka[$i]['jalan_provinsi'],  0, 5);
                } elseif ($reka[$i]['jalan_provinsi'] == 0 && $reka[$i - 1]['jalan_provinsi'] != 0) {
                    $presentase_jalan_provinsi[] = -100;
                } elseif ($reka[$i]['jalan_provinsi'] != 0 && $reka[$i - 1]['jalan_provinsi'] != 0) {
                    $presentase_jalan_provinsi[] = (float)substr((($reka[$i]['jalan_provinsi'] - $reka[$i - 1]['jalan_provinsi'])  / $reka[$i - 1]['jalan_provinsi']) * 100, 0, 5);
                }
            }
        }
        foreach ($rekalantas['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $jalan_nasional[] = $key['jalan_nasional'];
            $jalan_provinsi[] = $key['jalan_provinsi'];
            $lain_lain[] = $key['lain_lain'];
        }
        return [
            'polda_month' => $poldaMonth,
            'jalan_nasional' => $jalan_nasional,
            'jalan_provinsi' => $jalan_provinsi,
            'lain_lain' => $lain_lain,
            'presentase_jalan_nasional' => $presentase_jalan_nasional,
            'presentase_jalan_provinsi' => $presentase_jalan_provinsi,
            'presentase_lain_lain' => $presentase_lain_lain,
        ];
    }
}
