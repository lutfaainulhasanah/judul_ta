<?php
class Daftar_dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        $this->load->view('Dosen_view');
    }
 
}
?>