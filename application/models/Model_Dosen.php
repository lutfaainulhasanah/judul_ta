<?php
class Model_Dosen extends CI_Model {
	
	function get_table(){
        return $this->db->get("dosen");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT dosen.nip, dosen.nama_dosen, prodi.prodi, dosen.status FROM dosen,prodi where dosen.id_prodi = prodi.id_prodi ");
		return $query->result();
	}
	function get_prodi(){
		$query = $this->db->query("SELECT * FROM prodi");
		return $query->result();
	}
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM(SELECT dosen.nip, dosen.nama_dosen, prodi.prodi, dosen.status FROM dosen,prodi where dosen.id_prodi = prodi.id_prodi)as a where a.nip='$id' ");
	return $query->result();
	}
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
		
	}
	
	
?>