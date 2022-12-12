<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MX_Controller {

	public function __construct(){
		parent::__construct();
    }
 
	public function sambutan()
	{ 
		$title = "Sambutan | K3I Korlantas";
		$breadcrumb = "Sambutan";
		$headline = "SAMBUTAN KORLANTAS POLRI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];   
        $this->template->load('templates/template','profil/sambutan', $data); 
        
	}

	public function struktur_organisasi()
	{ 
		$title = "Struktur Organisasi | K3I Korlantas";
		$breadcrumb = "Struktur Organisasi";
		$headline = "STRUKTUR ORGANISASI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        $this->template->load('templates/template','profil/struktur_organisasi', $data); 
        
	}

	public function profil_pejabat()
	{ 
		$title = "Profil Pejabat | K3I Korlantas";
		$breadcrumb = "Profil Pejabat";
		$headline = "PROFIL PEJABAT";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','profil/profil_pejabat', $data); 
        
	}

	public function visi_misi()
	{ 
		$title = "Visi dan Misi | K3I Korlantas";
		$breadcrumb = "Visi dan misi";
		$headline = "VISI DAN MISI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','profil/visi_misi', $data); 
        
	}

	public function tugas_fungsi()
	{ 
		$title = "Tugas dan Fungsi | K3I Korlantas";
		$breadcrumb = "Tugas dan fungsi";
		$headline = "TUGAS DAN FUNGSI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','profil/tugas_fungsi', $data); 
        
	}

	public function sejarah()
	{ 
		$title = "Sejarah POLANTAS | K3I Korlantas";
		$breadcrumb = "Sejarah";
		$headline = "SEJARAH POLISI LALU LINTAS";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
        
        $this->template->load('templates/template','profil/sejarah', $data); 
        
	}

	public function error()
	{
		$this->load->view('404_notfound');
	}
}
