<?php

class Agent_Model extends CI_Model{
	function get_all(){
		return $this->db->get('agen')->array_result();
	}

	function get_agent_byid($id){
		return $this->db->get_where('agen',array('id' => $id))->row_result();
	}

	function search_agent($data){
		return $this->db->get_where('agen',$data);
	}
}