<?php
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('content');
        $this->load->view('footer');
    }
 
}
?>