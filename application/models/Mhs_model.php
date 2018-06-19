<?php
class Mhs_model extends CI_Model {
	
	function get_table(){
        return $this->db->get("judul");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT judul.id_judul, mahasiswa.nim, golongan.id_gol, prodi.id_prodi, dosen.nip, judul.judul, judul.judul_dosen, judul.ringkasan FROM mahasiswa, dosen,prodi,judul,golongan where judul.id_judul and judul.nim = mahasiswa.nim and judul.id_gol = golongan.id_gol and judul.id_prodi = prodi.id_prodi and judul.nip = dosen.nip");
		return $query->result();
	}
	function get_penelitian(){
		$query = $this->db->query("SELECT penelitian.id_penelitian, dosen.nip, penelitian.judul_penelitian, penelitian.kuota FROM dosen,penelitian where penelitian.nip = dosen.nip");
		return $query->result();
	}
		
	}
	
	
?>