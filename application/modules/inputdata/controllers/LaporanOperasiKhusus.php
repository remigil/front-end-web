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
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            
            $getPolda = guzzle_request('GET', 'polda', [
                'headers' => $headers
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
                    'mobile' => $this->input->post('mobile')[$i],
                    'statis' => $this->input->post('statis')[$i],
                    'teguran' => $this->input->post('teguran')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 2) {
            // Data pelanggaran konvensional

            $url = 'garlantas/add?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {

                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'pelanggaran_berat' => $this->input->post('pelanggaran_berat')[$i],
                    'pelanggaran_ringan' => $this->input->post('pelanggaran_ringan')[$i],
                    'pelanggaran_sedang' => $this->input->post('pelanggaran_sedang')[$i],
                    'teguran' => $this->input->post('teguran')[$i]
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 3) {
            // Data laka lantas

            $url = 'laka_lantas/add?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'meninggal_dunia' => $this->input->post('meninggal_dunia')[$i],
                    'luka_berat' => $this->input->post('luka_berat')[$i],
                    'luka_ringan' => $this->input->post('luka_ringan')[$i],
                    'kerugian_material' => $this->input->post('kerugian_material')[$i]
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 4) {
            $url = 'turjagwali/add?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'penjagaan' => $this->input->post('penjagaan')[$i],
                    'pengawalan' => $this->input->post('pengawalan')[$i],
                    'patroli' => $this->input->post('patroli')[$i],
                    'pengaturan' => $this->input->post('pengaturan')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 5) {
            $url = 'dikmaslantas/add?polda=true';
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
        } else if ($jenis_laporan == 6) {
            $url = 'penyebaran/add?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'stiker' => $this->input->post('stiker')[$i],
                    'leaflet' => $this->input->post('leaflet')[$i],
                    'spanduk' => $this->input->post('spanduk')[$i],
                    'billboard' => $this->input->post('billboard')[$i],
                    'jemensosprek' => $this->input->post('jemensosprek')[$i]
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 7) {
            $url = 'sim/add?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'baru' => $this->input->post('baru')[$i],
                    'perpanjangan' => $this->input->post('perpanjangan')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 8) {
            $url = 'bpkb/add?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'baru' => $this->input->post('baru')[$i],
                    'perpanjangan' => $this->input->post('perpanjangan')[$i],
                    'rubentina' => $this->input->post('rubentina')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 9) {
            $url = 'ranmor/add?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'mobil_penumpang' => $this->input->post('mobil_penumpang')[$i],
                    'mobil_barang' => $this->input->post('mobil_barang')[$i],
                    'mobil_bus' => $this->input->post('mobil_bus')[$i],
                    'ransus' => $this->input->post('ransus')[$i],
                    'sepeda_motor' => $this->input->post('sepeda_motor')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  10) {
            $url =  'stnk/add?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
                    'baru' => $this->input->post('baru')[$i],
                    'perpanjangan' => $this->input->post('perpanjangan')[$i],
                    'rubentina' => $this->input->post('rubentina')[$i],
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