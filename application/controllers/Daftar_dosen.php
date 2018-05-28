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
 
    function update(){
      $this->load->view('view_update_dosen');
	}
    }
 
?>