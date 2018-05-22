<?php
class Daftar_dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function dosen(){
        $this->load->view('Dosen_view');
    }
 
    function update(){
        $this->load->view('view_update_dosen');
    }
 
}
?>