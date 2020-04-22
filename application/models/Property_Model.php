<?php

class Property_Model extends CI_Model{
	function get_all(){
		return $this->db->get('properti')->array_result();
	}

	function get_property_byid($id){
		return $this->db->get_where('properti',array('id' => $id))->row_result();
	}

	function search_property($data){
		return $this->db->get_where('properti',$data);
	}
}