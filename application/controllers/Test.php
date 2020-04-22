<?php

class Test extends CI_Controller{

	function index(){
		$this->load->view('index');
	}

	function property(){
		$this->load->view('property');
	}

	function property_details(){
		$this->load->view('property-details');
	}

	function agent(){
		$this->load->view('agent');
	}

	function agent_details(){
		$this->load->view('agent-details');
	}

	function aboutus(){
		$this->load->view('about-us');
	}

	function contact(){
		$this->load->view('contact');
	}
}