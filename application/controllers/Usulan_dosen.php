<?php
class Usulan_dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Usulan_model');
        	
    }
 
    function index(){
    	$x['data']=$this->Usulan_model->show_usulan()->result();
        $this->load->view('Usulan_view',$x);
    }
 
}
?>