<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsisatker extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("logged_helper");
		$this->load->model('masterdata/m_fungsisatker');
	}

	public function index()
	{

		$headers = [
			'Token' => $this->session->userdata['token'],
		];

		$page_content["css"] = '';
		$page_content["js"] = '';
		$page_content["title"] = "Satker Mabes - Korlantas";

		$page_content["page"] = "masterdata/Korlantas/Fungsisatker/fungsisatker_view";

		$page_content["data"] = '';
		$this->templates->loadTemplate($page_content);
	}

	public function edit($id)
	{

		$url = 'fungsisatker/getIdWeb/' . $id;
		$urldokumen = 'dokumenfungsisatker/getbyidfungsi/' . $id;
		$urllayanan = 'layananfungsisatker/getbyidfungsi/' . $id;

		$result = guzzle_request('GET', $url, []);
		$resultdokumen = guzzle_request('GET', $urldokumen, []);
		$resultlayanan = guzzle_request('GET', $urllayanan, []);

		$page_content["css"] = '';
		$page_content["js"] = '';
		$page_content["title"] = "Edit Satker Mabes";

		$page_content["page"] = "masterdata/Korlantas/Fungsisatker/edit_fungsisatker";

		$page_content["data"] = [
			'fungsisatker' => $result,
			'dokumenfungsisatker' => $resultdokumen,
			'layananfungsisatker' => $resultlayanan,
		];
		$this->templates->loadTemplate($page_content);
	}

	public function serverSideTable()
	{
		$postData = $this->input->post();
		$data = $this->m_fungsisatker->get_datatables($postData);
		echo json_encode($data);
	}

	public function store()
	{
		$headers = [
			'Authorization' => $this->session->userdata['token'],
		];
		$input = $this->input->post();
		$dummy = [
			[
				'name' => 'name_satker',
				'contents' => $input['name_satker'],
			],
			[
				'name' => 'fullname_satker',
				'contents' => $input['fullname_satker'],
			],

			[
				'name' => 'email_satker',
				'contents' => $input['email_satker'],
			],
		];


		$data = guzzle_request('POST', 'fungsisatker/add', [
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

		$data = guzzle_request('DELETE', 'fungsisatker/delete', [
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

	public function update()
	{
		$headers = [
			'Authorization' => $this->session->userdata['token'],
		];
		$input = $this->input->post();
		$dummy = [
			[
				'name' => 'name_satker',
				'contents' => $input['name_satker'],
			],
			[
				'name' => 'fullname_satker',
				'contents' => $input['fullname_satker'],
			],
			[
				'name' => 'email_satker',
				'contents' => $input['email_satker'],
			],
		];
		$data = guzzle_request('PUT', 'fungsisatker/edit/' . $input['id'] . '', [
			'multipart' => $dummy,
			'headers' => $headers
		]);


		for ($i = 0; $i < count($input['idlayanan']); $i++) {
			$path = $_FILES['logo_layanan']['tmp_name'][$i];
			$filename[] = $_FILES['logo_layanan']['name'][$i];

			if ($_FILES['logo_layanan']['name'][$i]) {
				$dummylayanan = [
					[
						'name' => 'logo_layanan',
						'contents' => fopen($path, 'r'),
						'filename' => $filename[$i],
					],
					[
						'name' => 'name_layanan',
						'contents' => $input['name_layanan'][$i],
					],
					[
						'name' => 'description',
						'contents' => $input['descriptionlayanan'][$i],
					],
					[
						'name' => 'id_fungsisatker',
						'contents' => $input['id'],
					],
				];
			} else {
				$dummylayanan = [
					[
						'name' => 'name_layanan',
						'contents' => $input['name_layanan'][$i],
					],
					[
						'name' => 'description',
						'contents' => $input['descriptionlayanan'][$i],
					],
					[
						'name' => 'id_fungsisatker',
						'contents' => $input['id'],
					],
				];
			}


			$datalayanan = guzzle_request('PUT', 'layananfungsisatker/edit/' . $input['idlayanan'][$i], [
				'multipart' => $dummylayanan,
				'headers' => $headers
			]);
		}

		if (count($input['iddokumen']) > 0) {
			for ($i = 0; $i < count($input['iddokumen']); $i++) {

				if ($_FILES['file']['name'][$i]) {
					$path = $_FILES['file']['tmp_name'][$i];
					$filename = $_FILES['file']['name'][$i];
					$dummydokumen = [
						[
							'name' => 'file',
							'contents' => fopen($path, 'r'),
							'filename' => $filename,
						],
						[
							'name' => 'description',
							'contents' => $input['descriptiondokumen'][$i],
						],
						[
							'name' => 'id_fungsisatker',
							'contents' => $input['id'],
						],
					];
				} else {
					$dummydokumen = [
						[
							'name' => 'description',
							'contents' => $input['descriptiondokumen'][$i],
						],
						[
							'name' => 'id_fungsisatker',
							'contents' => $input['id'],
						],
					];
				}

				// echo json_encode($dummydokumen);
				// die;

				$datadokumen = guzzle_request('PUT', 'dokumenfungsisatker/edit/' . $input['iddokumen'][$i], [
					'multipart' => $dummydokumen,
					'headers' => $headers
				]);
			}
		}



		echo json_encode($datadokumen);
		die;

		if ($data['isSuccess'] == true) {
			$res = array(
				'status' => true,
				'message' => 'Berhasil edit data.',
				'data' => $data
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
	public function storelayanan()
	{
		$headers = [
			'Authorization' => $this->session->userdata['token'],
		];
		$input = $this->input->post();

		for ($i = 0; $i < count($input['name_layanan']); $i++) {
			$path = $_FILES['logo_layanan']['tmp_name'][$i];
			$filename[] = $_FILES['logo_layanan']['name'][$i];

			if ($_FILES['logo_layanan']['name'][$i]) {
				$dummy = [
					[
						'name' => 'logo_layanan',
						'contents' => fopen($path, 'r'),
						'filename' => $filename[$i],
					],
					[
						'name' => 'name_layanan',
						'contents' => $input['name_layanan'][$i],
					],
					[
						'name' => 'description',
						'contents' => $input['description'][$i],
					],
					[
						'name' => 'id_fungsisatker',
						'contents' => $input['id'],
					],
				];
			} else {
				$dummy = [
					[
						'name' => 'name_layanan',
						'contents' => $input['name_layanan'][$i],
					],
					[
						'name' => 'description',
						'contents' => $input['description'][$i],
					],
					[
						'name' => 'id_fungsisatker',
						'contents' => $input['id'],
					],
				];
			}


			$data = guzzle_request('POST', 'layananfungsisatker/add', [
				'multipart' => $dummy,
				'headers' => $headers
			]);
		}

		// echo json_encode($data);
		// die;

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

	public function hapuslayanan()
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

		$data = guzzle_request('DELETE', 'layananfungsisatker/delete', [
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

	public function storedokumen()
	{
		$headers = [
			'Authorization' => $this->session->userdata['token'],
		];
		$input = $this->input->post();

		for ($i = 0; $i < count($input['description']); $i++) {
			$path = $_FILES['file']['tmp_name'][$i];
			$filename[] = $_FILES['file']['name'][$i];

			if ($_FILES['file']['name'][$i]) {
				$dummy = [
					[
						'name' => 'file',
						'contents' => fopen($path, 'r'),
						'filename' => $filename[$i],
					],
					[
						'name' => 'description',
						'contents' => $input['description'][$i],
					],
					[
						'name' => 'id_fungsisatker',
						'contents' => $input['id'],
					],
				];
			} else {
				$dummy = [
					[
						'name' => 'description',
						'contents' => $input['description'][$i],
					],
					[
						'name' => 'id_fungsisatker',
						'contents' => $input['id'],
					],
				];
			}


			$data = guzzle_request('POST', 'dokumenfungsisatker/add', [
				'multipart' => $dummy,
				'headers' => $headers
			]);
		}

		// echo json_encode($data);
		// die;

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

	public function hapusdokumen()
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

		$data = guzzle_request('DELETE', 'dokumenfungsisatker/delete', [
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