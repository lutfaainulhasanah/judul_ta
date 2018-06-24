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
		$a['prodi'] = $this->Model_Dosen->get_prodi();
		$a['data'] = $this->Model_Dosen->get_data_edit($id);
		$a['id'] = $id;
      $this->load->view('view_update_dosen',$a);
	}
	
	function update(){
		$id = $this->input->post('nip');
		$idOld = $this->input->post('nipOld');
		$nama_dosen = $this->input->post('nama');
		$prodi = $this->input->post('prodi');
		$status = $this->input->post('status');
		$kuota = $this->input->post('kuota');
 
		$data = array(
			'nip' =>$id,
			'nipOld' =>$idOld,
			'nama_dosen' => $nama_dosen,
			'prodi' => $prodi,
			'status' => $status,
			'kuota' => $kuota
			);
 
 	var_dump($data);
	$this->Model_Dosen->update($data);
	redirect('Daftar_dosen/dosen');
		
}
	
    }
 
?>