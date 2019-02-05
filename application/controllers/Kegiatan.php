<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
 function __construct(){
   parent::__construct();		
   $this->load->model('m_kegiatan');
   $this->load->helper('url');
   if($this->session->userdata('status') == "siswa_login"){
    redirect(base_url("kegiatan_siswa"));
  }
 }

       public function index() {
        $h_aktif = array(
          'h1_aktif' => " ",
          'h2_aktif' => " ",
          'h3_aktif' => "active",
          'h4_aktif' => " "
           );
        $this->load->view('home', $h_aktif);
        $this->load->view('slider');
        $data['index'] = $this->m_kegiatan->ambil_data()->result();
        $this->load->view('kegiatan', $data);
        $this->load->view('footer');
      }
   }
?>