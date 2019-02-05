<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluasi_siswa extends CI_Controller {

 function __construct(){
   parent::__construct();
   if($this->session->userdata('status') != "siswa_login"){
     redirect(base_url("evaluasi"));
   }
 }
 
 public function index () {
     $this->load->view('siswa');
      $this->load->view('evaluasi_siswa');
      $this->load->view('footer');
    }
   }
?>