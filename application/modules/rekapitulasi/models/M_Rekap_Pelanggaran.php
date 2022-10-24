<?php
class M_Rekap_Pelanggaran extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper('guzzle_request_helper');
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
        $pelanggaran_teguran = $garlantasNasional['data']['jumlah']['teguran'];
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
            'pelanggaran_teguran' => $pelanggaran_teguran,
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

    public function pelanggaran_month()
    {

        $url = 'garlantas/count-month?nasional=true';

        $garlantasMonth = guzzle_request('GET', $url, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);

        // garlantas month 
        foreach ($garlantasMonth['data']['data'] as $field) {
            $row = array();
            $row['date'] = $field['date'];
            $row['sort'] = $this->getmonth($field['date']);
            $row['pelanggaran_berat'] = $field['pelanggaran_berat'];
            $row['pelanggaran_sedang'] = $field['pelanggaran_sedang'];
            $row['pelanggaran_ringan'] = $field['pelanggaran_ringan'];
            $row['teguran'] = $field['teguran'];
            $row['jumlah'] = $field['jumlah'];

            $dataMonth[] = $row;
        }
        array_multisort(array_column($dataMonth, "sort"), SORT_ASC, $dataMonth);

        $poldaMonth = array();
        $month_pelanggaran_berat = array();
        $month_pelanggaran_ringan = array();
        $month_pelanggaran_sedang = array();
        $month_teguran = array();
        $month_jumlah = array();
        foreach ($dataMonth as $key) {
            $poldaMonth[] = $key['date'];
            $month_pelanggaran_berat[] = $key['pelanggaran_berat'];
            $month_pelanggaran_ringan[] = $key['pelanggaran_ringan'];
            $month_pelanggaran_sedang[] = $key['pelanggaran_sedang'];
            $month_teguran[] = $key['teguran'];

            $month_jumlah[] = $key['jumlah'];
        }


        return [
            'month_pelanggaran_berat' => $month_pelanggaran_berat,
            'month_pelanggaran_ringan' => $month_pelanggaran_berat,
            'month_pelanggaran_sedang' => $month_pelanggaran_sedang,
            'month_teguran' => $month_teguran,
            'month_jumlah' => $month_jumlah,
            'polda_month' => $poldaMonth
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
