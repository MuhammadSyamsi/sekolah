<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_siswa");
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
        $data["siswa"] = $this->m_siswa->getAll();
        $this->load->view("admin/siswa/list", $data);
    }

    public function tambah()
    {
        $this->ceklogin();
        $siswa = $this->m_siswa;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin.php");
        $this->load->view("admin/siswa/new_form");
    }

    public function edit($id = null)
    {
        $this->ceklogin();
        if (!isset($id)) redirect('admin/siswa');
       
        $siswa = $this->m_siswa;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["siswa"] = $siswa->getById($id);
        if (!$data["siswa"]) show_404();
        
        $this->load->view("admin.php");
        $this->load->view("admin/siswa/edit_form", $data);
    }

    public function delete($id=null)
    {
        $this->ceklogin();
        if (!isset($id)) show_404();
        
        if ($this->m_siswa->delete($id)) {
            redirect(site_url('admin/siswa'));
        }
    }
}
