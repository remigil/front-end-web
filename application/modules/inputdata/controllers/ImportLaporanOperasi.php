<?php

use phpDocumentor\Reflection\Types\Object_;

defined('BASEPATH') or exit('No direct script access allowed');

class ImportLaporanOperasi extends MY_Controller
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
        $page_content["title"] = "Import Laporan Operasi Khusus";

        if ($this->session->userdata['role'] == 'G20') {
            $page_content["page"] = "dashboard/dashboard_g20";
        } else {

            $getPolda = guzzle_request('GET', 'polda', [
                'headers' => $this->_headers
            ]);

            $getOperasi = guzzle_request('GET', 'operation-profile', [
                'headers' => $this->_headers
            ]);

            $data['getPolda'] = $getPolda['data']['data'];
            // $data['getOperasi'] = $getOperasi['data']['data'];
            $page_content["page"] = "inputdata/Korlantas/ImportLaporanOperasiKhusus_Korlantas";
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
            $operasi_id = $this->input->post('operasi_id');
            $jenis_satker = $this->input->post('jenis_satker');
            $jenis_laporan = $this->input->post('jenis_laporan');
            $tanggal = $this->input->post('date');
            $operasi_name = strtoupper(str_replace(' ','-',$this->input->post('operasi_name')));
            $jenis_satker_name = strtoupper(str_replace(' ','-',$this->input->post('jenis_satker_name')));
            $jenis_laporan_name = strtoupper(str_replace(' ','-',$this->input->post('jenis_laporan_name')));

            /**
             * Get file and rename
             */
			$filename = $_FILES['userfile']['name'];
			$file_ext = pathinfo($filename,PATHINFO_EXTENSION);
			$rename = $jenis_laporan_name.'-'.'REPORT-'.$operasi_name.'-'.$jenis_satker_name.'-'.$tanggal.'.'.$file_ext;

            /**
             * Set direktori and config uploaded file
             */
			$structure = 'files/import/operasi';
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
                $url = 'import/operasi';
                $data = guzzle_request('POST', $url, [
                    'json' => [
                        'operasi_id' => $operasi_id,
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
        $data = $this->M_import->get_datatables_operasi($postData);
        echo json_encode($data);
    }

	function rmfile() 
    {
		$id = $this->input->post('id');
		$file_name = $this->input->post('file_name');
        $structure = 'files/import/operasi/'.$file_name;

        /**
         * Send request parameter to api
         */
        $url = 'import/rmfileops';
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
        $structure = 'files/import/operasi/'.$file_name;

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
            break;
        }
        
        $structure = 'files/format/'.$filename;

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
		$operasi_id = $this->input->post('operasi_id');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');
		$file_name = $this->input->post('file_name');
		$type = $this->input->post('type');
		$message = '';

		if ($status=='0') {
			$structure = 'files/import/operasi/';
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
                                 * langgarlantas
                                 */
                                
                                $url = 'import/langgarlantas';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));
                                $H = trim(trim($row['H']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'statis'=>$C,
                                    'mobile'=>$D,
                                    'teguran'=>$E,
                                    'pelanggaran_berat'=>$F,
                                    'pelanggaran_sedang'=>$G,
                                    'pelanggaran_ringan'=>$H
                                );

                            }else if($type==2) {
                                
                                /**
                                 * langgarmotor
                                 */

                                $url = 'import/langgarmotor';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));
                                $H = trim(trim($row['H']));
                                $I = trim(trim($row['I']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'tanpa_helm'=>$C,
                                    'lawan_arus'=>$D,
                                    'bermain_hp'=>$E,
                                    'pengaruh_alkohol'=>$F,
                                    'max_kecepatan'=>$G,
                                    'dibawah_umur'=>$H,
                                    'lain_lain'=>$I
                                );

                            }else if($type==3) {
                                
                                /**
                                 * langgarmobil
                                 */

                                $url = 'import/langgarmobil';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));
                                $H = trim(trim($row['H']));
                                $I = trim(trim($row['I']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'lawan_arus'=>$C,
                                    'bermain_hp'=>$D,
                                    'pengaruh_alkohol'=>$E,
                                    'max_kecepatan'=>$F,
                                    'dibawah_umur'=>$G,
                                    'tanpa_sabuk'=>$H,
                                    'lain_lain'=>$I
                                );

                            }else if($type==4) {
                                
                                /**
                                 * barangbukti
                                 */

                                $url = 'import/barangbukti';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'sim'=>$C,
                                    'stnk'=>$D,
                                    'kendaraan_bermotor'=>$E
                                );

                            }else if($type==5) {
                                
                                /**
                                 * kendaraanterlibat
                                 */

                                $url = 'import/kendaraanterlibat';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'sepeda_motor'=>$C,
                                    'mobil_penumpang'=>$D,
                                    'bus'=>$E,
                                    'mobil_barang'=>$F,
                                    'ransus'=>$G
                                );

                            }else if($type==6) {
                                
                                /**
                                 * profesipelaku
                                 */

                                $url = 'import/profesipelaku';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));
                                $H = trim(trim($row['H']));
                                $I = trim(trim($row['I']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'pns'=>$C,
                                    'karyawan'=>$D,
                                    'mahasiswa_pelajar'=>$E,
                                    'pengemudi'=>$F,
                                    'tni'=>$G,
                                    'polri'=>$H,
                                    'lain_lain'=>$I
                                );

                            }else if($type==7) {
                                
                                /**
                                 * usia
                                 */

                                $url = 'import/usia';

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

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'max_15'=>$C,
                                    'max_20'=>$D,
                                    'max_25'=>$E,
                                    'max_30'=>$F,
                                    'max_35'=>$G,
                                    'max_40'=>$H,
                                    'max_45'=>$I,
                                    'max_50'=>$J,
                                    'max_55'=>$K,
                                    'max_60'=>$L,
                                    'lain_lain'=>$M
                                );

                            }else if($type==8) {
                                
                                /**
                                 * simpelaku
                                 */

                                $url = 'import/simpelaku';

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

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'sim_a'=>$C,
                                    'sim_a_umum'=>$D,
                                    'sim_b'=>$E,
                                    'sim_b_satu_umum'=>$F,
                                    'sim_b_dua'=>$G,
                                    'sim_b_dua_umum'=>$H,
                                    'sim_c'=>$I,
                                    'sim_d'=>$J,
                                    'sim_internasional'=>$K,
                                    'tanpa_sim'=>$L
                                );

                            }else if($type==9) {
                                
                                /**
                                 * lokasikawasan
                                 */

                                $url = 'import/lokasikawasan';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'pemukiman'=>$C,
                                    'perbelanjaan'=>$D,
                                    'perkantoran'=>$E,
                                    'wisata'=>$F,
                                    'industri'=>$G
                                );

                            }else if($type==10) {
                                
                                /**
                                 * statusjalan
                                 */

                                $url = 'import/statusjalan';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'nasional'=>$C,
                                    'provinsi'=>$D,
                                    'kab_kota'=>$E,
                                    'desa_lingkungan'=>$F
                                );

                            }else if($type==11) {
                                
                                /**
                                 * dikmaslantasops
                                 */

                                $url = 'import/dikmaslantasops';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'media_cetak'=>$C,
                                    'media_elektronik'=>$D,
                                    'media_sosial'=>$E,
                                    'laka_langgar'=>$F
                                );

                            }else if($type==12) {
                                
                                /**
                                 * giatlantas
                                 */

                                $url = 'import/giatlantas';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'pengaturan'=>$C,
                                    'penjagaan'=>$D,
                                    'pengawalan'=>$E,
                                    'patroli'=>$F
                                );

                            }else if($type==13) {
                                
                                /**
                                 * lakalantas
                                 */

                                $url = 'import/lakalantas';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'meninggal_dunia'=>$C,
                                    'luka_berat'=>$D,
                                    'luka_ringan'=>$E,
                                    'kerugian_material'=>$E
                                );

                            }else if($type==14) {
                                
                                /**
                                 * fungsijalan
                                 */

                                $url = 'import/fungsijalan';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'arteri'=>$C,
                                    'kolektor'=>$D,
                                    'lokal'=>$E,
                                    'lingkungan'=>$F
                                );

                            }else if($type==15) {
                                
                                /**
                                 * pekerjaankorban
                                 */

                                $url = 'import/pekerjaankorban';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));
                                $H = trim(trim($row['H']));
                                $I = trim(trim($row['I']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'pns'=>$C,
                                    'karyawan'=>$D,
                                    'mahasiswa'=>$E,
                                    'pengemudi'=>$F,
                                    'tni'=>$G,
                                    'polri'=>$H,
                                    'lain_lain'=>$I
                                );

                            }else if($type==16) {
                                
                                /**
                                 * pekerjaanpelaku
                                 */

                                $url = 'import/pekerjaanpelaku';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));
                                $H = trim(trim($row['H']));
                                $I = trim(trim($row['I']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'pns'=>$C,
                                    'karyawan'=>$D,
                                    'mahasiswa'=>$E,
                                    'pengemudi'=>$F,
                                    'tni'=>$G,
                                    'polri'=>$H,
                                    'lain_lain'=>$I
                                );

                            }else if($type==17) {
                                
                                /**
                                 * pendidikankorban
                                 */

                                $url = 'import/pendidikankorban';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));
                                $H = trim(trim($row['H']));
                                $I = trim(trim($row['I']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'sd'=>$C,
                                    'sltp'=>$D,
                                    'slta'=>$E,
                                    'd3'=>$F,
                                    's1'=>$G,
                                    's2'=>$H,
                                    'tidak_diketahui'=>$I
                                );

                            }else if($type==18) {
                                
                                /**
                                 * penyebaranops
                                 */

                                $url = 'import/penyebaranops';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'spanduk'=>$C,
                                    'leaflet'=>$D,
                                    'stiker'=>$E,
                                    'billboard'=>$F
                                );

                            }else if($type==19) {
                                
                                /**
                                 * ranmorops
                                 */

                                $url = 'import/ranmorops';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));
                                $G = trim(trim($row['G']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'sepeda_motor'=>$C,
                                    'mobil_penumpang'=>$D,
                                    'bus'=>$E,
                                    'mobil_barang'=>$F,
                                    'ransus'=>$G
                                );

                            }else if($type==20) {
                                
                                /**
                                 * usiakorban
                                 */

                                $url = 'import/usiakorban';

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

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'max_4'=>$C,
                                    'max_9'=>$D,
                                    'max_14'=>$E,
                                    'max_19'=>$F,
                                    'max_24'=>$G,
                                    'max_29'=>$H,
                                    'max_34'=>$I,
                                    'max_39'=>$J,
                                    'max_44'=>$K,
                                    'max_49'=>$L,
                                    'max_54'=>$M,
                                    'max_59'=>$N,
                                    'lain_lain'=>$O
                                );

                            }else if($type==21) {
                                
                                /**
                                 * usiapelaku
                                 */

                                $url = 'import/usiapelaku';

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
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'max_14'=>$C,
                                    'max_16'=>$D,
                                    'max_21'=>$E,
                                    'max_29'=>$F,
                                    'max_39'=>$G,
                                    'max_49'=>$H,
                                    'max_59'=>$I,
                                    'lain_lain'=>$J,
                                    'tidak_diketahui'=>$K
                                );

                            }else if($type==22) {
                                
                                /**
                                 * turjagwaliops
                                 */

                                $url = 'import/turjagwaliops';

                                $B = trim(trim($row['B']));
                                $C = trim(trim($row['C']));
                                $D = trim(trim($row['D']));
                                $E = trim(trim($row['E']));
                                $F = trim(trim($row['F']));

                                $raws[] = array(
                                    'operasi_id'=>$operasi_id,
                                    'polda_id'=>$B,
                                    'date'=>$tanggal,
                                    'penjagaan'=>$C,
                                    'pengawalan'=>$D,
                                    'patroli'=>$E,
                                    'pengaturan'=>$F
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
