<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class ImportLaporanHarian extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("logged_helper");
        $this->load->model("inputdata/M_import");
		$this->load->library('phpexcel');
		$this->load->helper('download');
    }

    public function index()
    {
        $page_content["css"] = '';
        $page_content["js"] = '';
        $page_content["title"] = "Import Laporan Harian";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else if ($this->session->userdata['role'] == 'Korlantas') {
            $getPolda = guzzle_request('GET', 'polda', [
                'headers' => $this->_headers
            ]);
            $data['getPolda'] = $getPolda['data']['data'];
            $page_content["page"] = "inputdata/Korlantas/ImportData_Korlantas";
        } else if ($this->session->userdata['role'] == 'Kapolda') {
            $page_content["page"] = "inputdata/Kapolda/ImportData_Kapolda";
        } else if ($this->session->userdata['role'] == 'Polres') {
            $page_content["page"] = "inputdata/Polres/ImportData_Polres";
        }

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
    }

    public function getPolres()
    {
        $id = $this->input->post('polda_id');
        $getDetail = guzzle_request('GET', 'polres/getPolda/' . $id . '', [
            'headers' => $this->_headers
        ]);
        $results = $getDetail['data']['data'];
        echo json_encode($results);
    }

    /**
     * Function Import
     */
	function uploadFile()
	{
		if (isset($_FILES)) {

            /**
             * Parameter
             */
            $polda_id = $this->input->post('polda_id');
            $jenis_satker = $this->input->post('jenis_satker');
            $jenis_laporan = $this->input->post('jenis_laporan');
            $tanggal = $this->input->post('date');
            $polda_name = strtoupper(str_replace(' ','-',$this->input->post('polda_name')));
            $jenis_satker_name = strtoupper(str_replace(' ','-',$this->input->post('jenis_satker_name')));
            $jenis_laporan_name = strtoupper(str_replace(' ','-',$this->input->post('jenis_laporan_name')));

            /**
             * Get file and rename
             */
			$filename = $_FILES['userfile']['name'];
			$file_ext = pathinfo($filename,PATHINFO_EXTENSION);
			$rename = 'DAILY-REPORT-'.$polda_name.'-'.$jenis_satker_name.'-'.$jenis_laporan_name.'-'.$tanggal.'.'.$file_ext;

            /**
             * Set direktori and config uploaded file
             */
			$structure = 'files/import';
			$config['upload_path'] = $structure;
			$config['allowed_types'] = 'xlsx';
			$config['max_size']	= '100';
			$config['file_name'] = $rename;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload()) {
				$return = array('status'=>false,'message'=>$this->upload->display_errors('',''));

			} else {
				$upload_data = $this->upload->data();

                /**
                 * Send request parameter to api
                 */
                $url = 'import/file';
                $data = guzzle_request('POST', $url, [
                    'json' => [
                        'polda_id' => $polda_id,
                        'jenis_satker' => $jenis_satker,
                        'jenis_laporan' => $jenis_laporan,
                        'tanggal' => $tanggal,
                        'file_name' => $upload_data['file_name'],
                        'file_client_name' => $upload_data['client_name'],
                        'file_ext' => $upload_data['file_ext'],
                        'file_type' => $upload_data['file_type'],
                        'status' => '0',
                        'imported_by' => $this->session->userdata('id')
                    ],
                    'headers' => $this->_headers
                ]);

                /**
                 * Respon 
                 */
                if ($data['isSuccess'] == true) {
                    $return = array(
                        'status' => true,
                        'message' => 'File uploaded successfully',
                        'data' => $data
                    );
                } else {
                    $return = array(
                        'status' => false,
                        'message' => 'File failed to upload',
                        'data' => $data
                    );
                }
			}
		} else {
			$return = array('status'=>false,'message'=>'Please Select a File !');
		}
		echo json_encode($return);		
	}

    public function listof_import_file()
    {
        $postData = $this->input->post();
        $data = $this->M_import->get_datatables($postData);
        echo json_encode($data);
    }

	function dakgarlantas()
	{
		$id = $this->input->post('id');
		$polda_id = $this->input->post('polda_id');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');
		$file_name = $this->input->post('file_name');
		$message = '';

		if ($status=='0') {
			$structure = 'files/import/';
			$file_name = $structure.$file_name;

			try {
				$inputFileType  = PHPExcel_IOFactory::identify($file_name);
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);
				$objReader->setReadDataOnly(false);
				$objPHPExcel = $objReader->load($file_name);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				$file_exists = true;
			} catch (Exception $e) {
				$file_exists = false;
			}

			if ($file_exists) {
				$raws = array();
				$i=0;
				foreach($sheetData as $row){
					if($i>0){
						if (strtoupper(((isset($row['B']))?((trim($row['B'])=='')?NULL:$row['B']):NULL))!=NULL) {
							
							$B = trim(trim($row['B']));
							$C = trim(trim($row['C']));
							$D = trim(trim($row['D']));
							$E = trim(trim($row['E']));
							$F = trim(trim($row['F']));
							$G = trim(trim($row['G']));
							$H = trim(trim($row['H']));
							$I = trim(trim($row['I']));
							$J = trim(trim($row['J']));
							$K = trim(trim($row['K']));

                            $raws[] = array(
                                'polda_id'=>$polda_id,
                                'polres_name'=>$B,
                                'date'=>$tanggal,
                                'capture_camera'=>$C,
                                'statis'=>$D,
                                'mobile'=>$E,
                                'online'=>$F,
                                'posko'=>$G,
                                'preemtif'=>$H,
                                'preventif'=>$I,
                                'odol_227'=>$J,
                                'odol_307'=>$K
                            );
						}						
					}
					$i++;
				}

                /**
                 * Send request parameter to api
                 */
                $url = 'import/dakgarlantas';
                $data = guzzle_request('POST', $url, [
                    'json' => [
                        'source_id' => $id,
                        'value' => $raws
                    ],
                    'headers' => $this->_headers
                ]);

                /**
                 * Respon 
                 */
                if ($data['isSuccess'] == true) {
                    $return = array(
                        'status' => true,
                        'message' => 'File uploaded successfully',
                        'data' => $data
                    );
                } else {
                    $return = array(
                        'status' => false,
                        'message' => 'File failed to upload',
                        'data' => $data
                    );
                }

			} else {
                $return = array('status'=>false,'message'=>'File does not exist !');
			}

		} else {
            $return = array('status'=>false,'message'=>'This file has been processed !');
		}

		echo json_encode($return);		

	}

	function rmfile() 
    {
		$id = $this->input->post('id');
		$file_name = $this->input->post('file_name');
        $structure = 'files/import/'.$file_name;

        /**
         * Send request parameter to api
         */
        $url = 'import/rmfile';
        $data = guzzle_request('POST', $url, [
            'json' => [
                'id' => $id
            ],
            'headers' => $this->_headers
        ]);

        /**
         * Respon 
         */
        if ($data['isSuccess'] == true) {
            @unlink($structure);
            $return = array(
                'status' => true,
                'message' => 'Successfully deleted'
            );
        } else {
            $return = array(
                'status' => false,
                'message' => 'Failed to delete'
            );
        }
		echo json_encode($return);		
	}

	function view()
	{
		$file_name = $this->uri->segment('4');
        $structure = 'files/import/'.$file_name;

        if(file_exists($structure)){
            $data = file_get_contents($structure);
            force_download($file_name, $data);
            $return = array(
                'status' => true,
                'message' => 'Successfully downloaded'
            );
        } else {
            $return = array(
                'status' => false,
                'message' => 'File not found'
            );
        }
		echo json_encode($return);		
	}

    public function process()
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
        $max_loop = count($this->input->post('polres_id'));
        if ($jenis_laporan == 1) {
            // Data Dakgar lantas

            $url = 'laka_langgar/add?polda=true';
            for ($i = 0; $i < $max_loop; $i++) {

                $object = (object) [
                    'polres_id' => $this->input->post('polres_id')[$i],
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
            ]
        ];

        
        $data = guzzle_request('POST', $url, [
            'json' => [
                'polda_id' => $polda_id,
                'date' => $date,
                'value' => $value
            ],
            'headers' => $this->_headers
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
