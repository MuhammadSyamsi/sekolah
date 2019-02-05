<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_kegiatan");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('admin');
        $data["kegiatan"] = $this->m_kegiatan->getAll();
        $this->load->view("admin/kegiatan/list", $data);
    }

    public function tambah()
    {
        $product = $this->m_kegiatan;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin.php");
        $this->load->view("admin/kegiatan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kegiatan');
       
        $product = $this->m_kegiatan;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kegiatan"] = $product->getById($id);
        if (!$data["kegiatan"]) show_404();
        
        $this->load->view("admin.php");
        $this->load->view("admin/kegiatan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_kegiatan->delete($id)) {
            redirect(site_url('admin/kegiatan'));
        }
    }
}
