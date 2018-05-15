<?php
class Login_ta extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }
 
    function index(){
        $this->load->view('login_view');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_dosen=$this->Login_model->auth_dosen($username,$password);
 
        if($cek_dosen->num_rows() > 0){ //jika login sebagai dosen
                        $data=$cek_dosen->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['user_level']=='koordinator'){ //Akses koordinator
                    $this->session->set_userdata('akses','koordinator');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('page');
 
                 }else{ //akses dosen
                    $this->session->set_userdata('akses','dosen');
                                $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('page');
                 }else{ //akses review
                    $this->session->set_userdata('akses','review');
                                $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('page');
                 }
 
        }else{ //jika login sebagai mahasiswa
                    $cek_mahasiswa=$this->login_model->auth_mahasiswa($username,$password);
                    if($cek_mahasiswa->num_rows() > 0){
                            $data=$cek_mahasiswa->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','mahasiswa');
                            $this->session->set_userdata('ses_id',$data['nim']);
                            $this->session->set_userdata('ses_nama',$data['nama']);
                            redirect('page');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect($url);
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}