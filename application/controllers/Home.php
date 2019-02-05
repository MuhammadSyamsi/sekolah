<?php
defined('BASEPATH') OR exit('No direct script access allowed');

   class Home extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model('m_siswa');
      $this->load->helper('url');
      if($this->session->userdata('status') == "siswa_login"){
        redirect(base_url("home/siswa"));
      }
    }
    
    function Index() {
        $this->load->view('home');
        $this->load->view('konten');
      }

    function Lihat_absensi() {
        $this->load->view('home');
        $this->load->view('info');
      }
    
    function Login_siswa(){
      $nama = $this->input->post('nama');
        $pass = $this->input->post('pass');
        $where = array(
          'nama' => $nama,
          'pass' => md5($pass)
          );
        $cek = $this->m_siswa->cek_login("siswa",$where)->num_rows();
        if($cek > 0){
    
          $data_session = array(
            'nama' => $nama,
            'status' => "siswa_login"
            );
    
          $this->session->set_userdata($data_session);
    
          redirect(base_url("home/siswa"));
    
        }else{
          $this->load->view('home');
          $this->load->view('konten');
          $this->load->view('coba_lagi');
          
        }
    }

    function Siswa(){
      $this->load->view('siswa');
      $this->load->view('konten');
    }

    function keluar(){
      $this->session->sess_destroy();
      redirect(base_url(''));
    }
   }
?>