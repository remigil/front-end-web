<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ranmor extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('ditregident/M_Ranmor');
    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditregident";
        $page_content["data"] = ['menu' => 'Ditregident', 'submenu' => 'RANMOR', 'headline' => 'RANMOR'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $ranmorNasional = $this->M_Ranmor->getNasional();
            $ranmorMonth = $this->M_Ranmor->getMonth();


            // ranmor nasional
            $mobil_penumpang = $ranmorNasional['data']['jumlah']['mobil_penumpang'];
            $mobil_bus = $ranmorNasional['data']['jumlah']['mobil_bus'];
            $mobil_barang = $ranmorNasional['data']['jumlah']['mobil_barang'];
            $ransus = $ranmorNasional['data']['jumlah']['ransus'];
            $sepeda_motor = $ranmorNasional['data']['jumlah']['sepeda_motor'];


            $dataNasional = $ranmorNasional['data']['data'];
            array_multisort(array_column($dataNasional, "jumlah"), SORT_DESC, $dataNasional);
            $topPolda = array_slice($dataNasional, 0, 10);

            $poldaName = array();
            $polda_mobil_penumpang = array();
            $polda_mobil_bus = array();
            $polda_mobil_barang = array();
            $polda_ransus = array();
            $polda_sepeda_motor = array();
            foreach ($dataNasional as $key) {
                $poldaName[] = $key['name_polda'];
                $polda_mobil_penumpang[] = $key['mobil_penumpang'];
                $polda_mobil_bus[] = $key['mobil_bus'];
                $polda_mobil_barang[] = $key['mobil_barang'];
                $polda_ransus[] = $key['ransus'];
                $polda_sepeda_motor[] = $key['sepeda_motor'];
            }

            // ranmor month 
            foreach ($ranmorMonth['data']['data'] as $field) {
                $row = array();
                $row['date'] = $field['date'];
                $row['sort'] = $this->getmonth($field['date']);
                $row['mobil_penumpang'] = $field['mobil_penumpang'];
                $row['mobil_barang'] = $field['mobil_barang'];
                $row['mobil_bus'] = $field['mobil_bus'];
                $row['ransus'] = $field['ransus'];
                $row['sepeda_motor'] = $field['sepeda_motor'];
                $row['jumlah'] = $field['jumlah'];

                $dataMonth[] = $row;
            }
            array_multisort(array_column($dataMonth, "sort"), SORT_ASC, $dataMonth);

            $poldaMonth = array();
            $month_mobil_penumpang = array();
            $month_mobil_bus = array();
            $month_mobil_barang = array();
            $month_ransus = array();
            $month_sepeda_motor = array();
            foreach ($dataMonth as $key) {
                $poldaMonth[] = $key['date'];
                $month_mobil_penumpang[] = $key['mobil_penumpang'];
                $month_mobil_bus[] = $key['mobil_bus'];
                $month_mobil_barang[] = $key['mobil_barang'];
                $month_ransus[] = $key['ransus'];
                $month_sepeda_motor[] = $key['sepeda_motor'];
            }

            $page_content["data"] = ['mobil_penumpang' => $mobil_penumpang, 'mobil_bus' => $mobil_bus, 'mobil_barang' => $mobil_barang, 'ransus' => $ransus, 'sepeda_motor' => $sepeda_motor, 'menu' => 'Ditregident', 'submenu' => 'RANMOR', 'headline' => 'RANMOR', 'topPolda' => $topPolda, 'polda' => $dataNasional, 'poldaMonth' => $dataMonth, 'poldaName' => $poldaName, 'polda_mobil_penumpang' => $polda_mobil_penumpang, 'polda_mobil_bus' => $polda_mobil_bus, 'polda_mobil_barang' => $polda_mobil_barang, 'polda_ransus' => $polda_ransus, 'polda_sepeda_motor' => $polda_sepeda_motor, 'month' => $poldaMonth, 'month_mobil_penumpang' => $month_mobil_penumpang, 'month_mobil_bus' => $month_mobil_bus, 'month_mobil_barang' => $month_mobil_barang, 'month_ransus' => $month_ransus, 'month_sepeda_motor' => $month_sepeda_motor];

            $page_content["page"] = "ditregident/korlantas/ditregident_ranmor";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditregident/polda/ditregident_ranmor";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditregident/polres/ditregident_ranmor";
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
