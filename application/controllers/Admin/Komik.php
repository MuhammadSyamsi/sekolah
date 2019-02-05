<?php
defined('BASEPATH') OR exit('No direct script access allowed');

   class Komik extends CI_Controller {
    function __construct(){
      parent::__construct();		
      $this->load->model('m_kegiatan');
      $this->load->helper('url');
      if($this->session->userdata('status') != "login"){
        redirect(base_url("login"));
      }
    }
    
    public function index() {
        $this->load->view('admin');
        $data['index'] = $this->m_kegiatan->ambil_data()->result();
        $this->load->view('admin/komik', $data);
      }
   }
?>