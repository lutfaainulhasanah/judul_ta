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
   function insert(){
        if (isset($_POST['submit'])){
            $data = $this->Judul->input(array (
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'id_prodi' => $this->input->post('prodi'),
            'id_gol' => $this->input->post('golongan')));
            redirect('Mahasiswa/home');
        }else{
            $x =$this->Judul->get_prodi();
            $data = array(
                'nama_prodi'=>$this->Judul->get_prodi(),
                'gol'=>$this->Judul->get_golongan()
                );
            
            $this->load->view('input_mhs',$data);
        }
}
?>