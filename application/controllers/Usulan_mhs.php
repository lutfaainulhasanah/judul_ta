<?php
class Usulan_mhs extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        $this->load->view('view_usulan_mhs');
    }
 
}
?>