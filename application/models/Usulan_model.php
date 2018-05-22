<?
Class Usulan_model extends CI_Model{
	function show_usulan(){
		return $this->db->get('judul');
		
	}
}
?>