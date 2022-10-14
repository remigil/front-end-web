<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Penyebaran extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('ditkamsel/M_Penyebaran');
    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditkamsel";
        $page_content["data"] = ['menu' => 'Ditkamsel', 'submenu' => 'Penyebaran dan Pemasangan', 'headline' => 'Penyebaran dan Pemasangan'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $penyebaranNasional = $this->M_Penyebaran->getNasional();
            $penyebaranMonth = $this->M_Penyebaran->getMonth();


            // Penyebaran nasional
            $leaflet = $penyebaranNasional['data']['jumlah']['leaflet'];
            $spanduk = $penyebaranNasional['data']['jumlah']['spanduk'];
            $stiker = $penyebaranNasional['data']['jumlah']['stiker'];
            $billboard = $penyebaranNasional['data']['jumlah']['billboard'];

            $dataNasional = $penyebaranNasional['data']['data'];
            array_multisort(array_column($dataNasional, "jumlah"), SORT_DESC, $dataNasional);
            $topPolda = array_slice($dataNasional, 0, 10);

            $poldaName = array();
            $polda_leaflet = array();
            $polda_spanduk = array();
            $polda_stiker = array();
            $polda_billboard = array();
            $polda_jemensosprek = array();
            foreach ($dataNasional as $key) {
                $poldaName[] = $key['name_polda'];
                $polda_leaflet[] = $key['leaflet'];
                $polda_spanduk[] = $key['spanduk'];
                $polda_stiker[] = $key['stiker'];
                $polda_billboard[] = $key['billboard'];
                $polda_jemensosprek[] = $key['jemensosprek'];
            }

            // Penyebaran Month
            foreach ($penyebaranMonth['data']['data'] as $field) {
                $row = array();
                $row['date'] = $field['date'];
                $row['sort'] = $this->getmonth($field['date']);
                $row['leaflet'] = $field['leaflet'];
                $row['stiker'] = $field['stiker'];
                $row['spanduk'] = $field['spanduk'];
                $row['billboard'] = $field['billboard'];
                $row['jemensosprek'] = $field['jemensosprek'];
                $row['jumlah'] = $field['jumlah'];

                $dataMonth[] = $row;
            }
            array_multisort(array_column($dataMonth, "sort"), SORT_ASC, $dataMonth);

            $poldaMonth = array();
            $month_leaflet = array();
            $month_spanduk = array();
            $month_stiker = array();
            $month_billboard = array();
            $month_jemensosprek = array();
            foreach ($dataMonth as $key) {
                $poldaMonth[] = $key['date'];
                $month_leaflet[] = $key['leaflet'];
                $month_spanduk[] = $key['spanduk'];
                $month_stiker[] = $key['stiker'];
                $month_billboard[] = $key['billboard'];
                $month_jemensosprek[] = $key['jemensosprek'];
            }

            $page_content["data"] = ['leaflet' => $leaflet, 'spanduk' => $spanduk, 'stiker' => $stiker, 'billboard' => $billboard, 'menu' => 'Ditkamsel', 'submenu' => 'Penyebaran dan pemasangan', 'headline' => 'Penyebaran dan Pemasangan', 'topPolda' => $topPolda, 'polda' => $dataNasional, 'poldaMonth' => $dataMonth, 'poldaName' => $poldaName, 'polda_leaflet' => $polda_leaflet, 'polda_spanduk' => $polda_spanduk, 'polda_stiker' => $polda_stiker, 'polda_billboard' => $polda_billboard, 'polda_jemensosprek' => $polda_jemensosprek, 'month' => $poldaMonth, 'month_leaflet' => $month_leaflet, 'month_spanduk' => $month_spanduk, 'month_stiker' => $month_stiker, 'month_billboard' => $month_billboard, 'month_jemensosprek' => $month_jemensosprek];

            $page_content["page"] = "ditkamsel/korlantas/ditkamsel_penyebaran";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditkamsel/polda/ditkamsel_penyebaran";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditkamsel/polres/ditkamsel_penyebaran";
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
