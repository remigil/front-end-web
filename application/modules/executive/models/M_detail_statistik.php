<?php
class M_detail_statistik extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }

    public function getKecelakaanNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'laka_lantas/daily';
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'laka_lantas/daily?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $lakalantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $poldaName = array();
        $polda_meninggal_dunia = array();
        $polda_luka_berat = array();
        $polda_luka_ringan = array();
        $polda_kerugian_material = array();
        $polda_jumlah = array();
        foreach ($lakalantasnasional['data']['rows'] as $key) {
            $poldaName[] = $key['name_polda'];
            $polda_meninggal_dunia[] = $key['meninggal_dunia'];
            $polda_luka_berat[] = $key['luka_berat'];
            $polda_luka_ringan[] = $key['luka_ringan'];
            $polda_kerugian_material[] = $key['kerugian_material'];
            $polda_jumlah[] = $key['total'];
        }

        return [
            'polda_name' => $poldaName,
            'polda_meninggal_dunia' => $polda_meninggal_dunia,
            'polda_luka_berat' => $polda_luka_berat,
            'polda_luka_ringan' => $polda_luka_ringan,
            'polda_kerugian_material' => $polda_kerugian_material,
            'polda_jumlah' => $polda_jumlah,
        ];
    }

    public function getPelanggaranNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'garlantas/daily';
            $garlantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'garlantas/daily?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $garlantasnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $poldaName = array();
        $polda_pelanggaran_berat = array();
        $polda_pelanggaran_ringan = array();
        $polda_pelanggaran_sedang = array();
        $polda_teguran = array();
        $polda_jumlah = array();
        foreach ($garlantasnasional['data']['rows'] as $key) {
            $poldaName[] = $key['name_polda'];
            $polda_pelanggaran_berat[] = $key['pelanggaran_berat'];
            $polda_pelanggaran_ringan[] = $key['pelanggaran_ringan'];
            $polda_pelanggaran_sedang[] = $key['pelanggaran_sedang'];
            $polda_teguran[] = $key['teguran'];
            $polda_jumlah[] = $key['total'];
        }

        return [
            'polda_name' => $poldaName,
            'polda_pelanggaran_berat' => $polda_pelanggaran_berat,
            'polda_pelanggaran_ringan' => $polda_pelanggaran_ringan,
            'polda_pelanggaran_sedang' => $polda_pelanggaran_sedang,
            'polda_teguran' => $polda_teguran,
            'polda_jumlah' => $polda_jumlah,
        ];
    }

    public function getTurjawaliNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'turjagwali/daily';
            $turjawalinasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'turjagwali/daily?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $turjawalinasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $poldaName = array();
        $polda_pengaturan = array();
        $polda_penjagaan = array();
        $polda_pengawalan = array();
        $polda_patroli = array();
        $polda_jumlah = array();
        foreach ($turjawalinasional['data']['rows'] as $key) {
            $poldaName[] = $key['name_polda'];
            $polda_pengaturan[] = $key['pengaturan'];
            $polda_penjagaan[] = $key['penjagaan'];
            $polda_pengawalan[] = $key['pengawalan'];
            $polda_patroli[] = $key['patroli'];
            $polda_jumlah[] = $key['total'];
        }

        return [
            'polda_name' => $poldaName,
            'polda_pengaturan' => $polda_pengaturan,
            'polda_penjagaan' => $polda_penjagaan,
            'polda_pengawalan' => $polda_pengawalan,
            'polda_patroli' => $polda_patroli,
            'polda_jumlah' => $polda_jumlah,
        ];
    }

    public function getRanmorNasional($filterbaru)
    {

        if ($filterbaru['filter'] == 0) {
            $url = 'ranmor/daily';
            $ranmornasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'ranmor/daily?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
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

        $poldaName = array();
        $polda_meninggal_dunia = array();
        $polda_luka_berat = array();
        $polda_luka_ringan = array();
        $polda_kerugian_material = array();
        $polda_jumlah = array();
        foreach ($dataNasional as $key) {
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
            'polda_name' => $poldaName,
            'data_nasional' => $dataNasional
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

        $poldaName = array();
        $polda_pelanggaran_berat = array();
        $polda_pelanggaran_ringan = array();
        $polda_pelanggaran_sedang = array();
        $polda_teguran = array();
        $polda_jumlah = array();
        foreach ($dataNasional as $key) {
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
            'polda_name' => $poldaName,
            'data_nasional' => $dataNasional
        ];
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

    public function get_Polda()
    {
        $data = guzzle_request('GET', 'polda', [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        return $data['data']['data'];
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
