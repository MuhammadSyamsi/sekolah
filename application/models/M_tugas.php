<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_tugas extends CI_Model
{
    private $_table = "tugas";

    public $id_tugas;
    public $nomor;
    public $nip;
    public $foto;
    public $soal;
    public $batas;
    public $kelas;

    public function rules()
    {
        return [
            ['field' => 'soal',
            'label' => 'soal',
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
    
    public function getById()
    {
        $this->db->select('*');
        $this->db->from('tugas');
        $this->db->join('guru', 'guru.nip = tugas.nip');
        $this->db->where('nama', $this->session->userdata('ses_nama'));
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_tugas = uniqid();
        $this->nomor = $post["nomor"];
        $this->nip = $post["nip"];
        $this->foto = $this->_uploadImage();
        $this->soal = $post["soal"];
        $this->batas = $post["batas"];
        $this->kelas = $post["kelas"];
        $this->db->insert($this->_table, $this);
    }

    public function kerjakan()
    {
        // $post = $this->input->post();
        // $this->id_kerja = uniqid();
        // $this->id_tugas = $post["id_tugas"];
        // $this->pic = $post["pic"];
        // $this->deskripsi = $post["deskripsi"];
        // $this->db->insert($this->_table, $this);
    }

    // public function delete($id)
    // {
    //     $this->_deleteImage($id);
    //     return $this->db->delete($this->_table, array("id_kegiatan" => $id));
    // }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/tugas/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_tugas;
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

    // private function _deleteImage($id)
    // {
    //     $kegiatan = $this->getById($id);
    //     if ($kegiatan->foto != "default.jpg") {
    //         $filename = explode(".", $kegiatan->foto)[0];
    //         return array_map('unlink', glob(FCPATH."upload/kegiatan/$filename.*"));
    //     }
    // }

}