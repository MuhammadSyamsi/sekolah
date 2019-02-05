<?php
   class komik extends CI_Controller {

    function __construct(){
      parent::__construct();		
      $this->load->helper('url');
      if($this->session->userdata('status') == "siswa_login"){
       redirect(base_url("komik_siswa"));
     }
    }
   
    public function index () {
      $h_aktif = array(
        'h1_aktif' => " ",
        'h2_aktif' => " ",
        'h3_aktif' => "active",
        'h4_aktif' => " "
         );
      $this->load->view('home', $h_aktif);
      $this->load->view('komik');
      $this->load->view('footer');
    }
   }
?>