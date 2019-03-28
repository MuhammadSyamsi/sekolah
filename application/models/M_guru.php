<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model
{
    private $_table = "guru";

    public $nip;
	public $nama;
	public $alamat;
    public $foto = "default.jpg";
	public $pass;
	public $level;

    public function rules()
    {
        return [
            ['field' => 'nip',
            'label' => 'nip',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

			['field' => 'level',
            'label' => 'level',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getId($nip)
    {
        return $this->db->get_where($this->_table, ["nip" => $nip])->row();
    }
    
    public function getById()
    {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->where('nip', $this->session->userdata('ses_id'));
        return $this->db->get()->result();
        // return $this->db->get_where($this->_table, ["nip" => $id_guru])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nip = $post["nip"];
        $this->nama = $post["nama"];
        $this->foto = $this->_uploadImage();
        $this->alamat = $post["alamat"];
        $this->pass = md5('guru');
        $this->level = $post["level"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nip = $post["nip"];
        $this->nama = $post["nama"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        
        $this->alamat = $post["alamat"];
        $this->pass = $post["pass"];
        $this->level = $post["level"];
        $this->db->update($this->_table, $this, array('nip' => $post['nip']));
    }

    public function delete($nip)
    {
        $this->_deleteImage($nip);
        return $this->db->delete($this->_table, array("nip" => $nip));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/guru/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nip;
        $config['overwrite']			= true;
        $config['max_size']             = 5120; // 5MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
    }
    
        return "default.jpg";
    }

    private function _deleteImage($nip)
    {
        $guru = $this->getId($nip);
        if ($guru->foto != "default.jpg") {
            $filename = explode(".", $guru->foto)[0];
            return array_map('unlink', glob(FCPATH."upload/guru/$filename.*"));
        }
    }

}
