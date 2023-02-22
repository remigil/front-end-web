<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsilain extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model('masterdata/m_fungsilain');
    }

    public function index()
    {

        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Publikasi - Korlantas";

        $page_content["page"] = "masterdata/Korlantas/Fungsilain/fungsilain_view";

        $page_content["data"] = '';
        $this->templates->loadTemplate($page_content);
    }

    public function edit($id)
    {
        $headers = [
            'Token' => $this->session->userdata['token'],
        ];

        $url = 'fungsilain/getIdWeb/' . $id;

        $result = guzzle_request('GET', $url, []);
        // echo json_encode($result);
        // die;

        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Edit Publikasi";

        $page_content["page"] = "masterdata/Korlantas/Fungsilain/edit_fungsilain";

        $page_content["data"] = [
            'fungsilain' => $result["data"]["data"],
        ];
        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_fungsilain->get_datatables($postData);
        echo json_encode($data);
    }

    public function store()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input = $this->input->post();

        if ($_FILES['logo_fungsi']['name']) {
            $path = $_FILES['logo_fungsi']['tmp_name'];
            $filename = $_FILES['logo_fungsi']['name'];
            $dummy = [
                [
                    'name' => 'logo_fungsi',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'name_fungsi',
                    'contents' => $input['name_fungsi'],
                ],
                [
                    'name' => 'fullname_fungsi',
                    'contents' => $input['fullname_fungsi'],
                ],
                [
                    'name' => 'email_fungsi',
                    'contents' => $input['email_fungsi'],
                ],
                [
                    'name' => 'address_fungsi',
                    'contents' => $input['address_fungsi'],
                ],
                [
                    'name' => 'phone_fungsi',
                    'contents' => $input['phone_fungsi'],
                ],
                [
                    'name' => 'facebook_fungsi',
                    'contents' => $input['facebook_fungsi'],
                ],
                [
                    'name' => 'twitter_fungsi',
                    'contents' => $input['twitter_fungsi'],
                ],
                [
                    'name' => 'instagram_fungsi',
                    'contents' => $input['instagram_fungsi'],
                ],
                [
                    'name' => 'youtube_fungsi',
                    'contents' => $input['youtube_fungsi'],
                ],
                [
                    'name' => 'link_youtube_fungsi',
                    'contents' => $input['link_youtube_fungsi'],
                ],
                [
                    'name' => 'website_fungsi',
                    'contents' => $input['website_fungsi'],
                ],
                [
                    'name' => 'latitude_fungsi',
                    'contents' => $input['latitude_fungsi'],
                ],
                [
                    'name' => 'longitude_fungsi',
                    'contents' => $input['longitude_fungsi'],
                ],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_fungsi',
                    'contents' => $input['name_fungsi'],
                ],
                [
                    'name' => 'fullname_fungsi',
                    'contents' => $input['fullname_fungsi'],
                ],
                [
                    'name' => 'email_fungsi',
                    'contents' => $input['email_fungsi'],
                ],
                [
                    'name' => 'address_fungsi',
                    'contents' => $input['address_fungsi'],
                ],
                [
                    'name' => 'phone_fungsi',
                    'contents' => $input['phone_fungsi'],
                ],
                [
                    'name' => 'facebook_fungsi',
                    'contents' => $input['facebook_fungsi'],
                ],
                [
                    'name' => 'twitter_fungsi',
                    'contents' => $input['twitter_fungsi'],
                ],
                [
                    'name' => 'instagram_fungsi',
                    'contents' => $input['instagram_fungsi'],
                ],
                [
                    'name' => 'youtube_fungsi',
                    'contents' => $input['youtube_fungsi'],
                ],
                [
                    'name' => 'link_youtube_fungsi',
                    'contents' => $input['link_youtube_fungsi'],
                ],
                [
                    'name' => 'website_fungsi',
                    'contents' => $input['website_fungsi'],
                ],
                [
                    'name' => 'latitude_fungsi',
                    'contents' => $input['latitude_fungsi'],
                ],
                [
                    'name' => 'longitude_fungsi',
                    'contents' => $input['longitude_fungsi'],
                ],
            ];
        }


        $data = guzzle_request('POST', 'fungsilain/add', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {

            if ($input['description'][0] != "") {
                for ($i = 0; $i < count($input['description']); $i++) {
                    if ($_FILES['foto']['name'][$i]) {
                        $path = $_FILES['foto']['tmp_name'][$i];
                        $filename = $_FILES['foto']['name'][$i];
                        $dummyDokPub = [

                            [
                                'name' => 'id_fungsilain',
                                'contents' => $data['data']['id'],
                            ],
                            [
                                'name' => 'description',
                                'contents' => $input['description'][$i],
                            ],
                            [
                                'name' => 'foto',
                                'contents' => fopen($path, 'r'),
                                'filename' => $filename
                            ],
                        ];
                    } else {
                        $dummyDokPub = [
                            [
                                'name' => 'id_fungsilain',
                                'contents' => $data['data']['id'],
                            ],
                            [
                                'name' => 'description',
                                'contents' => $input['description'][$i],
                            ],
                        ];
                    }
                    $dataDokPub = guzzle_request('POST', 'dokumenfungsilain/add', [
                        'multipart' => $dummyDokPub,
                        'headers' => $headers
                    ]);
                    // echo json_encode($dataDokPub);
                    // die;
                }
            } else {
                $res = array(
                    'status' => false,
                    'message' => 'Gagal tambah Dokumen Publikasi. Wajib Di isi!',
                    'data' => null
                );
                echo json_encode($res);
                die;
            }


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

    public function storeUpdate()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input = $this->input->post();
        if ($_FILES['logo_fungsi']['name']) {
            $path = $_FILES['logo_fungsi']['tmp_name'];
            $filename = $_FILES['logo_fungsi']['name'];
            $dummy = [
                [
                    'name' => 'logo_fungsi',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename
                ],
                [
                    'name' => 'name_fungsi',
                    'contents' => $input['name_fungsi'],
                ],
                [
                    'name' => 'fullname_fungsi',
                    'contents' => $input['fullname_fungsi'],
                ],
                [
                    'name' => 'email_fungsi',
                    'contents' => $input['email_fungsi'],
                ],
                [
                    'name' => 'address_fungsi',
                    'contents' => $input['address_fungsi'],
                ],
                [
                    'name' => 'phone_fungsi',
                    'contents' => $input['phone_fungsi'],
                ],
                [
                    'name' => 'facebook_fungsi',
                    'contents' => $input['facebook_fungsi'],
                ],
                [
                    'name' => 'twitter_fungsi',
                    'contents' => $input['twitter_fungsi'],
                ],
                [
                    'name' => 'instagram_fungsi',
                    'contents' => $input['instagram_fungsi'],
                ],
                [
                    'name' => 'youtube_fungsi',
                    'contents' => $input['youtube_fungsi'],
                ],
                [
                    'name' => 'link_youtube_fungsi',
                    'contents' => $input['link_youtube_fungsi'],
                ],
                [
                    'name' => 'website_fungsi',
                    'contents' => $input['website_fungsi'],
                ],
                [
                    'name' => 'latitude_fungsi',
                    'contents' => $input['latitude_fungsi'],
                ],
                [
                    'name' => 'longitude_fungsi',
                    'contents' => $input['longitude_fungsi'],
                ],
            ];
        } else {
            $dummy = [
                [
                    'name' => 'name_fungsi',
                    'contents' => $input['name_fungsi'],
                ],
                [
                    'name' => 'fullname_fungsi',
                    'contents' => $input['fullname_fungsi'],
                ],
                [
                    'name' => 'email_fungsi',
                    'contents' => $input['email_fungsi'],
                ],
                [
                    'name' => 'address_fungsi',
                    'contents' => $input['address_fungsi'],
                ],
                [
                    'name' => 'phone_fungsi',
                    'contents' => $input['phone_fungsi'],
                ],
                [
                    'name' => 'facebook_fungsi',
                    'contents' => $input['facebook_fungsi'],
                ],
                [
                    'name' => 'twitter_fungsi',
                    'contents' => $input['twitter_fungsi'],
                ],
                [
                    'name' => 'instagram_fungsi',
                    'contents' => $input['instagram_fungsi'],
                ],
                [
                    'name' => 'youtube_fungsi',
                    'contents' => $input['youtube_fungsi'],
                ],
                [
                    'name' => 'link_youtube_fungsi',
                    'contents' => $input['link_youtube_fungsi'],
                ],
                [
                    'name' => 'website_fungsi',
                    'contents' => $input['website_fungsi'],
                ],
                [
                    'name' => 'latitude_fungsi',
                    'contents' => $input['latitude_fungsi'],
                ],
                [
                    'name' => 'longitude_fungsi',
                    'contents' => $input['longitude_fungsi'],
                ],
            ];
        }


        // TAMBAH DATA
        if ($input['description'][0] != "") {
            for ($i = 0; $i < count($input['description']); $i++) {
                if ($_FILES['foto']['name'][$i]) {
                    $path = $_FILES['foto']['tmp_name'][$i];
                    $filename = $_FILES['foto']['name'][$i];
                    $dummyDokPub = [

                        [
                            'name' => 'id_fungsilain',
                            'contents' => $input["id"],
                        ],
                        [
                            'name' => 'description',
                            'contents' => $input['description'][$i],
                        ],
                        [
                            'name' => 'foto',
                            'contents' => fopen($path, 'r'),
                            'filename' => $filename
                        ],
                    ];
                } else {
                    $dummyDokPub = [
                        [
                            'name' => 'id_fungsilain',
                            'contents' => $input["id"],
                        ],
                        [
                            'name' => 'description',
                            'contents' => $input['description'][$i],
                        ],
                    ];
                }
                $dataDokPub = guzzle_request('POST', 'dokumenfungsilain/add', [
                    'multipart' => $dummyDokPub,
                    'headers' => $headers
                ]);
                // echo json_encode($dataDokPub);
                // die;
            }
        }


        // Edit DATA
        if ($input['descriptionEdit'][0] != "") {
            for ($i = 0; $i < count($input['descriptionEdit']); $i++) {
                if ($_FILES['fotoEdit']['name'][$i]) {
                    $path = $_FILES['fotoEdit']['tmp_name'][$i];
                    $filename = $_FILES['fotoEdit']['name'][$i];
                    $dummyDokPubEdit = [
                        [
                            'name' => 'id_fungsilain',
                            'contents' => $input["id"],
                        ],
                        [
                            'name' => 'description',
                            'contents' => $input['descriptionEdit'][$i],
                        ],
                        [
                            'name' => 'foto',
                            'contents' => fopen($path, 'r'),
                            'filename' => $filename
                        ],
                    ];
                } else {
                    $dummyDokPubEdit = [
                        [
                            'name' => 'id_fungsilain',
                            'contents' => $input["id"],
                        ],
                        [
                            'name' => 'description',
                            'contents' => $input['descriptionEdit'][$i],
                        ],
                    ];
                }
                $dataDokPubEdit = guzzle_request('PUT', 'dokumenfungsilain/edit/' . $input['idDokumenEdit'][$i] . '', [
                    'multipart' => $dummyDokPubEdit,
                    'headers' => $headers
                ]);
                // echo json_encode($dataDokPubEdit);
                // die;
            }
        }


        $data = guzzle_request('PUT', 'fungsilain/edit/' . $input["id"] . '', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil edit data.',
                'data' => $data,
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal edit data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function hapus()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'fungsilain/delete', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);


        if ($data['isSuccess'] == true) {
            $results = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        } else {
            $results = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }

        echo json_encode($results);
    }

    public function hapusDokumen()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $id = $this->input->post('id');

        $dummy = [
            [
                'name' => 'id',
                'contents' => $id,
            ]
        ];

        $data = guzzle_request('DELETE', 'dokumenfungsilain/delete', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);


        if ($data['isSuccess'] == true) {
            $results = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        } else {
            $results = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }

        echo json_encode($results);
    }



}