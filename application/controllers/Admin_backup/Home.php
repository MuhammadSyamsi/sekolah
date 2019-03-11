<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Home extends CI_Controller{
  
   function __construct(){
     parent::__construct();
    if($this->session->userdata('masuk') != TRUE){
			  redirect(base_url('login'));
		  }
   }
  
   function index(){
      $this->load->view('admin');
      $data['index'] = $this->m_kegiatan->getAll();
      $this->load->view('admin/dashboard',$data );
   }

   function data_absensi(){
    // function ini hanya boleh diakses oleh admin dan guru
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('v_mahasiswa');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }

  }
 }