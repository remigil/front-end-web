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
            $validasi_petugas = $lakalanggarNasional['data']['jumlah']['mobile'] + $lakalanggarNasional['data']['jumlah']['statis'];
            $konfirmasi_masyarakat = $lakalanggarNasional['data']['jumlah']['online'] + $lakalanggarNasional['data']['jumlah']['posko'];
            $odol = $lakalanggarNasional['data']['jumlah']['preemtif'] + $lakalanggarNasional['data']['jumlah']['preventif'] + $lakalanggarNasional['data']['jumlah']['odol_227'] + $lakalanggarNasional['data']['jumlah']['odol_307'];
            $jumlah = $lakalanggarNasional['data']['jumlah']['jumlah'];

            $dataNasional = $lakalanggarNasional['data']['data'];
            array_multisort(array_column($dataNasional, "jumlah"), SORT_DESC, $dataNasional);
            $topPolda = array_slice($dataNasional, 0, 10);

            $poldaName = array();
            $polda_capture_camera = array();
            $polda_statis = array();
            $polda_mobile = array();
            $polda_validasi_petugas = array();
            $polda_posko = array();
            $polda_online = array();
            $polda_konfirmasi_masyarakat = array();
            $polda_preemtif = array();
            $polda_preventif = array();
            $polda_227 = array();
            $polda_307 = array();
            $polda_odol = array();
            $polda_jumlah = array();
            foreach ($dataNasional as $key) {
                $poldaName[] = $key['name_polda'];
                $polda_capture_camera[] = $key['capture_camera'];

                $polda_statis[] = $key['statis'];
                $polda_mobile[] = $key['mobile'];
                $polda_validasi_petugas[] = $key['statis'] + $key['mobile'];

                $polda_posko[] = $key['posko'];
                $polda_online[] = $key['online'];
                $polda_konfirmasi_masyarakat[] = $key['posko'] + $key['online'];

                $polda_preemtif[] = $key['preemtif'];
                $polda_preventif[] = $key['preventif'];
                $polda_227[] = $key['odol_227'];
                $polda_307[] = $key['odol_307'];
                $polda_odol[] = $key['preemtif'] + $key['preventif'] + $key['odol_227'] + $key['odol_307'];


                $polda_jumlah[] = $key['jumlah'];
            }

            // lakalanggar month 
            foreach ($lakalanggarMonth['data']['data'] as $field) {
                $row = array();
                $row['date'] = $field['date'];
                $row['sort'] = $this->getmonth($field['date']);
                $row['capture_camera'] = $field['capture_camera'];

                $row['statis'] = $field['statis'];
                $row['mobile'] = $field['mobile'];
                $row['validasi_petugas'] = $field['statis'] + $field['mobile'];

                $row['posko'] = $field['posko'];
                $row['online'] = $field['online'];
                $row['konfirmasi_masyarakat'] = $field['posko'] + $field['online'];

                $row['preemtif'] = $field['preemtif'];
                $row['preventif'] = $field['preventif'];
                $row['odol_227'] = $field['odol_227'];
                $row['odol_307'] = $field['odol_307'];
                $row['odol'] = $field['preemtif'] + $field['preventif'] + $field['odol_227'] + $field['odol_307'];

                $row['jumlah'] = $field['jumlah'];

                $dataMonth[] = $row;
            }
            array_multisort(array_column($dataMonth, "sort"), SORT_ASC, $dataMonth);

            $poldaMonth = array();
            $month_capture_camera = array();
            $month_statis = array();
            $month_mobile = array();
            $month_validasi_petugas = array();
            $month_posko = array();
            $month_online = array();
            $month_konfirmasi_masyarakat = array();
            $month_preemtif = array();
            $month_preventif = array();
            $month_227 = array();
            $month_307 = array();
            $month_odol = array();
            $month_jumlah = array();

            foreach ($dataMonth as $key) {
                $poldaMonth[] = $key['date'];
                $month_capture_camera[] = $key['capture_camera'];

                $month_statis[] = $key['statis'];
                $month_mobile[] = $key['mobile'];
                $month_validasi_petugas[] = $key['statis'] + $key['mobile'];

                $month_posko[] = $key['posko'];
                $month_online[] = $key['online'];
                $month_konfirmasi_masyarakat[] = $key['posko'] + $key['online'];

                $month_preemtif[] = $key['preemtif'];
                $month_preventif[] = $key['preventif'];
                $month_227[] = $key['odol_227'];
                $month_307[] = $key['odol_307'];
                $month_odol[] = $key['preemtif'] + $key['preventif'] + $key['odol_227'] + $key['odol_307'];


                $month_jumlah[] = $key['jumlah'];
            }
            $page_content["data"] = ['capture_camera' => $capture_camera, 'validasi_petugas' => $validasi_petugas, 'konfirmasi_masyarakat' => $konfirmasi_masyarakat, 'odol' => $odol, 'jumlah' => $jumlah, 'menu' => 'Ditgakkum', 'submenu' => 'Data Dakgar Lantas', 'headline' => 'Data dakgar lalu lintas', 'topPolda' => $topPolda, 'polda' => $dataNasional, 'poldaMonth' => $dataMonth, 'poldaName' => $poldaName, 'polda_capture_camera' => $polda_capture_camera, 'polda_validasi_petugas' => $polda_validasi_petugas, 'polda_konfirmasi_masyarakat' => $polda_konfirmasi_masyarakat, 'polda_odol' => $polda_odol, 'polda_jumlah' => $polda_jumlah, 'polda_statis' => $polda_statis, 'polda_mobile' => $polda_mobile, 'polda_online' => $polda_online, 'polda_posko' => $polda_posko, 'polda_preemtif' => $polda_preemtif, 'polda_preventif' => $polda_preventif, 'polda_227' => $polda_227, 'polda_307' => $polda_307, 'month' => $poldaMonth, 'month_capture_camera' => $month_capture_camera, 'month_validasi_petugas' => $month_validasi_petugas, 'month_konfirmasi_masyarakat' => $month_konfirmasi_masyarakat, 'month_odol' => $month_odol, 'month_jumlah' => $month_jumlah, 'month_statis' => $month_statis, 'month_mobile' => $month_mobile, 'month_online' => $month_online, 'month_posko' => $month_posko, 'month_preemtif' => $month_preemtif, 'month_preventif' => $month_preventif, 'month_227' => $month_227, 'month_307' => $month_307];

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
