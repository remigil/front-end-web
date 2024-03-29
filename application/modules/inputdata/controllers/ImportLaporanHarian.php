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
        $page_content["title"] = "Import Laporan Harian Rutin";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else {

            $data['type'] = $this->input->get('type');

            $getPolda = guzzle_request('GET', 'polda', [
                'headers' => ['Authorization' => $this->session->userdata['token']]
            ]);
            $data['getPolda'] = isset($getPolda['data']['data'])?$getPolda['data']['data']:'';
            $page_content["page"] = "inputdata/Korlantas/ImportLaporanHarianRutin_Korlantas";
        }

        $page_content["data"] = $data;
        $this->templates->loadTemplate($page_content);
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
            // $polda_id = $this->input->post('polda_id');
            $jenis_satker = $this->input->post('jenis_satker');
            $jenis_laporan = $this->input->post('jenis_laporan');
            $tanggal = $this->input->post('date');
            // $polda_name = strtoupper(str_replace(' ','-',$this->input->post('polda_name')));
            $jenis_satker_name = strtoupper(str_replace(' ','-',$this->input->post('jenis_satker_name')));
            $jenis_laporan_name = strtoupper(str_replace(' ','-',$this->input->post('jenis_laporan_name')));

            /**
             * Get file and rename
             */
			$filename = $_FILES['userfile']['name'];
			$file_ext = pathinfo($filename,PATHINFO_EXTENSION);
			$rename = $jenis_laporan_name.'-'.'REPORT-'.$jenis_satker_name.'-'.$tanggal.'.'.$file_ext;

            /**
             * Set direktori and config uploaded file
             */
			$structure = 'files/import/harian';
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
                        // 'polda_id' => $polda_id,
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
        $data = $this->M_import->get_datatables_harian($postData);
        echo json_encode($data);
    }

	function rmfile() 
    {
		$id = $this->input->post('id');
		$file_name = $this->input->post('file_name');
        $structure = 'files/import/harian/'.$file_name;

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
        $structure = 'files/import/harian/'.$file_name;

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

	function format()
	{
		$type = $this->uri->segment('4');
        switch ($type) {
            case '1':
                $filename = 'Format-Import-Dakgar-Lantas.xlsx';
            break;
            case '2':
                $filename = 'Format-Import-Pelanggaran-Konvensional.xlsx';
            break;
            case '3':
                $filename = 'Format-Import-Kecelakaan-Lalu-Lintas.xlsx';
            break;
            case '4':
                $filename = 'Format-Import-Turjagwali.xlsx';
            break;
            case '5':
                $filename = 'Format-Import-Dikmaslantas.xlsx';
            break;
            case '6':
                $filename = 'Format-Import-Penyebaran-dan-Pemasangan.xlsx';
            break;
            case '7':
                $filename = 'Format-Import-SIM.xlsx';
            break;
            case '8':
                $filename = 'Format-Import-BPKB.xlsx';
            break;
            case '9':
                $filename = 'Format-Import-RANMOR.xlsx';
            break;
            case '10':
                $filename = 'Format-Import-STNK.xlsx';
            case '11':
                $filename = 'Format-Import-REKALANTAS.xlsx';
            break;
        }
        
        $structure = 'files/format/harian/'.$filename;

        if(file_exists($structure)){
            $data = file_get_contents($structure);
            force_download($filename, $data);
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

	function process()
	{
		$id = $this->input->post('id');
		// $polda_id = $this->input->post('polda_id');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');
		$file_name = $this->input->post('file_name');
		$type = $this->input->post('type');
		$message = '';

		if ($status=='0') {
			$structure = 'files/import/harian/';
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

                            if($type==1) {

                                /**
                                 * dakgarlantas
                                 */
                                
                                $url = 'import/dakgarlantas';

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
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
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

                            }else if($type==2) {
                                
                                /**
                                 * Konvensional
                                 */

                                $url = 'import/konvensional';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date'=>$tanggal,
                                    'pelanggaran_berat'=>$C,
                                    'pelanggaran_sedang'=>$D,
                                    'pelanggaran_ringan'=>$E,
                                    'teguran'=>$F
                                );

                            }else if($type==3) {
                                
                                /**
                                 * Kecelakaan Lalu Lintas
                                 */

                                $url = 'import/lalulintas';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));
                                $H = trim(trim($row['H']));

                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date'=>$tanggal,
                                    'meninggal_dunia'=>$C,
                                    'luka_berat'=>$D,
                                    'luka_ringan'=>$E,
                                    'kerugian_material'=>$F,
                                    'insiden_kecelakaan'=>$G,
                                    'total_korban'=>$H
                                );

                            }else if($type==4) {
                                
                                /**
                                 * Turjagwali
                                 */

                                $url = 'import/turjagwali';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date'=>$tanggal,
                                    'penjagaan'=>$C,
                                    'pengawalan'=>$D,
                                    'patroli'=>$E,
                                    'pengaturan'=>$F
                                );

                            }else if($type==5) {
                                
                                /**
                                 * Dikmaslantas
                                 */

                                $url = 'import/dikmaslantas';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date'=>$tanggal,
                                    'media_cetak'=>$C,
                                    'media_elektronik'=>$D,
                                    'media_sosial'=>$E,
                                    'laka_langgar'=>$F
                                );

                            }else if($type==6) {
                                
                                /**
                                 * Penyebaran/Pemasangan
                                 */

                                $url = 'import/penyebaran';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));

                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date'=>$tanggal,
                                    'stiker'=>$C,
                                    'leaflet'=>$D,
                                    'spanduk'=>$E,
                                    'billboard'=>$F,
                                    'jemensosprek'=>$G
                                );

                            }else if($type==7) {
                                
                                /**
                                 * SIM
                                 */

                                $url = 'import/sim';

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
                                $L = trim(trim($row['L']));
                                $M = trim(trim($row['M']));
                                $N = trim(trim($row['N']));
                                $O = trim(trim($row['O']));
                                $P = trim(trim($row['P']));
                                $Q = trim(trim($row['Q']));
                                $R = trim(trim($row['R']));
                                $S = trim(trim($row['S']));
                                $T = trim(trim($row['T']));
                                $U = trim(trim($row['U']));
                                $V = trim(trim($row['V']));
                                $W = trim(trim($row['W']));
                                $X = trim(trim($row['X']));



                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date' => $tanggal,
                                    'baru_a' => $C,
                                    'baru_c' => $D,
                                    'baru_c1' => $E,
                                    'baru_c2' => $F,
                                    'baru_d' => $G,
                                    'baru_d1' => $H,
                                    'perpanjangan_a' => $I,
                                    'perpanjangan_au' => $J,
                                    'perpanjangan_c' => $K,
                                    'perpanjangan_c1' => $L,
                                    'perpanjangan_c2' => $M,
                                    'perpanjangan_d' => $N,
                                    'perpanjangan_d1' => $O,
                                    'perpanjangan_b1' => $P,
                                    'perpanjangan_b1u' => $Q,
                                    'perpanjangan_b2' => $R,
                                    'perpanjangan_b2u' => $S,

                                    'peningkatan_au' => $T,
                                    'peningkatan_b1' => $U,
                                    'peningkatan_b1u' => $V,
                                    'peningkatan_b2' => $W,
                                    'peningkatan_b2u' => $X,
                                );

                            }else if($type==8) {
                                
                                /**
                                 * BPKB
                                 */

                                $url = 'import/bpkb';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));



                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date'=>$tanggal,
                                    'bbn_1' => $C,
                                    'bbn_2' => $D,
                                    'mutasi_masuk' => $E,
                                    'mutasi_keluar' => $F,
                                    'perubahan_pergantian' => $G,
                                );

                            }else if($type==9) {
                                
                                /**
                                 * RANMOR
                                 */

                                $url = 'import/ranmor';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));

                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date'=>$tanggal,
                                    'mobil_penumpang'=>$C,
                                    'mobil_bus' => $D,
                                    'mobil_barang' => $E,
                                    'sepeda_motor' => $F,
                                    'ransus' => $G
                                );

                            }else if($type==10) {
                                
                                /**
                                 * STNK
                                 */

                                $url = 'import/stnk';

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
                                $L = trim(trim($row['L']));
                                $M = trim(trim($row['M']));
                                $N = trim(trim($row['N']));
                                $O = trim(trim($row['O']));
                                $P = trim(trim($row['P']));

                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date'=>$tanggal,
                                    'bbn_1_r2' => $C,
                                    'bbn_1_r4' => $D,
                                    'perubahan_r2' => $E,
                                    'perubahan_r4' => $F,
                                    'perpanjangan_r2' => $G,
                                    'perpanjangan_r4' => $H,
                                    'mutasi_keluar_r2' => $I,
                                    'mutasi_keluar_r4' => $J,
                                    'mutasi_masuk_r2' => $K,
                                    'mutasi_masuk_r4' => $L,
                                    'pengsahan_r2' => $M,
                                    'pengsahan_r4' => $N,
                                    'samolnas_r2' => $O,
                                    'samolnas_r4' => $P,
                                    
                                );
                            } else if ($type == 11) {
                                /**
                                 * Rekalantas
                                 */

                                $url = 'import/rekalantas';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));

                                $raws[] = array(
                                    'polda_id' => $B,
                                    // 'polres_name'=>$B,
                                    'date' => $tanggal,
                                    'jalan_nasional' => $C,
                                    'jalan_provinsi' => $D,
                                    'lain_lain' => $E,
                                );
                            }
						}						
					}
					$i++;
				}

                /**
                 * Send request parameter to api
                 */

              
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
}
