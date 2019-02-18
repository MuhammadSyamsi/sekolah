<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model
{
    private $_table = "kelas";

    public $id_kelas;
	public $kelas;
	public $jurusan;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'kelas',
            'label' => 'kelas',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kelas" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kelas = uniqid();
        $this->kelas = $post["kelas"];
        $this->jurusan = $post["jurusan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kelas = $post["id"];
        $this->kelas = $post["kelas"];
        $this->jurusan = $post["jurusan"];

        $this->db->update($this->_table, $this, array('id_kelas' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kelas" => $id));
    }

/*    public function cari()
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_kegiatan" => $id));
    }
*/
}
