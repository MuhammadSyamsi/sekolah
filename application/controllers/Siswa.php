<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class siswa extends CI_Controller{
  
   function __construct(){
     parent::__construct();
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

   function keluar(){
    $this->session->sess_destroy();
    redirect(base_url(''));
  }
 }