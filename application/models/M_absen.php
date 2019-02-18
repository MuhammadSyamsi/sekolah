<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_absen extends CI_Model
{
    private $_table = "absensi_lpk";
    private $_table_siswa = "siswa";
    private $_table_kelas = "kelas";

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
    
    public function getByKelas($id)
    {
        return $this->db->get_where($this->_table_kelas, ["id_kelas" => $id])->row();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('absensi_lpk', 'absensi_lpk.id_siswa = siswa.id_siswa');
        $this->db->join('kelas', 'kelas.id_kelas = absensi_lpk.id_kelas');
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->id_kelas = $post["id_kelas"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->id_kelas = $post["id_kelas"];
        $this->db->update($this->_table, $this, array('id_siswa' => $post['id_siswa']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_siswa" => $id));
    }

/*    public function cari()
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_kegiatan" => $id));
    }
*/
}
