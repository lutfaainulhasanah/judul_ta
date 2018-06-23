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
    function update(){
    $id_judul = $this->input->post('id_judul');
    $nim = $this->input->post('nim');
    $id_gol = $this->input->post('id_gol');
    $id_prodi = $this->input->post('id_prodi');
    $nip =$this->input->post('nip');
    $judul = $this->input->post('judul');
    $judul_dosen = $this->input->post('judul_dosen');
    $ringkasan = $this->input->post('ringkasan');
    $tugas = $this->input->post('tugas');
    $catatan = $this->input->post('catatan');

    $data = array(
        'nim' => $nim,
        'id_gol' => $id_gol,
        'id_prodi' => $id_prodi,
        'nip' => $nip,
        'judul' => $judul,
        'judul_dosen' => $judul_dosen,
        'ringkasan' => $ringkasan,
        'tugas' => $tugas,
        'catatan' => $catatan
    );
 
    $where = array(
        'id_judul' => $id_judul
    );
 
    $this->Model_usulan->update_data($where,$data,'judul');
    redirect('Usulan_dosen/index');
}
}
?>