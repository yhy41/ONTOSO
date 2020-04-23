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

	function search_property($data){
		$data = $this->property_model->search_property($data);
		$this->load->view('property',$data);
	}

	function search_agent($data){
		$data = $this->agent_model->search_agent($data);
		$this->load->view('agent',$data);
	}
}