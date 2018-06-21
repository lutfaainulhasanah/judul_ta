<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan_dosen extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('Model_usulan');

    }
 
    function index(){
        //$this->load->view('view_usulan_mhs');
        $a= array('data'=>$this->Model_usulan->get_data());
		
		$this->load->view('Usulan_view',$a);

    }
    function edit($id_judul){
		$where = array('id_judul' => $id_judul);
		$data['judul'] = $this->Model_usulan->edit_data($where,'judul')->result();
		$this->load->view('editusulan_view',$data);
	}
}
?>