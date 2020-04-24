<?php

class Property_Model extends CI_Model{
	function get_all(){
		return $this->db->get('properti')->result_array();
	}

	function get_property_byid($id){
		return $this->db->get_where('properti',array('id_properti' => $id))->row_array();
	}

	function search_property($data){
		return $this->db->query('select * from properti where 
			dijual_disewa='.$data['dijual_disewa'].' and 
			kota_properti='.$data['kota_properti'].' and
			kamar_tidur='.$data['kamar_tidur'].' and
			kamar_mandi='.$data['kamar_mandi'].' and
			garasi='.$data['garasi'].' and
			harga_min >= '.$data['harga_min'].' and
			harga_min <= '.$data['harga_max'].' and
			luas_min >= '.$data['luas_min'].' and
			luas_min >= '.$data['luas_max'].';')->result_array();
	}

	function get_property_bycity($kota_properti){
		return $this->db->get_where('properti',array('kota_properti' => $kota_properti))->result_array();
	}

	function get_property_byagent($id){
		return $this->db->get_where('properti',array('id_agen' => $id))->result_array();
	}
}