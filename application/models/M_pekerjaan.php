<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pekerjaan extends CI_Model
{
    private $_table = "kumpulan_tugas";

    public $id_kerja;
    public $id_tugas;
    public $NISN;
    public $pic_kerja;
    public $jawab;
    public $nilai;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'jawab',
            'label' => 'jawab',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getId($kumpul)
    {
        $this->db->select('*');
        $this->db->from('kumpulan_tugas');
        $this->db->join('siswa', 'siswa.NISN = kumpulan_tugas.NISN');
        $this->db->where('id_tugas', $kumpul);
        return $this->db->get()->result();
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
        $this->id_kerja = $post["id_kerja"];
        $this->id_tugas = $post["id_tugas"];
        $this->NISN = $post["NISN"];
        $this->jawab = $post["jawab"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->pic_kerja = $this->_uploadImage();
        } else {
            $this->pic_kerja = $post["old_image"];
        }
        
        $this->nilai = $post["nilai"];
        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('id_kerja' => $post['id_kerja']));
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