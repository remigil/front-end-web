<?php
class M_detail_satker extends CI_Model
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

    public function getDitgakkumNasional($filterbaru)
    {
        if ($filterbaru['filter'] == 0) {
            $url = 'ditgakkum/daily';
            $ditgakkumnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'ditgakkum/daily?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $ditgakkumnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }



        $poldaName = array();
        $polda_garlantas = array();
        $polda_lakalantas = array();
        $polda_lakalanggar = array();
        $polda_turjagwali = array();
        $total_garlantas = 0;
        $total_lakalantas = 0;
        $total_lakalanggar = 0;
        $total_turjagwali = 0;
        $polda_jumlah = array();
        foreach ($ditgakkumnasional['data'] as $key) {
            $poldaName[] = $key['name_polda'];
            $polda_garlantas[] = $key['garlantas'];
            $polda_lakalantas[] = $key['lakalantas'];
            $polda_lakalanggar[] = $key['lakalanggar'];
            $polda_turjagwali[] = $key['turjagwali'];


            $total_garlantas += $key['garlantas'];
            $total_lakalantas += $key['lakalantas'];
            $total_lakalanggar += $key['lakalanggar'];
            $total_turjagwali += $key['turjagwali'];
            $polda_jumlah[] = $key['total'];
        }

        return [
            'polda_name' => $poldaName,
            'polda_garlantas' => $polda_garlantas,
            'polda_lakalantas' => $polda_lakalantas,
            'polda_lakalanggar' => $polda_lakalanggar,
            'polda_turjagwali' => $polda_turjagwali,
            'total_garlantas' => $total_garlantas,
            'total_lakalantas' => $total_lakalantas,
            'total_lakalanggar' => $total_lakalanggar,
            'total_turjagwali' => $total_turjagwali,
            'polda_jumlah' => $polda_jumlah,
        ];
    }

    public function getDitkamselNasional($filterbaru)
    {
        if ($filterbaru['filter'] == 0) {
            $url = 'ditkamsel/daily';
            $ditkamselnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        } elseif ($filterbaru['filter'] == 1) {
            $url = 'ditkamsel/daily?filter=true&start_date=' . $filterbaru['start_date'] . '&end_date=' . $filterbaru['end_date'];
            $ditkamselnasional = guzzle_request('GET', $url, [
                'headers' => [
                    'Authorization' => $this->session->userdata['token']
                ]
            ]);
        }

        $poldaName = array();
        $polda_dikmaslantas = array();
        $polda_penyebaran = array();

        $total_dikmaslantas = 0;
        $total_penyebaran = 0;

        $polda_jumlah = array();
        foreach ($ditkamselnasional['data'] as $key) {
            $poldaName[] = $key['name_polda'];
            $polda_dikmaslantas[] = $key['dikmaslantas'];
            $polda_penyebaran[] = $key['penyebaran'];


            $total_dikmaslantas += $key['dikmaslantas'];
            $total_penyebaran += $key['penyebaran'];

            $polda_jumlah[] = $key['total'];
        }

        return [
            'polda_name' => $poldaName,
            'polda_dikmaslantas' => $polda_dikmaslantas,
            'polda_penyebaran' => $polda_penyebaran,
            'total_dikmaslantas' => $total_dikmaslantas,
            'total_penyebaran' => $total_penyebaran,
            'polda_jumlah' => $polda_jumlah,
        ];
    }
}
