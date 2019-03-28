<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_ujian extends CI_Model
{
    private $_table = "nilai_ujian";

    public $NISN;
    public $nama;
    public $uts;
    public $uas;

    public function rules()
    {
        return [
            ['field' => 'NISN',
            'label' => 'NISN',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function pilih()
    {
        $where = $this->db->query("select * from siswa where NISN not in (select NISN from nilai_ujian)")->result();
        return $where;
    }

    public function nilai_ujian()
    {
        // $this->db->select('*, COUNT(tugas.id_tugas) as terkumpul');
        // $this->db->from('tugas');
        // $this->db->join('kumpulan_tugas', 'kumpulan_tugas.id_tugas = tugas.id_tugas');
        // $this->db->group_by('tugas.id_tugas');
        // $this->db->where('tugas.nip', $this->session->userdata('ses_id'));
        // $query = $this->db->get();
        // return $query->result();
    }

    public function soal($kumpul)
    {
        return $this->db->get_where($this->_table, ["id_tugas" => $kumpul])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->NISN = $post["NISN"];
        $this->nama = $post["nama"];
        $this->uts = 0;
        $this->uas = 0;
        $this->db->insert($this->_table, $this);
    }

    public function getId($id)
    {
        return $this->db->get_where($this->_table, ["id_tugas" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        // $this->id_tugas = $post["id"];
        $this->NISN = $post["NISN"];
        $this->nama = $post["nama"];
        $this->uts = $post["uts"];
        $this->uas = $post["uas"];
        $this->db->update($this->_table, $this, array('NISN' => $post['NISN']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_tugas" => $id));
    }

}