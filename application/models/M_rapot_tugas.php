<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_rapot_tugas extends CI_Model
{
    private $_table = "rapot_tugas";

    public $id_tugas;
    public $nomor;
    public $nip;
    public $nisn;
    public $foto;
    public $soal;
    public $deskripsi;
    public $nilai;

    public function rules()
    {
        return [
            ['field' => 'nomor',
            'label' => 'nomor',
            'rules' => 'required'],

            ['field' => 'soal',
            'label' => 'soal',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_tugas" => $id])->row();
    }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->id_kegiatan = uniqid();
    //     $this->judul = $post["judul"];
    //     $this->tanggal = $post["tanggal"];
    //     $this->foto = $this->_uploadImage();
    //     $this->keterangan = $post["keterangan"];
    //     $this->db->insert($this->_table, $this);
    // }

    public function kerjakan()
    {
        $post = $this->input->post();
        $this->id_kerja = uniqid();
        $this->id_tugas = $post["id_tugas"];
        // $this->pic = $post["pic"];
        $this->deskripsi = $post["deskripsi"];
        $this->db->insert($this->_table, $this);
    }

    // public function delete($id)
    // {
    //     $this->_deleteImage($id);
    //     return $this->db->delete($this->_table, array("id_kegiatan" => $id));
    // }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './upload/kegiatan/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = $this->id_kegiatan;
    //     $config['overwrite']			= true;
    //     $config['max_size']             = 5120; // 5MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('foto')) {
    //         return $this->upload->data("file_name");
    // }
    
    //     return "default.jpg";
    // }

    // private function _deleteImage($id)
    // {
    //     $kegiatan = $this->getById($id);
    //     if ($kegiatan->foto != "default.jpg") {
    //         $filename = explode(".", $kegiatan->foto)[0];
    //         return array_map('unlink', glob(FCPATH."upload/kegiatan/$filename.*"));
    //     }
    // }

}