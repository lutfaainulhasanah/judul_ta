<?php
class Page extends CI_controller{
	function __construct(){
		parent::__construct();
		 //validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
		$this->load->helper(array('url'));
		$this->load->model('Model_Dosen');
	}

	function index(){
		$this->load->view('header');
    $this->load->view('menu');
    $this->load->view('content');
    $this->load->view('footer');
	}

	function dosen(){
    // function ini hanya boleh diakses oleh admin dan dosen
    $a= array(
        'data'=>$this->Model_Dosen->get_data());
    if($this->session->userdata('akses')=='Koordinator'){
      $this->load->view('Dosen_view',$a);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function penelitian(){
    // function ini hanya boleh diakses oleh admin dan dosen
    $a= array('penelitian'=>$this->Model_Dosen->get_penelitian());
    if($this->session->userdata('akses')=='Koordinator' || $this->session->userdata('akses')=='Reviewer' || $this->session->userdata('akses')=='Dosen'){
      $this->load->view('view_penelitian',$a);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function usulan_judul(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Koordinator' || $this->session->userdata('akses')=='Reviewer'){
      $this->load->view('v_usulan_judul');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function dospem(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Koordinator' || $this->session->userdata('akses')=='Reviewer' || $this->session->userdata('akses')=='Dosen'){
      $this->load->view('v_dospem');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function judul(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Mahasiswa'){
      $this->load->view('v_judul');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function proposal(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='Mahasiswa'){
      $this->load->view('v_proposal');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    } 
  }

  function edit($id_penelitian){
    $id =  $this->uri->segment(3);

    $data = array('user' =>$this->Model_Dosen->get_data_edit($id),
        );
    $data ['nip'] = $this->Model_Dosen->get_dosen();
    $data ['nama_dosen'] = $this->Model_Dosen->get_dosen();
    $this->load->view('v_update_penelitian', $data);
  }

  function update(){
    $id = $this->input->post('id_penelitian');
    $insert = $this->Model_Dosen->update(array(
      'nip' => $this->input->post('nip'),
      'judul_penelitian' => $this->input->post('judul_penelitian'),
      'kuota' => $this->input->post('kuota')), $id);
    redirect('Page/penelitian');
  }
}
?>