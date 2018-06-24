<?php
class Page extends CI_controller{
	function __construct(){
		parent::__construct();
		 //validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
		$this->load->helper(array('url'));
		$this->load->model('Model_Dosen');
	}

	function index(){
		$this->load->view('header');
    $this->load->view('menu');
    $this->load->view('content');
    $this->load->view('footer');
	}

	function dosen(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Koordinator'){
      $this->load->view('Dosen_view');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function penelitian(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Koordinator' || $this->session->userdata('akses')=='Reviewer' || $this->session->userdata('akses')=='Dosen'){
      $this->load->view('v_penelitian');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function usulan_judul(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Koordinator' || $this->session->userdata('akses')=='Reviewer'){
      $this->load->view('Judul');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function dospem(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Koordinator' || $this->session->userdata('akses')=='Reviewer' || $this->session->userdata('akses')=='Dosen'){
      $this->load->view('v_dospem');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function usulan(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Mahasiswa'){
      $this->load->view('Judul');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function proposal(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Mahasiswa'){
      $this->load->view('Proposal');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    } 
  }
}
?>