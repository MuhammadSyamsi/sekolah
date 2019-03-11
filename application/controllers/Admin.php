<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Admin extends CI_Controller{
  
   function __construct(){
     parent::__construct();
     $this->load->model("M_absen", '', TRUE);
     $this->load->model("M_siswa");
     $this->load->model("M_kelas");
     $this->load->model("M_kegiatan");
     $this->load->model("M_tugas");
     $this->load->library('form_validation');


     //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			  redirect(base_url('login'));
		  }
   }
  
   function index(){
    if($this->session->userdata('akses')=='1'){
        $this->load->view('admin');
        $data["absen"] = $this->M_absen->getAll();
        $this->load->view("admin/absensi/list", $data);
    }else if($this->session->userdata('akses')=='2'){
        redirect(base_url('admin/guru'));			
    }else if($this->session->userdata('akses')=='3'){
        redirect(base_url('admin/siswa'));			
    }else{
        echo "Anda tidak berhak mengakses halaman ini";
        }
   }

   function guru(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $this->load->view('admin');
        $this->load->view('guru/dashboard');
    }else{
        echo "Anda tidak berhak mengakses halaman ini";
        }
   }

   function siswa(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
        $this->load->view('admin');
        // $data["absen"] = $this->M_absen->getAll();
        // $this->load->view("admin/absensi/list", $data);
    }else{
        echo "Anda tidak berhak mengakses halaman ini";
        }
   }

   function absensi(){
    // function ini hanya boleh diakses oleh admin dan guru
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $this->load->view('admin');
        $data["absen"] = $this->M_absen->getAll();
        $this->load->view("admin/absensi/list", $data);
    }else if($this->session->userdata('akses')=='3'){
        $this->load->view('admin');
        echo "Perbaiki halaman ini";
    }else{
        echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    function tambah_absensi(){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
            $data["siswa"] = $this->M_siswa->getAll();
            $data["kelas"] = $this->M_kelas->getAll();
            $absen = $this->M_absen;
            $validation = $this->form_validation;
            $validation->set_rules($absen->rules());

            if ($validation->run()) {
                $absen->save();
                $this->session->set_flashdata('success', 'Berhasil ditambahkan');
            }

            $this->load->view("admin.php");
            $this->load->view("admin/absensi/new_form", $data);
        }else{
            echo "Tidak memiliki hak";
        }
    }

    function edit_absensi($id = null){
        if (!isset($id)) redirect('admin/absensi');
       
        $absen = $this->M_absen;
        $validation = $this->form_validation;
        $validation->set_rules($absen->rules());

        if ($validation->run()) {
            $absen->update();
            $this->session->set_flashdata('success', 'Berhasil diganti');
        }

        $data["absen"] = $absen->getById($id);
        if (!$data["absen"]) show_404();
        
        $this->load->view("admin.php");
        $this->load->view("admin/absensi/edit_form", $data);
    }

    function hapus_absensi($id=null){
        if (!isset($id)) show_404();
        
        if ($this->M_absen->delete($id)) {
            redirect(base_url('admin/absensi'));
        }
    }

    function cari_absensi(){
        $key = $this->input->post('cari');
        $data['cr_absen'] = $this->M_absen->cari($key);
        $this->load->view('admin');
        $this->load->view('sch_admin',$data);
    }

    function tugas(){
        if($this->session->userdata('akses')=='2'){
            $this->load->view('admin');
            $data['tugas'] = $this->M_tugas->getById();
            $this->load->view('guru/tugas/list',$data );
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
          }
    }

    function tambah_tugas(){
        if($this->session->userdata('akses')=='2'){
            $tugas = $this->M_tugas;
            $validation = $this->form_validation;
            $validation->set_rules($tugas->rules());

            if ($validation->run()) {
                $tugas->save();
                $this->session->set_flashdata('success', 'Tugas berhasil ditambahkan');
            }

            $this->load->view("admin.php");
            $this->load->view("guru/tugas/new");
        }else{
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }
}