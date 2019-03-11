<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class siswa extends CI_Controller{
  
   function __construct(){
     parent::__construct();
     $this->load->model("M_siswa");
     $this->load->helper('url');
     if($this->session->userdata('status') != "siswa_login"){
       redirect(base_url(""));
     }
   }
  
   function index(){
     $this->load->view('siswa');
     $this->load->view('konten');
     $this->load->view('footer');
   }

   function kerjakan_tugas($id = null){
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

   function keluar(){
    $this->session->sess_destroy();
    redirect(base_url(''));
  }
 }