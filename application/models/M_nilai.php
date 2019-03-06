<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Model
{
    private $_table = "nilai";
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
        $this->db->join('nilai', 'nilai.id_siswa = siswa.id_siswa');
        $this->db->join('kelas', 'kelas.id_kelas = nilai.id_kelas');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_nilai" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_nilai = uniqid();
        $this->id_siswa = $post["id_siswa"];
        $this->id_kelas = $post["id_kelas"];
        $this->kd = $post["kd"];
        $this->nilai = $post["nilai"];
        $this->keterangan = $post["keterangan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_nilai = $post["id"];
        $this->id_siswa = $post["id_siswa"];
        $this->id_kelas = $post["id_kelas"];
        $this->kd = $post["kd"];
        $this->nilai = $post["nilai"];
        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('id_siswa' => $post['id_siswa']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_nilai" => $id));
    }

    public function cari($key)
    {
        $this->db->like('nama', $key);
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('nilai', 'nilai.id_siswa = siswa.id_siswa');
        $this->db->join('kelas', 'kelas.id_kelas = nilai.id_kelas');
        $query = $this->db->get();
        return $query->result();
    }

}
