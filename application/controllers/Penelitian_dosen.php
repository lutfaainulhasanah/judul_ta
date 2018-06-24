<?php
class Penelitian_dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Mhs_model');
    }
 
    function index(){
        //$this->load->view('view_penelitian');
         $a= array('penelitian'=>$this->Mhs_model->get_penelitian());
		
		$this->load->view('view_penelitian',$a);
    }
 function delete($id_penelitian){
		$this->db->delete('penelitian', array('id_penelitian' => $id_penelitian));
		redirect('Penelitian_dosen/index');
	}

}
?>