<?php
class form_usulan_proposal extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
     function usulan(){
        $this->load->view('form_usulan_judul_tugas_akhir');
    }
     function proposal(){
        $this->load->view('pengajuan_proposal');
    }
 
}
?>