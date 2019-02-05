<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_kegiatan extends CI_Model
{
    private $_table = "kegiatan";

    public $id_kegiatan;
    public $judul;
    public $foto = "default.jpg";
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kegiatan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kegiatan = uniqid();
        $this->judul = $post["judul"];
        $this->keterangan = $post["keterangan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kegiatan = $post["id"];
        $this->judul = $post["judul"];
        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('id_kegiatan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kegiatan" => $id));
    }
}
