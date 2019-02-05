<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class home extends CI_Controller{
  
   function __construct(){
     parent::__construct();
     $this->load->model('m_kegiatan2');
     $this->load->helper('url');
     if($this->session->userdata('status') != "login"){
       redirect(base_url("login"));
     }
   }
  
   function index(){
     $this->load->view('admin');
     $data['index'] = $this->m_kegiatan2->ambil_data()->result();
     $this->load->view('admin/dashboard',$data );
   }
 }