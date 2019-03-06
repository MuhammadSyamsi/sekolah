<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Model
{
    public function cari($key)
    {
        $this->db->like('nama', $key);
//        $this->db->select('*');
//      $this->db->from('siswa');
//        $this->db->join('absensi_lpk', 'absensi_lpk.id_siswa = siswa.id_siswa');
//        $this->db->join('kelas', 'kelas.id_kelas = absensi_lpk.id_kelas');
        $query = $this->db->get('siswa');
        return $query->result();
    }

}