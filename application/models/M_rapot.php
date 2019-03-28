<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_rapot extends CI_Model
{
    // private $siswa = "rapot_tugas";

    public function getSiswa()
    {
        return $this->db->get('siswa')->result();
    }
    
    // public function getById($id)
    // {
        // return $this->db->get_where($this->_table, ["id_tugas" => $id])->row();
    // }

    public function getRapot($NISN)
    {
        $this->db->select('*');
        $this->db->from('kumpulan_tugas');
        $this->db->join('siswa', 'siswa.NISN = kumpulan_tugas.NISN');
        $this->db->join('tugas', 'tugas.id_tugas = kumpulan_tugas.id_tugas');
        $this->db->where('siswa.NISN', $NISN);
        $query = $this->db->get();
        return $query->result();
    }

    public function pilihSiswa($NISN)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('NISN', $NISN);
        return $this->db->get()->result();
    }

    public function pilihRapot($NISN)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('nilai_ujian', 'nilai_ujian.NISN = siswa.NISN');
        $this->db->where('siswa.NISN', $NISN);
        return $this->db->get()->result();
    }

    public function rata($NISN)
    {
        $this->db->select_avg('nilai');
        $this->db->where('NISN', $NISN);
        return $this->db->get('kumpulan_tugas')->result();
    }

    public function rapotSiswa()
    {
        $this->db->select('*');
        $this->db->from('kumpulan_tugas');
        $this->db->join('siswa', 'siswa.NISN = kumpulan_tugas.NISN');
        $this->db->join('tugas', 'tugas.id_tugas = kumpulan_tugas.id_tugas');
        $this->db->where('nama', $this->session->userdata('ses_nama'));
        return $this->db->get()->result();
    }

    public function rataSiswa()
    {
        $this->db->select_avg('nilai');
        $this->db->from('kumpulan_tugas');
        $this->db->join('siswa', 'siswa.NISN = kumpulan_tugas.NISN');
        $this->db->where('nama', $this->session->userdata('ses_nama'));
        return $this->db->get()->result();
    }

    public function ujianSiswa()
    {
        return $this->db->get_where('nilai_ujian', ["nama" => $this->session->userdata('ses_nama')])->result();
    }


}