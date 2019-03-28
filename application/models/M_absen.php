<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_absen extends CI_Model
{
    private $_table = "absensi_lpk";
    private $_table_siswa = "siswa";
    private $_table_kelas = "kelas";

    public $id_absen;
	public $id_siswa;
	public $id_kelas;

    public function rules()
    {
        return [
            ['field' => 'id_siswa',
            'label' => 'id_siswa',
            'rules' => 'required'],

			['field' => 'id_kelas',
            'label' => 'id_kelas',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('absensi_lpk', 'absensi_lpk.id_siswa = siswa.id_siswa');
        $this->db->join('kelas', 'kelas.id_kelas = absensi_lpk.id_kelas');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_absen" => $id])->row();
    }

    public function getSiswa()
    {
        // return $this->db->get_where($this->_table, ["id_siswa" => $this->session->userdata('ses_id')])->result();
        $this->db->select('*');
        $this->db->from('absensi_lpk');
        $this->db->join('siswa', 'siswa.id_siswa = absensi_lpk.id_siswa');
        $this->db->where('nama', $this->session->userdata('ses_nama'));
        return $this->db->get()->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_absen = uniqid();
        $this->id_siswa = $post["id_siswa"];
        $this->id_kelas = $post["id_kelas"];
        $this->tanggal = $post["tanggal"];
        $this->alasan = $post["alasan"];
        $this->keterangan = $post["keterangan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_absen = $post["id"];
        $this->id_siswa = $post["id_siswa"];
        $this->id_kelas = $post["id_kelas"];
        $this->tanggal = $post["tanggal"];
        $this->alasan = $post["alasan"];
        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('id_absen' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_absen" => $id));
    }

    public function getByTanggal()
    {
        $this->db->select('tanggal');
        $this->db->distinct();
        $query = $this->db->get('absensi_lpk');
        return $query->result();
    }

    public function cari($key)
    {
        $this->db->like('nama', $key);
        $this->db->or_like('tanggal', $key);
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('absensi_lpk', 'absensi_lpk.id_siswa = siswa.id_siswa');
        $this->db->join('kelas', 'kelas.id_kelas = absensi_lpk.id_kelas');
        $query = $this->db->get();
        return $query->result();
    }

}