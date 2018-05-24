<?php
class Page extends CI_controller{
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
	}

	function index(){
		$this->load->view('Home_view');	
	}

	function dosen(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='koordinator'){
      $this->load->view('v_dosen');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function penelitian(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='koordinator' || $this->session->userdata('akses')=='reviewer' || $this->session->userdata('akses')=='dosen'){
      $this->load->view('v_penelitian');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function usulan_judul(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='koordinator' || $this->session->userdata('akses')=='reviewer'){
      $this->load->view('v_usulan_judul');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function dospem(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='koordinator' || $this->session->userdata('akses')=='reviewer' || $this->session->userdata('akses')=='dosen'){
      $this->load->view('v_dospem');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function judul(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='mahasiswa'){
      $this->load->view('v_judul');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function proposal(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='mahasiswa'){
      $this->load->view('v_proposal');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }
}
?>