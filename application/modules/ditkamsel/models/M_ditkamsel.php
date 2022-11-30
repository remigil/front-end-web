<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_ditkamsel extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
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
}
