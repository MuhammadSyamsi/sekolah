<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_nilai", '', TRUE);
        $this->load->model("m_siswa");
        $this->load->model("m_kelas");
        $this->load->library('form_validation');
    }

    public function ceklogin()
    {
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
          }
    }
    public function index()
    {
        $this->ceklogin();
        $this->load->view('admin');
        $data["nilai"] = $this->m_nilai->getAll();
        $this->load->view("admin/nilai/list", $data);
    }

    public function tambah()
    {
        $this->ceklogin();
        $data["siswa"] = $this->m_siswa->getAll();
        $data["kelas"] = $this->m_kelas->getAll();
        $nilai = $this->m_nilai;
        $validation = $this->form_validation;
        $validation->set_rules($nilai->rules());


        if ($validation->run()) {
            $nilai->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin.php");
        $this->load->view("admin/nilai/new_form", $data);
    }

    public function edit($id = null)
    {
        $this->ceklogin();
        if (!isset($id)) redirect('admin/nilai');
       
        $nilai = $this->m_nilai;
        $validation = $this->form_validation;
        $validation->set_rules($nilai->rules());

        if ($validation->run()) {
            $nilai->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["nilai"] = $nilai->getById($id);
        if (!$data["nilai"]) show_404();
        
        $this->load->view("admin.php");
        $this->load->view("admin/nilai/edit_form", $data);
    }

    public function delete($id=null)
    {
        $this->ceklogin();
        if (!isset($id)) show_404();
        
        if ($this->m_nilai->delete($id)) {
            redirect(site_url('admin/nilai'));
        }
    }
}