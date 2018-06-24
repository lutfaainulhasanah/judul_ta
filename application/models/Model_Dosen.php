<?php
class Model_Dosen extends CI_Model {
	
	function get_table(){
        return $this->db->get("dosen");
        return $this->db->get("judul");

    }
    
	function get_data(){
		$query = $this->db->query("SELECT dosen.nip, dosen.nama_dosen, prodi.prodi, dosen.status, dosen.kuota FROM dosen,prodi where dosen.id_prodi = prodi.id_prodi ");
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

	function input($data = array()){
		return $this->db->query('penelitian',$data);
		
	}

	function get_data_edit($id){

		$query = $this->db->query("SELECT * FROM(SELECT dosen.nip, dosen.nama_dosen, prodi.prodi, dosen.status,dosen.kuota FROM dosen,prodi where dosen.id_prodi = prodi.id_prodi)as a where a.nip='$id' ");
	return $query->result();
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

	public function kode_oto(){
		$this->db->select('RIGHT(penelitian.id_penelitian,2) as kode', FALSE);
		$this->db->order_by ('id_penelitian','DESC');
		$this->db->limit(1);
		$query = $this->db->get('penelitian'); // cek dulu apakah sudah ada kode di tabel
		if($query->num_rows() <> 0){
			//jika kode sudah ada
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			//jika kode belum ada
			$kode = 1;
		}
		
		$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit 0
		$kodejadi = "PD".$kodemax;
		return $kodejadi;
	}

	function get_dospem(){
		$query = $this->db->query("SELECT judul.nim, mahasiswa.nama_mhs, judul.judul FROM judul,mahasiswa where judul.nim = mahasiswa.nim ");
		return $query->result();
	}

	function get_usulan(){
		$query = $this->db->query("SELECT * FROM judul");
		return $query->result();
	}
	function edit_usulan($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_usulan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function update($data){

		$query = $this->db->query("UPDATE dosen SET nip =".$data['nip'].", nama_dosen = '".$data['nama_dosen']."', id_prodi = '".$data['prodi']."', status = '".$data['status']."', kuota = '".$data['kuota']."' WHERE nip = ".$data['nipOld']."");
		return true;
	}	
	}
	
	
?>