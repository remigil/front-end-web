<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Turjawali extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('ditgakkum/M_Turjagwali');

    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Data Turjagwali', 'headline' => 'data turjagwali'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $turjagwaliNasional = $this->M_Turjagwali->getNasional();
            $turjagwaliMonth = $this->M_Turjagwali->getMonth();


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

            // turjagwali month 
            foreach ($turjagwaliMonth['data']['data'] as $field) {
                $row = array();
                $row['date'] = $field['date'];
                $row['sort'] = $this->getmonth($field['date']);
                $row['pengawalan'] = $field['pengawalan'];
                $row['pengaturan'] = $field['pengaturan'];
                $row['penjagaan'] = $field['penjagaan'];
                $row['patroli'] = $field['patroli'];
                $row['jumlah'] = $field['jumlah'];

                $dataMonth[] = $row;
            }
            array_multisort(array_column($dataMonth, "sort"), SORT_ASC, $dataMonth);

            $poldaMonth = array();
            $month_pengawalan = array();
            $month_penjagaan = array();
            $month_pengaturan = array();
            $month_patroli = array();
            $month_jumlah = array();
            foreach ($dataMonth as $key) {
                $poldaMonth[] = $key['date'];
                $month_pengawalan[] = $key['pengawalan'];
                $month_penjagaan[] = $key['penjagaan'];
                $month_pengaturan[] = $key['pengaturan'];
                $month_patroli[] = $key['patroli'];
                $month_jumlah[] = $key['jumlah'];
            }
            $page_content["data"] = ['pengawalan' => $pengawalan, 'penjagaan' => $penjagaan, 'pengaturan' => $pengaturan, 'patroli' => $patroli, 'jumlah' => $jumlah, 'menu' => 'Ditgakkum', 'submenu' => 'Data turjagwali', 'headline' => 'Data turjagwali', 'topPolda' => $topPolda, 'polda' => $dataNasional, 'poldaMonth' => $dataMonth, 'poldaName' => $poldaName, 'polda_pengawalan' => $polda_pengawalan, 'polda_penjagaan' => $polda_penjagaan, 'polda_pengaturan' => $polda_pengaturan, 'polda_patroli' => $polda_patroli, 'polda_jumlah' => $polda_jumlah, 'month' => $poldaMonth, 'month_pengawalan' => $month_pengawalan, 'month_penjagaan' => $month_penjagaan, 'month_pengaturan' => $month_pengaturan, 'month_patroli' => $month_patroli, 'month_jumlah' => $month_jumlah];

            $page_content["page"] = "ditgakkum/korlantas/ditgakkum_turjagwali";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditgakkum/polda/ditgakkum_turjagwali";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditgakkum/polres/ditgakkum_turjagwali";
        }


        $this->templates->loadTemplate($page_content);
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
