<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stakeholder extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_stakeholder');
    }
	public function index($id)
	{

		$getStakeholder = guzzle_request('GET', 'stackholder', [
        ]);
		$url = 'stackholder/getId/' . $id;
        $getbyid = guzzle_request('GET', $url, [
        ]);
		$getbyid = $getbyid['data']['data'];

		// var_dump($getbyid);die;
		
		$data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_token'] = $this->security->get_csrf_hash();
		
		$data['title'] = $getbyid['title']." | K3I Korlantas";
		$data['stakeholder'] = $getbyid;
		$data['getStakeholder'] = $getStakeholder['data']['data'];
		
        $data['breadcrumb'] = $getbyid['title'];
        $data['headline'] = $getbyid['fullname'];

		$getkemendagri = guzzle_request('GET', 'regulation_doc/bycategory/8', []);
		$getkemenhub = guzzle_request('GET' , 'regulation_doc/bycategory/9' , []);
		$getkemenkes = guzzle_request('GET' , 'regulation_doc/bycategory/10' , []);
		$getkemenperin = guzzle_request('GET' , 'regulation_doc/bycategory/11' , []);
		$getkemenpupr = guzzle_request('GET' , 'regulation_doc/bycategory/12' , []);
		$getBadanriset = guzzle_request('GET' , 'regulation_doc/bycategory/13' , []);
		$getkemenkeu = guzzle_request('GET' , 'regulation_doc/bycategory/14' , []);
		$getkemendikbud = guzzle_request('GET' , 'regulation_doc/bycategory/15' , []);
		$getkemenhan = guzzle_request('GET' , 'regulation_doc/bycategory/16' , []);

		if($getbyid['title'] == "kemendagri"){
			$data['getdoc'] = $getkemendagri['data'];
		}
		else if($getbyid['title'] == "kemenhub"){
			$data['getdoc'] = $getkemenhub['data'];
		}
		elseif($getbyid['title'] == "kemenkes"){
			$data['getdoc'] = $getkemenkes['data'];
		}
		elseif($getbyid['title'] == "kemenperin"){
			$data['getdoc'] = $getkemenperin['data'];
		}
		elseif($getbyid['title'] == "kemenpupr"){
			$data['getdoc'] = $getkemenpupr['data'];
		}
		elseif($getbyid['title'] == "Badanriset"){
			$data['getdoc'] = $getBadanriset['data'];
		}
		elseif($getbyid['title'] == "kemenkeu"){
			$data['getdoc'] = $getkemenkeu['data'];
		}
		elseif($getbyid['title'] == "kemendikbud"){
			$data['getdoc'] = $getkemendikbud['data'];
		}
		elseif($getbyid['title'] == "kemenhan"){
			$data['getdoc'] = $getkemenhan['data'];
		}
		
		// var_dump($data);die;
		$this->template->load('templates/template', 'detail_stakeholder', $data);
	}

	public function kemendagri()
	{ 
		$title = "Kementerian Dalam Negeri | INDONESIA";
		$breadcrumb = "kemendagri";
		$headline = "KEMENTERIAN DALAM NEGERI REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/kemendagri', $data); 
        
	}

	public function kemenhub()
	{ 
		$title = "Kementerian Perhubungan | INDONESIA";
		$breadcrumb = "kemenhub";
		$headline = "KEMENTERIAN PERHUBUNGAN REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/kemenhub', $data); 
        
	}

	public function kemenkes()
	{ 
		$title = "Kementerian Kesehatan | INDONESIA";
		$breadcrumb = "kemenkes";
		$headline = "KEMENTERIAN KESEHATAN REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/kemenkes', $data); 
        
	}

	public function kemenperin()
	{ 
		$title = "Kementerian Perindustrian | INDONESIA";
		$breadcrumb = "kemenperin";
		$headline = "KEMENTERIAN PERINDUSTRIAN REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/kemenperin', $data); 
        
	}

	public function kemenpupr()
	{ 
		$title = "Kementerian PUPR | INDONESIA";
		$breadcrumb = "kemenpupr";
		$headline = "KEMENTERIAN PUPR REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/kemenpupr', $data); 
        
	}

	public function badan_riset()
	{ 
		$title = "Badan Riset dan Inovasi | INDONESIA";
		$breadcrumb = "badan riset dan inovasi";
		$headline = "BADAN RISET DAN INOVASI REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/badan_riset', $data); 
        
	}

	public function kemenkeu()
	{ 
		$title = "Kementerian Keuangan | INDONESIA";
		$breadcrumb = "kemenkeu";
		$headline = "KEMENTERIAN KEUANGAN REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/kemenkeu', $data); 
        
	}

	public function kemendikbud()
	{ 
		$title = "Kementerian Pendidikan dan Kebudayaan | INDONESIA";
		$breadcrumb = "kemendikbud";
		$headline = "KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/kemendikbud', $data); 
        
	}

	public function kemenhan()
	{ 
		$title = "Kementerian Pertahanan | INDONESIA";
		$breadcrumb = "kemenhan";
		$headline = "KEMENTERIAN PERTAHANAN REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/kemenhan', $data); 
        
	}

	public function bina_marga()
	{ 
		$title = "Ditjen Bina Marga | INDONESIA";
		$breadcrumb = "bina marga";
		$headline = "DITJEN BINA MARGA REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/bina_marga', $data); 
        
	}

	public function dukcapil()
	{ 
		$title = "Ditjen Dukcapil | INDONESIA";
		$breadcrumb = "dukcapil";
		$headline = "DITJEN DUKCAPIL REPUBLIK INDONESIA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/dukcapil', $data); 
        
	}

	public function jasa_raharja()
	{ 
		$title = "PT. Jasa Raharja | INDONESIA";
		$breadcrumb = "jasa raharja";
		$headline = "JASA RAHARJA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/jasa_raharja', $data); 
        
	}

	public function jasa_marga()
	{ 
		$title = "Jasa Marga | INDONESIA";
		$breadcrumb = "jasa marga";
		$headline = "JASA MARGA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/jasa_marga', $data); 
        
	}

	public function mabes_tni()
	{ 
		$title = "Mabes TNI | INDONESIA";
		$breadcrumb = "mabes tni";
		$headline = "MABES TNI";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/mabes_tni', $data); 
        
	}

	public function satgas_covid()
	{ 
		$title = "Satgas Covid | INDONESIA";
		$breadcrumb = "satgas covid";
		$headline = "SATGAS COVID";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/satgas_covid', $data); 
        
	}

	public function bmkg()
	{ 
		$title = "BMKG | INDONESIA";
		$breadcrumb = "bmkg";
		$headline = "BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/bmkg', $data); 
        
	}

	public function bnn()
	{ 
		$title = "BNN | INDONESIA";
		$breadcrumb = "bnn";
		$headline = "BADAN NARKOTIKA NASIONAL";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/bnn', $data); 
        
	}

	public function bnpb()
	{ 
		$title = "BNPB | INDONESIA";
		$breadcrumb = "bnpb";
		$headline = "BADAN NASIONAL PENANGGULANGAN BENCANA";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/bnpb', $data); 
        
	}

	public function bnpt()
	{ 
		$title = "BNPT | INDONESIA";
		$breadcrumb = "bnpt";
		$headline = "BADAN NASIONAL PENANGGULANGAN TERORISME";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/bnpt', $data); 
        
	}

	public function bps()
	{ 
		$title = "BPS | INDONESIA";
		$breadcrumb = "bps";
		$headline = "BADAN PUSAT STATISTIK";

        $data = [
			'title' => $title,
			'breadcrumb' => $breadcrumb,
			'headline' => $headline
		
	];
    
        $this->template->load('templates/template','stakeholder/bps', $data); 
        
	}


	public function error()
	{
		$this->load->view('404_notfound');
	}
}
