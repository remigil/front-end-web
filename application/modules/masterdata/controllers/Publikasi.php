<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publikasi extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("logged_helper");
		$this->load->model('masterdata/m_publikasi');
	}

	public function index()
	{

		$headers = [
			'Token' => $this->session->userdata['token'],
		];

		$page_content["css"] = '';
		$page_content["js"] = '';
		$page_content["title"] = "Publikasi - Korlantas";

		$page_content["page"] = "masterdata/Korlantas/Publikasi/publikasi_view";

		$page_content["data"] = '';
		$this->templates->loadTemplate($page_content);
	}

	public function edit($id)
	{
		$headers = [
			'Token' => $this->session->userdata['token'],
		];

		$url = 'publikasi/getIdWeb/' . $id;

		$result = guzzle_request('GET', $url, []);
		// echo json_encode($result);
		// die;

		$page_content["css"] = '';
		$page_content["js"] = '';
		$page_content["title"] = "Edit Publikasi";

		$page_content["page"] = "masterdata/Korlantas/Publikasi/edit_publikasi";

		$page_content["data"] = [
			'publikasi' => $result["data"]["data"],
		];
		$this->templates->loadTemplate($page_content);
	}

	public function serverSideTable()
	{
		$postData = $this->input->post();
		$data = $this->m_publikasi->get_datatables($postData);
		echo json_encode($data);
	}

	public function store()
	{
		$headers = [
			'Authorization' => $this->session->userdata['token'],
		];
		$input = $this->input->post();
		// echo json_encode($_FILES['foto']);
		// die;
		$dummy = [
			[
				'name' => 'name_publikasi',
				'contents' => $input['name_publikasi'],
			],
			[
				'name' => 'description_publikasi',
				'contents' => $input['description_publikasi'],
			],
			[
				'name' => 'link_youtube_publikasi',
				'contents' => $input['link_youtube_publikasi'],
			],
		];



		$data = guzzle_request('POST', 'publikasi/add', [
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
								'name' => 'id_publikasi',
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
							[
								'name' => 'link_foto',
								'contents' => $input['link_foto'][$i],
							],
						];
					} else {
						$dummyDokPub = [
							[
								'name' => 'id_publikasi',
								'contents' => $data['data']['id'],
							],
							[
								'name' => 'description',
								'contents' => $input['description'][$i],
							],
							[
								'name' => 'link_foto',
								'contents' => $input['link_foto'][$i],
							],
						];
					}
					$dataDokPub = guzzle_request('POST', 'dokumenpublikasi/add', [
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


			if ($input['link_youtube_publikasiDok'][0] != "") {
				for ($i = 0; $i < count($input['link_youtube_publikasiDok']); $i++) {

					$dummyDokLink = [
						[
							'name' => 'id_publikasi',
							'contents' => $data['data']['id'],
						],
						[
							'name' => 'link_youtube_publikasi',
							'contents' => $input['link_youtube_publikasiDok'][$i],
						],
					];

					$dataDokLink = guzzle_request('POST', 'linkpublikasi/add', [
						'multipart' => $dummyDokLink,
						'headers' => $headers
					]);
					// echo json_encode($dataDokLink);
					// die;
				}
			} else {
				$res = array(
					'status' => false,
					'message' => 'Gagal tambah Link Publikasi. Wajib Di isi!',
					'data' => null
				);
				echo json_encode($res);
				die;
			}

			$res = array(
				'status' => true,
				'message' => 'Berhasil tambah data Tugas.',
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
		$dummy = [
			[
				'name' => 'name_publikasi',
				'contents' => $input['name_publikasi'],
			],
			[
				'name' => 'description_publikasi',
				'contents' => $input['description_publikasi'],
			],

			[
				'name' => 'link_youtube_publikasi',
				'contents' => $input['link_youtube_publikasi'],
			],
		];


		// TAMBAH DATA
		if ($input['description'][0] != "") {
			for ($i = 0; $i < count($input['description']); $i++) {
				if ($_FILES['foto']['name'][$i]) {
					$path = $_FILES['foto']['tmp_name'][$i];
					$filename = $_FILES['foto']['name'][$i];
					$dummyDokPub = [

						[
							'name' => 'id_publikasi',
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
						[
							'name' => 'link_foto',
							'contents' => $input['link_foto'][$i],
						],
					];
				} else {
					$dummyDokPub = [
						[
							'name' => 'id_publikasi',
							'contents' => $input["id"],
						],
						[
							'name' => 'description',
							'contents' => $input['description'][$i],
						],
						[
							'name' => 'link_foto',
							'contents' => $input['link_foto'][$i],
						],
					];
				}
				$dataDokPub = guzzle_request('POST', 'dokumenpublikasi/add', [
					'multipart' => $dummyDokPub,
					'headers' => $headers
				]);
				// echo json_encode($dataDokPub);
				// die;
			}
		}

		// TAMBAH DATA
		if ($input['link_youtube_publikasiDok'][0] != "") {
			for ($i = 0; $i < count($input['link_youtube_publikasiDok']); $i++) {

				$dummyDokLink = [
					[
						'name' => 'id_publikasi',
						'contents' => $input["id"],
					],
					[
						'name' => 'link_youtube_publikasi',
						'contents' => $input['link_youtube_publikasiDok'][$i],
					],
				];

				$dataDokLink = guzzle_request('POST', 'linkpublikasi/add', [
					'multipart' => $dummyDokLink,
					'headers' => $headers
				]);
				// echo json_encode($dataDokLink);
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
							'name' => 'id_publikasi',
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
						[
							'name' => 'link_foto',
							'contents' => $input['link_fotoEdit'][$i],
						],
					];
				} else {
					$dummyDokPubEdit = [
						[
							'name' => 'id_publikasi',
							'contents' => $input["id"],
						],
						[
							'name' => 'description',
							'contents' => $input['descriptionEdit'][$i],
						],
						[
							'name' => 'link_foto',
							'contents' => $input['link_fotoEdit'][$i],
						],
					];
				}
				$dataDokPubEdit = guzzle_request('PUT', 'dokumenpublikasi/edit/' . $input['idDokumenEdit'][$i] . '', [
					'multipart' => $dummyDokPubEdit,
					'headers' => $headers
				]);
				// echo json_encode($dataDokPubEdit);
				// die;
			}
		}


		$data = guzzle_request('PUT', 'publikasi/edit/' . $input["id"] . '', [
			'multipart' => $dummy,
			'headers' => $headers
		]);

		if ($data['isSuccess'] == true) {
			$res = array(
				'status' => true,
				'message' => 'Berhasil edit data Tugas.',
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

		$data = guzzle_request('DELETE', 'publikasi/delete', [
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

		$data = guzzle_request('DELETE', 'dokumenpublikasi/delete', [
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

	public function hapusLink()
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

		$data = guzzle_request('DELETE', 'linkpublikasi/delete', [
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