<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class ImportLaporanMasyarakat extends MY_Controller
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
        $page_content["title"] = "Import Laporan Harian Kegiatan Masyarakat";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else {
            $getPolda = guzzle_request('GET', 'polda', [
                'headers' => ['Authorization' => $this->session->userdata['token']]
            ]);
            $data['getPolda'] = isset($getPolda['data']['data'])?$getPolda['data']['data']:'';
            $page_content["page"] = "inputdata/Korlantas/ImportLaporanMasyarakat_Korlantas";
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
			$structure = 'files/import/masyarakat';
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
                $url = 'import/masyarakat';
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
        $data = $this->M_import->get_datatables_harian_masyarakat($postData);
        echo json_encode($data);
    }

	function rmfile() 
    {
		$id = $this->input->post('id');
		$file_name = $this->input->post('file_name');
        $structure = 'files/import/masyarakat/'.$file_name;

        /**
         * Send request parameter to api
         */
        $url = 'import/rmfilemasy';
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
        $structure = 'files/import/masyarakat/'.$file_name;

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
                $filename = 'Format-Import-Kegiatan-Masyarakat.xlsx';
            break;
        }
        
        $structure = 'files/format/masyarakat/'.$filename;

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
			$structure = 'files/import/masyarakat/';
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
                                 * kegiatanmasyarakat
                                 */
                                
                                $url = 'import/kegiatanmasyarakat';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'polda_id'=>$B,
                                    // 'polres_name'=>$B,
                                    'date'=>$tanggal,
                                    'tegur_prokes'=>$C,
                                    'masker'=>$D,
                                    'sosial_prokes'=>$E,
                                    'baksos'=>$F
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
