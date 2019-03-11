<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->model("M_tugas");
    $this->load->model("M_rapot_tugas");
    if($this->session->userdata('masuk') != TRUE){
      redirect(base_url('login'));
    }
  }

  public function index () {
    $this->load->view('admin');
    $data['tugas'] = $this->M_tugas->getAll();
    $this->load->view('admin/dashboard',$data );
    }
  
  public function kerjakan_tugas($id = null){
   
    $tugas = $this->M_rapot_tugas;
    $validation = $this->form_validation;
    $validation->set_rules($tugas->rules());

    if ($validation->run()) {
        $tugas->kerjakan();
        $this->session->set_flashdata('msg', 'Tugas Telah Dikerjakan');
    }

    $data["rapot_tugas"] = $tugas->getById($id);
    if (!$data["rapot_tugas"]) show_404();

    $this->load->view('admin');
    $this->load->view("admin/tugas/kerjakan", $data);

  }
  
   }
?>