<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model
{
    private $_table = "siswa";

    public $id_siswa;
	public $NISN;
	public $nama;
    public $foto = "default.jpg";
	public $asal_sekolah;
	public $alamat;

    public function rules()
    {
        return [
            ['field' => 'NISN',
            'label' => 'NISN',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

			['field' => 'asal_sekolah',
            'label' => 'asal sekolah',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($NISN)
    {
        return $this->db->get_where($this->_table, ["NISN" => $NISN])->row();
    }

    public function getId($id_siswa)
    {
        return $this->db->get_where($this->_table, ["id_siswa" => $id_siswa])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_siswa = uniqid();
        $this->NISN = $post["NISN"];
        $this->nama = $post["nama"];
        $this->foto = $this->_uploadImage();
        $this->asal_sekolah = $post["asal_sekolah"];
        $this->alamat = $post["alamat"];
        $this->pass = md5('siswa');
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->NISN = $post["NISN"];
        $this->nama = $post["nama"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        
        $this->asal_sekolah = $post["asal_sekolah"];
        $this->alamat = $post["alamat"];
        $this->db->update($this->_table, $this, array('id_siswa' => $post['id_siswa']));
    }

    public function delete($id_siswa)
    {
        $this->_deleteImage($id_siswa);
        return $this->db->delete($this->_table, array("id_siswa" => $id_siswa));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/siswa/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_siswa;
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

    private function _deleteImage($id_siswa)
    {
        $siswa = $this->getId($id_siswa);
        if ($siswa->foto != "default.jpg") {
            $filename = explode(".", $siswa->foto)[0];
            return array_map('unlink', glob(FCPATH."upload/siswa/$filename.*"));
        }
    }

/*    public function cari()
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_kegiatan" => $id));
    }
*/
}
