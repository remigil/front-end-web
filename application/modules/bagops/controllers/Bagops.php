<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bagops extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("M_bagops");
    }

    public function index()
    {


        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "";


        $getPolda = guzzle_request('GET', 'polda', [
            'headers' => ['Authorization' => $this->session->userdata['token']]
        ]);

        $getOperasi = guzzle_request('GET', 'operation-profile', [
            'headers' => [
                'Authorization' => $this->session->userdata['token']
            ]
        ]);

        $data['getPolda'] = $getPolda['data']['data'];
        $data['getOperasi'] = $getOperasi['data']['data'];


        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "dashboard/dashboard_view";
        } else if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'KaBagOps') {
            $page_content["title"] = "BAGOPS";
            $page_content["page"] = "bagops/korlantas/bagops_view";
            // $page_content["page"] = "dashboard/dashboard_view";
        }


        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function getStatistik()
    {
        // $headers = [
        //     'Authorization' => $this->session->userdata['token']
        // ];
        // $date = date("Y-m-d");
        // $getregident = guzzle_request('GET', 'ditregident/daily?date=' . $date . '', [
        //     'headers' => $headers
        // ]);
        // $getregident = $getregident["data"];

        // $totalsim = 0;
        // $totalbpkb = 0;
        // $totalstnk = 0;
        // for ($i = 0; $i < count($getregident); $i++) {
        //     $totalsim += $getregident[$i]['sim'];
        //     $totalbpkb += $getregident[$i]['bpkb'];
        //     $totalstnk += $getregident[$i]['stnk'];
        // }



        $data = [
            // 'sim' => number_format($totalsim, 0, '', '.'),
            'subbagrenop' => 0,
            'subbagdalops' =>  0,
            'subbagkerma' => 0,
            'subbaganev' => 0,
        ];
        echo json_encode($data);
    }

    public function getChartBagops()
    {
        $title = 'DATA BAGOPS';
        $filter = $this->input->post('filter');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        if ($filter == 'day') {
            $type = 'day';
        } elseif ($filter == 'month') {
            $type = 'month';
        } elseif ($filter == 'year') {
            $type = 'year';
        }
        $filterbaru = [
            'filter' => true,
            'type' => $type,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        $getdata = $this->M_bagops->getChartBagops($filterbaru);
        $data = [
            'data' => $getdata,
            'title' => $title,
        ];

        echo json_encode($data);
    }


    public function getPenluh()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/dikmaslantas/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            array_push($jumlah, $key['media_cetak'], $key['media_sosial'], $key['media_elektronik'], $key['laka_langgar']);
            array_push($type, 'Melalui Media Cetak', 'Melalui Media Sosial', 'Melalui Media Elektronik', 'Daerah Rawan Laka dan Langgar');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getPenyebaran()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/penyebaran/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            array_push($jumlah, $key['spanduk'], $key['leaflet'], $key['stiker'], $key['billboard']);
            array_push($type, 'Spanduk', 'Leaflet', 'Stiker', 'Billboard');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getTurjagwali()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/giatlantas/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            array_push($jumlah, $key['pengaturan'], $key['penjagaan'], $key['pengawalan'], $key['patroli']);
            array_push($type, 'pengaturan', 'penjagaan', 'pengawalan', 'patroli');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getPelanggaran()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/langgarlantas/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $type = [];
        $jumlah = [];
        foreach ($result['data'] as $key) {
            $jumlah[] = $key['pelanggaran_berat'];
            $jumlah[] = $key['pelanggaran_ringan'];
            $jumlah[] = $key['pelanggaran_sedang'];
            $jumlah[] = $key['teguran'];
            $jumlah[] = $key['statis'];
            $jumlah[] = $key['mobile'];
            array_push($type, 'pelanggaran berat', 'pelanggaran ringan', 'pelanggaran sedang', 'teguran', 'statis', 'mobile');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getKecelakaan()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_laka/lakalantas/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $type = [];
        $jumlah = [];
        foreach ($result['data'] as $key) {
            $jumlah[] = $key['meninggal_dunia'];
            $jumlah[] = $key['luka_berat'];
            $jumlah[] = $key['luka_ringan'];
            $jumlah[] = $key['kerugian_material'];
            array_push($type, 'Meninggal Dunia', 'Luka Berat', 'Luka Ringan', 'Kerugian Material');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getUsiaKorban()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_laka/usia_korban/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $type = [];
        $jumlah = [];
        foreach ($result['data'] as $key) {
            $jumlah[] = $key['max_4'];
            $jumlah[] = $key['max_9'];
            $jumlah[] = $key['max_14'];
            $jumlah[] = $key['max_19'];
            $jumlah[] = $key['max_24'];
            $jumlah[] = $key['max_34'];
            $jumlah[] = $key['max_39'];
            $jumlah[] = $key['max_54'];
            $jumlah[] = $key['max_59'];
            $jumlah[] = $key['lain_lain'];
            array_push($type, '0 - 4 tahun', '5 - 9 tahun', '10 - 14 tahun', '15 - 24 tahun', '25 - 34 tahun', '39 - 54 tahun', '55 - 59 tahun', '> 60 tahun');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getUsiaPelaku()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_laka/usia_pelaku/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $type = [];
        $jumlah = [];
        foreach ($result['data'] as $key) {
            $jumlah[] = $key['max_14'];
            $jumlah[] = $key['max_16'];
            $jumlah[] = $key['max_21'];
            $jumlah[] = $key['max_29'];
            $jumlah[] = $key['max_39'];
            $jumlah[] = $key['max_49'];
            $jumlah[] = $key['max_59'];
            $jumlah[] = $key['lain_lain'];
            array_push($type, '0 - 14 tahun', '15 - 16 tahun', '17 - 21 tahun', '22 - 29 tahun', '30 - 39 tahun', '40 - 49 tahun', '50 - 59 tahun', '> 60 tahun');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getUsia()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/usia/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $type = [];
        $jumlah = [];
        foreach ($result['data'] as $key) {
            $jumlah[] = $key['max_15'];
            $jumlah[] = $key['max_20'];
            $jumlah[] = $key['max_25'];
            $jumlah[] = $key['max_30'];
            $jumlah[] = $key['max_35'];
            $jumlah[] = $key['max_40'];
            $jumlah[] = $key['max_45'];
            $jumlah[] = $key['max_50'];
            $jumlah[] = $key['max_55'];
            $jumlah[] = $key['max_60'];
            $jumlah[] = $key['lain_lain'];
            array_push($type, '0 - 15 tahun', '16 - 20 tahun', '21 - 25 tahun', '26 - 30 tahun', '31 - 35 tahun', '36 - 40 tahun', '41 - 45 tahun', '46 - 50 tahun', '51 - 55 tahun', '56 - 60 tahun', '> 60 tahun');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getSim()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/sim/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $type = [];
        $jumlah = [];
        foreach ($result['data'] as $key) {
            $jumlah[] = $key['sim_a'];
            $jumlah[] = $key['sim_a_umum'];
            $jumlah[] = $key['sim_b'];
            $jumlah[] = $key['sim_b_satu_umum'];
            $jumlah[] = $key['sim_b_dua_umum'];
            $jumlah[] = $key['sim_c'];
            $jumlah[] = $key['sim_d'];
            $jumlah[] = $key['sim_internasional'];
            $jumlah[] = $key['tanpa_sim'];
            array_push($type, 'A', 'A Umum', 'B I', 'B I Umum', 'B II Umum', 'C', 'D', 'SIK Internasional', 'Tanpa SIM');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getKawasanJalan()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/lokasi_kawasan/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $type = [];
        $jumlah = [];
        foreach ($result['data'] as $key) {
            $jumlah[] = $key['pemukiman'];
            $jumlah[] = $key['perbelanjaan'];
            $jumlah[] = $key['industri'];
            $jumlah[] = $key['wisata'];
            $jumlah[] = $key['perkantoran'];
            array_push($type, 'Pemukiman', 'Perbelanjaan', 'Industri', 'Wisata', 'Perkantoran');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getStatusJalan()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/lokasi_jalan/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $type = [];
        $jumlah = [];
        foreach ($result['data'] as $key) {
            $jumlah[] = $key['nasional'];
            $jumlah[] = $key['provinsi'];
            $jumlah[] = $key['kab_kota'];
            $jumlah[] = $key['desa_lingkungan'];
            array_push($type, 'Nasional', 'Provinsi', 'Kabupaten / Kota', 'Desa / Kelurahan');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getFungsiJalan()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/fungsi_jalan/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);
        $type = [];
        $jumlah = [];
        foreach ($result['data'] as $key) {
            $jumlah[] = $key['arteri'];
            $jumlah[] = $key['kolektor'];
            $jumlah[] = $key['lokal'];
            $jumlah[] = $key['lingkungan'];
            array_push($type, 'Arteri', 'Kolektor', 'Lokal', 'Lingkungan');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }




    public function getRanmor()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/kendaraan/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            $jumlah[] = $key['sepeda_motor'];
            $jumlah[] = $key['mobil_penumpang'];
            $jumlah[] = $key['bus'];
            $jumlah[] = $key['mobil_barang'];
            $jumlah[] = $key['ransus'];
            array_push($type, 'Sepeda Motor', 'Mobil Penumpang', 'Mobil Bus', 'Mobil Barang', 'Ransus');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getRanmorPelaku()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_laka/lakaranmor/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            $jumlah[] = $key['sepeda_motor'];
            $jumlah[] = $key['mobil_penumpang'];
            $jumlah[] = $key['bus'];
            $jumlah[] = $key['mobil_barang'];
            $jumlah[] = $key['ransus'];
            array_push($type, 'Sepeda Motor', 'Mobil Penumpang', 'Mobil Bus', 'Mobil Barang', 'Ransus');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getProfesi()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/profesi/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            $jumlah[] = $key['pns'];
            $jumlah[] = $key['karyawan'];
            $jumlah[] = $key['tni'];
            $jumlah[] = $key['polri'];
            $jumlah[] = $key['mahasiswa_pelajar'];
            $jumlah[] = $key['pengemudi'];
            $jumlah[] = $key['lain_lain'];
            array_push($type, 'PNS', 'Karyawan', 'TNI', 'Polri', 'Mahasiswa / Pelajar', 'Pengemudi', 'Lain-lain');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getPekerjaanKorban()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_laka/pekerjaan_korban/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            $jumlah[] = $key['pns'];
            $jumlah[] = $key['karyawan'];
            $jumlah[] = $key['tni'];
            $jumlah[] = $key['polri'];
            $jumlah[] = $key['mahasiswa_pelajar'];
            $jumlah[] = $key['pengemudi'];
            $jumlah[] = $key['lain_lain'];
            array_push($type, 'PNS', 'Karyawan', 'TNI', 'Polri', 'Pelajar', 'Pengemudi', 'Lain-lain');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getPekerjaanPelaku()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_laka/pekerjaan_pelaku/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            $jumlah[] = $key['pns'];
            $jumlah[] = $key['karyawan'];
            $jumlah[] = $key['tni'];
            $jumlah[] = $key['polri'];
            $jumlah[] = $key['mahasiswa'];
            $jumlah[] = $key['pengemudi'];
            $jumlah[] = $key['lain_lain'];
            array_push($type, 'PNS', 'Karyawan', 'TNI', 'Polri', 'Pelajar', 'Pengemudi', 'Lain-lain');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }


    public function getPendidikanKorban()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_laka/pendidikan_korban/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            $jumlah[] = $key['sd'];
            $jumlah[] = $key['sltp'];
            $jumlah[] = $key['slta'];
            $jumlah[] = $key['d3'];
            $jumlah[] = $key['s1'];
            $jumlah[] = $key['s2'];
            $jumlah[] = $key['tidak_diketahui'];
            array_push($type, 'SD', 'SLTP', 'SLTA', 'D3', 'S1', 'S2', 'Tidak diketahui');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

    public function getBuktiPelanggaran()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/bukti/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [
                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            array_push($jumlah, $key['sim'], $key['stnk'], $key['kendaraan_bermotor']);
            array_push($type, 'SIM', 'STNK', 'Kendaraan Bermotor');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }


    public function getPelanggaranMotor()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/langgarmotor/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            $jumlah[] = $key['tanpa_helm'];
            $jumlah[] = $key['lawan_arus'];
            $jumlah[] = $key['bermain_hp'];
            $jumlah[] = $key['pengaruh_alkohol'];
            $jumlah[] = $key['max_kecepatan'];
            $jumlah[] = $key['dibawah_umur'];
            $jumlah[] = $key['lain_lain'];
            array_push($type, 'Tidak menggunakan Helm SNI', 'Melawan Arus', 'Menggunakan HP saat berkendara', 'Berkendara dibawah pengaruh Alkohol', 'Melebihi Batas Kecepatan', 'Lain-lain');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }


    public function getPelanggaranMobil()
    {
        $operasi_id = $this->input->post('operasi_id');
        $url = 'operasi_langgar/langgarmobil/date?operasi_id=' . $operasi_id . '&type=year';

        $result = guzzle_request('GET', $url, [
            'headers' => [

                'Authorization' => $this->session->userdata['token']

            ]
        ]);

        $jumlah = [];
        $type = [];

        foreach ($result['data'] as $key) {
            $jumlah[] = $key['tanpa_sabuk'];
            $jumlah[] = $key['lawan_arus'];
            $jumlah[] = $key['bermain_hp'];
            $jumlah[] = $key['pengaruh_alkohol'];
            $jumlah[] = $key['max_kecepatan'];
            $jumlah[] = $key['dibawah_umur'];
            $jumlah[] = $key['lain_lain'];
            array_push($type, 'Tidak Menggunakan Safety Belt', 'Melawan Arus', 'Menggunakan HP saat berkendara', 'Berkendara dibawah pengaruh Alkohol', 'Melebihi Batas Kecepatan', 'Lain-lain');
        }

        $data = [
            'jumlah' => $jumlah,
            'type' => $type,
        ];

        echo json_encode($data);
    }

}
