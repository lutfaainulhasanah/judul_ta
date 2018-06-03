<?php
class Daftar_dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
		$this->load->model('Model_Dosen');		
    }
 
    function dosen(){
       // $this->load->view('Dosen_view');
        $a= array(
				'data'=>$this->Model_Dosen->get_data());
		$this->load->view('Dosen_view',$a);	
    }
 
    function edit(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$a['data'] = $this->Model_Dosen->get_data_edit($id);
		$a['id'] = $id;
      $this->load->view('view_update_dosen',$a);
	}
	
	function update(){
		$id = $this->input->post('nip');
		$idOld = $this->uri->segment(3);
		$nama_dosen = $this->input->post('nama_dosen');
		$prodi = $this->input->post('prodi');
		$status = $this->input->post('status');
 
		$data = array(
			'nip' =>$id,
			'nama_dosen' => $nama_dosen,
			'prodi' => $prodi,
			'status' => $status
			);
 
	$where = array(
		'nip' => $id
	);
 
	$this->Model_Dosen->update($where,$data,'dosen');
	redirect('Daftar_dosen/dosen');
		
}
	
    }
 
?>