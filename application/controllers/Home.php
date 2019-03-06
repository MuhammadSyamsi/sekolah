<?php
defined('BASEPATH') OR exit('No direct script access allowed');

   class Home extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model("m_absen", '', TRUE);
      $this->load->model("m_siswa");
      $this->load->model("m_kelas");
      $this->load->model("m_nilai");
      $this->load->model("m_kegiatan");
      $this->load->helper('url');
      if($this->session->userdata('status') == "siswa_login"){
        redirect(base_url("siswa"));
      }
    }
    
    function Index() {
        $this->load->view('home');
        $this->load->view('header');
        $this->load->view('slider');
        $this->load->view('konten');
        $this->load->view('footer');
      }

    function Absensi() {
        $this->load->view('home');
        $this->load->view('header');
        $this->load->view('slider');
        $data["absen"] = $this->m_absen->getByTanggal();
        $this->load->view("absensi", $data);
        $this->load->view('footer');
      }

    function Cari(){
        $key = $this->input->post('cari');
        $data['cr_absen'] = $this->m_absen->cari($key);
        $this->load->view('home');
        $this->load->view('header');
        $this->load->view('slider');
        $this->load->view('hasil_cr',$data);
        $this->load->view('footer');
      }

    function Kegiatan(){
        $this->load->view('home');
        $this->load->view('header');
        $this->load->view('slider');
        $data['foto'] = $this->m_kegiatan->getAll();
        $this->load->view('kegiatan', $data);
        $this->load->view('footer');
    }

    function Nilai(){
      $this->load->view('home');
      $this->load->view('header');
      $this->load->view('slider');
      $data['nilai'] = $this->m_nilai->getAll();
      $this->load->view('nilai', $data);
      $this->load->view('footer');
    }

    function Cari_nilai(){
      $key = $this->input->post('cari');
      $data['cari'] = $this->m_nilai->cari($key);
      $this->load->view('home');
      $this->load->view('header');
      $this->load->view('slider');
      $this->load->view('cari_nilai',$data);
      $this->load->view('footer');
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
          $this->load->view('home');
          $this->load->view('header');
          $this->load->view('slider');
          $data['siswa'] = $this->m_siswa->getAll();
          $this->load->view('list_siswa', $data);
          $this->load->view('footer');
        }

    function keluar(){
      $this->session->sess_destroy();
      redirect(base_url(''));
    }
    
   }
?>