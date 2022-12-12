<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satker extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function ditgakkum()
	{ 
		$title = "Direktorat Penegak Hukum | K3I Korlantas";
		$breadcrumb = "ditgakkum";
		$headline = "DIREKTORAT PENEGAK HUKUM";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/ditgakkum', $data); 
        
	}

	public function ditregident()
	{ 
		$title = "Direktorat Registrasi dan Identifikasi | K3I Korlantas";
		$breadcrumb = "ditregident";
		$headline = "DIREKTORAT REGISTRASI DAN IDENTIFIKASI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/ditregident', $data); 
        
	}

	public function ditkamsel()
	{ 
		$title = "Direktorat Keamanan dan Keselamatan | K3I Korlantas";
		$breadcrumb = "ditkamsel";
		$headline = "DIREKTORAT KEAMANAN DAN KESELAMATAN";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/ditkamsel', $data); 
        
	}

	public function bagrenmin()
	{ 
		$title = "Bagian Perencanaan dan Administrasi | K3I Korlantas";
		$breadcrumb = "bagrenmin";
		$headline = "BAGIAN PERENCANAAN DAN ADMINISTRASI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/bagrenmin', $data); 
        
	}

	public function bagops()
	{ 
		$title = "Bagian Operasional | K3I Korlantas";
		$breadcrumb = "bagops";
		$headline = "BAGIAN OPERASIONAL";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/bagops', $data); 
        
	}

	public function bagtik()
	{ 
		$title = "Bagian Teknologi Informasi Korlantas | K3I Korlantas";
		$breadcrumb = "bagtik";
		$headline = "BAGIAN TEKNOLOGI INFORMASI KORLANTAS";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/bagtik', $data); 
        
	}

	public function baharkam()
	{ 
		$title = "BAHARKAM POLRI | K3I Korlantas";
		$breadcrumb = "baharkam";
		$headline = "BAHARKAM POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','satker/baharkam', $data); 
        
	}

	public function asops()
	{ 
		$title = "Asisten Kapolri Bidang Operasi | K3I Korlantas";
		$breadcrumb = "asops";
		$headline = "ASISTEN KAPOLRI BIDANG OPERASI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        $this->template->load('templates/template','satker/asops', $data); 
        
	}

	public function divtik()
	{ 
		$title = "DIVTIK POLRI | K3I Korlantas";
		$breadcrumb = "divtik";
		$headline = "DIVISI TEKNOLOGI INFORMASI DAN KOMUNIKASI POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/divtik', $data); 
        
	}

	public function bareskrim()
	{ 
		$title = "BARESKRIM POLRI | K3I Korlantas";
		$breadcrumb = "bareskrim";
		$headline = "BARESKRIM POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/bareskrim', $data); 
        
	}

	public function divhumas()
	{ 
		$title = "Div HUMAS POLRI | K3I Korlantas";
		$breadcrumb = "div humas";
		$headline = "DIVISI HUMAS POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/divhumas', $data); 
        
	}

	public function itwasum()
	{ 
		$title = "ITWASUM POLRI | K3I Korlantas";
		$breadcrumb = "itwasum";
		$headline = "ITWASUM POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','satker/itwasum', $data); 
        
	}
	
	public function error()
	{
		$this->load->view('404_notfound');
	}
}
