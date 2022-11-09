<?php
class M_detail_polda extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper('guzzle_request_helper');
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
    public function get_Poldaid($id)
    {
        $data = guzzle_request('GET', 'polda/getId/' . $id, [

            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]

        ]);
        return $data['data']['data'];
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


    public function getDitgakkum($filter)
    {
        // var_dump($filter);
        $url = 'ditgakkum/date?type=month&polda_id=' . $filter['id'] . '&filter=' . $filter['filter'] . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

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
            $poldaMonth[] = $key['date'];
            $month_garlantas[] = $key['garlantas'];
            $month_lakalanggar[] = $key['lakalanggar'];
            $month_lakalantas[] = $key['lakalantas'];
            $month_turjagwali[] = $key['turjagwali'];
        }

        return [
            'polda_month' => $poldaMonth,
            'garlantas' => $month_garlantas,
            'lakalanggar' => $month_lakalanggar,
            'lakalantas' => $month_lakalantas,
            'turjagwali' => $month_turjagwali
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
