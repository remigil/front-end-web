<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DakgarLantas extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('ditgakkum/M_Lakalanggar');
    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditgakkum";
        $page_content["data"] = ['menu' => 'Ditgakkum', 'submenu' => 'Data Dakgar Lantas', 'headline' => 'data dakgar lalu lintas'];

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $lakalanggarNasional = $this->M_Lakalanggar->getNasional();
            $lakalanggarMonth = $this->M_Lakalanggar->getMonth();


            // lakalanggar nasional
            $capture_camera = $lakalanggarNasional['data']['jumlah']['capture_camera'];
            $validasi_petugas = $lakalanggarNasional['data']['jumlah']['validasi_petugas'];
            $konfirmasi_masyarakat = $lakalanggarNasional['data']['jumlah']['konfirmasi_masyarakat'];
            $odol = $lakalanggarNasional['data']['jumlah']['odol'];
            $jumlah = $lakalanggarNasional['data']['jumlah']['jumlah'];

            $dataNasional = $lakalanggarNasional['data']['data'];
            array_multisort(array_column($dataNasional, "jumlah"), SORT_DESC, $dataNasional);
            $topPolda = array_slice($dataNasional, 0, 10);

            $poldaName = array();
            $polda_capture_camera = array();
            $polda_validasi_petugas = array();
            $polda_konfirmasi_masyarakat = array();
            $polda_odol = array();
            $polda_jumlah = array();
            foreach ($dataNasional as $key) {
                $poldaName[] = $key['name_polda'];
                $polda_capture_camera[] = $key['capture_camera'];
                $polda_validasi_petugas[] = $key['validasi_petugas'];
                $polda_konfirmasi_masyarakat[] = $key['konfirmasi_masyarakat'];
                $polda_odol[] = $key['odol'];
                $polda_jumlah[] = $key['jumlah'];
            }

            // lakalanggar month 
            foreach ($lakalanggarMonth['data']['data'] as $field) {
                $row = array();
                $row['date'] = $field['date'];
                $row['sort'] = $this->getmonth($field['date']);
                $row['capture_camera'] = $field['capture_camera'];
                $row['konfirmasi_masyarakat'] = $field['konfirmasi_masyarakat'];
                $row['validasi_petugas'] = $field['validasi_petugas'];
                $row['odol'] = $field['odol'];
                $row['jumlah'] = $field['jumlah'];

                $dataMonth[] = $row;
            }
            array_multisort(array_column($dataMonth, "sort"), SORT_ASC, $dataMonth);

            $poldaMonth = array();
            $month_capture_camera = array();
            $month_validasi_petugas = array();
            $month_konfirmasi_masyarakat = array();
            $month_odol = array();
            $month_jumlah = array();
            foreach ($dataMonth as $key) {
                $poldaMonth[] = $key['date'];
                $month_capture_camera[] = $key['capture_camera'];
                $month_validasi_petugas[] = $key['validasi_petugas'];
                $month_konfirmasi_masyarakat[] = $key['konfirmasi_masyarakat'];
                $month_odol[] = $key['odol'];
                $month_jumlah[] = $key['jumlah'];
            }
            $page_content["data"] = ['capture_camera' => $capture_camera, 'validasi_petugas' => $validasi_petugas, 'konfirmasi_masyarakat' => $konfirmasi_masyarakat, 'odol' => $odol, 'jumlah' => $jumlah, 'menu' => 'Ditgakkum', 'submenu' => 'Data Dakgar Lantas', 'headline' => 'Data dakgar lalu lintas', 'topPolda' => $topPolda, 'polda' => $dataNasional, 'poldaMonth' => $dataMonth, 'poldaName' => $poldaName, 'polda_capture_camera' => $polda_capture_camera, 'polda_validasi_petugas' => $polda_validasi_petugas, 'polda_konfirmasi_masyarakat' => $polda_konfirmasi_masyarakat, 'polda_odol' => $polda_odol, 'polda_jumlah' => $polda_jumlah, 'month' => $poldaMonth, 'month_capture_camera' => $month_capture_camera, 'month_validasi_petugas' => $month_validasi_petugas, 'month_konfirmasi_masyarakat' => $month_konfirmasi_masyarakat, 'month_odol' => $month_odol, 'month_jumlah' => $month_jumlah];

            $page_content["page"] = "ditgakkum/korlantas/ditgakkum_dakgar_lantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditgakkum/polda/ditgakkum_dakgar_lantas";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditgakkum/polres/ditgakkum_dakgar_lantas";
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
