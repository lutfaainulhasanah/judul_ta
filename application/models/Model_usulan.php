<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_usulan extends CI_Model{
	
	function get_table(){
        return $this->db->get("judul");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM judul");
		return $query->result();
	}
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}

}
?>