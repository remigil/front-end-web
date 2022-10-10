<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DikmasLantas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('ditkamsel/M_Dikmaslantas');
    }

    public function index()
    {

        // $headers = [
        //     'Token' => $this->session->userdata['token'],    
        // ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Ditkamsel";
        $page_content["data"] = ['menu' => 'Ditkamsel', 'submenu' => 'Dikmas Lantas', 'headline' => 'Dikmas lalu lintas'];
       

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $dikmaslantasNasional = $this->M_Dikmaslantas->getNasional();
            $dikmaslantasMonth = $this->M_Dikmaslantas->getMonth();


            // Dikmaslantas nasional
            $media_cetak = $dikmaslantasNasional['data']['jumlah']['media_cetak'];
            $media_elektronik = $dikmaslantasNasional['data']['jumlah']['media_elektronik'];
            $media_sosial = $dikmaslantasNasional['data']['jumlah']['media_sosial'];
            $laka_langgar = $dikmaslantasNasional['data']['jumlah']['laka_langgar'];

            $dataNasional = $dikmaslantasNasional['data']['data'];
            array_multisort(array_column($dataNasional, "jumlah"), SORT_DESC, $dataNasional);
            $topPolda = array_slice($dataNasional, 0, 10);

            $poldaName = array();
            $polda_media_cetak = array();
            $polda_media_elektronik = array();
            $polda_media_sosial = array();
            $polda_laka_langgar = array();
            foreach ($dataNasional as $key) {
                $poldaName[] = $key['name_polda'];
                $polda_media_cetak[] = $key['media_cetak'];
                $polda_media_elektronik[] = $key['media_elektronik'];
                $polda_media_sosial[] = $key['media_sosial'];
                $polda_laka_langgar[] = $key['laka_langgar'];
            }

            // Dikmaslantas month 
            foreach ($dikmaslantasMonth['data']['data'] as $field) {
                $row = array();
                $row['date'] = $field['date'];
                $row['sort'] = $this->getmonth($field['date']);
                $row['media_cetak'] = $field['media_cetak'];
                $row['media_sosial'] = $field['media_sosial'];
                $row['media_elektronik'] = $field['media_elektronik'];
                $row['laka_langgar'] = $field['laka_langgar'];
                $row['jumlah'] = $field['jumlah'];

                $dataMonth[] = $row;
            }
            array_multisort(array_column($dataMonth, "sort"), SORT_ASC, $dataMonth);

            $poldaMonth = array();
            $month_media_cetak = array();
            $month_media_elektronik = array();
            $month_media_sosial = array();
            $month_laka_langgar = array();
            foreach ($dataMonth as $key) {
                $poldaMonth[] = $key['date'];
                $month_media_cetak[] = $key['media_cetak'];
                $month_media_elektronik[] = $key['media_elektronik'];
                $month_media_sosial[] = $key['media_sosial'];
                $month_laka_langgar[] = $key['laka_langgar'];
            }

            $page_content["data"] = ['media_cetak' => $media_cetak, 'media_elektronik' => $media_elektronik, 'media_sosial' => $media_sosial, 'laka_langgar' => $laka_langgar, 'menu' => 'Ditkamsel', 'submenu' => 'Dikmaslantas', 'headline' => 'Dikmas lalu lintas', 'topPolda' => $topPolda, 'polda' => $dataNasional, 'poldaMonth' => $dataMonth, 'poldaName' => $poldaName, 'polda_media_cetak' => $polda_media_cetak, 'polda_media_elektronik' => $polda_media_elektronik, 'polda_media_sosial' => $polda_media_sosial, 'polda_laka_langgar' => $polda_laka_langgar, 'month' => $poldaMonth, 'month_media_cetak' => $month_media_cetak, 'month_media_elektronik' => $month_media_elektronik, 'month_media_sosial' => $month_media_sosial, 'month_laka_langgar' => $month_laka_langgar];

            $page_content["page"] = "ditkamsel/korlantas/ditkamsel_dikmaslantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "ditkamsel/polda/ditkamsel_dikmaslantas";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "ditkamsel/polres/ditkamsel_dikmaslantas";
        }

        $this->templates->loadTemplate($page_content);
    }

    // public function tableByPolda()
    // {
    //     $postData = $this->input->post();
    //     $data = $this->M_Dikmaslantas->getTableByPolda($postData);
    //     echo json_encode($data);
    // }


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
