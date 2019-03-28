<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_tugas extends CI_Model
{
    private $_table = "tugas";

    public $id_tugas;
    public $nip;
    public $pic_soal;
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
            'rules' => 'required'],

            ['field' => 'materi',
            'label' => 'materi',
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
        $this->db->where('tugas.nip', $this->session->userdata('ses_id'));
        $query = $this->db->get();
        return $query->result();
    }

    public function kerjaan()
    {
        $this->db->select('*, count(id_kerja) as terkumpul');
        $this->db->from('tugas');
        $this->db->join('kumpulan_tugas', 'kumpulan_tugas.id_tugas = tugas.id_tugas');
        $this->db->group_by('tugas.id_tugas');
        $this->db->where('tugas.nip', $this->session->userdata('ses_id'));
        $query = $this->db->get();
        return $query->result();
    }

    public function soal($kumpul)
    {
        return $this->db->get_where($this->_table, ["id_tugas" => $kumpul])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_tugas = uniqid();
        $this->nip = $post["nip"];
        $this->pic_soal = $this->_uploadImage();
        $this->materi = $post["materi"];
        $this->soal = $post["soal"];
        $this->batas = $post["batas"];
        $this->kelas = $post["kelas"];
        $this->db->insert($this->_table, $this);
    }

    public function getId($id)
    {
        return $this->db->get_where($this->_table, ["id_tugas" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_tugas = $post["id"];
        $this->nip = $post["nip"];
        $this->materi = $post["materi"];
        $this->soal = $post["soal"];

        if (!empty($_FILES["pic_soal"]["name"])) {
            $this->pic_soal = $this->_uploadImage();
        } else {
            $this->pic_soal = $post["old_image"];
        }
        
        $this->batas = $post["batas"];
        $this->kelas = $post["kelas"];
        $this->db->update($this->_table, $this, array('id_tugas' => $post['id']));
    }

    // public function kerjakan()
    // {
        // $post = $this->input->post();
        // $this->id_kerja = uniqid();
        // $this->id_tugas = $post["id_tugas"];
        // $this->pic = $post["pic"];
        // $this->deskripsi = $post["deskripsi"];
        // $this->db->insert($this->_table, $this);
    // }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_tugas" => $id));
    }

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

        if ($this->upload->do_upload('pic_soal')) {
            return $this->upload->data("file_name");
    }
        // return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $tugas = $this->getId($id);
        if ($tugas->pic_soal != "NULL") {
            $filename = explode(".", $tugas->pic_soal)[0];
            return array_map('unlink', glob(FCPATH."upload/tugas/$filename.*"));
        }
    }

}