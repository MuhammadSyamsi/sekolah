<?php 
 
class M_login extends CI_Model{	

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	//cek nip dan password guru
	function auth_guru($username,$password){
		$query=$this->db->query("SELECT * FROM guru WHERE nip='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}
	
	//cek nim dan password siswa
	function auth_siswa($username,$password){
		$query=$this->db->query("SELECT * FROM siswa WHERE nisn='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}
	
}