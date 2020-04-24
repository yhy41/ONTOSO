<?php

class Web extends CI_Controller{
	public function __construct()
 	{
 		parent::__construct();
		$this->load->model('property_model');
		$this->load->model('agent_model');
  	}

	function index(){
		$data['properti'] = $this->property_model->get_all();
		$data['agen'] = $this->agent_model->get_all();
		$this->load->view('index',$data);
	}

	function property(){
		$data['property'] = $this->property_model->get_all();
		$this->load->view('property',$data);
	}

	function property_details($id){
		$data['properti'] = $this->property_model->get_property_byid($id);
		$data['agen'] = $this->agent_model->get_agent_byid($data['properti']['id_agen']);
		$this->load->view('property-details',$data);
	}

	function agent(){
		$data['agen'] = $this->agent_model->get_all();
		$this->load->view('agent',$data);
	}

	function agent_details($id){
		$data['agen'] = $this->agent_model->get_agent_byid($id);
		$data['properti'] = $this->property_model->get_property_byagent($id);
		$this->load->view('agent-details',$data);
	}

	function aboutus(){
		$this->load->view('about-us');
	}

	function contact(){
		$this->load->view('contact');
	}

	function search_property(){
		$harga_min = 0;
		$harga_max = 0;
		$harga = $this->input->post('harga');
		switch($harga){
			case '<100':
				$harga_min = 0;
				$harga_max = 99;
				break;
			case '100-200':
				$harga_min = 100;
				$harga_max = 200;
				break;
			case '201-300':
				$harga_min = 201;
				$harga_max = 300;
				break;
			case '301-400':
				$harga_min = 301;
				$harga_max = 400;
				break;
			case '401-500':
				$harga_min = 401;
				$harga_max = 500;
				break;
			case '501-600':
				$harga_min = 501;
				$harga_max = 600;
				break;
			case '601-700':
				$harga_min = 601;
				$harga_max = 700;
				break;
			case '701-800':
				$harga_min = 701;
				$harga_max = 800;
				break;
			case '801-900':
				$harga_min = 801;
				$harga_max = 900;
				break;
			case '901-1000':
				$harga_min = 901;
				$harga_max = 1000;
				break;
			case '>1000':
				$harga_min = 1001;
				$harga_max = 3000;
				break;
			case 'Semua':
				$harga_min = '"Semua"';
				$harga_max = '"Semua"';
				break;
		}

		$luas_min = 0;
		$luas_max = 0;
		$luas = $this->input->post('luas');
		switch($luas){
			case '<100':
				$luas_min = 0;
				$luas_max = 99;
				break;
			case '100-200':
				$luas_min = 100;
				$luas_max = 200;
				break;
			case '201-300':
				$luas_min = 201;
				$luas_max = 300;
				break;
			case '301-400':
				$luas_min = 301;
				$luas_max = 400;
				break;
			case '401-500':
				$luas_min = 401;
				$luas_max = 500;
				break;
			case '>500':
				$luas_min = 501;
				$luas_max = 1000;
				break;
			case 'Semua':
				$luas_min = '"Semua"';
				$luas_max = '"Semua"';
				break;
		}

		$dijual_disewa = '"'.$this->input->post('dijual_disewa').'"';
		$kota_properti = '"'.$this->input->post('kota_properti').'"';
		$kamar_tidur = '"'.$this->input->post('kamar_tidur').'"';
		$kamar_mandi = '"'.$this->input->post('kamar_mandi').'"';
		$garasi = '"'.$this->input->post('garasi').'"';

		if($dijual_disewa == '"Semua"'){
			$dijual_disewa = 'any(select dijual_disewa from properti)';
		}
		if($kota_properti == '"Semua"'){
			$kota_properti = 'any(select kota_properti from properti)';
		}
		if($kamar_tidur == '"Semua"'){
			$kamar_tidur = 'any(select kamar_tidur from properti)';
		}
		if($kamar_mandi == '"Semua"'){
			$kamar_mandi = 'any(select kamar_mandi from properti)';
		}
		if($garasi == '"Semua"'){
			$garasi = 'any(select garasi from properti)';
		}
		if($harga_min == '"Semua"'){
			$harga_min = 'any(select harga_min from properti)';
		}
		if($harga_max == '"Semua"'){
			$harga_max = 'any(select harga_max from properti)';
		}
		if($luas_min == '"Semua"'){
			$luas_min = 'any(select luas_min from properti)';
		}
		if($luas_max == '"Semua"'){			
			$luas_max = 'any(select luas_max from properti)';
		}


		$data = array (
			'dijual_disewa' => $dijual_disewa,
			'kota_properti' => $kota_properti,
			'kamar_tidur' => $kamar_tidur,
			'kamar_mandi' => $kamar_mandi,
			'garasi' => $garasi,
			'harga_min' => $harga_min,
			'harga_max' => $harga_max,
			'luas_min' => $luas_min,
			'luas_max' => $luas_max
		);

		$hasil['property'] = $this->property_model->search_property($data);

		$this->load->view('property',$hasil);
	}

	function search_property_bycity($kota_properti){
		$data['property'] = $this->property_model->get_property_bycity($kota_properti);
		$this->load->view('property',$data);
	}

	function search_agent($data){
		$data = $this->agent_model->search_agent($data);
		$this->load->view('agent',$data);

	}
}