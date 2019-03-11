<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_absen", '', TRUE);
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
        $data["absen"] = $this->m_absen->getAll();
        $this->load->view("admin/absensi/list", $data);
    }

    public function tambah()
    {
        $this->ceklogin();
        $data["siswa"] = $this->m_siswa->getAll();
        $data["kelas"] = $this->m_kelas->getAll();
        $absen = $this->m_absen;
        $validation = $this->form_validation;
        $validation->set_rules($absen->rules());


        if ($validation->run()) {
            $absen->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin.php");
        $this->load->view("admin/absensi/new_form", $data);
    }

    public function edit($id = null)
    {
        $this->ceklogin();
        if (!isset($id)) redirect('admin/absensi');
       
        $absen = $this->m_absen;
        $validation = $this->form_validation;
        $validation->set_rules($absen->rules());

        if ($validation->run()) {
            $absen->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["absen"] = $absen->getById($id);
        if (!$data["absen"]) show_404();
        
        $this->load->view("admin.php");
        $this->load->view("admin/absensi/edit_form", $data);
    }

    public function delete($id=null)
    {
        $this->ceklogin();
        if (!isset($id)) show_404();
        
        if ($this->m_absen->delete($id)) {
            redirect(site_url('admin/absensi'));
        }
    }
}