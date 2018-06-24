<?php
class Usulan_mhs extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Mhs_model');

    }
 
    function index(){
        //$this->load->view('view_usulan_mhs');
        $a= array('data'=>$this->Mhs_model->get_data());
		
		$this->load->view('view_usulan_mhs',$a);

    }
    

  function delete($id_judul){
        $this->db->delete('judul', array('id_judul' => $id_judul));
        redirect('form_usulan_proposal/usulan/index');
    }
 
}
?>