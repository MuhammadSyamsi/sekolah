<?php
   class materi_siswa extends CI_Controller {

    function __construct(){
      parent::__construct();		
      $this->load->helper('url');
      if($this->session->userdata('status') != "siswa_login"){
       redirect(base_url("materi"));
     }
    }
   
    public function index () {
      $this->load->view('siswa');
      $this->load->view('materi_siswa');
      $this->load->view('footer');
    }
   }
?>