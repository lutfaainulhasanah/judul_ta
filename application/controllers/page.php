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
		$data = array('uniqid' => 'blank',
        'kodeunik'=>$this->Model_Dosen->kode_oto());
    $this->load->view('content', $data);
	}

	function dosen(){
    // function ini hanya boleh diakses oleh admin dan dosen
    $a= array(
      'uniqid' => 'Dosen_view',
       'data'=>$this->Model_Dosen->get_data());
    if($this->session->userdata('akses')=='Koordinator'){
      $this->load->view('content',$a);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }

  function penelitian(){
    // function ini hanya boleh diakses oleh admin dan dosen
    $a= array(
      'uniqid' => 'view_penelitian',
      'penelitian'=>$this->Model_Dosen->get_penelitian());
    if($this->session->userdata('akses')=='Koordinator' || $this->session->userdata('akses')=='Reviewer' || $this->session->userdata('akses')=='Dosen'){
      $this->load->view('content',$a);
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

  function input(){
    if (isset($_POST['btntambah'])) {
      $data = $this->Model_Dosen->input(array(
        'id_penelitian' => $this->input->post('id_penelitian'),
        'nip' => $this->input->post('nip'),
        'judul_penelitian' => $this->input->post('judul_penelitian'),
        'kuota' => $this->input->post('kuota')));
      redirect('page/penelitian');
    }else{
      //$x=$this->Model_Dosen->get_dosen();
      $data = array(
        'uniqid' => 'v_insert_penelitian',
        'nama_prodi'=>$this->Model_Dosen->get_dosen());
     $this->load->view('content',$data);
    }
  }

  function edit($id_penelitian){
    $id =  $this->uri->segment(3);

    $data = array(
      'uniqid' => 'v_update_penelitian',
      'user' =>$this->Model_Dosen->get_data_edit($id),
        );
    $data ['nip'] = $this->Model_Dosen->get_dosen();
    $data ['nama_dosen'] = $this->Model_Dosen->get_dosen();
    $this->load->view('content', $data);
  }

  function update(){
    $id = $this->input->post('id_penelitian');
    $insert = $this->Model_Dosen->update(array(
      'nip' => $this->input->post('nip'),
      'judul_penelitian' => $this->input->post('judul_penelitian'),
      'kuota' => $this->input->post('kuota')), $id);
    redirect('Page/penelitian');
  }

  function delete($id_penelitian){
    $this->db->delete('penelitian', array('id_penelitian' => $id_penelitian));
    redirect('Page/penelitian');
  }

}
?>