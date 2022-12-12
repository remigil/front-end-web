<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class LaporanHarian extends MY_Controller
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
        $page_content["title"] = "Laporan Harian";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas' || $this->session->userdata['role'] == "OperatorKorlantas") {
            $headers = [
                'Authorization' => $this->session->userdata['token'],
            ];
            $getPolda = guzzle_request('GET', 'polda', [
                'headers' => $headers
            ]);

            $data['getPolda'] = $getPolda['data']['data'];
            $page_content["page"] = "inputdata/Korlantas/InputData_Korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'OperatorPolda') {
            $id = $this->session->userdata['polda_id'];
            $getPolda = guzzle_request('GET', 'polda/getId/' . $id, [
                'headers' => ['Authorization' => $this->session->userdata['token']]
            ]);
            $data['getPolda'] = $getPolda['data']['data'];
            $page_content["page"] = "inputdata/Kapolda/InputData_Kapolda";
        } else if ($this->session->userdata['role'] == 'Kapolres' || $this->session->userdata['role'] == 'OperatorPolres') {
            $id = $this->session->userdata['polres_id'];
            $getPolda = guzzle_request('GET', 'polres/getId/' . $id, [
                'headers' => $headers
            ]);
            $data['getPolres'] = $getPolda['data']['data'];
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

    public function getPolda()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $getPolda = guzzle_request('GET', 'polda/', [
            'headers' => $headers
        ]);

        $results = $getPolda['data']['data'];
        echo json_encode($results);
    }

    public function getPolresID()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $id = $this->input->post('polres_id');

        $getDetail = guzzle_request('GET', 'polres/getId/' . $id . '', [
            'headers' => $headers
        ]);

        $results = $getDetail['data']['data'];
        echo json_encode($results);
    }

    public function storePolda()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $polda_id = $this->input->post('polda_id');
        $date = $this->input->post('date');
        $polres_id = $this->input->post('polres_id');
        $jenis_laporan = $this->input->post('jenis_laporan');
        $value = [];
        $url = '';


        $max_loop = count($this->input->post('polda_id'));

        if ($jenis_laporan == 1) {
            // Data Dakgar lantas

            $url = 'laka_langgar/add';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polda_id' => $this->input->post('polda_id ')[$i],
                    'date' => $date,
                    'capture_camera' => $this->input->post('capture_camera')[$i],
                    'statis' => $this->input->post('statis')[$i],
                    'mobile' => $this->input->post('mobile')[$i],
                    'online' => $this->input->post('online')[$i],
                    'posko' => $this->input->post('posko')[$i],
                    'preemtif' => $this->input->post('preemtif')[$i],
                    'preventif' => $this->input->post('preventif')[$i],
                    'odol_227' => $this->input->post('odol_227')[$i],
                    'odol_307' => $this->input->post('odol_307')[$i]
                ];
                array_push($value, $object);
            }
        } else if ($jenis_laporan == 2) {
            // Data pelanggaran konvensional

            $url = 'garlantas/add';
            for ($i = 0; $i < $max_loop; $i++) {

                $object = (object) [
                    'polda_id' => $this->input->post('polda_id')[$i],
                    'date' => $date,
                    'pelanggaran_berat' => $this->input->post('pelanggaran_berat')[$i],
                    'pelanggaran_ringan' => $this->input->post('pelanggaran_ringan')[$i],
                    'pelanggaran_sedang' => $this->input->post('pelanggaran_sedang')[$i],
                    'teguran' => $this->input->post('teguran')[$i]
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 3) {
            // Data laka lantas

            $url = 'laka_lantas/add';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polda_id' => $this->input->post('polda_id')[$i],
                    'date' => $date,
                    'meninggal_dunia' => $this->input->post('meninggal_dunia')[$i],
                    'luka_berat' => $this->input->post('luka_berat')[$i],
                    'luka_ringan' => $this->input->post('luka_ringan')[$i],
                    'kerugian_material' => $this->input->post('kerugian_material')[$i]
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 4) {
            $url = 'turjagwali/add';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polda_id' => $this->input->post('polda_id')[$i],
                    'date' => $date,
                    'penjagaan' => $this->input->post('penjagaan')[$i],
                    'pengawalan' => $this->input->post('pengawalan')[$i],
                    'patroli' => $this->input->post('patroli')[$i],
                    'pengaturan' => $this->input->post('pengaturan')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 5) {
            $url = 'dikmaslantas/add';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polda_id' => $this->input->post('polda_id')[$i],
                    'date' => $date,
                    'media_cetak' => $this->input->post('media_cetak')[$i],
                    'media_elektronik' => $this->input->post('media_elektronik')[$i],
                    'media_sosial' => $this->input->post('media_sosial')[$i],
                    'laka_langgar' => $this->input->post('laka_langgar')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 6) {
            $url = 'penyebaran/add';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polda_id' => $this->input->post('polda_id')[$i],
                    'date' => $date,
                    'stiker' => $this->input->post('stiker')[$i],
                    'leaflet' => $this->input->post('leaflet')[$i],
                    'spanduk' => $this->input->post('spanduk')[$i],
                    'billboard' => $this->input->post('billboard')[$i],
                    'jemensosprek' => $this->input->post('jemensosprek')[$i]
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 7) {
            $url = 'sim/add';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polda_id' => $this->input->post('polda_id')[$i],
                    'date' => $date,
                    'baru_a' => $this->input->post('baru_a')[$i],
                    'baru_c' => $this->input->post('baru_c')[$i],
                    'baru_c1' => $this->input->post('baru_c1')[$i],
                    'baru_c2' => $this->input->post('baru_c2')[$i],
                    'baru_d' => $this->input->post('baru_d')[$i],
                    'baru_d1' => $this->input->post('baru_d1')[$i],



                    'perpanjangan_a' => $this->input->post('perpanjangan_a')[$i],
                    'perpanjangan_au' => $this->input->post('perpanjangan_au')[$i],
                    'perpanjangan_c' => $this->input->post('perpanjangan_c')[$i],
                    'perpanjangan_c1' => $this->input->post('perpanjangan_c1')[$i],
                    'perpanjangan_c2' => $this->input->post('perpanjangan_c2')[$i],
                    'perpanjangan_d' => $this->input->post('perpanjangan_d')[$i],
                    'perpanjangan_d1' => $this->input->post('perpanjangan_d1')[$i],
                    'perpanjangan_b1' => $this->input->post('perpanjangan_b1')[$i],
                    'perpanjangan_b1u' => $this->input->post('perpanjangan_b1u')[$i],
                    'perpanjangan_b2' => $this->input->post('perpanjangan_b2')[$i],
                    'perpanjangan_b2u' => $this->input->post('perpanjangan_b2u')[$i],

                    'peningkatan_au' => $this->input->post('peningkatan_au')[$i],
                    'peningkatan_b1' => $this->input->post('peningkatan_b1')[$i],
                    'peningkatan_b1u' => $this->input->post('peningkatan_b1u')[$i],
                    'peningkatan_b2' => $this->input->post('peningkatan_b2')[$i],
                    'peningkatan_b2u' => $this->input->post('peningkatan_b2u')[$i]

                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 8) {
            $url = 'bpkb/add';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polda_id' => $this->input->post('polda_id')[$i],
                    'date' => $date,
                    'baru' => $this->input->post('baru')[$i],
                    'perpanjangan' => $this->input->post('perpanjangan')[$i],
                    'rubentina' => $this->input->post('rubentina')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan == 9) {
            $url = 'ranmor/add';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polda_id' => $this->input->post('polda_id')[$i],
                    'date' => $date,
                    'mobil_penumpang' => $this->input->post('mobil_penumpang')[$i],
                    'mobil_barang' => $this->input->post('mobil_barang')[$i],
                    'mobil_bus' => $this->input->post('mobil_bus')[$i],
                    'ransus' => $this->input->post('ransus')[$i],
                    'sepeda_motor' => $this->input->post('sepeda_motor')[$i],
                ];

                array_push($value, $object);
            }
        } else if ($jenis_laporan ==  10) {
            $url =  'stnk/add';
            for ($i = 0; $i < $max_loop; $i++) {
                $object = (object) [
                    'polda_id' => $this->input->post('polda_id')[$i],
                    'date' => $date,
                    'baru' => $this->input->post('baru')[$i],
                    'perpanjangan' => $this->input->post('perpanjangan')[$i],
                    'rubentina' => $this->input->post('rubentina')[$i],
                ];

                array_push($value, $object);
            }
        }


        $data = guzzle_request('POST', $url, [
            'json' => [
                'value' => $value
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

    public function storePolres()
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input = $this->input->post();

        $polda_id = $this->session->userdata['polda_id'];
        $polres_id = $this->session->userdata['polres_id'];

        // $polda_id = $this->input->post('polda_id');
        // $date = $this->input->post('date');
        // $polres_id = $this->input->post('polres_id');
        $jenis_laporan = $this->input->post('jenis_laporan');
        $url = '';

        if ($jenis_laporan == 1) {
            // Data Dakgar lantas

            $url = 'laka_langgar/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'capture_camera',
                    'contents' => $input['capture_camera'][0]
                ],
                [
                    'name' => 'statis',
                    'contents' => $input['statis'][0]
                ],
                [
                    'name' => 'mobile',
                    'contents' => $input['mobile'][0]
                ],
                [
                    'name' => 'online',
                    'contents' => $input['online'][0]
                ],
                [
                    'name' => 'posko',
                    'contents' => $input['posko'][0]
                ],
                [
                    'name' => 'preemtif',
                    'contents' => $input['preemtif'][0]
                ],
                [
                    'name' => 'odol_227',
                    'contents' => $input['odol_227'][0]
                ],
                [
                    'name' => 'odol_307',
                    'contents' => $input['odol_307'][0]
                ]
            ];
        } else if ($jenis_laporan == 2) {
            // Data pelanggaran konvensional

            $url = 'garlantas/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'pelanggaran_berat',
                    'contents' => $input['pelanggaran_berat'][0]
                ],
                [
                    'name' => 'pelanggaran_ringan',
                    'contents' => $input['pelanggaran_ringan'][0]
                ],
                [
                    'name' => 'pelanggaran_sedang',
                    'contents' => $input['pelanggaran_sedang'][0]
                ]
            ];
        } else if ($jenis_laporan == 3) {
            // Data laka lantas

            $url = 'laka_lantas/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'meninggal_dunia',
                    'contents' => $input['meninggal_dunia'][0]
                ],
                [
                    'name' => 'luka_berat',
                    'contents' => $input['luka_berat'][0]
                ],
                [
                    'name' => 'luka_ringan',
                    'contents' => $input['luka_ringan'][0]
                ],
                [
                    'name' => 'kerugian_material',
                    'contents' => $input['kerugian_material'][0]
                ]
            ];
        } else if ($jenis_laporan == 4) {
            $url = 'turjagwali/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'penjagaan',
                    'contents' => $input['penjagaan'][0]
                ],
                [
                    'name' => 'pengawalan',
                    'contents' => $input['pengawalan'][0]
                ],
                [
                    'name' => 'patroli',
                    'contents' => $input['patroli'][0]
                ],
                [
                    'name' => 'pengaturan',
                    'contents' => $input['pengaturan'][0]
                ]
            ];
        } else if ($jenis_laporan == 5) {
            $url = 'dikmaslantas/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'media_cetak',
                    'contents' => $input['media_cetak'][0]
                ],
                [
                    'name' => 'media_elektronik',
                    'contents' => $input['media_elektronik'][0]
                ],
                [
                    'name' => 'media_sosial',
                    'contents' => $input['media_sosial'][0]
                ],
                [
                    'name' => 'laka_langgar',
                    'contents' => $input['laka_langgar'][0]
                ]
            ];
        } else if ($jenis_laporan == 6) {
            $url = 'penyebaran/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'stiker',
                    'contents' => $input['stiker'][0]
                ],
                [
                    'name' => 'leaflet',
                    'contents' => $input['leaflet'][0]
                ],
                [
                    'name' => 'spanduk',
                    'contents' => $input['spanduk'][0]
                ],
                [
                    'name' => 'billboard',
                    'contents' => $input['billboard'][0]
                ],
                [
                    'name' => 'jemensosprek',
                    'contents' => $input['jemensosprek'][0]
                ]
            ];
        } else if ($jenis_laporan == 7) {
            $url = 'sim/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'baru',
                    'contents' => $input['baru'][0]
                ],
                [
                    'name' => 'perpanjangan',
                    'contents' => $input['perpanjangan'][0]
                ]
            ];
        } else if ($jenis_laporan == 8) {
            $url = 'bpkb/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'baru',
                    'contents' => $input['baru'][0]
                ],
                [
                    'name' => 'perpanjangan',
                    'contents' => $input['perpanjangan'][0]
                ],
                [
                    'name' => 'rubentina',
                    'contents' => $input['rubentina'][0]
                ]
            ];
        } else if ($jenis_laporan == 9) {
            $url = 'ranmor/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'mobil_penumpang',
                    'contents' => $input['mobil_penumpang'][0]
                ],
                [
                    'name' => 'mobil_barang',
                    'contents' => $input['mobil_barang'][0]
                ],
                [
                    'name' => 'mobil_bus',
                    'contents' => $input['mobil_bus'][0]
                ],
                [
                    'name' => 'ransus',
                    'contents' => $input['ransus'][0]
                ],
                [
                    'name' => 'sepeda_motor',
                    'contents' => $input['sepeda_motor'][0]
                ]
            ];
        } else if ($jenis_laporan ==  10) {
            $url =  'stnk/add';
            $dummy = [
                [
                    'name' => 'polda_id',
                    'contents' => $polda_id
                ],
                [
                    'name' => 'date',
                    'contents' => $input['date']
                ],
                [
                    'name' => 'polres_id',
                    'contents' => $polres_id
                ],
                [
                    'name' => 'baru',
                    'contents' => $input['baru'][0]
                ],
                [
                    'name' => 'perpanjangan',
                    'contents' => $input['perpanjangan'][0]
                ],
                [
                    'name' => 'rubentina',
                    'contents' => $input['rubentina'][0]
                ]

            ];
        }

        $data = guzzle_request('POST', $url, [
            'multipart' => $dummy,
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


    // public function storePolda()
    // {

    //     $headers = [
    //         'Authorization' => $this->session->userdata['token'],
    //     ];

    //     $polda_id = $this->input->post('polda_id');
    //     $date = $this->input->post('date');
    //     $polres_id = $this->input->post('polres_id');
    //     $jenis_laporan = $this->input->post('jenis_laporan');
    //     $value = [];
    //     $url = '';


    //     $max_loop = count($this->input->post('polres_id'));

    //     if ($jenis_laporan == 1) {
    //         // Data Dakgar lantas

    //         $url = 'laka_langgar/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {
    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'capture_camera' => $this->input->post('capture_camera')[$i],
    //                 'statis' => $this->input->post('statis')[$i],
    //                 'mobile' => $this->input->post('mobile')[$i],
    //                 'online' => $this->input->post('online')[$i],
    //                 'posko' => $this->input->post('posko')[$i],
    //                 'preemtif' => $this->input->post('preemtif')[$i],
    //                 'preventif' => $this->input->post('preventif')[$i],
    //                 'odol_227' => $this->input->post('odol_227')[$i],
    //                 'odol_307' => $this->input->post('odol_307')[$i]
    //             ];
    //             array_push($value, $object);
    //         }
    //     } else if ($jenis_laporan == 2) {
    //         // Data pelanggaran konvensional

    //         $url = 'garlantas/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {

    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'pelanggaran_berat' => $this->input->post('pelanggaran_berat')[$i],
    //                 'pelanggaran_ringan' => $this->input->post('pelanggaran_ringan')[$i],
    //                 'pelanggaran_sedang' => $this->input->post('pelanggaran_sedang')[$i],
    //                 'teguran' => $this->input->post('teguran')[$i]
    //             ];

    //             array_push($value, $object);
    //         }
    //     } else if ($jenis_laporan == 3) {
    //         // Data laka lantas

    //         $url = 'laka_lantas/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {
    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'meninggal_dunia' => $this->input->post('meninggal_dunia')[$i],
    //                 'luka_berat' => $this->input->post('luka_berat')[$i],
    //                 'luka_ringan' => $this->input->post('luka_ringan')[$i],
    //                 'kerugian_material' => $this->input->post('kerugian_material')[$i]
    //             ];

    //             array_push($value, $object);
    //         }
    //     } else if ($jenis_laporan == 4) {
    //         $url = 'turjagwali/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {
    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'penjagaan' => $this->input->post('penjagaan')[$i],
    //                 'pengawalan' => $this->input->post('pengawalan')[$i],
    //                 'patroli' => $this->input->post('patroli')[$i],
    //                 'pengaturan' => $this->input->post('pengaturan')[$i],
    //             ];

    //             array_push($value, $object);
    //         }
    //     } else if ($jenis_laporan == 5) {
    //         $url = 'dikmaslantas/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {
    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'media_cetak' => $this->input->post('media_cetak')[$i],
    //                 'media_elektronik' => $this->input->post('media_elektronik')[$i],
    //                 'media_sosial' => $this->input->post('media_sosial')[$i],
    //                 'laka_langgar' => $this->input->post('laka_langgar')[$i],
    //             ];

    //             array_push($value, $object);
    //         }
    //     } else if ($jenis_laporan == 6) {
    //         $url = 'penyebaran/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {
    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'stiker' => $this->input->post('stiker')[$i],
    //                 'leaflet' => $this->input->post('leaflet')[$i],
    //                 'spanduk' => $this->input->post('spanduk')[$i],
    //                 'billboard' => $this->input->post('billboard')[$i],
    //                 'jemensosprek' => $this->input->post('jemensosprek')[$i]
    //             ];

    //             array_push($value, $object);
    //         }
    //     } else if ($jenis_laporan == 7) {
    //         $url = 'sim/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {
    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'baru' => $this->input->post('baru')[$i],
    //                 'perpanjangan' => $this->input->post('perpanjangan')[$i],
    //             ];

    //             array_push($value, $object);
    //         }
    //     } else if ($jenis_laporan == 8) {
    //         $url = 'bpkb/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {
    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'baru' => $this->input->post('baru')[$i],
    //                 'perpanjangan' => $this->input->post('perpanjangan')[$i],
    //                 'rubentina' => $this->input->post('rubentina')[$i],
    //             ];

    //             array_push($value, $object);
    //         }
    //     } else if ($jenis_laporan == 9) {
    //         $url = 'ranmor/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {
    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'mobil_penumpang' => $this->input->post('mobil_penumpang')[$i],
    //                 'mobil_barang' => $this->input->post('mobil_barang')[$i],
    //                 'mobil_bus' => $this->input->post('mobil_bus')[$i],
    //                 'ransus' => $this->input->post('ransus')[$i],
    //                 'sepeda_motor' => $this->input->post('sepeda_motor')[$i],
    //             ];

    //             array_push($value, $object);
    //         }
    //     } else if ($jenis_laporan ==  10) {
    //         $url =  'stnk/add?polda=true';
    //         for ($i = 0; $i < $max_loop; $i++) {
    //             $object = (object) [
    //                 'polres_id' => $this->input->post('polres_id')[$i],
    //                 'baru' => $this->input->post('baru')[$i],
    //                 'perpanjangan' => $this->input->post('perpanjangan')[$i],
    //                 'rubentina' => $this->input->post('rubentina')[$i],
    //             ];

    //             array_push($value, $object);
    //         }
    //     }




    //     $data = guzzle_request('POST', $url, [
    //         'json' => [
    //             'polda_id' => $polda_id,
    //             'date' => $date,
    //             'value' => $value
    //         ],
    //         'headers' => $headers
    //     ]);

    //     if ($data['isSuccess'] == true) {
    //         $res = array(
    //             'status' => true,
    //             'message' => 'Berhasil tambah data.',
    //             'data' => $data
    //         );
    //     } else {
    //         $res = array(
    //             'status' => false,
    //             'message' => 'Gagal tambah data.',
    //             'data' => $data
    //         );
    //     }

    //     echo json_encode($res);
    // }

}
