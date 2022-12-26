<?php
class M_detail_statistik extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }

    // Kecelakaan (Laka)
    public function getKecelakaanNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'laka_lantas/daily?date=' . $filterbaru['yesterday'] . '&topPolda=true&limit=' . $filterbaru['limit'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'laka_lantas/daily?topPolda=true&limit=' . $filterbaru['limit'] . '&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $poldaID = array();
        $poldaName = array();
        $polda_meninggal_dunia = array();
        $polda_luka_berat = array();
        $polda_luka_ringan = array();
        $polda_kerugian_material = array();
        $polda_insiden_kecelakaan = array();
        $polda_jumlah = array();

        $insiden_kecelakaan = 0;
        $kerugian_material = 0;
        $luka_berat = 0;
        $luka_ringan = 0;
        $meninggal_dunia = 0;
        $total = 0;
        foreach ($lakalantasnasional['data']['rows'] as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_meninggal_dunia[] = $key['meninggal_dunia'];
            $polda_luka_berat[] = $key['luka_berat'];
            $polda_luka_ringan[] = $key['luka_ringan'];
            $polda_kerugian_material[] = $key['kerugian_material'];
            $polda_insiden_kecelakaan[] = $key['insiden_kecelakaan'];
            $polda_jumlah[] = $key['total'];

            $insiden_kecelakaan += $key['insiden_kecelakaan'];
            $kerugian_material += $key['kerugian_material'];
            $luka_berat += $key['luka_berat'];
            $luka_ringan += $key['luka_ringan'];
            $meninggal_dunia += $key['meninggal_dunia'];
            $total += $key['total'];
        }



        return [
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'polda_meninggal_dunia' => $polda_meninggal_dunia,
            'polda_luka_berat' => $polda_luka_berat,
            'polda_luka_ringan' => $polda_luka_ringan,
            'polda_kerugian_material' => $polda_kerugian_material,
            'insiden_kecelakaan' => $polda_insiden_kecelakaan,
            'polda_jumlah' => $polda_jumlah,

            'total_insiden_kecelakaan' => number_format($insiden_kecelakaan),
            'total_kerugian_material' => number_format($kerugian_material),
            'total_luka_berat' => number_format($luka_berat),
            'total_luka_ringan' => number_format($luka_ringan),
            'total_meninggal_dunia' => number_format($meninggal_dunia),
            'total' => number_format($total),

            'start_date' => format_indo($filterbaru['start_date']),
            'end_date' => format_indo($filterbaru['end_date'])

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
        $meninggal_dunia = $lakalantasNasional['data']['jumlah']['meninggal_dunia'];
        $luka_berat = $lakalantasNasional['data']['jumlah']['luka_berat'];
        $luka_ringan = $lakalantasNasional['data']['jumlah']['luka_ringan'];
        $jumlah = $lakalantasNasional['data']['jumlah']['jumlah'];

        $dataNasional = $lakalantasNasional['data']['data'];
        array_multisort(array_column($dataNasional, "jumlah"), SORT_DESC, $dataNasional);
        $topPolda = array_slice($dataNasional, 0, 10);

        $poldaID = array();
        $poldaName = array();
        $polda_meninggal_dunia = array();
        $polda_luka_berat = array();
        $polda_luka_ringan = array();
        $polda_kerugian_material = array();
        $polda_jumlah = array();
        foreach ($dataNasional as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_meninggal_dunia[] = $key['meninggal_dunia'];
            $polda_luka_berat[] = $key['luka_berat'];
            $polda_luka_ringan[] = $key['luka_ringan'];
            $polda_kerugian_material[] = $key['kerugian_material'];
            $polda_jumlah[] = $key['jumlah'];
        }

        return [
            'meninggal_dunia' => $meninggal_dunia,
            'luka_berat' => $luka_berat,
            'luka_ringan' => $luka_ringan,
            'jumlah' => $jumlah,
            'polda_meninggal_dunia' => $polda_meninggal_dunia,
            'polda_luka_berat' => $polda_luka_berat,
            'polda_luka_ringan' => $polda_luka_ringan,
            'polda_kerugian_material' => $polda_kerugian_material,
            'polda_jumlah' => $polda_jumlah,
            'topPolda' => $topPolda,
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'data_nasional' => $dataNasional
        ];
    }

    public function getLakaByDate($filter)
    {
        $url = 'laka_lantas/date?type=month&filter=true&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';
        var_dump($url);
    }

    public function kecelakaan_month()
    {

        $url = 'laka_lantas/count-month?nasional=true';

        $lakalantasMonth = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // lakalantas month 
        foreach ($lakalantasMonth['data']['data'] as $field) {
            $row = array();
            $row['date'] = $field['date'];
            $row['sort'] = $this->getmonth($field['date']);
            $row['meninggal_dunia'] = $field['meninggal_dunia'];
            $row['luka_ringan'] = $field['luka_ringan'];
            $row['luka_berat'] = $field['luka_berat'];
            $row['kerugian_material'] = $field['kerugian_material'];
            $row['jumlah'] = $field['jumlah'];

            $dataMonth[] = $row;
        }
        array_multisort(array_column($dataMonth, "sort"), SORT_ASC, $dataMonth);

        $poldaMonth = array();
        $month_meninggal_dunia = array();
        $month_luka_berat = array();
        $month_luka_ringan = array();
        $month_kerugian_material = array();
        $month_jumlah = array();
        foreach ($dataMonth as $key) {
            $poldaMonth[] = $key['date'];
            $month_meninggal_dunia[] = $key['meninggal_dunia'];
            $month_luka_berat[] = $key['luka_berat'];
            $month_luka_ringan[] = $key['luka_ringan'];
            $month_kerugian_material[] = $key['kerugian_material'];
            $month_jumlah[] = $key['jumlah'];
        }


        return [
            'month_meninggal_dunia' => $month_meninggal_dunia,
            'month_luka_berat' => $month_luka_berat,
            'month_luka_ringan' => $month_luka_ringan,
            'month_kerugian_material' => $month_kerugian_material,
            'month_jumlah' => $month_jumlah,
            'polda_month' => $poldaMonth
        ];
    }

    public function getKecelakaanNasionalDate($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'laka_lantas/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'laka_lantas/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $polda_date = array();
        $polda_meninggal_dunia = array();
        $polda_luka_berat = array();
        $polda_luka_ringan = array();
        $polda_kerugian_material = array();
        $polda_insinden_kecelakaan = array();
        foreach ($lakalantasnasional['data'] as $key) {
            $polda_date[] = $key['date'];
            $polda_meninggal_dunia[] = $key['meninggal_dunia'];
            $polda_luka_berat[] = $key['luka_berat'];
            $polda_luka_ringan[] = $key['luka_ringan'];
            $polda_kerugian_material[] = $key['kerugian_material'];
            $polda_insiden_kecelakaan[] = $key['insiden_kecelakaan'];
        }

        return [
            'polda_name' => $polda_date,
            'polda_meninggal_dunia' => $polda_meninggal_dunia,
            'polda_luka_berat' => $polda_luka_berat,
            'polda_luka_ringan' => $polda_luka_ringan,
            'polda_kerugian_material' => $polda_kerugian_material,
            'polda_insiden_kecelakaan' => $polda_insiden_kecelakaan
        ];
    }
    // End Kecelakaan

    // Pelanggaran (garlantas)

    public function getPelanggaranNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'garlantas/daily?date=' . $filterbaru['yesterday'] . '&topPolda=true&limit=' . $filterbaru['limit'] . '';
            $garlantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'garlantas/daily?topPolda=true&limit=' . $filterbaru['limit'] . '&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $garlantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }


        $poldaID = array();
        $poldaName = array();
        $polda_pelanggaran_berat = array();
        $polda_pelanggaran_ringan = array();
        $polda_pelanggaran_sedang = array();
        $polda_teguran = array();
        $polda_jumlah = array();
        foreach ($garlantasnasional['data']['rows'] as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_pelanggaran_berat[] = $key['pelanggaran_berat'];
            $polda_pelanggaran_ringan[] = $key['pelanggaran_ringan'];
            $polda_pelanggaran_sedang[] = $key['pelanggaran_sedang'];
            $polda_teguran[] = $key['teguran'];
            $polda_jumlah[] = $key['total'];
        }

        return [
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'polda_pelanggaran_berat' => $polda_pelanggaran_berat,
            'polda_pelanggaran_ringan' => $polda_pelanggaran_ringan,
            'polda_pelanggaran_sedang' => $polda_pelanggaran_sedang,
            'polda_teguran' => $polda_teguran,
            'polda_jumlah' => $polda_jumlah,
        ];
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
        $pelanggaran_berat = $garlantasNasional['data']['jumlah']['pelanggaran_berat'];
        $pelanggaran_ringan = $garlantasNasional['data']['jumlah']['pelanggaran_ringan'];
        $pelanggaran_sedang = $garlantasNasional['data']['jumlah']['pelanggaran_sedang'];
        $teguran = $garlantasNasional['data']['jumlah']['teguran'];
        $jumlah = $garlantasNasional['data']['jumlah']['jumlah'];

        $dataNasional = $garlantasNasional['data']['data'];
        array_multisort(array_column($dataNasional, "jumlah"), SORT_DESC, $dataNasional);
        $topPolda = array_slice($dataNasional, 0, 10);

        $poldaID = array();
        $poldaName = array();
        $polda_pelanggaran_berat = array();
        $polda_pelanggaran_ringan = array();
        $polda_pelanggaran_sedang = array();
        $polda_teguran = array();
        $polda_jumlah = array();
        foreach ($dataNasional as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_pelanggaran_berat[] = $key['pelanggaran_berat'];
            $polda_pelanggaran_ringan[] = $key['pelanggaran_ringan'];
            $polda_pelanggaran_sedang[] = $key['pelanggaran_sedang'];
            $polda_teguran[] = $key['teguran'];
            $polda_jumlah[] = $key['jumlah'];
        }

        return [
            'pelanggaran_berat' => $pelanggaran_berat,
            'pelanggaran_ringan' => $pelanggaran_ringan,
            'pelanggaran_sedang' => $pelanggaran_sedang,
            'teguran' => $teguran,
            'jumlah' => $jumlah,
            'polda_pelanggaran_berat' => $polda_pelanggaran_berat,
            'polda_pelanggaran_ringan' => $polda_pelanggaran_ringan,
            'polda_pelanggaran_sedang' => $polda_pelanggaran_sedang,
            'polda_teguran' => $polda_teguran,
            'polda_jumlah' => $polda_jumlah,
            'topPolda' => $topPolda,
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'data_nasional' => $dataNasional
        ];
    }

    public function getGarlantasNasionalDate($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'garlantas/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'garlantas/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $polda_date = array();
        $polda_pelanggaran_berat = array();
        $polda_pelanggaran_sedang = array();
        $polda_pelanggaran_ringan = array();
        $polda_teguran = array();
        foreach ($lakalantasnasional['data'] as $key) {
            $polda_date[] = $key['date'];
            $polda_pelanggaran_berat[] = $key['pelanggaran_berat'];
            $polda_pelanggaran_sedang[] = $key['pelanggaran_sedang'];
            $polda_pelanggaran_ringan[] = $key['pelanggaran_ringan'];
            $polda_teguran[] = $key['teguran'];
        }

        return [
            'polda_name' => $polda_date,
            'polda_pelanggaran_berat' => $polda_pelanggaran_berat,
            'polda_pelanggaran_sedang' => $polda_pelanggaran_sedang,
            'polda_pelanggaran_ringan' => $polda_pelanggaran_ringan,
            'polda_teguran' => $polda_teguran,
        ];
    }

    // End Pelanggaran

    // Turjagwali

    public function getTurjawaliNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'turjagwali/daily?date=' . $filterbaru['yesterday'] . '&topPolda=true&limit=' . $filterbaru['limit'] . '';
            $turjagwalinasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'turjagwali/daily?topPolda=true&limit=' . $filterbaru['limit'] . '&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $turjagwalinasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $poldaID = array();
        $poldaName = array();
        $polda_pengaturan = array();
        $polda_penjagaan = array();
        $polda_pengawalan = array();
        $polda_patroli = array();
        $polda_jumlah = array();
        foreach ($turjagwalinasional['data']['rows'] as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_pengaturan[] = $key['pengaturan'];
            $polda_penjagaan[] = $key['penjagaan'];
            $polda_pengawalan[] = $key['pengawalan'];
            $polda_patroli[] = $key['patroli'];
            $polda_jumlah[] = $key['total'];
        }

        return [
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'polda_pengaturan' => $polda_pengaturan,
            'polda_penjagaan' => $polda_penjagaan,
            'polda_pengawalan' => $polda_pengawalan,
            'polda_patroli' => $polda_patroli,
            'polda_jumlah' => $polda_jumlah,
        ];
    }

    public function getTurjagwaliNasionalDate($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'turjagwali/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'turjagwali/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $polda_date = array();
        $polda_pengaturan = array();
        $polda_penjagaan = array();
        $polda_pengawalan = array();
        $polda_patroli = array();
        foreach ($lakalantasnasional['data'] as $key) {
            $polda_date[] = $key['date'];
            $polda_pengaturan[] = $key['pengaturan'];
            $polda_penjagaan[] = $key['penjagaan'];
            $polda_pengawalan[] = $key['pengawalan'];
            $polda_patroli[] = $key['patroli'];
        }

        return [
            'polda_name' => $polda_date,
            'polda_pengaturan' => $polda_pengaturan,
            'polda_penjagaan' => $polda_penjagaan,
            'polda_pengawalan' => $polda_pengawalan,
            'polda_patroli' => $polda_patroli,
        ];
    }

    // End Turjagwali

    // Sim
    public function getSimNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'sim/daily?date=' . $filterbaru['yesterday'] . '&topPolda=true&limit=' . $filterbaru['limit'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'sim/daily?topPolda=true&limit=' . $filterbaru['limit'] . '&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $poldaID = array();
        $poldaName = array();
        $polda_baru = array();
        $polda_perpanjangan = array();
        foreach ($lakalantasnasional['data']['rows'] as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_baru[] = $key['baru'];
            $polda_perpanjangan[] = $key['perpanjangan'];
        }
        return [
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'polda_baru' => $polda_baru,
            'polda_perpanjangan' => $polda_perpanjangan,
        ];
    }

    public function getSimNasionalDate($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'sim/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'sim/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $polda_date = array();
        $polda_baru = array();
        $polda_perpanjangan = array();
        foreach ($lakalantasnasional['data'] as $key) {
            $polda_date[] = $key['date'];
            $polda_baru[] = $key['baru'];
            $polda_perpanjangan[] = $key['perpanjangan'];
        }

        return [
            'polda_name' => $polda_date,
            'polda_baru' => $polda_baru,
            'polda_perpanjangan' => $polda_perpanjangan,
        ];
    }

    // STNK

    public function getStnkNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'stnk/daily?date=' . $filterbaru['yesterday'] . '&topPolda=true&limit=' . $filterbaru['limit'] . '';
            $stnknasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'stnk/daily?topPolda=true&limit=' . $filterbaru['limit'] . '&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $stnknasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }
        $poldaID = array();
        $poldaName = array();
        $polda_baru = array();
        $polda_perpanjangan = array();
        $polda_rubentina = array();
        foreach ($stnknasional['data']['rows'] as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_bbn[] = $key['total_bbn'];
            $polda_perubahan[] = $key['total_perubahan'];
            $polda_perpanjangan[] = $key['total_perpanjangan'];
            $polda_mutasi_masuk[] = $key['total_mutasi_masuk'];
            $polda_mutasi_keluar[] = $key['total_mutasi_keluar'];
            $polda_pengesahan[] = $key['total_pengesahan'];
            $polda_samolnas[] = $key['total_samolnas'];
        }
        return [
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'polda_bbn' => $polda_bbn,
            'polda_perubahan' => $polda_perubahan,
            'polda_perpanjangan' => $polda_perpanjangan,
            'polda_mutasi_masuk' => $polda_mutasi_masuk,
            'polda_mutasi_keluar' => $polda_mutasi_keluar,
            'polda_pengesahan' => $polda_pengesahan,
            'polda_samolnas' => $polda_samolnas,
        ];
    }


    public function getStnkNasionalDate($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'stnk/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'stnk/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $polda_date = array();
        $polda_bbn = array();
        $polda_perubahan = array();
        $polda_perpanjangan = array();
        foreach ($lakalantasnasional['data'] as $key) {
            $polda_date[] = $key['date'];
            $polda_bbn[] = $key['total_bbn'];
            $polda_perubahan[] = $key['total_perubahan'];
            $polda_perpanjangan[] = $key['total_perpanjangan'];
            $polda_mutasi_masuk[] = $key['total_mutasi_masuk'];
            $polda_mutasi_keluar[] = $key['total_mutasi_keluar'];
            $polda_pengesahan[] = $key['total_pengesahan'];
            $polda_samolnas[] = $key['total_samolnas'];
        }

        return [
            'polda_name' => $polda_date,
            'polda_bbn' => $polda_bbn,
            'polda_perubahan' => $polda_perubahan,
            'polda_perpanjangan' => $polda_perpanjangan,
            'polda_mutasi_masuk' => $polda_mutasi_masuk,
            'polda_mutasi_keluar' => $polda_mutasi_keluar,
            'polda_pengesahan' => $polda_pengesahan,
            'polda_samolnas' => $polda_samolnas,
        ];
    }
    // END DIKMASLAN


    // DIKMASLANTAS

    public function getDikmasNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'dikmaslantas/daily?date=' . $filterbaru['yesterday'] . '&topPolda=true&limit=' . $filterbaru['limit'] . '';
            $dikmaslantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'dikmaslantas/daily?topPolda=true&limit=' . $filterbaru['limit'] . '&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $dikmaslantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $poldaID = array();
        $poldaName = array();
        $polda_media_cetak = array();
        $polda_media_elektronik = array();
        $polda_media_sosial = array();
        foreach ($dikmaslantasnasional['data']['rows'] as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_media_cetak[] = $key['media_cetak'];
            $polda_media_elektronik[] = $key['media_elektronik'];
            $polda_media_sosial[] = $key['media_sosial'];
        }
        return [
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'polda_media_cetak' => $polda_media_cetak,
            'polda_media_elektronik' => $polda_media_elektronik,
            'polda_media_sosial' => $polda_media_sosial,
        ];
    }


    public function getDikmasNasionalDate($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'dikmaslantas/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $dikmasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'dikmaslantas/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $dikmasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $polda_date = array();
        $polda_media_cetak = array();
        $polda_media_elektronik = array();
        $polda_media_sosial = array();
        foreach ($dikmasnasional['data'] as $key) {
            $polda_date[] = $key['date'];
            $polda_media_cetak[] = $key['media_cetak'];
            $polda_media_elektronik[] = $key['media_elektronik'];
            $polda_media_sosial[] = $key['media_sosial'];
        }

        return [
            'polda_name' => $polda_date,
            'polda_media_cetak' => $polda_media_cetak,
            'polda_media_elektronik' => $polda_media_elektronik,
            'polda_media_sosial' => $polda_media_sosial,
        ];
    }
    // END DIKMASLANTAS

    // BPKB
    public function getBpkbNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'bpkb/daily?date=' . $filterbaru['yesterday'] . '&topPolda=true&limit=' . $filterbaru['limit'] . '';
            $bpkbnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'bpkb/daily?topPolda=true&limit=' . $filterbaru['limit'] . '&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $bpkbnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }
        $poldaID = array();
        $poldaName = array();
        $polda_baru = array();
        $polda_perpanjangan = array();
        $polda_rubentina = array();
        foreach ($bpkbnasional['data']['rows'] as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_bbn_1[] = $key['bbn_1'];
            $polda_bbn_2[] = $key['bbn_2'];
            $polda_mutasi_masuk[] = $key['mutasi_masuk'];
            $polda_mutasi_keluar[] = $key['mutasi_keluar'];
            $polda_perubahan_pergantian[] = $key['perubahan_pergantian'];
        }
        return [
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'polda_bbn_1' => $polda_bbn_1,
            'polda_bbn_2' => $polda_bbn_2,
            'polda_mutasi_masuk' => $polda_mutasi_masuk,
            'polda_mutasi_keluar' => $polda_mutasi_keluar,
            'polda_perubahan_pergantian' => $polda_perubahan_pergantian,
        ];
    }

    public function getBpkbNasionalDate($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'bpkb/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'bpkb/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $polda_date = array();
        $polda_baru = array();
        $polda_perpanjangan = array();
        $polda_rubentina = array();
        foreach ($lakalantasnasional['data'] as $key) {
            $polda_date[] = $key['date'];
            $polda_bbn_1[] = $key['bbn_1'];
            $polda_bbn_2[] = $key['bbn_2'];
            $polda_mutasi_masuk[] = $key['mutasi_masuk'];
            $polda_mutasi_keluar[] = $key['mutasi_keluar'];
            $polda_perubahan_pergantian[] = $key['perubahan_pergantian'];
        }

        return [
            'polda_name' => $polda_date,
            'polda_bbn_1' => $polda_bbn_1,
            'polda_bbn_2' => $polda_bbn_2,
            'polda_mutasi_masuk' => $polda_mutasi_masuk,
            'polda_mutasi_keluar' => $polda_mutasi_keluar,
            'polda_perubahan_pergantian' => $polda_perubahan_pergantian,
        ];
    }
    // END BPKB








    public function get_Polda()
    {
        $data = guzzle_request('GET', 'polda', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        return $data['data']['data'];
    }
    public function getRanmorNasional($filterbaru)
    {
        if ($filterbaru['filter'] == 0) {
            $url = 'ranmor/daily?date=' . $filterbaru['yesterday'] . '&topPolda=true&limit=' . $filterbaru['limit'] . '';
            $ranmornasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'ranmor/daily?topPolda=true&limit=' . $filterbaru['limit'] . '&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $ranmornasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $poldaID = array();
        $poldaName = array();
        $polda_mobil_penumpang = array();
        $polda_mobil_barang = array();
        $polda_mobil_bus = array();
        $polda_ransus = array();
        $polda_sepeda_motor = array();
        $polda_jumlah = array();
        foreach ($ranmornasional['data']['rows'] as $key) {
            $poldaID[] = $key['id'];
            $poldaName[] = $key['name_polda'];
            $polda_mobil_penumpang[] = $key['mobil_penumpang'];
            $polda_mobil_barang[] = $key['mobil_barang'];
            $polda_mobil_bus[] = $key['mobil_bus'];
            $polda_ransus[] = $key['ransus'];
            $polda_sepeda_motor[] = $key['sepeda_motor'];
            $polda_jumlah[] = $key['total'];
        }

        return [
            'polda_id' => $poldaID,
            'polda_name' => $poldaName,
            'polda_mobil_penumpang' => $polda_mobil_penumpang,
            'polda_mobil_barang' => $polda_mobil_barang,
            'polda_mobil_bus' => $polda_mobil_bus,
            'polda_ransus' => $polda_ransus,
            'polda_sepeda_motor' => $polda_sepeda_motor,
            'polda_jumlah' => $polda_jumlah,
        ];
    }
    public function getRanmorNasionalDate($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'ranmor/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'ranmor/date?type=day&filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'] . '';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $polda_date = array();
        $polda_mobil_penumpang = array();
        $polda_mobil_barang = array();
        $polda_mobil_bus = array();
        $polda_sepeda_motor = array();
        $polda_ransus = array();

        foreach ($lakalantasnasional['data'] as $key) {
            $polda_date[] = $key['date'];
            $polda_mobil_penumpang[] = $key['mobil_penumpang'];
            $polda_mobil_barang[] = $key['mobil_barang'];
            $polda_mobil_bus[] = $key['mobil_bus'];
            $polda_sepeda_motor[] = $key['sepeda_motor'];
            $polda_ransus[] = $key['ransus'];
        }

        return [
            'polda_name' => $polda_date,
            'polda_mobil_penumpang' => $polda_mobil_penumpang,
            'polda_mobil_barang' => $polda_mobil_barang,
            'polda_mobil_bus' => $polda_mobil_bus,
            'polda_sepeda_motor' => $polda_sepeda_motor,
            'polda_ransus' => $polda_ransus,
        ];
    }
    function getmonth($value)
    {
        $month = '';
        switch ($value) {
            case 'January':
                $month = "1";
                break;

            case 'February':
                $month = "2";
                break;

            case 'March':
                $month = "3";
                break;

            case 'April':
                $month = "4";
                break;

            case 'Mei':
                $month = "5";
                break;

            case 'June':
                $month = "6";
                break;

            case 'July':
                $month = "7";
                break;

            case 'August':
                $month = "8";
                break;

            case 'September':
                $month = "9";
                break;

            case 'October':
                $month = "10";
                break;

            case "November":
                $month = "11";
                break;

            case "December":
                $month = "12";
                break;
        }
        return $month;
    }
}
