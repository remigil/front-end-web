<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_dashboard extends CI_Model
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

    public function garlantas_topPolda()
    {
        // asd
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
        $date = date("Y-m-d");
        $turjagwali = guzzle_request('GET', 'turjagwali/daily?date=' . $date . '&topPolda=true&limit=10', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        // var_dump($turjagwali);
        // die;
        $poldaName = array();
        $polda_pengawalan = array();
        $polda_penjagaan = array();
        $polda_pengaturan = array();
        $polda_patroli = array();
        $polda_jumlah = array();
        foreach ($turjagwali['data']['rows'] as $key) {
            $row[] = array();
            $poldaName[] = $key['name_polda'];
            $polda_pengawalan[] = $key['pengawalan'];
            $polda_penjagaan[] = $key['penjagaan'];
            $polda_pengaturan[] = $key['pengaturan'];
            $polda_patroli[] = $key['patroli'];
            $polda_jumlah[] = $key['total'];
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
        // foreach ($ditgakkum['data'] as $key) {
        //     $row = array();
        //     $polda_ditgakkum[] = $key['name_polda'];
        //     $lakalantas[] = $key['lakalantas'];
        //     $lakalanggar[] = $key["lakalanggar"];
        //     $garlantas[] = $key['garlantas'];
        //     $turjagwali[] = $key['turjagwali'];

        //     $row['name_polda'] = $key['name_polda'];
        //     $row['garlantas'] = $key['garlantas'];
        //     $row['lakalantas'] = $key['lakalantas'];
        //     $row['kemacetan'] = 0;
        //     $row['total'] = $key['garlantas'] + $key['lakalantas'];

        //     $topPolda[] = $row;
        // }

        // return [
        //     'polda_ditgakkum' => $polda_ditgakkum,
        //     'garlantas' => $garlantas,
        //     'lakalantas' => $lakalantas,
        //     'lakalanggar' => $lakalanggar,
        //     'turjagwali' => $turjagwali
        // ];
    }

    public function ditgakkum_polda()
    {
        // Ditgakkum
        $ditgakkum = guzzle_request('GET', 'ditgakkum?polda=true&polda_id=' . $this->session->userdata['polda_id'] . '', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // var_dump($ditgakkum);die;

        $polres_ditgakkum = array();
        $lakalanggar = array();
        $lakalantas = array();
        $garlantas = array();
        $turjagwali = array();
        $topPolres = array();
        foreach ($ditgakkum['data'] as $key) {
            $row = array();
            $polres_ditgakkum[] = $key['name_polres'];
            $lakalantas[] = $key['lakalantas'];
            $lakalanggar[] = $key["lakalanggar"];
            $garlantas[] = $key['garlantas'];
            $turjagwali[] = $key['turjagwali'];

            $row['name_polres'] = $key['name_polres'];
            $row['garlantas'] = $key['garlantas'];
            $row['lakalantas'] = $key['lakalantas'];
            $row['kemacetan'] = 0;
            $row['total'] = $key['garlantas'] + $key['lakalantas'];

            $topPolres[] = $row;
        }

        return [
            'polres_ditgakkum' => $polres_ditgakkum,
            'garlantas' => $garlantas,
            'lakalantas' => $lakalantas,
            'lakalanggar' => $lakalanggar,
            'turjagwali' => $turjagwali
        ];
    }

    public function ditgakkum_polres()
    {
        // Ditgakkum
        $ditgakkum = guzzle_request('GET', 'ditgakkum?polres=true&polres_id=' . $this->session->userdata['polres_id'] . '', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // var_dump($ditgakkum['data']['lakalantas']);die;


        // $lakalanggar = array();
        // $lakalantas = array();
        // $garlantas = array();
        // $turjagwali = array();

        // foreach ($ditgakkum['data'] as $key) {

        $row = array();

        $lakalantas[] = $ditgakkum['data']['lakalantas'];
        $lakalanggar[] = $ditgakkum['data']["lakalanggar"];
        $garlantas[] = $ditgakkum['data']['garlantas'];
        $turjagwali[] = $ditgakkum['data']['turjagwali'];


        $row['garlantas'] = $ditgakkum['data']['garlantas'];
        $row['lakalantas'] = $ditgakkum['data']['lakalantas'];
        $row['kemacetan'] = 0;



        // }

        return [

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
        // foreach ($ditregident['data'] as $key) {
        //     $polda_ditregident[] = $key['name_polda'];
        //     $stnk[] = $key['stnk'];
        //     $sim[] = $key["sim"];
        //     $bpkb[] = $key['bpkb'];
        //     $ranmor[] = $key['ranmor'];
        // }

        return [
            'polda_ditregident' => $polda_ditregident,
            'sim' => $sim,
            'stnk' => $stnk,
            'bpkb' => $bpkb,
            'ranmor' => $ranmor
        ];
    }

    public function ditregident_polda()
    {
        $ditregident = guzzle_request('GET', 'ditregident?polda=true&polda_id=' . $this->session->userdata['polda_id'] . '', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        $polres_ditregident = array();
        $sim = array();
        $stnk = array();
        $bpkb = array();
        $ranmor = array();
        // foreach ($ditregident['data'] as $key) {
        //     $polres_ditregident[] = $key['name_polres'];
        //     $stnk[] = $key['stnk'];
        //     $sim[] = $key["sim"];
        //     $bpkb[] = $key['bpkb'];
        //     $ranmor[] = $key['ranmor'];
        // }

        return [
            'polres_ditregident' => $polres_ditregident,
            'sim' => $sim,
            'stnk' => $stnk,
            'bpkb' => $bpkb,
            'ranmor' => $ranmor
        ];
    }

    public function ditregident_polres()
    {
        $ditregident = guzzle_request('GET', 'ditregident?polres=true&polres_id=' . $this->session->userdata['polres_id'] . '', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);


        $sim = array();
        $stnk = array();
        $bpkb = array();
        $ranmor = array();
        // foreach ($ditregident['data'] as $key) {

        $stnk[] = $ditregident['data']['stnk'];
        $sim[] = $ditregident['data']["sim"];
        $bpkb[] = $ditregident['data']['bpkb'];
        $ranmor[] = $ditregident['data']['ranmor'];
        // }

        return [

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
        // foreach ($topPolda['data'] as $key) {
        //     $row = array();
        //     $row['name_polda'] = $key['label'];
        //     ($key['luka_ringan'] == NULL) ? $row['luka_ringan'] = 0 : $row['luka_ringan'] = $key['luka_ringan'];
        //     ($key['luka_berat'] == NULL) ? $row['luka_berat'] = 0 : $row['luka_berat'] = $key['luka_berat'];
        //     ($key['meninggal_dunia'] == NULL) ? $row['meninggal_dunia'] = 0 : $row['meninggal_dunia'] = $key['meninggal_dunia'];
        //     ($key['jumlah_kecelakaan'] == NULL) ? $row['jumlah_kecelakaan'] = 0 : $row['jumlah_kecelakaan'] = $key['jumlah_kecelakaan'];

        //     $lakalantas_topPolda[] = $row;
        // }
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

    public function troublespot_polda()
    {
        $TroubleSpot = guzzle_request(
            'GET',
            'troublespot?serverSide=True&start=1&length=90000&order=id&orderDirection=desc&filter[]=polda_id&filterSearch[]=' . $this->session->userdata['id_polda'] . '',
            [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]
        );

        return $TroubleSpot['data'];
    }

    public function troublespot_polres()
    {
        $TroubleSpot = guzzle_request(
            'GET',
            'troublespot?serverSide=True&start=1&length=90000&order=id&orderDirection=desc&filter[]=polres_id&filterSearch[]=' . $this->session->userdata['id_polres'] . '',
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

    public function pelanggaran_nasional()
    {
        $url = 'garlantas?nasional=true';

        $garlantasNasional = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);



        // garlantas nasional
        // $jumlah = $garlantasNasional['data']['jumlah']['jumlah'];

        // return [
        //     'jumlah' => $jumlah,
        // ];
    }
    public function pelanggaran_polda()
    {
        $url = 'garlantas?polda=true&polda_id=' . $this->session->userdata['id_polda'] . '';

        $garlantasPolda = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);
        // var_dump($garlantasPolda);die;



        // garlantas polda
        $jumlah = $garlantasPolda['data'][0]['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }
    public function pelanggaran_polres()
    {
        $url = 'garlantas?polres=true&polres_id=' . $this->session->userdata['id_polres'] . '';

        $garlantasPolres = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);
        // var_dump($garlantasPolda);die;



        // garlantas polres
        $jumlah = $garlantasPolres['data']['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }

    public function kecelakaan_nasional()
    {
        $url = 'laka_lantas?nasional=true';

        $lakalantasNasional = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);



        // lakalantas nasional
        // $jumlah = $lakalantasNasional['data']['jumlah']['jumlah'];

        // return [
        //     'jumlah' => $jumlah,
        // ];
    }
    public function kecelakaan_polda()
    {
        $url = 'laka_lantas?polda=true&polda_id=' . $this->session->userdata['id_polda'] . '';

        $lakalantasPolda = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);



        // lakalantas polda
        $jumlah = $lakalantasPolda['data'][0]['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }
    public function kecelakaan_polres()
    {
        $url = 'laka_lantas?polres=true&polres_id=' . $this->session->userdata['id_polres'] . '';

        $lakalantasPolres = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);



        // lakalantas polres
        $jumlah = $lakalantasPolres['data']['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }

    public function ranmor_nasional()
    {
        $url = 'ranmor?nasional=true';

        $ranmorNasional = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // ranmor nasional
        // $jumlah = $ranmorNasional['data']['jumlah']['jumlah'];

        // return [
        //     'jumlah' => $jumlah,
        // ];
    }
    public function ranmor_polda()
    {
        $url = 'ranmor?polda=true&polda_id=' . $this->session->userdata['id_polda'] . '';

        $ranmorPolda = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // ranmor polda
        $jumlah = $ranmorPolda['data'][0]['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }
    public function ranmor_polres()
    {
        $url = 'ranmor?polres=true&polres_id=' . $this->session->userdata['id_polres'] . '';

        $ranmorPolres = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // ranmor polres
        $jumlah = $ranmorPolres['data']['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }

    public function sim_nasional()
    {
        $url = 'sim?nasional=true';

        $simNasional = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // sim nasional
        // $jumlah = $simNasional['data']['jumlah']['jumlah'];

        // return [
        //     'jumlah' => $jumlah,
        // ];
    }
    public function sim_polda()
    {
        $url = 'sim?polda=true&polda_id=' . $this->session->userdata['id_polda'] . '';

        $simPolda = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // sim Polda
        $jumlah = $simPolda['data'][0]['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }
    public function sim_polres()
    {
        $url = 'sim?polres=true&polres_id=' . $this->session->userdata['id_polres'] . '';

        $simPolres = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // sim Polres
        $jumlah = $simPolres['data']['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }

    public function stnk_nasional()
    {
        $url = 'stnk?nasional=true';

        $stnkNasional = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // stnk nasional
        // $jumlah = $stnkNasional['data']['jumlah']['jumlah'];

        // return [
        //     'jumlah' => $jumlah,
        // ];
    }
    public function stnk_polda()
    {
        $url = 'stnk?polda=true&polda_id=' . $this->session->userdata['id_polda'] . '';

        $stnkPolda = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // stnk polda
        $jumlah = $stnkPolda['data'][0]['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }
    public function stnk_polres()
    {
        $url = 'stnk?polres=true&polres_id=' . $this->session->userdata['id_polres'] . '';

        $stnkPolres = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // stnk polres
        $jumlah = $stnkPolres['data']['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }

    public function dikmaslantas_nasional()
    {
        $url = 'dikmaslantas?nasional=true';

        $dikmaslantasNasional = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // dikmas nasional
        // $jumlah = $dikmaslantasNasional['data']['jumlah']['jumlah'];

        // return [
        //     'jumlah' => $jumlah,
        // ];
    }
    public function dikmaslantas_polda()
    {
        $url = 'dikmaslantas?polda=true&polda_id=' . $this->session->userdata['id_polda'] . '';

        $dikmaslantasPolda = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // dikmas polda
        $jumlah = $dikmaslantasPolda['data'][0]['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }
    public function dikmaslantas_polres()
    {
        $url = 'dikmaslantas?polres=true&polres_id=' . $this->session->userdata['id_polres'] . '';

        $dikmaslantasPolres = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // dikmas polres
        $jumlah = $dikmaslantasPolres['data']['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }

    public function penyebaran_pemasangan_nasional()
    {
        $url = 'penyebaran?nasional=true';

        $penyebaran_pemasanganNasional = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // penyebaran/pemasangan nasional
        // $jumlah = $penyebaran_pemasanganNasional['data']['jumlah']['jumlah'];

        // return [
        //     'jumlah' => $jumlah,
        // ];
    }
    public function penyebaran_pemasangan_polda()
    {
        $url = 'penyebaran?polda=true&polda_id=' . $this->session->userdata['id_polda'] . '';

        $penyebaran_pemasanganPolda = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // penyebaran/pemasangan Polda
        $jumlah = $penyebaran_pemasanganPolda['data'][0]['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }
    public function penyebaran_pemasangan_polres()
    {
        $url = 'penyebaran?polres=true&polres_id=' . $this->session->userdata['id_polres'] . '';

        $penyebaran_pemasanganPolres = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // penyebaran/pemasangan Polres
        $jumlah = $penyebaran_pemasanganPolres['data']['jumlah'];

        return [
            'jumlah' => $jumlah,
        ];
    }
}
