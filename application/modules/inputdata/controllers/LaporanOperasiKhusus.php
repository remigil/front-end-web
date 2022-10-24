<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class LaporanOperasiKhusus extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];


        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Laporan Operasi Khusus";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas' || $this->session->userdata['OperatorKorlantas']) {

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

            $page_content["page"] = "inputdata/Korlantas/InputData_OperasiKhusus";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "inputdata/Kapolda/InputData_Kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "inputdata/Polres/InputData_Polres";
        }

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }


    public function getPolres()
    {
        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('polda_id');

        $getDetail = guzzle_request('GET', 'polres/getPolda/' . $id . '', [
            'headers' => $headers
        ]);

        $results = $getDetail['data']['data'];
        echo json_encode($results);
    }

    public function storeData()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $polda_id = $this->input->post('polda_id');
        $date = $this->input->post('date');
        $polres_id = $this->input->post('polres_id');
        $jenis_laporan = $this->input->post('jenis_laporan');
        $operasi_id = $this->input->post('operasi_id');
        $value = [];
        $url = '';
        $max_loop = count($this->input->post('polres_id'));

        if ($jenis_laporan == 1) {
            // Data Dakgar lantas

            $url = 'operasi_langgar/langgar-lantas?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {

                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'statis' => $this->input->post('statis')[$i],
                    'mobile' => $this->input->post('mobile')[$i],
                    'teguran' => $this->input->post('teguran')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 2) {
            // Data pelanggaran konvensional

            $url = 'operasi_langgar/langgar-motor?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {

                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'tanpa_helm' => $this->input->post('tanpa_helm')[$i],
                    'lawan_arus' => $this->input->post('lawan_arus')[$i],
                    'bermain_hp' => $this->input->post('bermain_hp')[$i],
                    'pengaruh_alkohol' => $this->input->post('pengaruh_alkohol')[$i],
                    'max_kecepatan' => $this->input->post('max_kecepatan')[$i],
                    'dibawah_umur' => $this->input->post('dibawah_umur')[$i],
                    'lain_lain' => $this->input->post('lain_lain')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 3) {
            // Data laka lantas

            $url = 'operasi_langgar/langgar-mobil?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'lawan_arus' => $this->input->post('lawan_arus')[$i],
                    'guna_hp' => $this->input->post('guna_hp')[$i],
                    'pengaruh_alkohol' => $this->input->post('pengaruh_alkohol')[$i],
                    'max_kecepatan' => $this->input->post('max_kecepatan')[$i],
                    'dibawah_umur' => $this->input->post('dibawah_umur')[$i],
                    'tanpa_sabuk' => $this->input->post('tanpa_sabuk')[$i],
                    'lain_lain' => $this->input->post('lain_lain')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 4) {
            $url = 'operasi_langgar/bukti?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'sim' => $this->input->post('sim')[$i],
                    'stnk' => $this->input->post('stnk')[$i],
                    'kendaraan_bermotor' => $this->input->post('kendaraan_bermotor')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 5) {
            $url = 'operasi_langgar/kendaraan?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'sepeda_motor' => $this->input->post('sepeda_motor')[$i],
                    'mobil_penumpang' => $this->input->post('mobil_penumpang')[$i],
                    'bus' => $this->input->post('bus')[$i],
                    'mobil_barang' => $this->input->post('mobil_barang')[$i],
                    'ransus' => $this->input->post('ransus')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 6) {
            $url = 'operasi_langgar/profesi?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'pns' => $this->input->post('pns')[$i],
                    'karyawan' => $this->input->post('karyawan')[$i],
                    'mahasiswa_pelajar' => $this->input->post('mahasiswa_pelajar')[$i],
                    'pengemudi' => $this->input->post('pengemudi')[$i],
                    'tni' => $this->input->post('tni')[$i],
                    'polri' => $this->input->post('polri')[$i],
                    'lain_lain' => $this->input->post('lain_lain')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 7) {
            $url = 'operasi_langgar/usia?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'max_15' => $this->input->post('max_15')[$i],
                    'max_20' => $this->input->post('max_20')[$i],
                    'max_25' => $this->input->post('max_25')[$i],
                    'max_30' => $this->input->post('max_30')[$i],
                    'max_35' => $this->input->post('max_35')[$i],
                    'max_40' => $this->input->post('max_40')[$i],
                    'max_45' => $this->input->post('max_45')[$i],
                    'max_50' => $this->input->post('max_50')[$i],
                    'max_55' => $this->input->post('max_55')[$i],
                    'max_60' => $this->input->post('max_60')[$i],
                    'lain_lain' => $this->input->post('lain_lain')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 8) {
            $url = 'operasi_langgar/sim?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'sim_a' => $this->input->post('sim_a')[$i],
                    'sim_a_umum' => $this->input->post('sim_a_umum')[$i],
                    'sim_b' => $this->input->post('sim_b')[$i],
                    'sim_b_satu_umum' => $this->input->post('sim_b_satu_umum')[$i],
                    'sim_b_dua_umum' => $this->input->post('sim_b_dua_umum')[$i],
                    'sim_c' => $this->input->post('sim_c')[$i],
                    'sim_d' => $this->input->post('sim_d')[$i],
                    'sim_internasional' => $this->input->post('sim_internasional')[$i],
                    'tanpa_sim' => $this->input->post('tanpa_sim')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 9) {
            $url = 'operasi_langgar/lokasi-kawasan?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'pemukiman' => $this->input->post('pemukiman')[$i],
                    'perbelanjaan' => $this->input->post('perbelanjaan')[$i],
                    'perkantoran' => $this->input->post('perkantoran')[$i],
                    'wisata' => $this->input->post('wisata')[$i],
                    'industri' => $this->input->post('industri')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  10) {
            $url =  'operasi_langgar/lokasi-jalan?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'nasional' => $this->input->post('nasional')[$i],
                    'provinsi' => $this->input->post('provinsi')[$i],
                    'kab_kota' => $this->input->post('kab_kota')[$i],
                    'desa_lingkungan' => $this->input->post('desa_lingkungan')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  11) {
            $url =  'operasi_langgar/fungsi-jalan?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'arteri' => $this->input->post('arteri')[$i],
                    'kolektor' => $this->input->post('kolektor')[$i],
                    'lokal' => $this->input->post('lokal')[$i],
                    'lingkungan' => $this->input->post('lingkungan')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  12) {
            $url =  'operasi_langgar/dikmaslantas?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'media_cetak' => $this->input->post('media_cetak')[$i],
                    'media_elektronik' => $this->input->post('media_elektronik')[$i],
                    'media_sosial' => $this->input->post('media_sosial')[$i],
                    'laka_langgar' => $this->input->post('laka_langgar')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  13) {
            $url =  'operasi_langgar/penyebaran?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'spanduk' => $this->input->post('spanduk')[$i],
                    'leaflet' => $this->input->post('leaflet')[$i],
                    'stiker' => $this->input->post('stiker')[$i],
                    'billboard' => $this->input->post('billboard')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  14) {
            $url =  'ooperasi_langgar/giatlantas?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'pengaturan' => $this->input->post('pengaturan')[$i],
                    'penjagaan' => $this->input->post('penjagaan')[$i],
                    'pengawalan' => $this->input->post('pengawalan')[$i],
                    'patroli' => $this->input->post('patroli')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  15) {
            $url =  'operasi_laka/lakalantas?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'meninggal_dunia' => $this->input->post('meninggal_dunia')[$i],
                    'luka_berat' => $this->input->post('luka_berat')[$i],
                    'luka_ringan' => $this->input->post('luka_ringan')[$i],
                    'kerugian_material' => $this->input->post('kerugian_material')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  16) {
            $url =  'operasi_langgar/lokasi-jalan?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'max_4' => $this->input->post('max_4')[$i],
                    'max_9' => $this->input->post('max_9')[$i],
                    'max_14' => $this->input->post('max_14')[$i],
                    'max_19' => $this->input->post('max_19')[$i],
                    'max_24' => $this->input->post('max_24')[$i],
                    'max_29' => $this->input->post('max_29')[$i],
                    'max_39' => $this->input->post('max_39')[$i],
                    'max_44' => $this->input->post('max_44')[$i],
                    'max_49' => $this->input->post('max_49')[$i],
                    'max_54' => $this->input->post('max_54')[$i],
                    'max_59' => $this->input->post('max_59')[$i],
                    'lain_lain' => $this->input->post('lain_lain')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  17) {
            $url =  'operasi_laka/pekerjaan-korban?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'pns' => $this->input->post('pns')[$i],
                    'karyawan' => $this->input->post('karyawan')[$i],
                    'mahasiswa' => $this->input->post('mahasiswa')[$i],
                    'pengemudi' => $this->input->post('pengemudi')[$i],
                    'tni' => $this->input->post('tni')[$i],
                    'polri' => $this->input->post('polri')[$i],
                    'lain_lain' => $this->input->post('lain_lain')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  18) {
            $url =  'operasi_laka/pendidikan-korban?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'sd' => $this->input->post('sd')[$i],
                    'sltp' => $this->input->post('sltp')[$i],
                    'slta' => $this->input->post('slta')[$i],
                    'd3' => $this->input->post('d3')[$i],
                    's1' => $this->input->post('s1')[$i],
                    's2' => $this->input->post('s2')[$i],
                    'tidak_diketahui' => $this->input->post('tidak_diketahui')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  19) {
            $url =  'operasi_langgar/lokasi-jalan?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'min_14' => $this->input->post('min_14')[$i],
                    'max_16' => $this->input->post('max_16')[$i],
                    'max_21' => $this->input->post('max_21')[$i],
                    'max_29' => $this->input->post('max_29')[$i],
                    'max_39' => $this->input->post('max_39')[$i],
                    'max_49' => $this->input->post('max_49')[$i],
                    'max_59' => $this->input->post('max_59')[$i],
                    'max_60' => $this->input->post('max_60')[$i],
                    'tidak_diketahui' => $this->input->post('tidak_diketahui')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  20) {
            $url =  'operasi_laka/pekerjaan-pelaku?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'pns' => $this->input->post('pns')[$i],
                    'karyawan' => $this->input->post('karyawan')[$i],
                    'mahasiswa' => $this->input->post('mahasiswa')[$i],
                    'pengemudi' => $this->input->post('pengemudi')[$i],
                    'tni' => $this->input->post('tni')[$i],
                    'polri' => $this->input->post('polri')[$i],
                    'lain_lain' => $this->input->post('lain_lain')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  21) {
            $url =  'operasi_laka/laka-ranmor?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'sepeda_motor' => $this->input->post('sepeda_motor')[$i],
                    'mobil_penumpang' => $this->input->post('mobil_penumpang')[$i],
                    'bus' => $this->input->post('bus')[$i],
                    'mobil_barang' => $this->input->post('mobil_barang')[$i],
                    'ransus' => $this->input->post('ransus')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  22) {
            $url =  'operasi_turjagwali/turjagwali?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'penjagaan' => $this->input->post('penjagaan')[$i],
                    'pengawalan' => $this->input->post('pengawalan')[$i],
                    'patroli' => $this->input->post('patroli')[$i],
                    'pengaturan' => $this->input->post('pengaturan')[$i],
                ];

                array_push($value, $object);
            }
        }

        $dummy = [
            [
                'name' => 'polda_id',
                'contents' => $polda_id
            ],
            [
                'name' => 'date',
                'contents' => $date
            ],
            [
                'name' => 'value',
                'contents' => $value
            ],
            [
                'name' => 'operasi_id',
                'contents' => $operasi_id
            ]
        ];


        $data = guzzle_request('POST', $url, [
            'json' => [
                'polda_id' => $polda_id,
                'date' => $date,
                'value' => $value,
                'operasi_id' => $operasi_id
            ],
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }
}
