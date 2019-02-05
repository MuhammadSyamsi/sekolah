<?php
defined('BASEPATH') OR exit('No direct script access allowed');

   class artikel_siswa extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->helper('url');
      if($this->session->userdata('status') != "siswa_login"){
        redirect(base_url("artikel"));
      }
    }

      function index() {
        $this->load->view('siswa');
        $this->load->view('artikel');
        $this->load->view('footer');
      }

}
?>