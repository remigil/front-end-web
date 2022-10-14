<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GarlantasKonvensional extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('ditgakkum/M_Garlantas');
    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Pelanggaran Lalu Lintas Konvensional', 'headline' => 'pelanggaran lalu lintas konvensional'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $garlantasNasional = $this->M_Garlantas->getNasional();
            $garlantasMonth = $this->M_Garlantas->getMonth();


            // garlantas nasional
            $pelanggaran_berat = $garlantasNasional['data']['jumlah']['pelanggaran_berat'];
            $pelanggaran_ringan = $garlantasNasional['data']['jumlah']['pelanggaran_ringan'];
            $pelanggaran_sedang = $garlantasNasional['data']['jumlah']['pelanggaran_sedang'];
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

            $page_content["data"] = ['pelanggaran_berat' => $pelanggaran_berat, 'pelanggaran_ringan' => $pelanggaran_ringan, 'pelanggaran_sedang' => $pelanggaran_sedang, 'jumlah' => $jumlah, 'menu' => 'Ditgakkum', 'submenu' => 'Pelanggaran Lalu Lintas Konvensional', 'headline' => 'Pelanggaran Lalu Lintas Konvensional', 'topPolda' => $topPolda, 'polda' => $dataNasional, 'poldaMonth' => $dataMonth, 'poldaName' => $poldaName, 'polda_pelanggaran_berat' => $polda_pelanggaran_berat, 'polda_pelanggaran_ringan' => $polda_pelanggaran_ringan, 'polda_pelanggaran_sedang' => $polda_pelanggaran_sedang, 'polda_jumlah' => $polda_jumlah, 'month' => $poldaMonth, 'month_pelanggaran_berat' => $month_pelanggaran_berat, 'month_pelanggaran_ringan' => $month_pelanggaran_ringan, 'month_pelanggaran_sedang' => $month_pelanggaran_sedang, 'month_jumlah' => $month_jumlah];
            $page_content["page"] = "ditgakkum/korlantas/ditgakkum_garlantas_konvensional";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditgakkum/polda/ditgakkum_garlantas_konvensional";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditgakkum/polres/ditgakkum_garlantas_konvensional";
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
