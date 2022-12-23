<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class ImportLaporanNtmc extends MY_Controller
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
        $page_content["title"] = "Import Laporan NTMC";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else {
            $page_content["page"] = "inputdata/Korlantas/ImportLaporanNtmc_Korlantas";
        }

        $page_content["data"] = array();
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
            $jenis_satker = $this->input->post('jenis_satker');
            $jenis_laporan = $this->input->post('jenis_laporan');
            $tanggal = $this->input->post('date');
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
			$structure = 'files/import/ntmc';
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
                $url = 'import/ntmc';
                $data = guzzle_request('POST', $url, [
                    'json' => [
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
        $data = $this->M_import->get_datatables_ntmc($postData);
        echo json_encode($data);
    }

	function rmfile() 
    {
		$id = $this->input->post('id');
		$file_name = $this->input->post('file_name');
        $structure = 'files/import/ntmc/'.$file_name;

        /**
         * Send request parameter to api
         */
        $url = 'import/rmfilentmc';
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
        $structure = 'files/import/ntmc/'.$file_name;

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
                $filename = 'Format-Import-Ntmc-Dokumentasi-Media-TV.xlsx';
            break;
            case '2':
                $filename = 'Format-Import-Ntmc-Media-Facebook.xlsx';
            break;
            case '3':
                $filename = 'Format-Import-Ntmc-Media-Instagram.xlsx';
            break;
            case '4':
                $filename = 'Format-Import-Ntmc-Media-Portal-Online.xlsx';
            break;
            case '5':
                $filename = 'Format-Import-Ntmc-Media-Sosial-Ntmc.xlsx';
            break;
            case '6':
                $filename = 'Format-Import-Ntmc-Media-Twitter.xlsx';
            break;
            case '7':
                $filename = 'Format-Import-Ntmc-Off-Air-Program.xlsx';
            break;
            case '8':
                $filename = 'Format-Import-Ntmc-On-Air-Program-Media-Sosial.xlsx';
            break;
            case '9':
                $filename = 'Format-Import-Ntmc-On-Air-Program-Online.xlsx';
            break;
            case '10':
                $filename = 'Format-Import-Ntmc-On-Air-Program-TV.xlsx';
            break;
            case '11':
                $filename = 'Format-Import-Ntmc-On-Air-Radio-Ntmc.xlsx';
            break;
            case '12':
                $filename = 'Format-Import-Ntmc-Pengaduan.xlsx';
            break;
        }
        
        $structure = 'files/format/ntmc/'.$filename;

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
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');
		$file_name = $this->input->post('file_name');
		$type = $this->input->post('type');
		$message = '';

		if ($status=='0') {
			$structure = 'files/import/ntmc/';
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
                                 * programtv
                                 */
                                
                                $url = 'import/programtv';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'program'=>$B,
                                    'live_report'=>$C,
                                    'live_program'=>$D,
                                    'tapping'=>$E,
                                    'vlog_cctv'=>$F
                                );

                            }else if($type==2) {
                                
                                /**
                                 * programonline
                                 */

                                $url = 'import/programonline';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'web_ntmc'=>$B,
                                    'web_korlantas'=>$C
                                );

                            }else if($type==3) {
                                
                                /**
                                 * programmedsos
                                 */

                                $url = 'import/programmedsos';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'facebook'=>$B,
                                    'instagram'=>$C,
                                    'twitter'=>$D
                                );

                            }else if($type==4) {
                                
                                /**
                                 * offairprogram
                                 */

                                $url = 'import/offairprogram';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'sosialisasi'=>$B,
                                    'timtam'=>$C
                                );

                            }else if($type==5) {
                                
                                /**
                                 * mediatv
                                 */

                                $url = 'import/mediatv';

                                $B = trim(trim($row['B']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'media_tv'=>$B
                                );

                            }else if($type==6) {
                                
                                /**
                                 * twitter
                                 */

                                $url = 'import/twitter';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'positif_korlantas'=>$B,
                                    'negatif_korlantas'=>$C,
                                    'lakalantas'=>$D,
                                    'positif_polri'=>$E,
                                    'negatif_polri'=>$F,
                                    'liputan'=>$G,
                                    'kategori'=>6
                                );

                            }else if($type==7) {
                                
                                /**
                                 * facebook
                                 */

                                $url = 'import/facebook';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'positif_korlantas'=>$B,
                                    'negatif_korlantas'=>$C,
                                    'lakalantas'=>$D,
                                    'positif_polri'=>$E,
                                    'negatif_polri'=>$F,
                                    'liputan'=>$G,
                                    'kategori'=>7
                                );

                            }else if($type==8) {
                                
                                /**
                                 * portal
                                 */

                                $url = 'import/portal';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'positif_korlantas'=>$B,
                                    'negatif_korlantas'=>$C,
                                    'lakalantas'=>$D,
                                    'positif_polri'=>$E,
                                    'negatif_polri'=>$F,
                                    'liputan'=>$G,
                                    'kategori'=>8
                                );

                            }else if($type==9) {
                                
                                /**
                                 * instagram
                                 */

                                $url = 'import/instagram';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'positif_korlantas'=>$B,
                                    'negatif_korlantas'=>$C,
                                    'lakalantas'=>$D,
                                    'positif_polri'=>$E,
                                    'negatif_polri'=>$F,
                                    'liputan'=>$G,
                                    'kategori'=>9
                                );

                            }else if($type==10) {
                                
                                /**
                                 * sosial
                                 */

                                $url = 'import/sosial';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'facebook'=>$B,
                                    'twitter'=>$C
                                );

                            }else if($type==11) {
                                
                                /**
                                 * radio
                                 */

                                $url = 'import/radio';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'gen_fm'=>$B,
                                    'jak_fm'=>$C,
                                    'most_fm'=>$D,
                                    'kiss_fm'=>$E
                                );

                            }else if($type==12) {
                                
                                /**
                                 * pengaduan
                                 */

                                $url = 'import/pengaduan';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));

                                $raws[] = array(
                                    'date'=>$tanggal,
                                    'radio_pjr'=>$B,
                                    'sms_9119'=>$C,
                                    'wa_center'=>$D,
                                    'call_center'=>$E
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
