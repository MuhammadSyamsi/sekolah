<?php
defined('BASEPATH') OR exit('No direct script access allowed');

   class Kegiatan_siswa extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->helper('url');
      if($this->session->userdata('status') != "siswa_login"){
        redirect(base_url("kegiatan"));
      }
      $this->load->model('m_kegiatan');
    }

      function index() {
          $this->load->view('siswa');
          $this->load->view('slider');
          $data['index'] = $this->m_kegiatan->ambil_data()->result();
          $this->load->view('kegiatan', $data);
          $this->load->view('footer');
        }
}
?>