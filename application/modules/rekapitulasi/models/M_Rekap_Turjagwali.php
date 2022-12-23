<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_Rekap_Turjagwali extends CI_Model
{


    public function __construct()
    {

        parent::__construct();

        $this->load->helper('guzzle_request_helper');
    }

    public function turjagwali_nasional()
    {
        $url = 'turjagwali?nasional=true';

        $turjagwaliNasional = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        // turjagwali nasional
        $pengawalan = $turjagwaliNasional['data']['jumlah']['pengawalan'];
        $penjagaan = $turjagwaliNasional['data']['jumlah']['penjagaan'];
        $pengaturan = $turjagwaliNasional['data']['jumlah']['pengaturan'];
        $patroli = $turjagwaliNasional['data']['jumlah']['patroli'];
        $jumlah = $turjagwaliNasional['data']['jumlah']['jumlah'];

        $dataNasional = $turjagwaliNasional['data']['data'];
        array_multisort(array_column($dataNasional, "jumlah"), SORT_DESC, $dataNasional);
        $topPolda = array_slice($dataNasional, 0, 10);

        $poldaName = array();
        $polda_pengawalan = array();
        $polda_penjagaan = array();
        $polda_pengaturan = array();
        $polda_patroli = array();
        $polda_jumlah = array();
        foreach ($dataNasional as $key) {
            $poldaName[] = $key['name_polda'];
            $polda_pengawalan[] = $key['pengawalan'];
            $polda_penjagaan[] = $key['penjagaan'];
            $polda_pengaturan[] = $key['pengaturan'];
            $polda_patroli[] = $key['patroli'];
            $polda_jumlah[] = $key['jumlah'];
        }

        return [
            'pengawalan' => $pengawalan,
            'penjagaan' => $penjagaan,
            'pengaturan' => $pengaturan,
            'patroli' => $patroli,
            'jumlah' => $jumlah,
            'polda_pengawalan' => $polda_pengawalan,
            'polda_penjagaan' => $polda_penjagaan,
            'polda_pengaturan' => $polda_pengaturan,
            'polda_patroli' => $polda_patroli,
            'polda_jumlah' => $polda_jumlah,
            'topPolda' => $topPolda,
            'polda_name' => $poldaName,
            'data_nasional' => $dataNasional
        ];
    }
}
