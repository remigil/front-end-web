<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_ditregident extends CI_Model
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


        $url = 'import/list?filter%5B%5D=jenis_satker&filterSearch%5B%5D=3&serverSide=True&length=' . $rowperpage . '&start=' . $page . '&order=' . $orderFieldRess . '&orderDirection=' . $orderValue . '' . $searchData . '';
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

    public function getChartDitregident($filter)
    {
        $url = 'ditregident/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $ditregident = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);

        $poldaMonth = array();
        $month_sim = array();
        $month_bpkb = array();
        $month_stnk = array();
        $month_sbst = array();
        foreach ($ditregident['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $month_sim[] = $key['sim'];
            $month_bpkb[] = $key['bpkb'];
            $month_stnk[] = $key['stnk'];
            $month_sbst[] = 0;
        }
        return [
            'polda_month' => $poldaMonth,
            'sim' => $month_sim,
            'bpkb' => $month_bpkb,
            'stnk' => $month_stnk,
            'sbst' => $month_sbst
        ];
    }
    public function getChartSim($filter)
    {
        $url = 'sim/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $sim = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $poldaMonth = [];
        $baru_a = [];
        $baru_c = [];
        $baru_c1 = [];
        $baru_c2 = [];
        $baru_d = [];
        $baru_d1 = [];

        $perpanjangan_a = [];
        $perpanjangan_au = [];
        $perpanjangan_c = [];
        $perpanjangan_c1 = [];
        $perpanjangan_c2 = [];
        $perpanjangan_d = [];
        $perpanjangan_d1 = [];
        $perpanjangan_b1 = [];
        $perpanjangan_b1u = [];
        $perpanjangan_b2 = [];
        $perpanjangan_b2u = [];

        $peningkatan_au = [];
        $peningkatan_b1 = [];
        $peningkatan_b1u = [];
        $peningkatan_b2 = [];
        $peningkatan_b2u = [];

        $presentase_baru_a = [];
        $presentase_baru_c = [];
        $presentase_baru_c1 = [];
        $presentase_baru_c2 = [];
        $presentase_baru_d = [];
        $presentase_baru_d1 = [];

        $presentase_perpanjangan_a = [];
        $presentase_perpanjangan_au = [];
        $presentase_perpanjangan_c = [];
        $presentase_perpanjangan_c1 = [];
        $presentase_perpanjangan_c2 = [];
        $presentase_perpanjangan_d = [];
        $presentase_perpanjangan_d1 = [];
        $presentase_perpanjangan_b1 = [];
        $presentase_perpanjangan_b1u = [];
        $presentase_perpanjangan_b2 = [];
        $presentase_perpanjangan_b2u = [];

        $presentase_peningkatan_au = [];
        $presentase_peningkatan_b1 = [];
        $presentase_peningkatan_b1u = [];
        $presentase_peningkatan_b2 = [];
        $presentase_peningkatan_b2u = [];

        $sim = $sim['data'];

        for ($i = 0; $i < count($sim); $i++) {
            if ($i == 0) {
                if ($sim[0]['baru_a'] == 0) {
                    $presentase_baru_a[] = 0;
                } else {
                    $presentase_baru_a[] = $sim[0]['baru_a'] / 100;
                }

                if ($sim[0]['baru_c'] == 0) {
                    $presentase_baru_c[] = 0;
                } else {
                    $presentase_baru_c[] = $sim[0]['baru_c'] / 100;
                }

                if ($sim[0]['baru_c1'] == 0) {
                    $presentase_baru_c1[] = 0;
                } else {
                    $presentase_baru_c1[] = $sim[0]['baru_c1'] / 100;
                }

                if ($sim[0]['baru_c2'] == 0) {
                    $presentase_baru_c2[] = 0;
                } else {
                    $presentase_baru_c2[] = $sim[0]['baru_c2'] / 100;
                }

                if ($sim[0]['baru_d'] == 0) {
                    $presentase_baru_d[] = 0;
                } else {
                    $presentase_baru_d[] = $sim[0]['baru_d'] / 100;
                }

                if ($sim[0]['baru_d1'] == 0) {
                    $presentase_baru_d1[] = 0;
                } else {
                    $presentase_baru_d1[] = $sim[0]['baru_d1'] / 100;
                }

                if ($sim[0]['perpanjangan_a'] == 0) {
                    $presentase_perpanjangan_a[] = 0;
                } else {
                    $presentase_perpanjangan_a[] = $sim[0]['perpanjangan_a'] / 100;
                }

                if ($sim[0]['perpanjangan_au'] == 0) {
                    $presentase_perpanjangan_au[] = 0;
                } else {
                    $presentase_perpanjangan_au[] = $sim[0]['perpanjangan_au'] / 100;
                }

                if ($sim[0]['perpanjangan_c'] == 0) {
                    $presentase_perpanjangan_c[] = 0;
                } else {
                    $presentase_perpanjangan_c[] = $sim[0]['perpanjangan_c'] / 100;
                }

                if ($sim[0]['perpanjangan_c1'] == 0) {
                    $presentase_perpanjangan_c1[] = 0;
                } else {
                    $presentase_perpanjangan_c1[] = $sim[0]['perpanjangan_c1'] / 100;
                }

                if ($sim[0]['perpanjangan_c2'] == 0) {
                    $presentase_perpanjangan_c2[] = 0;
                } else {
                    $presentase_perpanjangan_c2[] = $sim[0]['perpanjangan_c2'] / 100;
                }

                if ($sim[0]['perpanjangan_d'] == 0) {
                    $presentase_perpanjangan_d[] = 0;
                } else {
                    $presentase_perpanjangan_d[] = $sim[0]['perpanjangan_d'] / 100;
                }

                if ($sim[0]['perpanjangan_d1'] == 0) {
                    $presentase_perpanjangan_d1[] = 0;
                } else {
                    $presentase_perpanjangan_d1[] = $sim[0]['perpanjangan_d1'] / 100;
                }

                if ($sim[0]['perpanjangan_b1'] == 0) {
                    $presentase_perpanjangan_b1[] = 0;
                } else {
                    $presentase_perpanjangan_b1[] = $sim[0]['perpanjangan_b1'] / 100;
                }

                if ($sim[0]['perpanjangan_b1u'] == 0) {
                    $presentase_perpanjangan_b1u[] = 0;
                } else {
                    $presentase_perpanjangan_b1u[] = $sim[0]['perpanjangan_b1u'] / 100;
                }

                if ($sim[0]['perpanjangan_b2'] == 0) {
                    $presentase_perpanjangan_b2[] = 0;
                } else {
                    $presentase_perpanjangan_b2[] = $sim[0]['perpanjangan_b2'] / 100;
                }

                if ($sim[0]['perpanjangan_b2u'] == 0) {
                    $presentase_perpanjangan_b2u[] = 0;
                } else {
                    $presentase_perpanjangan_b2u[] = $sim[0]['perpanjangan_b2u'] / 100;
                }

                if ($sim[0]['peningkatan_au'] == 0) {
                    $presentase_peningkatan_au[] = 0;
                } else {
                    $presentase_peningkatan_au[] = $sim[0]['peningkatan_au'] / 100;
                }

                if ($sim[0]['peningkatan_b1'] == 0) {
                    $presentase_peningkatan_b1[] = 0;
                } else {
                    $presentase_peningkatan_b1[] = $sim[0]['peningkatan_b1'] / 100;
                }

                if ($sim[0]['peningkatan_b1u'] == 0) {
                    $presentase_peningkatan_b1u[] = 0;
                } else {
                    $presentase_peningkatan_b1u[] = $sim[0]['peningkatan_b1u'] / 100;
                }

                if ($sim[0]['peningkatan_b2'] == 0) {
                    $presentase_peningkatan_b2[] = 0;
                } else {
                    $presentase_peningkatan_b2[] = $sim[0]['peningkatan_b2'] / 100;
                }

                if ($sim[0]['peningkatan_b2u'] == 0) {
                    $presentase_peningkatan_b2u[] = 0;
                } else {
                    $presentase_peningkatan_b2u[] = $sim[0]['peningkatan_b2u'] / 100;
                }
            } elseif ($i != 0) {
                if ($sim[$i]['baru_a'] == 0 && $sim[$i - 1]['baru_a'] == 0) {
                    $presentase_baru_a[] = 0;
                } elseif ($sim[$i]['baru_a'] != 0 && $sim[$i - 1]['baru_a'] == 0) {
                    $presentase_baru_a[] = (float)substr($sim[$i]['baru_a'], 0, 5);
                } elseif ($sim[$i]['baru_a'] == 0 && $sim[$i - 1]['baru_a'] != 0) {
                    $presentase_baru_a[] = -100;
                } elseif ($sim[$i]['baru_a'] != 0 && $sim[$i - 1]['baru_a'] != 0) {
                    $presentase_baru_a[] = (float)substr((($sim[$i]['baru_a'] - $sim[$i - 1]['baru_a'])  / $sim[$i - 1]['baru_a']) * 100, 0, 5);
                }
                if ($sim[$i]['baru_c'] == 0 && $sim[$i - 1]['baru_c'] == 0) {
                    $presentase_baru_c[] = 0;
                } elseif ($sim[$i]['baru_c'] != 0 && $sim[$i - 1]['baru_c'] == 0) {
                    $presentase_baru_c[] = (float)substr($sim[$i]['baru_c'], 0, 5);
                } elseif ($sim[$i]['baru_c'] == 0 && $sim[$i - 1]['baru_c'] != 0) {
                    $presentase_baru_c[] = -100;
                    // $presentase_baru_c[] = (float)substr($sim[$i]['baru_c'] - $sim[$i - 1]['baru_c'], 0, 5);
                } elseif ($sim[$i]['baru_c'] != 0 && $sim[$i - 1]['baru_c'] != 0) {
                    $presentase_baru_c[] = (float)substr((($sim[$i]['baru_c'] - $sim[$i - 1]['baru_c'])  / $sim[$i - 1]['baru_c']) * 100, 0, 5);
                }
                if ($sim[$i]['baru_c1'] == 0 && $sim[$i - 1]['baru_c1'] == 0) {
                    $presentase_baru_c1[] = 0;
                } elseif ($sim[$i]['baru_c1'] != 0 && $sim[$i - 1]['baru_c1'] == 0) {
                    $presentase_baru_c1[] = (float)substr($sim[$i]['baru_c1'],  0, 5);
                } elseif ($sim[$i]['baru_c1'] == 0 && $sim[$i - 1]['baru_c1'] != 0) {
                    $presentase_baru_c1[] = -100;
                } elseif ($sim[$i]['baru_c1'] != 0 && $sim[$i - 1]['baru_c1'] != 0) {
                    $presentase_baru_c1[] = (float)substr((($sim[$i]['baru_c1'] - $sim[$i - 1]['baru_c1'])  / $sim[$i - 1]['baru_c1']) * 100, 0, 5);
                }
                if ($sim[$i]['baru_c2'] == 0 && $sim[$i - 1]['baru_c2'] == 0) {
                    $presentase_baru_c2[] = 0;
                } elseif ($sim[$i]['baru_c2'] != 0 && $sim[$i - 1]['baru_c2'] == 0) {
                    $presentase_baru_c2[] = (float)substr($sim[$i]['baru_c2'], 0, 5);
                } elseif ($sim[$i]['baru_c2'] == 0 && $sim[$i - 1]['baru_c2'] != 0) {
                    $presentase_baru_c2[] = -100;
                } elseif ($sim[$i]['baru_c2'] != 0 && $sim[$i - 1]['baru_c2'] != 0) {
                    $presentase_baru_c2[] = (float)substr((($sim[$i]['baru_c2'] - $sim[$i - 1]['baru_c2'])  / $sim[$i - 1]['baru_c2']) * 100, 0, 5);
                }
                if ($sim[$i]['baru_d'] == 0 && $sim[$i - 1]['baru_d'] == 0) {
                    $presentase_baru_d[] = 0;
                } elseif ($sim[$i]['baru_d'] != 0 && $sim[$i - 1]['baru_d'] == 0) {
                    $presentase_baru_d[] = (float)substr($sim[$i]['baru_d'], 0, 5);
                } elseif ($sim[$i]['baru_d'] == 0 && $sim[$i - 1]['baru_d'] != 0) {
                    $presentase_baru_d[] = -100;
                } elseif ($sim[$i]['baru_d'] != 0 && $sim[$i - 1]['baru_d'] != 0) {
                    $presentase_baru_d[] = (float)substr((($sim[$i]['baru_d'] - $sim[$i - 1]['baru_d'])  / $sim[$i - 1]['baru_d']) * 100, 0, 5);
                }
                if ($sim[$i]['baru_d1'] == 0 && $sim[$i - 1]['baru_d1'] == 0) {
                    $presentase_baru_d1[] = 0;
                } elseif ($sim[$i]['baru_d1'] != 0 && $sim[$i - 1]['baru_d1'] == 0) {
                    $presentase_baru_d1[] = (float)substr($sim[$i]['baru_d1'], 0, 5);
                } elseif ($sim[$i]['baru_d1'] == 0 && $sim[$i - 1]['baru_d1'] != 0) {
                    $presentase_baru_d1[] = -100;
                } elseif ($sim[$i]['baru_d1'] != 0 && $sim[$i - 1]['baru_d1'] != 0) {
                    $presentase_baru_d1[] = (float)substr((($sim[$i]['baru_d1'] - $sim[$i - 1]['baru_d1'])  / $sim[$i - 1]['baru_d1']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_a'] == 0 && $sim[$i - 1]['perpanjangan_a'] == 0) {
                    $presentase_perpanjangan_a[] = 0;
                } elseif ($sim[$i]['perpanjangan_a'] != 0 && $sim[$i - 1]['perpanjangan_a'] == 0) {
                    $presentase_perpanjangan_a[] = (float)substr($sim[$i]['perpanjangan_a'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_a'] == 0 && $sim[$i - 1]['perpanjangan_a'] != 0) {
                    $presentase_perpanjangan_a[] = -100;
                } elseif ($sim[$i]['perpanjangan_a'] != 0 && $sim[$i - 1]['perpanjangan_a'] != 0) {
                    $presentase_perpanjangan_a[] = (float)substr((($sim[$i]['perpanjangan_a'] - $sim[$i - 1]['perpanjangan_a'])  / $sim[$i - 1]['perpanjangan_']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_au'] == 0 && $sim[$i - 1]['perpanjangan_au'] == 0) {
                    $presentase_perpanjangan_au[] = 0;
                } elseif ($sim[$i]['perpanjangan_au'] != 0 && $sim[$i - 1]['perpanjangan_au'] == 0) {
                    $presentase_perpanjangan_au[] = (float)substr($sim[$i]['perpanjangan_au'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_au'] == 0 && $sim[$i - 1]['perpanjangan_au'] != 0) {
                    $presentase_perpanjangan_au[] = -100;
                } elseif ($sim[$i]['perpanjangan_au'] != 0 && $sim[$i - 1]['perpanjangan_au'] != 0) {
                    $presentase_perpanjangan_au[] = (float)substr((($sim[$i]['perpanjangan_au'] - $sim[$i - 1]['perpanjangan_au'])  / $sim[$i - 1]['perpanjangan_au']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_c'] == 0 && $sim[$i - 1]['perpanjangan_c'] == 0) {
                    $presentase_perpanjangan_c[] = 0;
                } elseif ($sim[$i]['perpanjangan_c'] != 0 && $sim[$i - 1]['perpanjangan_c'] == 0) {
                    $presentase_perpanjangan_c[] = (float)substr($sim[$i]['perpanjangan_c'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_c'] == 0 && $sim[$i - 1]['perpanjangan_c'] != 0) {
                    $presentase_perpanjangan_c[] = -100;
                } elseif ($sim[$i]['perpanjangan_c'] != 0 && $sim[$i - 1]['perpanjangan_c'] != 0) {
                    $presentase_perpanjangan_c[] = (float)substr((($sim[$i]['perpanjangan_c'] - $sim[$i - 1]['perpanjangan_c'])  / $sim[$i - 1]['perpanjangan_c']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_c1'] == 0 && $sim[$i - 1]['perpanjangan_c1'] == 0) {
                    $presentase_perpanjangan_c1[] = 0;
                } elseif ($sim[$i]['perpanjangan_c1'] != 0 && $sim[$i - 1]['perpanjangan_c1'] == 0) {
                    $presentase_perpanjangan_c1[] = (float)substr($sim[$i]['perpanjangan_c1'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_c1'] == 0 && $sim[$i - 1]['perpanjangan_c1'] != 0) {
                    $presentase_perpanjangan_c1[] = -100;
                } elseif ($sim[$i]['perpanjangan_c1'] != 0 && $sim[$i - 1]['perpanjangan_c1'] != 0) {
                    $presentase_perpanjangan_c1[] = (float)substr((($sim[$i]['perpanjangan_c1'] - $sim[$i - 1]['perpanjangan_c1'])  / $sim[$i - 1]['perpanjangan_c1']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_c2'] == 0 && $sim[$i - 1]['perpanjangan_c2'] == 0) {
                    $presentase_perpanjangan_c2[] = 0;
                } elseif ($sim[$i]['perpanjangan_c2'] != 0 && $sim[$i - 1]['perpanjangan_c2'] == 0) {
                    $presentase_perpanjangan_c2[] = (float)substr($sim[$i]['perpanjangan_c2'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_c2'] == 0 && $sim[$i - 1]['perpanjangan_c2'] != 0) {
                    $presentase_perpanjangan_c2[] = -100;
                } elseif ($sim[$i]['perpanjangan_c2'] != 0 && $sim[$i - 1]['perpanjangan_c2'] != 0) {
                    $presentase_perpanjangan_c2[] = (float)substr((($sim[$i]['perpanjangan_c2'] - $sim[$i - 1]['perpanjangan_c2'])  / $sim[$i - 1]['perpanjangan_c2']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_d'] == 0 && $sim[$i - 1]['perpanjangan_d'] == 0) {
                    $presentase_perpanjangan_d[] = 0;
                } elseif ($sim[$i]['perpanjangan_d'] != 0 && $sim[$i - 1]['perpanjangan_d'] == 0) {
                    $presentase_perpanjangan_d[] = (float)substr($sim[$i]['perpanjangan_d'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_d'] == 0 && $sim[$i - 1]['perpanjangan_d'] != 0) {
                    $presentase_perpanjangan_d[] = -100;
                } elseif ($sim[$i]['perpanjangan_d'] != 0 && $sim[$i - 1]['perpanjangan_d'] != 0) {
                    $presentase_perpanjangan_d[] = (float)substr((($sim[$i]['perpanjangan_d'] - $sim[$i - 1]['perpanjangan_d'])  / $sim[$i - 1]['perpanjangan_d']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_d1'] == 0 && $sim[$i - 1]['perpanjangan_d1'] == 0) {
                    $presentase_perpanjangan_d1[] = 0;
                } elseif ($sim[$i]['perpanjangan_d1'] != 0 && $sim[$i - 1]['perpanjangan_d1'] == 0) {
                    $presentase_perpanjangan_d1[] = (float)substr($sim[$i]['perpanjangan_d1'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_d1'] == 0 && $sim[$i - 1]['perpanjangan_d1'] != 0) {
                    $presentase_perpanjangan_d1[] = -100;
                } elseif ($sim[$i]['perpanjangan_d1'] != 0 && $sim[$i - 1]['perpanjangan_d1'] != 0) {
                    $presentase_perpanjangan_d1[] = (float)substr((($sim[$i]['perpanjangan_d1'] - $sim[$i - 1]['perpanjangan_d1'])  / $sim[$i - 1]['perpanjangan_d1']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_b1'] == 0 && $sim[$i - 1]['perpanjangan_b1'] == 0) {
                    $presentase_perpanjangan_b1[] = 0;
                } elseif ($sim[$i]['perpanjangan_b1'] != 0 && $sim[$i - 1]['perpanjangan_b1'] == 0) {
                    $presentase_perpanjangan_b1[] = (float)substr($sim[$i]['perpanjangan_b1'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_b1'] == 0 && $sim[$i - 1]['perpanjangan_b1'] != 0) {
                    $presentase_perpanjangan_b1[] = -100;
                } elseif ($sim[$i]['perpanjangan_b1'] != 0 && $sim[$i - 1]['perpanjangan_b1'] != 0) {
                    $presentase_perpanjangan_b1[] = (float)substr((($sim[$i]['perpanjangan_b1'] - $sim[$i - 1]['perpanjangan_b1'])  / $sim[$i - 1]['perpanjangan_b1']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_b1u'] == 0 && $sim[$i - 1]['perpanjangan_b1u'] == 0) {
                    $presentase_perpanjangan_b1u[] = 0;
                } elseif ($sim[$i]['perpanjangan_b1u'] != 0 && $sim[$i - 1]['perpanjangan_b1u'] == 0) {
                    $presentase_perpanjangan_b1u[] = (float)substr($sim[$i]['perpanjangan_b1u'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_b1u'] == 0 && $sim[$i - 1]['perpanjangan_b1u'] != 0) {
                    $presentase_perpanjangan_b1u[] = -100;
                } elseif ($sim[$i]['perpanjangan_b1u'] != 0 && $sim[$i - 1]['perpanjangan_b1u'] != 0) {
                    $presentase_perpanjangan_b1u[] = (float)substr((($sim[$i]['perpanjangan_b1u'] - $sim[$i - 1]['perpanjangan_b1u'])  / $sim[$i - 1]['perpanjangan_b1u']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_b2'] == 0 && $sim[$i - 1]['perpanjangan_b2'] == 0) {
                    $presentase_perpanjangan_b2[] = 0;
                } elseif ($sim[$i]['perpanjangan_b2'] != 0 && $sim[$i - 1]['perpanjangan_b2'] == 0) {
                    $presentase_perpanjangan_b2[] = (float)substr($sim[$i]['perpanjangan_b2'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_b2'] == 0 && $sim[$i - 1]['perpanjangan_b2'] != 0) {
                    $presentase_perpanjangan_b2[] = -100;
                } elseif ($sim[$i]['perpanjangan_b2'] != 0 && $sim[$i - 1]['perpanjangan_b2'] != 0) {
                    $presentase_perpanjangan_b2[] = (float)substr((($sim[$i]['perpanjangan_b2'] - $sim[$i - 1]['perpanjangan_b2'])  / $sim[$i - 1]['perpanjangan_b2']) * 100, 0, 5);
                }
                if ($sim[$i]['perpanjangan_b2u'] == 0 && $sim[$i - 1]['perpanjangan_b2u'] == 0) {
                    $presentase_perpanjangan_b2u[] = 0;
                } elseif ($sim[$i]['perpanjangan_b2u'] != 0 && $sim[$i - 1]['perpanjangan_b2u'] == 0) {
                    $presentase_perpanjangan_b2u[] = (float)substr($sim[$i]['perpanjangan_b2u'], 0, 5);
                } elseif ($sim[$i]['perpanjangan_b2u'] == 0 && $sim[$i - 1]['perpanjangan_b2u'] != 0) {
                    $presentase_perpanjangan_b2u[] = -100;
                } elseif ($sim[$i]['perpanjangan_b2u'] != 0 && $sim[$i - 1]['perpanjangan_b2u'] != 0) {
                    $presentase_perpanjangan_b2u[] = (float)substr((($sim[$i]['perpanjangan_b2u'] - $sim[$i - 1]['perpanjangan_b2u'])  / $sim[$i - 1]['perpanjangan_b2u']) * 100, 0, 5);
                }
                if ($sim[$i]['peningkatan_au'] == 0 && $sim[$i - 1]['peningkatan_au'] == 0) {
                    $presentase_peningkatan_au[] = 0;
                } elseif ($sim[$i]['peningkatan_au'] != 0 && $sim[$i - 1]['peningkatan_au'] == 0) {
                    $presentase_peningkatan_au[] = (float)substr($sim[$i]['peningkatan_au'], 0, 5);
                } elseif ($sim[$i]['peningkatan_au'] == 0 && $sim[$i - 1]['peningkatan_au'] != 0) {
                    $presentase_peningkatan_au[] = -100;
                } elseif ($sim[$i]['peningkatan_au'] != 0 && $sim[$i - 1]['peningkatan_au'] != 0) {
                    $presentase_peningkatan_au[] = (float)substr((($sim[$i]['peningkatan_au'] - $sim[$i - 1]['peningkatan_au'])  / $sim[$i - 1]['peningkatan_au']) * 100, 0, 5);
                }
                if ($sim[$i]['peningkatan_b1'] == 0 && $sim[$i - 1]['peningkatan_b1'] == 0) {
                    $presentase_peningkatan_b1[] = 0;
                } elseif ($sim[$i]['peningkatan_b1'] != 0 && $sim[$i - 1]['peningkatan_b1'] == 0) {
                    $presentase_peningkatan_b1[] = (float)substr($sim[$i]['peningkatan_b1'], 0, 5);
                } elseif ($sim[$i]['peningkatan_b1'] == 0 && $sim[$i - 1]['peningkatan_b1'] != 0) {
                    $presentase_peningkatan_b1[] = -100;
                } elseif ($sim[$i]['peningkatan_b1'] != 0 && $sim[$i - 1]['peningkatan_b1'] != 0) {
                    $presentase_peningkatan_b1[] = (float)substr((($sim[$i]['peningkatan_b1'] - $sim[$i - 1]['peningkatan_b1'])  / $sim[$i - 1]['peningkatan_b1']) * 100, 0, 5);
                }
                if ($sim[$i]['peningkatan_b1u'] == 0 && $sim[$i - 1]['peningkatan_b1u'] == 0) {
                    $presentase_peningkatan_b1u[] = 0;
                } elseif ($sim[$i]['peningkatan_b1u'] != 0 && $sim[$i - 1]['peningkatan_b1u'] == 0) {
                    $presentase_peningkatan_b1u[] = (float)substr($sim[$i]['peningkatan_b1u'], 0, 5);
                } elseif ($sim[$i]['peningkatan_b1u'] == 0 && $sim[$i - 1]['peningkatan_b1u'] != 0) {
                    $presentase_peningkatan_b1u[] = -100;
                } elseif ($sim[$i]['peningkatan_b1u'] != 0 && $sim[$i - 1]['peningkatan_b1u'] != 0) {
                    $presentase_peningkatan_b1u[] = (float)substr((($sim[$i]['peningkatan_b1u'] - $sim[$i - 1]['peningkatan_b1u'])  / $sim[$i - 1]['peningkatan_b1u']) * 100, 0, 5);
                }
                if ($sim[$i]['peningkatan_b2'] == 0 && $sim[$i - 1]['peningkatan_b2'] == 0) {
                    $presentase_peningkatan_b2[] = 0;
                } elseif ($sim[$i]['peningkatan_b2'] != 0 && $sim[$i - 1]['peningkatan_b2'] == 0) {
                    $presentase_peningkatan_b2[] = (float)substr($sim[$i]['peningkatan_b2'], 0, 5);
                } elseif ($sim[$i]['peningkatan_b2'] == 0 && $sim[$i - 1]['peningkatan_b2'] != 0) {
                    $presentase_peningkatan_b2[] = -100;
                } elseif ($sim[$i]['peningkatan_b2'] != 0 && $sim[$i - 1]['peningkatan_b2'] != 0) {
                    $presentase_peningkatan_b2[] = (float)substr((($sim[$i]['peningkatan_b2'] - $sim[$i - 1]['peningkatan_b2'])  / $sim[$i - 1]['peningkatan_b2']) * 100, 0, 5);
                }
                if ($sim[$i]['peningkatan_b2u'] == 0 && $sim[$i - 1]['peningkatan_b2u'] == 0) {
                    $presentase_peningkatan_b2u[] = 0;
                } elseif ($sim[$i]['peningkatan_b2u'] != 0 && $sim[$i - 1]['peningkatan_b2u'] == 0) {
                    $presentase_peningkatan_b2u[] = (float)substr($sim[$i]['peningkatan_b2u'], 0, 5);
                } elseif ($sim[$i]['peningkatan_b2u'] == 0 && $sim[$i - 1]['peningkatan_b2u'] != 0) {
                    $presentase_peningkatan_b2u[] = -100;
                } elseif ($sim[$i]['peningkatan_b2u'] != 0 && $sim[$i - 1]['peningkatan_b2u'] != 0) {
                    $presentase_peningkatan_b2u[] = (float)substr((($sim[$i]['peningkatan_b2u'] - $sim[$i - 1]['peningkatan_b2u'])  / $sim[$i - 1]['peningkatan_b2u']) * 100, 0, 5);
                }
            }
        }

        foreach ($sim as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $baru_a[] = $key['baru_a'];
            $baru_c[] = $key['baru_c'];
            $baru_c1[] = $key['baru_c1'];
            $baru_c2[] = $key['baru_c2'];
            $baru_d[] = $key['baru_d'];
            $baru_d1[] = $key['baru_d1'];

            $perpanjangan_a[] = $key['perpanjangan_a'];
            $perpanjangan_au[] = $key['perpanjangan_au'];
            $perpanjangan_c[] = $key['perpanjangan_c'];
            $perpanjangan_c1[] = $key['perpanjangan_c1'];
            $perpanjangan_c2[] = $key['perpanjangan_c2'];
            $perpanjangan_d[] = $key['perpanjangan_d'];
            $perpanjangan_d1[] = $key['perpanjangan_d1'];
            $perpanjangan_b1[] = $key['perpanjangan_b1'];
            $perpanjangan_b1u[] = $key['perpanjangan_b1u'];
            $perpanjangan_b2[] = $key['perpanjangan_b2'];
            $perpanjangan_b2u[] = $key['perpanjangan_b2u'];

            $peningkatan_au[] = $key['peningkatan_au'];
            $peningkatan_b1[] = $key['peningkatan_b1'];
            $peningkatan_b1u[] = $key['peningkatan_b1u'];
            $peningkatan_b2[] = $key['peningkatan_b2'];
            $peningkatan_b2u[] = $key['peningkatan_b2u'];
        }

        return [
            'polda_month' => $poldaMonth,
            'baru_a' => $baru_a,
            'baru_c' => $baru_c,
            'baru_c1' => $baru_c1,
            'baru_c2' => $baru_c2,
            'baru_d' => $baru_d,
            'baru_d1' => $baru_d1,

            'perpanjangan_a' => $perpanjangan_a,
            'perpanjangan_au' => $perpanjangan_au,
            'perpanjangan_c' => $perpanjangan_c,
            'perpanjangan_c1' => $perpanjangan_c1,
            'perpanjangan_c2' => $perpanjangan_c2,
            'perpanjangan_d' => $perpanjangan_d,
            'perpanjangan_d1' => $perpanjangan_d1,
            'perpanjangan_b1' => $perpanjangan_b1,
            'perpanjangan_b1u' => $perpanjangan_b1u,
            'perpanjangan_b2' => $perpanjangan_b2,
            'perpanjangan_b2u' => $perpanjangan_b2u,

            'peningkatan_au' => $peningkatan_au,
            'peningkatan_b1' => $peningkatan_b1,
            'peningkatan_b1u' => $peningkatan_b1u,
            'peningkatan_b2' => $peningkatan_b2,
            'peningkatan_b2u' => $peningkatan_b2u,

            'presentase_baru_a' => $presentase_baru_a,
            'presentase_baru_c' => $presentase_baru_c,
            'presentase_baru_c1' => $presentase_baru_c1,
            'presentase_baru_c2' => $presentase_baru_c2,
            'presentase_baru_d' => $presentase_baru_d,
            'presentase_baru_d1' => $presentase_baru_d1,

            'presentase_perpanjangan_a' => $presentase_perpanjangan_a,
            'presentase_perpanjangan_au' => $presentase_perpanjangan_au,
            'presentase_perpanjangan_c' => $presentase_perpanjangan_c,
            'presentase_perpanjangan_c1' => $presentase_perpanjangan_c1,
            'presentase_perpanjangan_c2' => $presentase_perpanjangan_c2,
            'presentase_perpanjangan_d' => $presentase_perpanjangan_d,
            'presentase_perpanjangan_d1' => $presentase_perpanjangan_d1,
            'presentase_perpanjangan_b1' => $presentase_perpanjangan_b1,
            'presentase_perpanjangan_b1u' => $presentase_perpanjangan_b1u,
            'presentase_perpanjangan_b2' => $presentase_perpanjangan_b2,
            'presentase_perpanjangan_b2u' => $presentase_perpanjangan_b2u,

            'presentase_peningkatan_au' => $presentase_peningkatan_au,
            'presentase_peningkatan_b1' => $presentase_peningkatan_b1,
            'presentase_peningkatan_b1u' => $presentase_peningkatan_b1u,
            'presentase_peningkatan_b2' => $presentase_peningkatan_b2,
            'presentase_peningkatan_b2u' => $presentase_peningkatan_b2u,
        ];
    }

    public function getChartBpkb($filter)
    {
        $url = 'bpkb/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $bpkb = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $poldaMonth = [];
        $bbn_1 = [];
        $bbn_2 = [];
        $mutasi_masuk = [];
        $mutasi_keluar = [];
        $perubahan_pergantian = [];

        $presentase_bbn_1 = [];
        $presentase_bbn_2 = [];
        $presentase_mutasi_masuk = [];
        $presentase_mutasi_keluar = [];
        $presentase_perubahan_pergantian = [];

        $bpkb = $bpkb['data'];

        for ($i = 0; $i < count($bpkb); $i++) {
            if ($i == 0) {
                if ($bpkb[0]['bbn_1'] == 0) {
                    $presentase_bbn_1[] = 0;
                } else {
                    $presentase_bbn_1[] = $bpkb[0]['bbn_1'] / 100;
                }

                if ($bpkb[0]['bbn_2'] == 0) {
                    $presentase_bbn_2[] = 0;
                } else {
                    $presentase_bbn_2[] = $bpkb[0]['bbn_2'] / 100;
                }

                if ($bpkb[0]['mutasi_masuk'] == 0) {
                    $presentase_mutasi_masuk[] = 0;
                } else {
                    $presentase_mutasi_masuk[] = $bpkb[0]['mutasi_masuk'] / 100;
                }

                if ($bpkb[0]['mutasi_keluar'] == 0) {
                    $presentase_mutasi_keluar[] = 0;
                } else {
                    $presentase_mutasi_keluar[] = $bpkb[0]['mutasi_keluar'] / 100;
                }

                if ($bpkb[0]['perubahan_pergantian'] == 0) {
                    $presentase_perubahan_pergantian[] = 0;
                } else {
                    $presentase_perubahan_pergantian[] = $bpkb[0]['perubahan_pergantian'] / 100;
                }
            } elseif ($i != 0) {
                if ($bpkb[$i]['bbn_1'] == 0 && $bpkb[$i - 1]['bbn_1'] == 0) {
                    $presentase_bbn_1[] = 0;
                } elseif ($bpkb[$i]['bbn_1'] != 0 && $bpkb[$i - 1]['bbn_1'] == 0) {
                    $presentase_bbn_1[] = (float)substr($bpkb[$i]['bbn_1'], 0, 5);
                } elseif ($bpkb[$i]['bbn_1'] == 0 && $bpkb[$i - 1]['bbn_1'] != 0) {
                    $presentase_bbn_1[] = -100;
                } elseif ($bpkb[$i]['bbn_1'] != 0 && $bpkb[$i - 1]['bbn_1'] != 0) {
                    $presentase_bbn_1[] = (float)substr((($bpkb[$i]['bbn_1'] - $bpkb[$i - 1]['bbn_1'])  / $bpkb[$i - 1]['bbn_1']) * 100, 0, 5);
                }
                if ($bpkb[$i]['bbn_2'] == 0 && $bpkb[$i - 1]['bbn_2'] == 0) {
                    $presentase_bbn_2[] = 0;
                } elseif ($bpkb[$i]['bbn_2'] != 0 && $bpkb[$i - 1]['bbn_2'] == 0) {
                    $presentase_bbn_2[] = (float)substr($bpkb[$i]['bbn_2'],  0, 5);
                } elseif ($bpkb[$i]['bbn_2'] == 0 && $bpkb[$i - 1]['bbn_2'] != 0) {
                    $presentase_bbn_2[] = -100;
                } elseif ($bpkb[$i]['bbn_2'] != 0 && $bpkb[$i - 1]['bbn_2'] != 0) {
                    $presentase_bbn_2[] = (float)substr((($bpkb[$i]['bbn_2'] - $bpkb[$i - 1]['bbn_2'])  / $bpkb[$i - 1]['bbn_2']) * 100, 0, 5);
                }
                if ($bpkb[$i]['mutasi_masuk'] == 0 && $bpkb[$i - 1]['mutasi_masuk'] == 0) {
                    $presentase_mutasi_masuk[] = 0;
                } elseif ($bpkb[$i]['mutasi_masuk'] != 0 && $bpkb[$i - 1]['mutasi_masuk'] == 0) {
                    $presentase_mutasi_masuk[] = (float)substr($bpkb[$i]['mutasi_masuk'], 0, 5);
                } elseif ($bpkb[$i]['mutasi_masuk'] == 0 && $bpkb[$i - 1]['mutasi_masuk'] != 0) {
                    $presentase_mutasi_masuk[] = -100;
                } elseif ($bpkb[$i]['mutasi_masuk'] != 0 && $bpkb[$i - 1]['mutasi_masuk'] != 0) {
                    $presentase_mutasi_masuk[] = (float)substr((($bpkb[$i]['mutasi_masuk'] - $bpkb[$i - 1]['mutasi_masuk'])  / $bpkb[$i - 1]['mutasi_masuk']) * 100, 0, 5);
                }
                if ($bpkb[$i]['mutasi_keluar'] == 0 && $bpkb[$i - 1]['mutasi_keluar'] == 0) {
                    $presentase_mutasi_keluar[] = 0;
                } elseif ($bpkb[$i]['mutasi_keluar'] != 0 && $bpkb[$i - 1]['mutasi_keluar'] == 0) {
                    $presentase_mutasi_keluar[] = (float)substr($bpkb[$i]['mutasi_keluar'], 0, 5);
                } elseif ($bpkb[$i]['mutasi_keluar'] == 0 && $bpkb[$i - 1]['mutasi_keluar'] != 0) {
                    $presentase_mutasi_keluar[] = -100;
                } elseif ($bpkb[$i]['mutasi_keluar'] != 0 && $bpkb[$i - 1]['mutasi_keluar'] != 0) {
                    $presentase_mutasi_keluar[] = (float)substr((($bpkb[$i]['mutasi_keluar'] - $bpkb[$i - 1]['mutasi_keluar'])  / $bpkb[$i - 1]['mutasi_keluar']) * 100, 0, 5);
                }
                if ($bpkb[$i]['perubahan_pergantian'] == 0 && $bpkb[$i - 1]['perubahan_pergantian'] == 0) {
                    $presentase_perubahan_pergantian[] = 0;
                } elseif ($bpkb[$i]['perubahan_pergantian'] != 0 && $bpkb[$i - 1]['perubahan_pergantian'] == 0) {
                    $presentase_perubahan_pergantian[] = (float)substr($bpkb[$i]['perubahan_pergantian'], 0, 5);
                } elseif ($bpkb[$i]['perubahan_pergantian'] == 0 && $bpkb[$i - 1]['perubahan_pergantian'] != 0) {
                    $presentase_perubahan_pergantian[] = -100;
                } elseif ($bpkb[$i]['perubahan_pergantian'] != 0 && $bpkb[$i - 1]['perubahan_pergantian'] != 0) {
                    $presentase_perubahan_pergantian[] = (float)substr((($bpkb[$i]['perubahan_pergantian'] - $bpkb[$i - 1]['perubahan_pergantian'])  / $bpkb[$i - 1]['perubahan_pergantian']) * 100, 0, 5);
                }
            }
        }

        foreach ($bpkb as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $bbn_1[] = $key['bbn_1'];
            $bbn_2[] = $key['bbn_2'];
            $mutasi_masuk[] = $key['mutasi_masuk'];
            $mutasi_keluar[] = $key['mutasi_keluar'];
            $perubahan_pergantian[] = $key['perubahan_pergantian'];
        }

        return [
            'polda_month' => $poldaMonth,
            'bbn_1' => $bbn_1,
            'bbn_2' => $bbn_2,
            'mutasi_masuk' => $mutasi_masuk,
            'mutasi_keluar' => $mutasi_keluar,
            'perubahan_pergantian' => $perubahan_pergantian,

            'presentase_bbn_1' => $presentase_bbn_1,
            'presentase_bbn_2' => $presentase_bbn_2,
            'presentase_mutasi_masuk' => $presentase_mutasi_masuk,
            'presentase_mutasi_keluar' => $presentase_mutasi_keluar,
            'presentase_perubahan_pergantian' => $presentase_perubahan_pergantian,
        ];
    }

    public function getChartStnk($filter)
    {
        $url = 'stnk/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $stnk = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);
        $poldaMonth = [];
        $bbn_1_r2 = [];
        $bbn_1_r4 = [];
        $perubahan_r2 = [];
        $perubahan_r4 = [];
        $mutasi_masuk_r2 = [];
        $mutasi_masuk_r4 = [];
        $mutasi_keluar_r2 = [];
        $mutasi_keluar_r4 = [];
        $perpanjangan_r2 = [];
        $perpanjangan_r4 = [];
        $pengesahan_r2 = [];
        $pengesahan_r4 = [];
        $samolnas_r2 = [];
        $samolnas_r4 = [];

        $presentase_bbn_1_r2 = [];
        $presentase_bbn_1_r4 = [];
        $presentase_perubahan_r2 = [];
        $presentase_perubahan_r4 = [];
        $presentase_mutasi_masuk_r2 = [];
        $presentase_mutasi_masuk_r4 = [];
        $presentase_mutasi_keluar_r2 = [];
        $presentase_mutasi_keluar_r4 = [];
        $presentase_perpanjangan_r2 = [];
        $presentase_perpanjangan_r4 = [];
        $presentase_pengesahan_r2 = [];
        $presentase_pengesahan_r4 = [];
        $presentase_samolnas_r2 = [];
        $presentase_samolnas_r4 = [];

        $stnk = $stnk['data'];

        for ($i = 0; $i < count($stnk); $i++) {
            if ($i == 0) {
                if ($stnk[0]['bbn_1_r2'] == 0) {
                    $presentase_bbn_1_r2[] = 0;
                } else {
                    $presentase_bbn_1_r2[] = $stnk[0]['bbn_1_r2'] / 100;
                }

                if ($stnk[0]['bbn_1_r4'] == 0) {
                    $presentase_bbn_1_r4[] = 0;
                } else {
                    $presentase_bbn_1_r4[] = $stnk[0]['bbn_1_r4'] / 100;
                }

                if ($stnk[0]['perubahan_r2'] == 0) {
                    $presentase_perubahan_r2[] = 0;
                } else {
                    $presentase_perubahan_r2[] = $stnk[0]['perubahan_r2'] / 100;
                }

                if ($stnk[0]['perubahan_r4'] == 0) {
                    $presentase_perubahan_r4[] = 0;
                } else {
                    $presentase_perubahan_r4[] = $stnk[0]['perubahan_r4'] / 100;
                }

                if ($stnk[0]['mutasi_masuk_r2'] == 0) {
                    $presentase_mutasi_masuk_r2[] = 0;
                } else {
                    $presentase_mutasi_masuk_r2[] = $stnk[0]['mutasi_masuk_r2'] / 100;
                }

                if ($stnk[0]['mutasi_masuk_r4'] == 0) {
                    $presentase_mutasi_masuk_r4[] = 0;
                } else {
                    $presentase_mutasi_masuk_r4[] = $stnk[0]['mutasi_masuk_r4'] / 100;
                }

                if ($stnk[0]['mutasi_keluar_r2'] == 0) {
                    $presentase_mutasi_keluar_r2[] = 0;
                } else {
                    $presentase_mutasi_keluar_r2[] = $stnk[0]['mutasi_keluar_r2'] / 100;
                }

                if ($stnk[0]['mutasi_keluar_r4'] == 0) {
                    $presentase_mutasi_keluar_r4[] = 0;
                } else {
                    $presentase_mutasi_keluar_r4[] = $stnk[0]['mutasi_keluar_r4'] / 100;
                }

                if ($stnk[0]['perpanjangan_r2'] == 0) {
                    $presentase_perpanjangan_r2[] = 0;
                } else {
                    $presentase_perpanjangan_r2[] = $stnk[0]['perpanjangan_r2'] / 100;
                }
                if ($stnk[0]['perpanjangan_r4'] == 0) {
                    $presentase_perpanjangan_r4[] = 0;
                } else {
                    $presentase_perpanjangan_r4[] = $stnk[0]['perpanjangan_r4'] / 100;
                }

                if ($stnk[0]['pengesahan_r2'] == 0) {
                    $presentase_pengesahan_r2[] = 0;
                } else {
                    $presentase_pengesahan_r2[] = $stnk[0]['pengesahan_r2'] / 100;
                }
                if ($stnk[0]['pengesahan_r4'] == 0) {
                    $presentase_pengesahan_r4[] = 0;
                } else {
                    $presentase_pengesahan_r4[] = $stnk[0]['pengesahan_r4'] / 100;
                }

                if ($stnk[0]['samolnas_r2'] == 0) {
                    $presentase_samolnas_r2[] = 0;
                } else {
                    $presentase_samolnas_r2[] = $stnk[0]['samolnas_r2'] / 100;
                }
                if ($stnk[0]['samolnas_r4'] == 0) {
                    $presentase_samolnas_r4[] = 0;
                } else {
                    $presentase_samolnas_r4[] = $stnk[0]['samolnas_r4'] / 100;
                }
            } elseif ($i != 0) {
                if ($stnk[$i]['bbn_1_r2'] == 0 && $stnk[$i - 1]['bbn_1_r2'] == 0) {
                    $presentase_bbn_1_r2[] = 0;
                } elseif ($stnk[$i]['bbn_1_r2'] != 0 && $stnk[$i - 1]['bbn_1_r2'] == 0) {
                    $presentase_bbn_1_r2[] = (float)substr($stnk[$i]['bbn_1_r2'], 0, 5);
                } elseif ($stnk[$i]['bbn_1_r2'] == 0 && $stnk[$i - 1]['bbn_1_r2'] != 0) {
                    $presentase_bbn_1_r2[] = -100;
                } elseif ($stnk[$i]['bbn_1_r2'] != 0 && $stnk[$i - 1]['bbn_1_r2'] != 0) {
                    $presentase_bbn_1_r2[] = (float)substr((($stnk[$i]['bbn_1_r2'] - $stnk[$i - 1]['bbn_1_r2'])  / $stnk[$i - 1]['bbn_1_r2']) * 100, 0, 5);
                }
                if ($stnk[$i]['bbn_1_r4'] == 0 && $stnk[$i - 1]['bbn_1_r4'] == 0) {
                    $presentase_bbn_1_r4[] = 0;
                } elseif ($stnk[$i]['bbn_1_r4'] != 0 && $stnk[$i - 1]['bbn_1_r4'] == 0) {
                    $presentase_bbn_1_r4[] = (float)substr($stnk[$i]['bbn_1_r4'], 0, 5);
                } elseif ($stnk[$i]['bbn_1_r4'] == 0 && $stnk[$i - 1]['bbn_1_r4'] != 0) {
                    $presentase_bbn_1_r4[] = -100;
                } elseif ($stnk[$i]['bbn_1_r4'] != 0 && $stnk[$i - 1]['bbn_1_r4'] != 0) {
                    $presentase_bbn_1_r4[] = (float)substr((($stnk[$i]['bbn_1_r4'] - $stnk[$i - 1]['bbn_1_r4'])  / $stnk[$i - 1]['bbn_1_r4']) * 100, 0, 5);
                }
                if ($stnk[$i]['perubahan_r2'] == 0 && $stnk[$i - 1]['perubahan_r2'] == 0) {
                    $presentase_perubahan_r2[] = 0;
                } elseif ($stnk[$i]['perubahan_r2'] != 0 && $stnk[$i - 1]['perubahan_r2'] == 0) {
                    $presentase_perubahan_r2[] = (float)substr($stnk[$i]['perubahan_r2'],  0, 5);
                } elseif ($stnk[$i]['perubahan_r2'] == 0 && $stnk[$i - 1]['perubahan_r2'] != 0) {
                    $presentase_perubahan_r2[] = -100;
                } elseif ($stnk[$i]['perubahan_r2'] != 0 && $stnk[$i - 1]['perubahan_r2'] != 0) {
                    $presentase_perubahan_r2[] = (float)substr((($stnk[$i]['perubahan_r2'] - $stnk[$i - 1]['perubahan_r2'])  / $stnk[$i - 1]['perubahan_r2']) * 100, 0, 5);
                }
                if ($stnk[$i]['perubahan_r4'] == 0 && $stnk[$i - 1]['perubahan_r4'] == 0) {
                    $presentase_perubahan_r4[] = 0;
                } elseif ($stnk[$i]['perubahan_r4'] != 0 && $stnk[$i - 1]['perubahan_r4'] == 0) {
                    $presentase_perubahan_r4[] = (float)substr($stnk[$i]['perubahan_r4'],  0, 5);
                } elseif ($stnk[$i]['perubahan_r4'] == 0 && $stnk[$i - 1]['perubahan_r4'] != 0) {
                    $presentase_perubahan_r4[] = -100;
                } elseif ($stnk[$i]['perubahan_r4'] != 0 && $stnk[$i - 1]['perubahan_r4'] != 0) {
                    $presentase_perubahan_r4[] = (float)substr((($stnk[$i]['perubahan_r4'] - $stnk[$i - 1]['perubahan_r4'])  / $stnk[$i - 1]['perubahan_r4']) * 100, 0, 5);
                }
                if ($stnk[$i]['mutasi_masuk_r2'] == 0 && $stnk[$i - 1]['mutasi_masuk_r2'] == 0) {
                    $presentase_mutasi_masuk_r2[] = 0;
                } elseif ($stnk[$i]['mutasi_masuk_r2'] != 0 && $stnk[$i - 1]['mutasi_masuk_r2'] == 0) {
                    $presentase_mutasi_masuk_r2[] = (float)substr($stnk[$i]['mutasi_masuk_r2'], 0, 5);
                } elseif ($stnk[$i]['mutasi_masuk_r2'] == 0 && $stnk[$i - 1]['mutasi_masuk_r2'] != 0) {
                    $presentase_mutasi_masuk_r2[] = -100;
                } elseif ($stnk[$i]['mutasi_masuk_r2'] != 0 && $stnk[$i - 1]['mutasi_masuk_r2'] != 0) {
                    $presentase_mutasi_masuk_r2[] = (float)substr((($stnk[$i]['mutasi_masuk_r2'] - $stnk[$i - 1]['mutasi_masuk_r2'])  / $stnk[$i - 1]['mutasi_masuk_r2']) * 100, 0, 5);
                }
                if ($stnk[$i]['mutasi_masuk_r4'] == 0 && $stnk[$i - 1]['mutasi_masuk_r4'] == 0) {
                    $presentase_mutasi_masuk_r4[] = 0;
                } elseif ($stnk[$i]['mutasi_masuk_r4'] != 0 && $stnk[$i - 1]['mutasi_masuk_r4'] == 0) {
                    $presentase_mutasi_masuk_r4[] = (float)substr($stnk[$i]['mutasi_masuk_r4'], 0, 5);
                } elseif ($stnk[$i]['mutasi_masuk_r4'] == 0 && $stnk[$i - 1]['mutasi_masuk_r4'] != 0) {
                    $presentase_mutasi_masuk_r4[] = -100;
                } elseif ($stnk[$i]['mutasi_masuk_r4'] != 0 && $stnk[$i - 1]['mutasi_masuk_r4'] != 0) {
                    $presentase_mutasi_masuk_r4[] = (float)substr((($stnk[$i]['mutasi_masuk_r4'] - $stnk[$i - 1]['mutasi_masuk_r4'])  / $stnk[$i - 1]['mutasi_masuk_r4']) * 100, 0, 5);
                }
                if ($stnk[$i]['mutasi_keluar_r2'] == 0 && $stnk[$i - 1]['mutasi_keluar_r2'] == 0) {
                    $presentase_mutasi_keluar_r2[] = 0;
                } elseif ($stnk[$i]['mutasi_keluar_r2'] != 0 && $stnk[$i - 1]['mutasi_keluar_r2'] == 0) {
                    $presentase_mutasi_keluar_r2[] = (float)substr($stnk[$i]['mutasi_keluar_r2'], 0, 5);
                } elseif ($stnk[$i]['mutasi_keluar_r2'] == 0 && $stnk[$i - 1]['mutasi_keluar_r2'] != 0) {
                    $presentase_mutasi_keluar_r2[] = -100;
                } elseif ($stnk[$i]['mutasi_keluar_r2'] != 0 && $stnk[$i - 1]['mutasi_keluar_r2'] != 0) {
                    $presentase_mutasi_keluar_r2[] = (float)substr((($stnk[$i]['mutasi_keluar_r2'] - $stnk[$i - 1]['mutasi_keluar_r2'])  / $stnk[$i - 1]['mutasi_keluar_r2']) * 100, 0, 5);
                }
                if ($stnk[$i]['mutasi_keluar_r4'] == 0 && $stnk[$i - 1]['mutasi_keluar_r4'] == 0) {
                    $presentase_mutasi_keluar_r4[] = 0;
                } elseif ($stnk[$i]['mutasi_keluar_r4'] != 0 && $stnk[$i - 1]['mutasi_keluar_r4'] == 0) {
                    $presentase_mutasi_keluar_r4[] = (float)substr($stnk[$i]['mutasi_keluar_r4'], 0, 5);
                } elseif ($stnk[$i]['mutasi_keluar_r4'] == 0 && $stnk[$i - 1]['mutasi_keluar_r4'] != 0) {
                    $presentase_mutasi_keluar_r4[] = -100;
                } elseif ($stnk[$i]['mutasi_keluar_r4'] != 0 && $stnk[$i - 1]['mutasi_keluar_r4'] != 0) {
                    $presentase_mutasi_keluar_r4[] = (float)substr((($stnk[$i]['mutasi_keluar_r4'] - $stnk[$i - 1]['mutasi_keluar_r4'])  / $stnk[$i - 1]['mutasi_keluar_r4']) * 100, 0, 5);
                }
                if ($stnk[$i]['perpanjangan_r2'] == 0 && $stnk[$i - 1]['perpanjangan_r2'] == 0) {
                    $presentase_perpanjangan_r2[] = 0;
                } elseif ($stnk[$i]['perpanjangan_r2'] != 0 && $stnk[$i - 1]['perpanjangan_r2'] == 0) {
                    $presentase_perpanjangan_r2[] = (float)substr($stnk[$i]['perpanjangan_r2'], 0, 5);
                } elseif ($stnk[$i]['perpanjangan_r2'] == 0 && $stnk[$i - 1]['perpanjangan_r2'] != 0) {
                    $presentase_perpanjangan_r2[] = -100;
                } elseif ($stnk[$i]['perpanjangan_r2'] != 0 && $stnk[$i - 1]['perpanjangan_r2'] != 0) {
                    $presentase_perpanjangan_r2[] = (float)substr((($stnk[$i]['perpanjangan_r2'] - $stnk[$i - 1]['perpanjangan_r2'])  / $stnk[$i - 1]['perpanjangan_r2']) * 100, 0, 5);
                }
                if ($stnk[$i]['perpanjangan_r4'] == 0 && $stnk[$i - 1]['perpanjangan_r4'] == 0) {
                    $presentase_perpanjangan_r4[] = 0;
                } elseif ($stnk[$i]['perpanjangan_r4'] != 0 && $stnk[$i - 1]['perpanjangan_r4'] == 0) {
                    $presentase_perpanjangan_r4[] = (float)substr($stnk[$i]['perpanjangan_r4'], 0, 5);
                } elseif ($stnk[$i]['perpanjangan_r4'] == 0 && $stnk[$i - 1]['perpanjangan_r4'] != 0) {
                    $presentase_perpanjangan_r4[] = -100;
                } elseif ($stnk[$i]['perpanjangan_r4'] != 0 && $stnk[$i - 1]['perpanjangan_r4'] != 0) {
                    $presentase_perpanjangan_r4[] = (float)substr((($stnk[$i]['perpanjangan_r4'] - $stnk[$i - 1]['perpanjangan_r4'])  / $stnk[$i - 1]['perpanjangan_r4']) * 100, 0, 5);
                }
                if ($stnk[$i]['pengesahan_r2'] == 0 && $stnk[$i - 1]['pengesahan_r2'] == 0) {
                    $presentase_pengesahan_r2[] = 0;
                } elseif ($stnk[$i]['pengesahan_r2'] != 0 && $stnk[$i - 1]['pengesahan_r2'] == 0) {
                    $presentase_pengesahan_r2[] = (float)substr($stnk[$i]['pengesahan_r2'], 0, 5);
                } elseif ($stnk[$i]['pengesahan_r2'] == 0 && $stnk[$i - 1]['pengesahan_r2'] != 0) {
                    $presentase_pengesahan_r2[] = -100;
                } elseif ($stnk[$i]['pengesahan_r2'] != 0 && $stnk[$i - 1]['pengesahan_r2'] != 0) {
                    $presentase_pengesahan_r2[] = (float)substr((($stnk[$i]['pengesahan_r2'] - $stnk[$i - 1]['pengesahan_r2'])  / $stnk[$i - 1]['pengesahan_r2']) * 100, 0, 5);
                }
                if ($stnk[$i]['pengesahan_r4'] == 0 && $stnk[$i - 1]['pengesahan_r4'] == 0) {
                    $presentase_pengesahan_r4[] = 0;
                } elseif ($stnk[$i]['pengesahan_r4'] != 0 && $stnk[$i - 1]['pengesahan_r4'] == 0) {
                    $presentase_pengesahan_r4[] = (float)substr($stnk[$i]['pengesahan_r4'], 0, 5);
                } elseif ($stnk[$i]['pengesahan_r4'] == 0 && $stnk[$i - 1]['pengesahan_r4'] != 0) {
                    $presentase_pengesahan_r4[] = -100;
                } elseif ($stnk[$i]['pengesahan_r4'] != 0 && $stnk[$i - 1]['pengesahan_r4'] != 0) {
                    $presentase_pengesahan_r4[] = (float)substr((($stnk[$i]['pengesahan_r4'] - $stnk[$i - 1]['pengesahan_r4'])  / $stnk[$i - 1]['pengesahan_r4']) * 100, 0, 5);
                }
                if ($stnk[$i]['samolnas_r2'] == 0 && $stnk[$i - 1]['samolnas_r2'] == 0) {
                    $presentase_samolnas_r2[] = 0;
                } elseif ($stnk[$i]['samolnas_r2'] != 0 && $stnk[$i - 1]['samolnas_r2'] == 0) {
                    $presentase_samolnas_r2[] = (float)substr($stnk[$i]['samolnas_r2'], 0, 5);
                } elseif ($stnk[$i]['samolnas_r2'] == 0 && $stnk[$i - 1]['samolnas_r2'] != 0) {
                    $presentase_samolnas_r2[] = -100;
                } elseif ($stnk[$i]['samolnas_r2'] != 0 && $stnk[$i - 1]['samolnas_r2'] != 0) {
                    $presentase_samolnas_r2[] = (float)substr((($stnk[$i]['samolnas_r2'] - $stnk[$i - 1]['samolnas_r2'])  / $stnk[$i - 1]['samolnas_r2']) * 100, 0, 5);
                }
                if ($stnk[$i]['samolnas_r4'] == 0 && $stnk[$i - 1]['samolnas_r4'] == 0) {
                    $presentase_samolnas_r4[] = 0;
                } elseif ($stnk[$i]['samolnas_r4'] != 0 && $stnk[$i - 1]['samolnas_r4'] == 0) {
                    $presentase_samolnas_r4[] = (float)substr($stnk[$i]['samolnas_r4'], 0, 5);
                } elseif ($stnk[$i]['samolnas_r4'] == 0 && $stnk[$i - 1]['samolnas_r4'] != 0) {
                    $presentase_samolnas_r4[] = -100;
                } elseif ($stnk[$i]['samolnas_r4'] != 0 && $stnk[$i - 1]['samolnas_r4'] != 0) {
                    $presentase_samolnas_r4[] = (float)substr((($stnk[$i]['samolnas_r4'] - $stnk[$i - 1]['samolnas_r4'])  / $stnk[$i - 1]['samolnas_r4']) * 100, 0, 5);
                }
            }
        }

        foreach ($stnk as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $bbn_1_r2[] = $key['bbn_1_r2'];
            $bbn_1_r4[] = $key['bbn_1_r4'];
            $perubahan_r2[] = $key['perubahan_r2'];
            $perubahan_r4[] = $key['perubahan_r4'];
            $mutasi_masuk_r2[] = $key['mutasi_masuk_r2'];
            $mutasi_masuk_r4[] = $key['mutasi_masuk_r4'];
            $mutasi_keluar_r2[] = $key['mutasi_keluar_r2'];
            $mutasi_keluar_r4[] = $key['mutasi_keluar_r4'];
            $perpanjangan_r2[] = $key['perpanjangan_r2'];
            $perpanjangan_r4[] = $key['perpanjangan_r4'];
            $pengesahan_r2[] = $key['pengesahan_r2'];
            $pengesahan_r4[] = $key['pengesahan_r4'];
            $samolnas_r2[] = $key['samolnas_r2'];
            $samolnas_r4[] = $key['samolnas_r4'];
        }

        return [
            'polda_month' => $poldaMonth,
            'bbn_1_r2' => $bbn_1_r2,
            'bbn_1_r4' => $bbn_1_r4,
            'perubahan_r2' => $perubahan_r2,
            'perubahan_r4' => $perubahan_r4,
            'mutasi_masuk_r2' => $mutasi_masuk_r2,
            'mutasi_masuk_r4' => $mutasi_masuk_r4,
            'mutasi_keluar_r2' => $mutasi_keluar_r2,
            'mutasi_keluar_r4' => $mutasi_keluar_r4,
            'perpanjangan_r2' => $perpanjangan_r2,
            'perpanjangan_r4' => $perpanjangan_r4,
            'pengesahan_r2' => $pengesahan_r2,
            'pengesahan_r4' => $pengesahan_r4,
            'samolnas_r2' => $samolnas_r2,
            'samolnas_r4' => $samolnas_r4,

            'presentase_bbn_1_r2' => $presentase_bbn_1_r2,
            'presentase_bbn_1_r4' => $presentase_bbn_1_r4,
            'presentase_perubahan_r2' => $presentase_perubahan_r2,
            'presentase_perubahan_r4' => $presentase_perubahan_r4,
            'presentase_mutasi_masuk_r2' => $presentase_mutasi_masuk_r2,
            'presentase_mutasi_masuk_r4' => $presentase_mutasi_masuk_r4,
            'presentase_mutasi_keluar_r2' => $presentase_mutasi_keluar_r2,
            'presentase_mutasi_keluar_r4' => $presentase_mutasi_keluar_r4,
            'presentase_perpanjangan_r2' => $presentase_perpanjangan_r2,
            'presentase_perpanjangan_r4' => $presentase_perpanjangan_r4,
            'presentase_pengesahan_r2' => $presentase_pengesahan_r2,
            'presentase_pengesahan_r4' => $presentase_pengesahan_r4,
            'presentase_samolnas_r2' => $presentase_samolnas_r2,
            'presentase_samolnas_r4' => $presentase_samolnas_r4,
        ];
    }
    public function getChartSbst($filter)
    {
        $url = 'sbst/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $sbst = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $poldaMonth = [];
        $sim = [];
        $bpkb = [];
        $stnk = [];
        $tnkb = [];
        $tckb = [];
        $stck = [];
        $skukp = [];

        $presentase_sim = [];
        $presentase_bpkb = [];
        $presentase_stnk = [];
        $presentase_tnkb = [];
        $presentase_tckb = [];
        $presentase_stck = [];
        $presentase_skukp = [];

        $sbst = $sbst['data'];

        for ($i = 0; $i < count($sbst); $i++) {
            if ($i == 0) {
                if ($sbst[0]['sim'] == 0) {
                    $presentase_sim[] = 0;
                } else {
                    $presentase_sim[] = $sbst[0]['sim'] / 100;
                }

                if ($sbst[0]['bpkb'] == 0) {
                    $presentase_bpkb[] = 0;
                } else {
                    $presentase_bpkb[] = $sbst[0]['bpkb'] / 100;
                }

                if ($sbst[0]['stnk'] == 0) {
                    $stnk[] = 0;
                } else {
                    $stnk[] = $sbst[0]['stnk'] / 100;
                }

                if ($sbst[0]['tnkb'] == 0) {
                    $presentase_tnkb[] = 0;
                } else {
                    $presentase_tnkb[] = $sbst[0]['tnkb'] / 100;
                }

                if ($sbst[0]['tckb'] == 0) {
                    $presentase_tckb[] = 0;
                } else {
                    $presentase_tckb[] = $sbst[0]['tckb'] / 100;
                }

                if ($sbst[0]['stck'] == 0) {
                    $presentase_stck[] = 0;
                } else {
                    $presentase_stck[] = $sbst[0]['stck'] / 100;
                }

                if ($sbst[0]['skukp'] == 0) {
                    $presentase_skukp[] = 0;
                } else {
                    $presentase_skukp[] = $sbst[0]['skukp'] / 100;
                }
            } elseif ($i != 0) {
                if ($sbst[$i]['sim'] == 0 && $sbst[$i - 1]['sim'] == 0) {
                    $presentase_sim[] = 0;
                } elseif ($sbst[$i]['sim'] != 0 && $sbst[$i - 1]['sim'] == 0) {
                    $presentase_sim[] = (float)substr($sbst[$i]['sim'], 0, 5);
                } elseif ($sbst[$i]['sim'] == 0 && $sbst[$i - 1]['sim'] != 0) {
                    $presentase_sim[] = -100;
                } elseif ($sbst[$i]['sim'] != 0 && $sbst[$i - 1]['sim'] != 0) {
                    $presentase_sim[] = (float)substr((($sbst[$i]['sim'] - $sbst[$i - 1]['sim'])  / $sbst[$i - 1]['sim']) * 100, 0, 5);
                }
                if ($sbst[$i]['bpkb'] == 0 && $sbst[$i - 1]['bpkb'] == 0) {
                    $presentase_bpkb[] = 0;
                } elseif ($sbst[$i]['bpkb'] != 0 && $sbst[$i - 1]['bpkb'] == 0) {
                    $presentase_bpkb[] = (float)substr($sbst[$i]['bpkb'], 0, 5);
                } elseif ($sbst[$i]['bpkb'] == 0 && $sbst[$i - 1]['bpkb'] != 0) {
                    $presentase_bpkb[] = -100;
                } elseif ($sbst[$i]['bpkb'] != 0 && $sbst[$i - 1]['bpkb'] != 0) {
                    $presentase_bpkb[] = (float)substr((($sbst[$i]['bpkb'] - $sbst[$i - 1]['bpkb'])  / $sbst[$i - 1]['bpkb']) * 100, 0, 5);
                }
                if ($sbst[$i]['stnk'] == 0 && $sbst[$i - 1]['stnk'] == 0) {
                    $presentase_stnk[] = 0;
                } elseif ($sbst[$i]['stnk'] != 0 && $sbst[$i - 1]['stnk'] == 0) {
                    $presentase_stnk[] = (float)substr($sbst[$i]['stnk'],  0, 5);
                } elseif ($sbst[$i]['stnk'] == 0 && $sbst[$i - 1]['stnk'] != 0) {
                    $presentase_stnk[] = -100;
                } elseif ($sbst[$i]['stnk'] != 0 && $sbst[$i - 1]['stnk'] != 0) {
                    $presentase_stnk[] = (float)substr((($sbst[$i]['stnk'] - $sbst[$i - 1]['stnk'])  / $sbst[$i - 1]['stnk']) * 100, 0, 5);
                }
                if ($sbst[$i]['tnkb'] == 0 && $sbst[$i - 1]['tnkb'] == 0) {
                    $presentase_tnkb[] = 0;
                } elseif ($sbst[$i]['tnkb'] != 0 && $sbst[$i - 1]['tnkb'] == 0) {
                    $presentase_tnkb[] = (float)substr($sbst[$i]['tnkb'],  0, 5);
                } elseif ($sbst[$i]['tnkb'] == 0 && $sbst[$i - 1]['tnkb'] != 0) {
                    $presentase_tnkb[] = -100;
                } elseif ($sbst[$i]['tnkb'] != 0 && $sbst[$i - 1]['tnkb'] != 0) {
                    $presentase_tnkb[] = (float)substr((($sbst[$i]['tnkb'] - $sbst[$i - 1]['tnkb'])  / $sbst[$i - 1]['tnkb']) * 100, 0, 5);
                }
                if ($sbst[$i]['tckb'] == 0 && $sbst[$i - 1]['tckb'] == 0) {
                    $presentase_tckb[] = 0;
                } elseif ($sbst[$i]['tckb'] != 0 && $sbst[$i - 1]['tckb'] == 0) {
                    $presentase_tckb[] = (float)substr($sbst[$i]['tckb'], 0, 5);
                } elseif ($sbst[$i]['tckb'] == 0 && $sbst[$i - 1]['tckb'] != 0) {
                    $presentase_tckb[] = -100;
                } elseif ($sbst[$i]['tckb'] != 0 && $sbst[$i - 1]['tckb'] != 0) {
                    $presentase_tckb[] = (float)substr((($sbst[$i]['tckb'] - $sbst[$i - 1]['tckb'])  / $sbst[$i - 1]['tckb']) * 100, 0, 5);
                }
                if ($sbst[$i]['stck'] == 0 && $sbst[$i - 1]['stck'] == 0) {
                    $presentase_stck[] = 0;
                } elseif ($sbst[$i]['stck'] != 0 && $sbst[$i - 1]['stck'] == 0) {
                    $presentase_stck[] = (float)substr($sbst[$i]['stck'], 0, 5);
                } elseif ($sbst[$i]['stck'] == 0 && $sbst[$i - 1]['stck'] != 0) {
                    $presentase_stck[] = -100;
                } elseif ($sbst[$i]['stck'] != 0 && $sbst[$i - 1]['stck'] != 0) {
                    $presentase_stck[] = (float)substr((($sbst[$i]['stck'] - $sbst[$i - 1]['stck'])  / $sbst[$i - 1]['stck']) * 100, 0, 5);
                }
                if ($sbst[$i]['skukp'] == 0 && $sbst[$i - 1]['skukp'] == 0) {
                    $presentase_skukp[] = 0;
                } elseif ($sbst[$i]['skukp'] != 0 && $sbst[$i - 1]['skukp'] == 0) {
                    $presentase_skukp[] = (float)substr($sbst[$i]['skukp'], 0, 5);
                } elseif ($sbst[$i]['skukp'] == 0 && $sbst[$i - 1]['skukp'] != 0) {
                    $presentase_skukp[] = -100;
                } elseif ($sbst[$i]['skukp'] != 0 && $sbst[$i - 1]['skukp'] != 0) {
                    $presentase_skukp[] = (float)substr((($sbst[$i]['skukp'] - $sbst[$i - 1]['skukp'])  / $sbst[$i - 1]['skukp']) * 100, 0, 5);
                }
            }
        }

        foreach ($sbst as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $sim[] = $key['sim'];
            $bpkb[] = $key['bpkb'];
            $stnk[] = $key['stnk'];
            $tnkb[] = $key['tnkb'];
            $tckb[] = $key['tckb'];
            $stck[] = $key['stck'];
            $skukp[] = $key['skukp'];
        }

        return [
            'polda_month' => $poldaMonth,
            'sim' => $sim,
            'bpkb' => $bpkb,
            'stnk' => $stnk,
            'tnkb' => $tnkb,
            'tckb' => $tckb,
            'stck' => $stck,
            'skukp' => $skukp,

            'presentase_sim' => $presentase_sim,
            'presentase_bpkb' => $presentase_bpkb,
            'presentase_stnk' => $presentase_stnk,
            'presentase_tnkb' => $presentase_tnkb,
            'presentase_tckb' => $presentase_tckb,
            'presentase_stck' => $presentase_stck,
            'presentase_skukp' => $presentase_skukp,
        ];
    }
    public function getChartRanmor($filter)
    {
        $url = 'ranmor/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $ranmor = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $poldaMonth = [];
        $mobil_penumpang = [];
        $mobil_barang = [];
        $mobil_bus = [];
        $sepeda_motor = [];
        $ransus = [];

        $presentase_mobil_penumpang = [];
        $presentase_mobil_barang = [];
        $presentase_mobil_bus = [];
        $presentase_sepeda_motor = [];
        $presentase_ransus = [];

        $ranmor = $ranmor['data'];

        for ($i = 0; $i < count($ranmor); $i++) {
            if ($i == 0) {
                if ($ranmor[0]['mobil_penumpang'] == 0) {
                    $presentase_mobil_penumpang[] = 0;
                } else {
                    $presentase_mobil_penumpang[] = $ranmor[0]['mobil_penumpang'] / 100;
                }

                if ($ranmor[0]['mobil_barang'] == 0) {
                    $presentase_mobil_barang[] = 0;
                } else {
                    $presentase_mobil_barang[] = $ranmor[0]['mobil_barang'] / 100;
                }

                if ($ranmor[0]['mobil_bus'] == 0) {
                    $presentase_mobil_bus[] = 0;
                } else {
                    $presentase_mobil_bus[] = $ranmor[0]['mobil_bus'] / 100;
                }

                if ($ranmor[0]['sepeda_motor'] == 0) {
                    $presentase_sepeda_motor[] = 0;
                } else {
                    $presentase_sepeda_motor[] = $ranmor[0]['sepeda_motor'] / 100;
                }

                if ($ranmor[0]['ransus'] == 0) {
                    $presentase_ransus[] = 0;
                } else {
                    $presentase_ransus[] = $ranmor[0]['ransus'] / 100;
                }
            } elseif ($i != 0) {
                if ($ranmor[$i]['mobil_penumpang'] == 0 && $ranmor[$i - 1]['mobil_penumpang'] == 0) {
                    $presentase_mobil_penumpang[] = 0;
                } elseif ($ranmor[$i]['mobil_penumpang'] != 0 && $ranmor[$i - 1]['mobil_penumpang'] == 0) {
                    $presentase_mobil_penumpang[] = (float)substr($ranmor[$i]['mobil_penumpang'], 0, 5);
                } elseif ($ranmor[$i]['mobil_penumpang'] == 0 && $ranmor[$i - 1]['mobil_penumpang'] != 0) {
                    $presentase_mobil_penumpang[] = -100;
                } elseif ($ranmor[$i]['mobil_penumpang'] != 0 && $ranmor[$i - 1]['mobil_penumpang'] != 0) {
                    $presentase_mobil_penumpang[] = (float)substr((($ranmor[$i]['mobil_penumpang'] - $ranmor[$i - 1]['mobil_penumpang'])  / $ranmor[$i - 1]['mobil_penumpang']) * 100, 0, 5);
                }
                if ($ranmor[$i]['mobil_barang'] == 0 && $ranmor[$i - 1]['mobil_barang'] == 0) {
                    $presentase_mobil_barang[] = 0;
                } elseif ($ranmor[$i]['mobil_barang'] != 0 && $ranmor[$i - 1]['mobil_barang'] == 0) {
                    $presentase_mobil_barang[] = (float)substr($ranmor[$i]['mobil_barang'], 0, 5);
                } elseif ($ranmor[$i]['mobil_barang'] == 0 && $ranmor[$i - 1]['mobil_barang'] != 0) {
                    $presentase_mobil_barang[] = -100;
                } elseif ($ranmor[$i]['mobil_barang'] != 0 && $ranmor[$i - 1]['mobil_barang'] != 0) {
                    $presentase_mobil_barang[] = (float)substr((($ranmor[$i]['mobil_barang'] - $ranmor[$i - 1]['mobil_barang'])  / $ranmor[$i - 1]['mobil_barang']) * 100, 0, 5);
                }
                if ($ranmor[$i]['mobil_bus'] == 0 && $ranmor[$i - 1]['mobil_bus'] == 0) {
                    $presentase_mobil_bus[] = 0;
                } elseif ($ranmor[$i]['mobil_bus'] != 0 && $ranmor[$i - 1]['mobil_bus'] == 0) {
                    $presentase_mobil_bus[] = (float)substr($ranmor[$i]['mobil_bus'],  0, 5);
                } elseif ($ranmor[$i]['mobil_bus'] == 0 && $ranmor[$i - 1]['mobil_bus'] != 0) {
                    $presentase_mobil_bus[] = -100;
                } elseif ($ranmor[$i]['mobil_bus'] != 0 && $ranmor[$i - 1]['mobil_bus'] != 0) {
                    $presentase_mobil_bus[] = (float)substr((($ranmor[$i]['mobil_bus'] - $ranmor[$i - 1]['mobil_bus'])  / $ranmor[$i - 1]['mobil_bus']) * 100, 0, 5);
                }
                if ($ranmor[$i]['sepeda_motor'] == 0 && $ranmor[$i - 1]['sepeda_motor'] == 0) {
                    $presentase_sepeda_motor[] = 0;
                } elseif ($ranmor[$i]['sepeda_motor'] != 0 && $ranmor[$i - 1]['sepeda_motor'] == 0) {
                    $presentase_sepeda_motor[] = (float)substr($ranmor[$i]['sepeda_motor'],  0, 5);
                } elseif ($ranmor[$i]['sepeda_motor'] == 0 && $ranmor[$i - 1]['sepeda_motor'] != 0) {
                    $presentase_sepeda_motor[] = -100;
                } elseif ($ranmor[$i]['sepeda_motor'] != 0 && $ranmor[$i - 1]['sepeda_motor'] != 0) {
                    $presentase_sepeda_motor[] = (float)substr((($ranmor[$i]['sepeda_motor'] - $ranmor[$i - 1]['sepeda_motor'])  / $ranmor[$i - 1]['sepeda_motor']) * 100, 0, 5);
                }
                if ($ranmor[$i]['ransus'] == 0 && $ranmor[$i - 1]['ransus'] == 0) {
                    $presentase_ransus[] = 0;
                } elseif ($ranmor[$i]['ransus'] != 0 && $ranmor[$i - 1]['ransus'] == 0) {
                    $presentase_ransus[] = (float)substr($ranmor[$i]['ransus'], 0, 5);
                } elseif ($ranmor[$i]['ransus'] == 0 && $ranmor[$i - 1]['ransus'] != 0) {
                    $presentase_ransus[] = -100;
                } elseif ($ranmor[$i]['ransus'] != 0 && $ranmor[$i - 1]['ransus'] != 0) {
                    $presentase_ransus[] = (float)substr((($ranmor[$i]['ransus'] - $ranmor[$i - 1]['ransus'])  / $ranmor[$i - 1]['ransus']) * 100, 0, 5);
                }
            }
        }

        foreach ($ranmor as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $mobil_penumpang[] = $key['mobil_penumpang'];
            $mobil_barang[] = $key['mobil_barang'];
            $mobil_bus[] = $key['mobil_bus'];
            $sepeda_motor[] = $key['sepeda_motor'];
            $ransus[] = $key['ransus'];
        }

        return [
            'polda_month' => $poldaMonth,
            'mobil_penumpang' => $mobil_penumpang,
            'mobil_barang' => $mobil_barang,
            'mobil_bus' => $mobil_bus,
            'sepeda_motor' => $sepeda_motor,
            'ransus' => $ransus,

            'presentase_mobil_penumpang' => $presentase_mobil_penumpang,
            'presentase_mobil_barang' => $presentase_mobil_barang,
            'presentase_mobil_bus' => $presentase_mobil_bus,
            'presentase_sepeda_motor' => $presentase_sepeda_motor,
            'presentase_ransus' => $presentase_ransus,
        ];
    }
}
