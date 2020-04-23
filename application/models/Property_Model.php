<?php

class Property_Model extends CI_Model{
	function get_all(){
		return $this->db->get('properti')->result_array();
	}

	function get_property_byid($id){
		return $this->db->get_where('properti',array('id_properti' => $id))->row_array();
	}

	function search_property($data){
		return $this->db->get_where('properti',$data);
	}

	function get_property_byagent($id){
		return $this->db->get_where('properti',array('id_agen' => $id))->result_array();
	}
}