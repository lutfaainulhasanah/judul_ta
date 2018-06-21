<?php
class judul extends CI_Model {
	
	function get_table(){
        return $this->db->get("judul_ta");
    }
    function get_mahasiswa(){
		$query = $this->db->query("SELECT * FROM nim, nama_mhs");
		return $query->result();
	}
	function get_prodi(){
		$query = $this->db->query("SELECT * FROM prodi");
		return $query->result();
	}
	function get_golongan(){
		$query = $this->db->query("SELECT * FROM golongan");
		return $query->result();
	}
	function get_prodi(){
		$query = $this->db->query("SELECT * FROM prodi");
		return $query->result();
	}
	
	function input($data = array()){
		return $this->db->insert('tm_mahasiswa',$data);
		
	}
	function get_dosen(){
		$query = $this->db->query("SELECT * FROM nama_dosen");
		return $query->result();
	}
	
	
}