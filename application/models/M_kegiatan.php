<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_kegiatan extends CI_Model
{
    private $_table = "kegiatan";

    public $id_kegiatan;
    public $nip;
    public $judul;
    public $foto = "default.jpg";
    public $tanggal;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required']

            // ['field' => 'foto',
            // 'label' => 'foto',
            // 'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_kegiatan)
    {
        return $this->db->get_where($this->_table, ["id_kegiatan" => $id_kegiatan])->row();
    }

    public function getNip()
    {
        $this->db->where('nip', $this->session->userdata('ses_id'));
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kegiatan = uniqid();
        $this->nip = $post["nip"];
        $this->judul = $post["judul"];
        $this->tanggal = $post["tanggal"];
        $this->foto = $this->_uploadImage();
        $this->keterangan = $post["keterangan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kegiatan = $post["id"];
        $this->judul = $post["judul"];
        $this->nip = $post["nip"];
        $this->tanggal = $post["tanggal"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        
        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('id_kegiatan' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_kegiatan" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/kegiatan/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_kegiatan;
        $config['overwrite']			= true;
        // $config['max_size']             = 5120; // 5MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
    }
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $kegiatan = $this->getById($id);
        if ($kegiatan->foto != "default.jpg") {
            $filename = explode(".", $kegiatan->foto)[0];
            return array_map('unlink', glob(FCPATH."upload/kegiatan/$filename.*"));
        }
    }

}