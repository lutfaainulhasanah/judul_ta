<?php
class Model_Dosen extends CI_Model {
	
	function get_table(){
        return $this->db->get("dosen");
        return $this->db->get("judul");

    }
    
	function get_data(){
		$query = $this->db->query("SELECT dosen.nip, dosen.nama_dosen, prodi.prodi, dosen.status FROM dosen,prodi where dosen.id_prodi = prodi.id_prodi ");
		return $query->result();
	}
	function get_prodi(){
		$query = $this->db->query("SELECT * FROM prodi");
		return $query->result();
	}


	function get_judul(){
		$query = $this->db->query("SELECT judul.id_judul, mahasiswa.nim, golongan.id_gol, prodi.id_prodi, dosen.nip, judul.judul, judul.judul_dosen, judul.ringkasan, judul.tugas, judul.catatan FROM mahasiswa, dosen,prodi,judul,golongan where judul.id_judul and judul.nim = mahasiswa.nim and judul.id_gol = golongan.id_gol and judul.id_prodi = prodi.id_prodi and judul.nip = dosen.nip");
		return $query->result();
	}
	function get_penelitian(){
		$query = $this->db->query("SELECT penelitian.id_penelitian, dosen.nip, penelitian.judul_penelitian, penelitian.kuota FROM dosen,penelitian where penelitian.nip = dosen.nip");
		return $query->result();
	}

	function get_dosen(){
		$query = $this->db->query("SELECT * FROM dosen");
		return $query->result();
	}

	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM penelitian where id_penelitian='$id'");
		return $query->result_array();
	}

	function edit_data($id_penelitian){
		$query = $this->db->getwhere('penelitian', array('id_penelitian'=>$id_penelitian));
		return $query->row_array();
	}

	function update($data = array(),$id){
		$this->db->where('id_penelitian',$id);
		return $this->db->update('penelitian',$data);
	}
		
	}
	
	
?>