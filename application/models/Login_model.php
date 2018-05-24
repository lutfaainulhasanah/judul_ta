<?php
class Login_model extends CI_Model{
	//cek nip dan password dosen
	public $username;
	public $password;

	function auth_dosen($username, $password){
		$query = $this->db->query("SELECT * FROM dosen WHERE nip='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_user($username, $password){
		$query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}
}
?>