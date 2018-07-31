<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class M_main extends CI_Model{

	function insert($table, $data){
		$this->db->insert($table, $data);
		return $this->db->affected_rows();
	}

	function get_user($q) {
		return $this->db->get_where('user',$q);
	}

	
}