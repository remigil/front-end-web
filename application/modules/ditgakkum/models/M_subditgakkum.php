<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_subditgakkum extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }

    public function get_Poldaid($id)
    {
        $data = guzzle_request('GET', 'polda/getId/' . $id, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);
        return $data['data']['data'];
    }
    public function getChartDitgakkum($filter)
    {
        $url = 'ditgakkum/date?polda_id=' . $filter['id'] . '&type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $ditgakkum = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);

        $poldaMonth = array();
        $month_garlantas = array();
        $month_lakalanggar = array();
        $month_lakalantas = array();
        $month_turjagwali = array();
        foreach ($ditgakkum['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $month_garlantas[] = $key['garlantas'];
            $month_lakalanggar[] = $key['lakalanggar'];
            $month_lakalantas[] = $key['lakalantas'];
            $month_turjagwali[] = $key['turjagwali'];
            $month_walpjr[] = 0;
            // $month_walpjr[] = $key['walpjr'];
        }
        return [
            'polda_month' => $poldaMonth,
            'garlantas' => $month_garlantas,
            'lakalanggar' => $month_lakalanggar,
            'lakalantas' => $month_lakalantas,
            'walpjr' => $month_walpjr,
            'turjagwali' => $month_turjagwali
        ];
    }
}
