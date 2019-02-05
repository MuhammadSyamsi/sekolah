<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluasi extends CI_Controller {

 function __construct(){
   parent::__construct();
   if($this->session->userdata('status') == "siswa_login"){
     redirect(base_url("evaluasi_siswa"));
   }
 }
 
 public function index () {
      $h_aktif = array(
        'h1_aktif' => " ",
        'h2_aktif' => " ",
        'h3_aktif' => " ",
        'h4_aktif' => " "
         );
      $this->load->view('home', $h_aktif);
      $this->load->view('evaluasi');
      $this->load->view('footer');
    }
   }
?>