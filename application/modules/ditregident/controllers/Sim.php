<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sim extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('ditregident/M_Sim');
    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditregident";
        $page_content["data"] = ['menu' => 'Ditregident', 'submenu' => 'SIM', 'headline' => 'SIM'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $simNasional = $this->M_Sim->getNasional();
            $simMonth = $this->M_Sim->getMonth();


            // sim nasional
            $baru = $simNasional['data']['jumlah']['baru'];
            $perpanjangan = $simNasional['data']['jumlah']['perpanjangan'];
            $jumlah = $simNasional['data']['jumlah']['jumlah'];

            $dataNasional = $simNasional['data']['data'];
            array_multisort(array_column($dataNasional, "jumlah"), SORT_DESC, $dataNasional);
            $topPolda = array_slice($dataNasional, 0, 10);

            $poldaName = array();
            $polda_baru = array();
            $polda_perpanjangan = array();
            $polda_jumlah = array();
            foreach ($dataNasional as $key) {
                $poldaName[] = $key['name_polda'];
                $polda_baru[] = $key['baru'];
                $polda_perpanjangan[] = $key['perpanjangan'];
                $polda_jumlah[] = $key['jumlah'];
            }

            // sim month 
            foreach ($simMonth['data']['data'] as $field) {
                $row = array();
                $row['date'] = $field['date'];
                $row['sort'] = $this->getmonth($field['date']);
                $row['baru'] = $field['baru'];
                $row['jumlah'] = $field['jumlah'];
                $row['perpanjangan'] = $field['perpanjangan'];
                $row['jumlah'] = $field['jumlah'];

                $dataMonth[] = $row;
            }
            array_multisort(array_column($dataMonth, "sort"), SORT_ASC, $dataMonth);

            $poldaMonth = array();
            $month_baru = array();
            $month_perpanjangan = array();
            $month_jumlah = array();
            foreach ($dataMonth as $key) {
                $poldaMonth[] = $key['date'];
                $month_baru[] = $key['baru'];
                $month_perpanjangan[] = $key['perpanjangan'];
                $month_jumlah[] = $key['jumlah'];
            }

            $page_content["data"] = ['baru' => $baru, 'perpanjangan' => $perpanjangan, 'jumlah' => $jumlah, 'menu' => 'Ditregident', 'submenu' => 'SIM', 'headline' => 'SIM', 'topPolda' => $topPolda, 'polda' => $dataNasional, 'poldaMonth' => $dataMonth, 'poldaName' => $poldaName, 'polda_baru' => $polda_baru, 'polda_perpanjangan' => $polda_perpanjangan, 'polda_jumlah' => $polda_jumlah, 'month' => $poldaMonth, 'month_baru' => $month_baru, 'month_perpanjangan' => $month_perpanjangan, 'month_jumlah' => $month_jumlah];
            $page_content["page"] = "ditregident/korlantas/ditregident_sim";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditregident/polda/ditregident_sim";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditregident/polres/ditregident_sim";
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
