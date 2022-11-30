<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_bagtik extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }

    public function getChartBagtik($filter)
    {
        // $url = 'ditregident/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        // $ditregident = guzzle_request('GET', $url, [
        //     'headers' => [
        //         'Authorization' => $this->session->userdata['token']
        //     ]

        // ]);

        // $poldaMonth = array();
        // $month_sim = array();
        // $month_bpkb = array();
        // $month_stnk = array();
        // $month_sbst = array();
        // foreach ($ditregident['data'] as $key) {
        //     if ($filter['type'] == 'day') {
        //         $datee = explode("-", $key['date']);
        //         $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
        //     } else if ($filter['type'] == 'month') {
        //         $poldaMonth[] = $key['date'];
        //     } else if ($filter['type'] == 'year') {
        //         $poldaMonth[] = $key['date'];
        //     }
        //     $month_sim[] = $key['sim'];
        //     $month_bpkb[] = $key['bpkb'];
        //     $month_stnk[] = $key['stnk'];
        //     $month_sbst[] = 0;
        // }
        return [
            // 'polda_month' => $poldaMonth,
            // 'sim' => $month_sim,
            // 'bpkb' => $month_bpkb,
            // 'stnk' => $month_stnk,
            // 'sbst' => $month_sbst
            'polda_month' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            'subbagambangsistek' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            'subbagjarsistek' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            'subbagharsistek' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ];
    }
}
