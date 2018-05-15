<?php
class page extends CI_controller{
	function __construct(){
		parent::__construct
		//validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
	}

	function index(){
		$this->load->view('v_dashboar');
	}

	function data_mahasiswa(){
		//function ini hanya boleh di akses oleh koordinator
		if($this->session->userdata('akses')=='koordinator')
	}
}
?>