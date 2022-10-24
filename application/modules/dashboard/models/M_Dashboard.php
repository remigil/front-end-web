<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_dashboard extends CI_Model
{


    public function __construct()
    {

        parent::__construct();

        $this->load->helper('guzzle_request_helper');
    }

    public function garlantas_topPolda()
    {
        // Top Polda Garlantas
        $topPolda = guzzle_request(
            'GET',
            'garlantas/topPolda',
            [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]
        );

        $garlantas_topPolda = array();
        foreach ($topPolda['data'] as $key) {
            $row = array();
            $row['name_polda'] = $key['label'];
            ($key['pelanggaran_berat'] == NULL) ? $row['pelanggaran_berat'] = 0 : $row['pelanggaran_berat'] = $key['pelanggaran_berat'];
            ($key['pelanggaran_ringan'] == NULL) ? $row['pelanggaran_ringan'] = 0 : $row['pelanggaran_ringan'] = $key['pelanggaran_ringan'];
            ($key['pelanggaran_sedang'] == NULL) ? $row['pelanggaran_sedang'] = 0 : $row['pelanggaran_sedang'] = $key['pelanggaran_sedang'];
            ($key['jumlah_pelanggaran'] == NULL) ? $row['jumlah_pelanggaran'] = 0 : $row['jumlah_pelanggaran'] = $key['jumlah_pelanggaran'];

            $garlantas_topPolda[] = $row;
        }
        array_multisort(array_column($garlantas_topPolda, "jumlah_pelanggaran"), SORT_DESC, $garlantas_topPolda);
        return $garlantas_topPolda;
    }

    public function turjagwali_nasional()
    {
        // Turjagwali
        $turjagwali = guzzle_request('GET', 'turjagwali?nasional=true', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $poldaName = array();
        $polda_pengawalan = array();
        $polda_penjagaan = array();
        $polda_pengaturan = array();
        $polda_patroli = array();
        $polda_jumlah = array();
        foreach ($turjagwali['data']['data'] as $key) {
            $row[] = array();
            $poldaName[] = $key['name_polda'];
            $polda_pengawalan[] = $key['pengawalan'];
            $polda_penjagaan[] = $key['penjagaan'];
            $polda_pengaturan[] = $key['pengaturan'];
            $polda_patroli[] = $key['patroli'];
            $polda_jumlah[] = $key['jumlah'];
        }

        return [
            'polda_name' => $poldaName,
            'polda_pengawalan' => $polda_pengawalan,
            'polda_penjagaan' => $polda_penjagaan,
            'polda_pengaturan' => $polda_pengaturan,
            'polda_patroli' => $polda_patroli,
            'polda_jumlah' => $polda_jumlah
        ];
    }

    public function ditgakkum_nasional()
    {
        // Ditgakkum
        $ditgakkum = guzzle_request('GET', 'ditgakkum?nasional=true', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        $polda_ditgakkum = array();
        $lakalanggar = array();
        $lakalantas = array();
        $garlantas = array();
        $turjagwali = array();
        $topPolda = array();
        foreach ($ditgakkum['data'] as $key) {
            $row = array();
            $polda_ditgakkum[] = $key['name_polda'];
            $lakalantas[] = $key['lakalantas'];
            $lakalanggar[] = $key["lakalanggar"];
            $garlantas[] = $key['garlantas'];
            $turjagwali[] = $key['turjagwali'];

            $row['name_polda'] = $key['name_polda'];
            $row['garlantas'] = $key['garlantas'];
            $row['lakalantas'] = $key['lakalantas'];
            $row['kemacetan'] = 0;
            $row['total'] = $key['garlantas'] + $key['lakalantas'];

            $topPolda[] = $row;
        }

        return [
            'polda_ditgakkum' => $polda_ditgakkum,
            'garlantas' => $garlantas,
            'lakalantas' => $lakalantas,
            'lakalanggar' => $lakalanggar,
            'turjagwali' => $turjagwali
        ];
    }

    public function ditregident_nasional()
    {
        $ditregident = guzzle_request('GET', 'ditregident?nasional=true', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        $polda_ditregident = array();
        $sim = array();
        $stnk = array();
        $bpkb = array();
        $ranmor = array();
        foreach ($ditregident['data'] as $key) {
            $polda_ditregident[] = $key['name_polda'];
            $stnk[] = $key['stnk'];
            $sim[] = $key["sim"];
            $bpkb[] = $key['bpkb'];
            $ranmor[] = $key['ranmor'];
        }

        return [
            'polda_ditregident' => $polda_ditregident,
            'sim' => $sim,
            'stnk' => $stnk,
            'bpkb' => $bpkb,
            'ranmor' => $ranmor
        ];
    }

    public function lakalantas_topPolda()
    {
        $topPolda = guzzle_request(
            'GET',
            'laka_lantas/topPolda',
            [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]
        );

        $lakalantas_topPolda = array();
        foreach ($topPolda['data'] as $key) {
            $row = array();
            $row['name_polda'] = $key['label'];
            ($key['luka_ringan'] == NULL) ? $row['luka_ringan'] = 0 : $row['luka_ringan'] = $key['luka_ringan'];
            ($key['luka_berat'] == NULL) ? $row['luka_berat'] = 0 : $row['luka_berat'] = $key['luka_berat'];
            ($key['meninggal_dunia'] == NULL) ? $row['meninggal_dunia'] = 0 : $row['meninggal_dunia'] = $key['meninggal_dunia'];
            ($key['jumlah_kecelakaan'] == NULL) ? $row['jumlah_kecelakaan'] = 0 : $row['jumlah_kecelakaan'] = $key['jumlah_kecelakaan'];

            $lakalantas_topPolda[] = $row;
        }
        array_multisort(array_column($lakalantas_topPolda, "jumlah_kecelakaan"), SORT_DESC, $lakalantas_topPolda);
        return $lakalantas_topPolda;
    }

    public function tripOn_nasional()
    {
        $TripOn = guzzle_request(
            'GET',
            'count-trip-on',
            [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]
        );
        $polda_tripOn = array();
        $polda_tripOn[] = $TripOn['data']['tripOn_mobil'];
        $polda_tripOn[] = $TripOn['data']['tripOn_motor'];

        return $polda_tripOn;
    }

    public function troublespot_nasional()
    {
        $TroubleSpot = guzzle_request(
            'GET',
            'troublespot',
            [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]
        );

        return $TroubleSpot['data'];
    }

    public function getMonth()
    {
        $url = 'laka_langgar/count-month?nasional=true';

        $result = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        return $result;
    }
}
