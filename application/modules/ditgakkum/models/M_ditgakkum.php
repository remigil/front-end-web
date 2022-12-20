<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_ditgakkum extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }

    public function getChartDitgakkum($filter)
    {
        $url = 'ditgakkum/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

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
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $month_garlantas[] = $key['garlantas'];
            $month_lakalanggar[] = $key['lakalanggar'];
            $month_lakalantas[] = $key['lakalantas'];
            $month_turjagwali[] = $key['turjagwali'];
            $month_walpjr[] = 0;
        }
        return [
            'polda_month' => $poldaMonth,
            'garlantas' => $month_garlantas,
            'lakalanggar' => $month_lakalanggar,
            'lakalantas' => $month_lakalantas,
            'walpjr' => $month_walpjr,
            'turjagwali' => $month_turjagwali
        ];
    }


    public function getChartLaka($filter)
    {
        $url = 'laka_lantas/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $laka = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);

        $poldaMonth = [];
        $insiden_kejadian = [];
        $meninggal_dunia = [];
        $luka_berat = [];
        $luka_ringan = [];
        $persentaseinsinden = [];
        $persentasemd = [];
        $persentaselb = [];
        $persentaselr = [];
        $ik = $laka['data'];
        for ($i = 0; $i < count($ik); $i++) {
            if ($i == 0) {
                if ($ik[0]['insiden_kecelakaan'] == 0) {
                    $persentaseinsinden[] = 0;
                } else {
                    $persentaseinsinden[] = $ik[0]['insiden_kecelakaan'] / 100;
                }
                if ($ik[0]['meninggal_dunia'] == 0) {
                    $persentasemd[] = 0;
                } else {
                    $persentasemd[] = $ik[0]['meninggal_dunia'] / 100;
                }
                if ($ik[0]['luka_berat'] == 0) {
                    $persentaselb[] = 0;
                } else {
                    $persentaselb[] = $ik[0]['luka_berat'] / 100;
                }
                if ($ik[0]['luka_ringan'] == 0) {
                    $persentaselr[] = 0;
                } else {
                    $persentaselr[] = $ik[0]['luka_ringan'] / 100;
                }
            } elseif ($i != 0) {
                if ($ik[$i]['insiden_kecelakaan'] == 0 && $ik[$i - 1]['insiden_kecelakaan'] == 0) {
                    $persentaseinsinden[] = 0;
                } elseif ($ik[$i]['insiden_kecelakaan'] != 0 && $ik[$i - 1]['insiden_kecelakaan'] == 0) {
                    $persentaseinsinden[] = (float)substr($ik[$i]['insiden_kecelakaan'], 0, 5);
                } elseif ($ik[$i]['insiden_kecelakaan'] == 0 && $ik[$i - 1]['insiden_kecelakaan'] != 0) {
                    $persentaseinsinden[] = -100;
                    // $persentaseinsinden[] = (float)substr($ik[$i]['insiden_kecelakaan'] - $ik[$i - 1]['insiden_kecelakaan'], 0, 5);
                } elseif ($ik[$i]['insiden_kecelakaan'] != 0 && $ik[$i - 1]['insiden_kecelakaan'] != 0) {
                    $persentaseinsinden[] = (float)substr((($ik[$i]['insiden_kecelakaan'] - $ik[$i - 1]['insiden_kecelakaan'])  / $ik[$i - 1]['insiden_kecelakaan']) * 100, 0, 5);
                }
                if ($ik[$i]['meninggal_dunia'] == 0 && $ik[$i - 1]['meninggal_dunia'] == 0) {
                    $persentasemd[] = 0;
                } elseif ($ik[$i]['meninggal_dunia'] != 0 && $ik[$i - 1]['meninggal_dunia'] == 0) {
                    $persentasemd[] = (float)substr($ik[$i]['meninggal_dunia'], 0, 5);
                } elseif ($ik[$i]['meninggal_dunia'] == 0 && $ik[$i - 1]['meninggal_dunia'] != 0) {
                    $persentasemd[] = -100;
                    // $persentasemd[] = (float)substr($ik[$i]['meninggal_dunia'] - $ik[$i - 1]['meninggal_dunia'], 0, 5);
                } elseif ($ik[$i]['meninggal_dunia'] != 0 && $ik[$i - 1]['meninggal_dunia'] != 0) {
                    $persentasemd[] = (float)substr((($ik[$i]['meninggal_dunia'] - $ik[$i - 1]['meninggal_dunia'])  / $ik[$i - 1]['meninggal_dunia']) * 100, 0, 5);
                }
                if ($ik[$i]['luka_berat'] == 0 && $ik[$i - 1]['luka_berat'] == 0) {
                    $persentaselb[] = 0;
                } elseif ($ik[$i]['luka_berat'] != 0 && $ik[$i - 1]['luka_berat'] == 0) {
                    $persentaselb[] = (float)substr($ik[$i]['luka_berat'],  0, 5);
                } elseif ($ik[$i]['luka_berat'] == 0 && $ik[$i - 1]['luka_berat'] != 0) {
                    $persentaselb[] = -100;
                    // $persentaselb[] = (float)substr($ik[$i]['luka_berat'] - $ik[$i - 1]['luka_berat'], 0, 5);
                } elseif ($ik[$i]['luka_berat'] != 0 && $ik[$i - 1]['luka_berat'] != 0) {
                    $persentaselb[] = (float)substr((($ik[$i]['luka_berat'] - $ik[$i - 1]['luka_berat'])  / $ik[$i - 1]['luka_berat']) * 100, 0, 5);
                }
                if ($ik[$i]['luka_ringan'] == 0 && $ik[$i - 1]['luka_ringan'] == 0) {
                    $persentaselr[] = 0;
                } elseif ($ik[$i]['luka_ringan'] != 0 && $ik[$i - 1]['luka_ringan'] == 0) {
                    $persentaselr[] = (float)substr($ik[$i]['luka_ringan'], 0, 5);
                } elseif ($ik[$i]['luka_ringan'] == 0 && $ik[$i - 1]['luka_ringan'] != 0) {
                    $persentaselr[] = -100;
                } elseif ($ik[$i]['luka_ringan'] != 0 && $ik[$i - 1]['luka_ringan'] != 0) {
                    $persentaselr[] = (float)substr((($ik[$i]['luka_ringan'] - $ik[$i - 1]['luka_ringan'])  / $ik[$i - 1]['luka_ringan']) * 100, 0, 5);
                }
            }
        }

        foreach ($laka['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $insiden_kejadian[] = $key['insiden_kecelakaan'];
            $meninggal_dunia[] = $key['meninggal_dunia'];
            $luka_berat[] = $key['luka_berat'];
            $luka_ringan[] = $key['luka_ringan'];
        }
        return [
            'polda_month' => $poldaMonth,
            'insiden_kecelakaan' => $insiden_kejadian,
            'persentase_kecelakaan' => $persentaseinsinden,
            'meninggal_dunia' => $meninggal_dunia,
            'persentase_md' => $persentasemd,
            'luka_berat' => $luka_berat,
            'persentase_lb' => $persentaselb,
            'luka_ringan' => $luka_ringan,
            'persentase_lr' => $persentaselr,
        ];
    }
    public function getChartGarlantas($filter)
    {
        $url = 'garlantas/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $garlantas = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);
        $poldaMonth = [];
        $pelanggaran_berat = [];
        $pelanggaran_sedang = [];
        $pelanggaran_ringan = [];
        $teguran = [];
        $persentasepb = [];
        $persentaseps = [];
        $persentasepr = [];
        $persentasetg = [];
        $gr = $garlantas['data'];
        for ($i = 0; $i < count($gr); $i++) {
            if ($i == 0) {
                if ($gr[0]['pelanggaran_berat'] == 0) {
                    $persentasepb[] = 0;
                } else {
                    $persentasepb[] = $gr[0]['pelanggaran_berat'] / 100;
                }
                if ($gr[0]['pelanggaran_sedang'] == 0) {
                    $persentaseps[] = 0;
                } else {
                    $persentaseps[] = $gr[0]['pelanggaran_sedang'] / 100;
                }
                if ($gr[0]['pelanggaran_ringan'] == 0) {
                    $persentasepr[] = 0;
                } else {
                    $persentasepr[] = $gr[0]['pelanggaran_ringan'] / 100;
                }
                if ($gr[0]['teguran'] == 0) {
                    $persentasetg[] = 0;
                } else {
                    $persentasetg[] = $gr[0]['teguran'] / 100;
                }
            } elseif ($i != 0) {
                if ($gr[$i]['pelanggaran_berat'] == 0 && $gr[$i - 1]['pelanggaran_berat'] == 0) {
                    $persentasepb[] = 0;
                } elseif ($gr[$i]['pelanggaran_berat'] != 0 && $gr[$i - 1]['pelanggaran_berat'] == 0) {
                    $persentasepb[] = (float)substr($gr[$i]['pelanggaran_berat'], 0, 5);
                } elseif ($gr[$i]['pelanggaran_berat'] == 0 && $gr[$i - 1]['pelanggaran_berat'] != 0) {
                    $persentasepb[] = -100;
                    // $persentasepb[] = (float)substr($gr[$i]['pelanggaran_berat'] - $gr[$i - 1]['pelanggaran_berat'], 0, 5);
                } elseif ($gr[$i]['pelanggaran_berat'] != 0 && $gr[$i - 1]['pelanggaran_berat'] != 0) {
                    $persentasepb[] = (float)substr((($gr[$i]['pelanggaran_berat'] - $gr[$i - 1]['pelanggaran_berat'])  / $gr[$i - 1]['pelanggaran_berat']) * 100, 0, 5);
                }
                if ($gr[$i]['pelanggaran_sedang'] == 0 && $gr[$i - 1]['pelanggaran_sedang'] == 0) {
                    $persentaseps[] = 0;
                } elseif ($gr[$i]['pelanggaran_sedang'] != 0 && $gr[$i - 1]['pelanggaran_sedang'] == 0) {
                    $persentaseps[] = (float)substr($gr[$i]['pelanggaran_sedang'], 0, 5);
                } elseif ($gr[$i]['pelanggaran_sedang'] == 0 && $gr[$i - 1]['pelanggaran_sedang'] != 0) {
                    $persentaseps[] = -100;
                    // $persentaseps[] = (float)substr($gr[$i]['pelanggaran_sedang'] - $gr[$i - 1]['pelanggaran_sedang'], 0, 5);
                } elseif ($gr[$i]['pelanggaran_sedang'] != 0 && $gr[$i - 1]['pelanggaran_sedang'] != 0) {
                    $persentaseps[] = (float)substr((($gr[$i]['pelanggaran_sedang'] - $gr[$i - 1]['pelanggaran_sedang'])  / $gr[$i - 1]['pelanggaran_sedang']) * 100, 0, 5);
                }
                if ($gr[$i]['pelanggaran_ringan'] == 0 && $gr[$i - 1]['pelanggaran_ringan'] == 0) {
                    $persentasepr[] = 0;
                } elseif ($gr[$i]['pelanggaran_ringan'] != 0 && $gr[$i - 1]['pelanggaran_ringan'] == 0) {
                    $persentasepr[] = (float)substr($gr[$i]['pelanggaran_ringan'],  0, 5);
                } elseif ($gr[$i]['pelanggaran_ringan'] == 0 && $gr[$i - 1]['pelanggaran_ringan'] != 0) {
                    $persentasepr[] = -100;
                    // $persentasepr[] = (float)substr($gr[$i]['pelanggaran_ringan'] - $gr[$i - 1]['pelanggaran_ringan'], 0, 5);
                } elseif ($gr[$i]['pelanggaran_ringan'] != 0 && $gr[$i - 1]['pelanggaran_ringan'] != 0) {
                    $persentasepr[] = (float)substr((($gr[$i]['pelanggaran_ringan'] - $gr[$i - 1]['pelanggaran_ringan'])  / $gr[$i - 1]['pelanggaran_ringan']) * 100, 0, 5);
                }
                if ($gr[$i]['teguran'] == 0 && $gr[$i - 1]['teguran'] == 0) {
                    $persentasetg[] = 0;
                } elseif ($gr[$i]['teguran'] != 0 && $gr[$i - 1]['teguran'] == 0) {
                    $persentasetg[] = (float)substr($gr[$i]['teguran'], 0, 5);
                } elseif ($gr[$i]['teguran'] == 0 && $gr[$i - 1]['teguran'] != 0) {
                    $persentasetg[] = -100;
                } elseif ($gr[$i]['teguran'] != 0 && $gr[$i - 1]['teguran'] != 0) {
                    $persentasetg[] = (float)substr((($gr[$i]['teguran'] - $gr[$i - 1]['teguran'])  / $gr[$i - 1]['teguran']) * 100, 0, 5);
                }
            }
        }

        foreach ($garlantas['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $pelanggaran_berat[] = $key['pelanggaran_berat'];
            $pelanggaran_sedang[] = $key['pelanggaran_sedang'];
            $pelanggaran_ringan[] = $key['pelanggaran_ringan'];
            $teguran[] = $key['teguran'];
        }
        return [
            'polda_month' => $poldaMonth,
            'pelanggaran_berat' => $pelanggaran_berat,
            'persentase_pb' => $persentasepb,
            'pelanggaran_sedang' => $pelanggaran_sedang,
            'persentase_ps' => $persentaseps,
            'pelanggaran_ringan' => $pelanggaran_ringan,
            'persentase_pr' => $persentasepr,
            'teguran' => $teguran,
            'persentase_tg' => $persentasetg,
        ];
    }
    public function getChartTatib($filter)
    {
        $url = 'turjagwali/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        $turjagwali = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]

        ]);
        $poldaMonth = [];
        $pengaturan = [];
        $pengawalan = [];
        $penjagaan = [];
        $patroli = [];
        $persentasepengaturan = [];
        $persentasepengawalan = [];
        $persentasepenjagaan = [];
        $persentasepatroli = [];
        $gr = $turjagwali['data'];
        for ($i = 0; $i < count($gr); $i++) {
            if ($i == 0) {
                if ($gr[0]['pengaturan'] == 0) {
                    $persentasepengaturan[] = 0;
                } else {
                    $persentasepengaturan[] = $gr[0]['pengaturan'] / 100;
                }
                if ($gr[0]['pengawalan'] == 0) {
                    $persentasepengawalan[] = 0;
                } else {
                    $persentasepengawalan[] = $gr[0]['pengawalan'] / 100;
                }
                if ($gr[0]['penjagaan'] == 0) {
                    $persentasepenjagaan[] = 0;
                } else {
                    $persentasepenjagaan[] = $gr[0]['penjagaan'] / 100;
                }
                if ($gr[0]['patroli'] == 0) {
                    $persentasepatroli[] = 0;
                } else {
                    $persentasepatroli[] = $gr[0]['patroli'] / 100;
                }
            } elseif ($i != 0) {
                if ($gr[$i]['pengaturan'] == 0 && $gr[$i - 1]['pengaturan'] == 0) {
                    $persentasepengaturan[] = 0;
                } elseif ($gr[$i]['pengaturan'] != 0 && $gr[$i - 1]['pengaturan'] == 0) {
                    $persentasepengaturan[] = (float)substr($gr[$i]['pengaturan'], 0, 5);
                } elseif ($gr[$i]['pengaturan'] == 0 && $gr[$i - 1]['pengaturan'] != 0) {
                    $persentasepengaturan[] = -100;
                    // $persentasepengaturan[] = (float)substr($gr[$i]['pengaturan'] - $gr[$i - 1]['pengaturan'], 0, 5);
                } elseif ($gr[$i]['pengaturan'] != 0 && $gr[$i - 1]['pengaturan'] != 0) {
                    $persentasepengaturan[] = (float)substr((($gr[$i]['pengaturan'] - $gr[$i - 1]['pengaturan'])  / $gr[$i - 1]['pengaturan']) * 100, 0, 5);
                }
                if ($gr[$i]['pengawalan'] == 0 && $gr[$i - 1]['pengawalan'] == 0) {
                    $persentasepengawalan[] = 0;
                } elseif ($gr[$i]['pengawalan'] != 0 && $gr[$i - 1]['pengawalan'] == 0) {
                    $persentasepengawalan[] = (float)substr($gr[$i]['pengawalan'], 0, 5);
                } elseif ($gr[$i]['pengawalan'] == 0 && $gr[$i - 1]['pengawalan'] != 0) {
                    $persentasepengawalan[] = -100;
                    // $persentasepengawalan[] = (float)substr($gr[$i]['pengawalan'] - $gr[$i - 1]['pengawalan'], 0, 5);
                } elseif ($gr[$i]['pengawalan'] != 0 && $gr[$i - 1]['pengawalan'] != 0) {
                    $persentasepengawalan[] = (float)substr((($gr[$i]['pengawalan'] - $gr[$i - 1]['pengawalan'])  / $gr[$i - 1]['pengawalan']) * 100, 0, 5);
                }
                if ($gr[$i]['penjagaan'] == 0 && $gr[$i - 1]['penjagaan'] == 0) {
                    $persentasepenjagaan[] = 0;
                } elseif ($gr[$i]['penjagaan'] != 0 && $gr[$i - 1]['penjagaan'] == 0) {
                    $persentasepenjagaan[] = (float)substr($gr[$i]['penjagaan'],  0, 5);
                } elseif ($gr[$i]['penjagaan'] == 0 && $gr[$i - 1]['penjagaan'] != 0) {
                    $persentasepenjagaan[] = -100;
                    // $persentasepenjagaan[] = (float)substr($gr[$i]['penjagaan'] - $gr[$i - 1]['penjagaan'], 0, 5);
                } elseif ($gr[$i]['penjagaan'] != 0 && $gr[$i - 1]['penjagaan'] != 0) {
                    $persentasepenjagaan[] = (float)substr((($gr[$i]['penjagaan'] - $gr[$i - 1]['penjagaan'])  / $gr[$i - 1]['penjagaan']) * 100, 0, 5);
                }
                if ($gr[$i]['patroli'] == 0 && $gr[$i - 1]['patroli'] == 0) {
                    $persentasepatroli[] = 0;
                } elseif ($gr[$i]['patroli'] != 0 && $gr[$i - 1]['patroli'] == 0) {
                    $persentasepatroli[] = (float)substr($gr[$i]['patroli'], 0, 5);
                } elseif ($gr[$i]['patroli'] == 0 && $gr[$i - 1]['patroli'] != 0) {
                    $persentasepatroli[] = -100;
                } elseif ($gr[$i]['patroli'] != 0 && $gr[$i - 1]['patroli'] != 0) {
                    $persentasepatroli[] = (float)substr((($gr[$i]['patroli'] - $gr[$i - 1]['patroli'])  / $gr[$i - 1]['patroli']) * 100, 0, 5);
                }
            }
        }

        foreach ($turjagwali['data'] as $key) {
            if ($filter['type'] == 'day') {
                $datee = explode("-", $key['date']);
                $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
            } else if ($filter['type'] == 'month') {
                $poldaMonth[] = $key['date'];
            } else if ($filter['type'] == 'year') {
                $poldaMonth[] = $key['date'];
            }
            $pengaturan[] = $key['pengaturan'];
            $pengawalan[] = $key['pengawalan'];
            $penjagaan[] = $key['penjagaan'];
            $patroli[] = $key['patroli'];
        }
        return [
            'polda_month' => $poldaMonth,
            'pengaturan' => $pengaturan,
            'persentase_pengaturan' => $persentasepengaturan,
            'pengawalan' => $pengawalan,
            'persentase_pengawalan' => $persentasepengawalan,
            'penjagaan' => $penjagaan,
            'persentase_penjagaan' => $persentasepenjagaan,
            'patroli' => $patroli,
            'persentase_patroli' => $persentasepatroli,
        ];
    }
    public function getChartWalPjr($filter)
    {
        // $url = 'walpjr/date?type=' . $filter['type']  . '&filter=true'  . '&start_date=' . $filter['start_date'] . '&end_date=' . $filter['end_date'] . '';

        // $walpjr = guzzle_request('GET', $url, [
        //     'headers' => [
        //         'Authorization' => $this->session->userdata['token']
        //     ]

        // ]);
        // $poldaMonth = [];
        // $pengaturan = [];
        // $pengawalan = [];
        // $penjagaan = [];
        // $patroli = [];
        // $persentasepengaturan = [];
        // $persentasepengawalan = [];
        // $persentasepenjagaan = [];
        // $persentasepatroli = [];
        // $gr = $walpjr['data'];
        // for ($i = 0; $i < count($gr); $i++) {
        //     if ($i == 0) {
        //         if ($gr[0]['pengaturan'] == 0) {
        //             $persentasepengaturan[] = 0;
        //         } else {
        //             $persentasepengaturan[] = $gr[0]['pengaturan'] / 100;
        //         }
        //         if ($gr[0]['pengawalan'] == 0) {
        //             $persentasepengawalan[] = 0;
        //         } else {
        //             $persentasepengawalan[] = $gr[0]['pengawalan'] / 100;
        //         }
        //         if ($gr[0]['penjagaan'] == 0) {
        //             $persentasepenjagaan[] = 0;
        //         } else {
        //             $persentasepenjagaan[] = $gr[0]['penjagaan'] / 100;
        //         }
        //         if ($gr[0]['patroli'] == 0) {
        //             $persentasepatroli[] = 0;
        //         } else {
        //             $persentasepatroli[] = $gr[0]['patroli'] / 100;
        //         }
        //     } elseif ($i != 0) {
        //         if ($gr[$i]['pengaturan'] == 0 && $gr[$i - 1]['pengaturan'] == 0) {
        //             $persentasepengaturan[] = 0;
        //         } elseif ($gr[$i]['pengaturan'] != 0 && $gr[$i - 1]['pengaturan'] == 0) {
        //             $persentasepengaturan[] = (float)substr($gr[$i]['pengaturan'], 0, 5);
        //         } elseif ($gr[$i]['pengaturan'] == 0 && $gr[$i - 1]['pengaturan'] != 0) {
        //             $persentasepengaturan[] = -100;
        //             // $persentasepengaturan[] = (float)substr($gr[$i]['pengaturan'] - $gr[$i - 1]['pengaturan'], 0, 5);
        //         } elseif ($gr[$i]['pengaturan'] != 0 && $gr[$i - 1]['pengaturan'] != 0) {
        //             $persentasepengaturan[] = (float)substr((($gr[$i]['pengaturan'] - $gr[$i - 1]['pengaturan'])  / $gr[$i - 1]['pengaturan']) * 100, 0, 5);
        //         }
        //         if ($gr[$i]['pengawalan'] == 0 && $gr[$i - 1]['pengawalan'] == 0) {
        //             $persentasepengawalan[] = 0;
        //         } elseif ($gr[$i]['pengawalan'] != 0 && $gr[$i - 1]['pengawalan'] == 0) {
        //             $persentasepengawalan[] = (float)substr($gr[$i]['pengawalan'], 0, 5);
        //         } elseif ($gr[$i]['pengawalan'] == 0 && $gr[$i - 1]['pengawalan'] != 0) {
        //             $persentasepengawalan[] = -100;
        //             // $persentasepengawalan[] = (float)substr($gr[$i]['pengawalan'] - $gr[$i - 1]['pengawalan'], 0, 5);
        //         } elseif ($gr[$i]['pengawalan'] != 0 && $gr[$i - 1]['pengawalan'] != 0) {
        //             $persentasepengawalan[] = (float)substr((($gr[$i]['pengawalan'] - $gr[$i - 1]['pengawalan'])  / $gr[$i - 1]['pengawalan']) * 100, 0, 5);
        //         }
        //         if ($gr[$i]['penjagaan'] == 0 && $gr[$i - 1]['penjagaan'] == 0) {
        //             $persentasepenjagaan[] = 0;
        //         } elseif ($gr[$i]['penjagaan'] != 0 && $gr[$i - 1]['penjagaan'] == 0) {
        //             $persentasepenjagaan[] = (float)substr($gr[$i]['penjagaan'],  0, 5);
        //         } elseif ($gr[$i]['penjagaan'] == 0 && $gr[$i - 1]['penjagaan'] != 0) {
        //             $persentasepenjagaan[] = -100;
        //             // $persentasepenjagaan[] = (float)substr($gr[$i]['penjagaan'] - $gr[$i - 1]['penjagaan'], 0, 5);
        //         } elseif ($gr[$i]['penjagaan'] != 0 && $gr[$i - 1]['penjagaan'] != 0) {
        //             $persentasepenjagaan[] = (float)substr((($gr[$i]['penjagaan'] - $gr[$i - 1]['penjagaan'])  / $gr[$i - 1]['penjagaan']) * 100, 0, 5);
        //         }
        //         if ($gr[$i]['patroli'] == 0 && $gr[$i - 1]['patroli'] == 0) {
        //             $persentasepatroli[] = 0;
        //         } elseif ($gr[$i]['patroli'] != 0 && $gr[$i - 1]['patroli'] == 0) {
        //             $persentasepatroli[] = (float)substr($gr[$i]['patroli'], 0, 5);
        //         } elseif ($gr[$i]['patroli'] == 0 && $gr[$i - 1]['patroli'] != 0) {
        //             $persentasepatroli[] = -100;
        //         } elseif ($gr[$i]['patroli'] != 0 && $gr[$i - 1]['patroli'] != 0) {
        //             $persentasepatroli[] = (float)substr((($gr[$i]['patroli'] - $gr[$i - 1]['patroli'])  / $gr[$i - 1]['patroli']) * 100, 0, 5);
        //         }
        //     }
        // }

        // foreach ($walpjr['data'] as $key) {
        //     if ($filter['type'] == 'day') {
        //         $datee = explode("-", $key['date']);
        //         $poldaMonth[] = $datee[2] . "-" . $datee[1] . "-" . $datee[0];
        //     } else if ($filter['type'] == 'month') {
        //         $poldaMonth[] = $key['date'];
        //     } else if ($filter['type'] == 'year') {
        //         $poldaMonth[] = $key['date'];
        //     }
        //     $pengaturan[] = $key['pengaturan'];
        //     $pengawalan[] = $key['pengawalan'];
        //     $penjagaan[] = $key['penjagaan'];
        //     $patroli[] = $key['patroli'];
        // }
        // return [
        //     'polda_month' => $poldaMonth,
        //     'pengaturan' => $pengaturan,
        //     'persentase_pengaturan' => $persentasepengaturan,
        //     'pengawalan' => $pengawalan,
        //     'persentase_pengawalan' => $persentasepengawalan,
        //     'penjagaan' => $penjagaan,
        //     'persentase_penjagaan' => $persentasepenjagaan,
        //     'patroli' => $patroli,
        //     'persentase_patroli' => $persentasepatroli,
        // ];
        if ($filter['type'] == 'day') {
            return [
                'polda_month' => [0, 0, 0, 0, 0, 0, 0],
                'wal' => [0, 0, 0, 0, 0, 0, 0],
                'persentase_wal' => [0, 0, 0, 0, 0, 0, 0],
                'pjr' => [0, 0, 0, 0, 0, 0, 0],
                'persentase_pjr' => [0, 0, 0, 0, 0, 0, 0]
            ];
        } else if ($filter['type'] == 'month') {
            return [
                'polda_month' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Desember'],
                'wal' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                'persentase_wal' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                'pjr' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                'persentase_pjr' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
            ];
        } else if ($filter['type'] == 'year') {
            return [
                'polda_month' => [0, 0, 0],
                'wal' => [0, 0, 0],
                'persentase_wal' => [0, 0, 0],
                'pjr' => [0, 0, 0],
                'persentase_pjr' => [0, 0, 0]
            ];
        }
    }
}
