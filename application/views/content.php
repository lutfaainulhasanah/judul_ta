<?php
$this->load->view('header');
$this->load->view('menu');
if (isset($uniqid)){
    $this->load->view($uniqid);
} else {
    show_404();
}
$this->load->view('footer');
?>