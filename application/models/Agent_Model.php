<?php

class Agent_Model extends CI_Model{
	function get_all(){
		return $this->db->get('agen')->result_array();
	}

	function get_agent_byid($id){
		return $this->db->get_where('agen',array('id_agen' => $id))->row_array();
	}

	function search_agent($data){
		return $this->db->get_where('agen',$data);
	}
}