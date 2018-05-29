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
        $username=$this->input->post('username');
        $password=$this->input->post('password');
 
        $cek_dosen=$this->Login_model->auth_dosen($username,$password);
        
        if($cek_dosen->num_rows() > 0){ //jika login sebagai dosen
                        $data=$cek_dosen->row_array();
                $this->session->set_userdata('masuk',TRUE);

                if($data['status']=='Koordinator'){ //Akses koordinator
                    $this->session->set_userdata('akses','Koordinator');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama_dosen']);
                    //echo $_SESSION['ses_nama'];
                    redirect('Page');
 
                }else if($data['status']=='Dosen'){ //akses dosen
                    $this->session->set_userdata('akses','Dosen');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama_dosen']);
                    redirect('Page');
                
                }else{ //akses reviewer
                    $this->session->set_userdata('akses','Reviewer');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama_dosen']);
                    redirect('Page');
                
                }
 
        }else{ //jika login sebagai mahasiswa
                    $cek_mahasiswa=$this->Login_model->auth_user($username,$password);
                    if($cek_mahasiswa->num_rows() > 0){
                            $data=$cek_mahasiswa->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','Mahasiswa');
                            $this->session->set_userdata('ses_id',$data['nim']);
                            $this->session->set_userdata('ses_nama',$data['nama_mhs']);
                            // echo 'a';
                            // return;
                            redirect('Page');
                    }else{  // jika username dan password tidak ditemukan atau salah
                       // echo 'b';
                       //      return;
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect(base_url('login_ta'));
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}