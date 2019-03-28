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
     $this->load->model("M_pekerjaan");
     $this->load->model("M_ujian");
     $this->load->model("M_rapot");
     $this->load->model("M_guru");
     $this->load->library('form_validation');


     //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			  redirect(base_url('login'));
		  }
   }

   //Dashboard admin/guru/siswa
   function index(){
    if($this->session->userdata('akses')=='1'){
        $this->load->view('admin');
        $this->load->view("admin/dashboard");
    }else if($this->session->userdata('akses')=='2'){
        redirect(base_url('admin/guru'));			
    }else if($this->session->userdata('akses')=='3'){
        redirect(base_url('admin/siswa'));			
    }else{
        echo "Anda tidak berhak mengakses halaman ini";
        }
   }

   function guru(){
    if($this->session->userdata('akses')=='2'){
        $this->load->view('admin');
        $this->load->view('guru/dashboard');
    }else{
        redirect(base_url('admin'));
        }
   }

   function siswa(){
    if($this->session->userdata('akses')=='3'){
        $this->load->view('admin');
        $this->load->view('siswa/dashboard');
    }else{
        echo "Anda tidak berhak mengakses halaman ini";
        }
   }
   //end dashboard admin/guru/siswa

    // function absensi
    function absensi(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $this->load->view('admin');
        $data["absen"] = $this->M_absen->getAll();
        $this->load->view("admin/absensi/list", $data);
    }else if($this->session->userdata('akses')=='3'){
        $this->load->view('admin');
        $data["var_absen"] = $this->M_absen->getSiswa();
        $this->load->view('siswa/absensi', $data);
    }else{
        show_404();
    }
    }

    //hanya untuk guru dan admin
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

            $this->load->view("admin");
            $this->load->view("admin/absensi/new_form", $data);
        }else{
            show_404();
        }
    }

    //hanya untuk guru dan admin
    function edit_absensi($id = null){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
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
        
        $this->load->view("admin");
        $this->load->view("admin/absensi/edit_form", $data);

        }else{
            show_404();
        }
    }

    //hanya untuk guru dan admin
    function hapus_absensi($id=null){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
        if (!isset($id)) show_404();
        
        if ($this->M_absen->delete($id)) {
            redirect(base_url('admin/absensi'));
        }
        }else{
            show_404();
        }
    }

    //untuk guru dan admin
    function cari_absensi(){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
        $key = $this->input->post('cari');
        $data['cr_absen'] = $this->M_absen->cari($key);
        $this->load->view('admin');
        $this->load->view('sch_admin',$data);

        }else{
            show_404();
        }
    }
    //end function absensi

    //function tugas, untuk admin dan guru
    function tugas(){
        if($this->session->userdata('akses')=='2'){
            $this->load->view('admin');
            $data['tugas'] = $this->M_tugas->getById();
            $this->load->view('guru/tugas/list',$data );
        }else if($this->session->userdata('akses')=='1'){
            $this->load->view('admin');
            $this->load->view('blok_akses');
        }else if($this->session->userdata('akses')=='3'){
            $this->load->view('admin');
            $this->load->view('blok_akses');
          }
    }

    //fungsi khusus guru
    function tambah_tugas(){
        if($this->session->userdata('akses')=='2'){
            $tugas = $this->M_tugas;
            $validation = $this->form_validation;
            $validation->set_rules($tugas->rules());

            if ($validation->run()) {
                $tugas->save();
                $this->session->set_flashdata('success', 'Tugas berhasil ditambahkan');
            }

            $this->load->view("admin");
            $this->load->view("guru/tugas/new");
        }else{
            show_404();
        }
    }

    //fungsi khusus guru
    function edit_tugas($id=null){
        if($this->session->userdata('akses')=='2'){
        if (!isset($id)) redirect('admin/tugas');
       
        $tugas = $this->M_tugas;
        $validation = $this->form_validation;
        $validation->set_rules($tugas->rules());

        if ($validation->run()) {
            $tugas->update();
            $this->session->set_flashdata('success', 'Tugas berhasil diganti');
        }

        $data["tugas"] = $tugas->getId($id);
        if (!$data["tugas"]) show_404();
        
        $this->load->view("admin");
        $this->load->view("guru/tugas/edit", $data);

        }else{
            show_404();
        }
    }

    //fungsi untuk admin dan guru
    function hapus_tugas($id=null){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
        if (!isset($id)) show_404();
        
        if ($this->M_tugas->delete($id)) {
            redirect(base_url('admin/tugas'));
        }
    }else{
        show_404();
    }
    }

    //fungsi untuk admin dan guru
    function lihat_pekerjaan(){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
            $this->load->view("admin");
            $data['kerjaan'] = $this->M_tugas->kerjaan();
            $this->load->view("guru/tugas/lihat_pekerjaan", $data);
        }else{
            show_404();
        }
    }

    //fungsi untuk guru
    function nilai_tugas($kumpul){
        if($this->session->userdata('akses')=='2'){
            if (!isset($kumpul)) redirect('admin/tugas');
           
            $kerja = $this->M_pekerjaan;
            $validation = $this->form_validation;
            $validation->set_rules($kerja->rules());
    
            if ($validation->run()) {
                $kerja->update();
                $this->session->set_flashdata('success', 'Nilai diupdate');
            }
    
            $data["nilai"] = $kerja->getId($kumpul);
            $data["soal"] = $this->M_tugas->soal($kumpul);
            if (!$data["nilai"]) show_404();
            
            $this->load->view("admin");
            $this->load->view("guru/tugas/nilai_tugas", $data);
    
            }else{
                show_404();
            }
    }

    //fungsi untuk admin dan guru
    function kegiatan(){
        if($this->session->userdata('akses')=='1'){
            $this->load->view('admin');
            $data["kegiatan"] = $this->M_kegiatan->getAll();
            $this->load->view("admin/kegiatan/list", $data);
        }else if($this->session->userdata('akses')=='2'){
            $this->load->view('admin');
            $data["kegiatan"] = $this->M_kegiatan->getNip();
            $this->load->view("guru/kegiatan/list", $data);    
        }else if($this->session->userdata('akses')=='3'){
            $this->load->view('admin');
            $this->load->view('blok_akses');
        }else{
            show_404();
        }
    }

    //fungsi edit kegiatan admin dan guru
    function edit_kegiatan($id_kegiatan){
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
            if (!isset($id_kegiatan)) redirect('admin/kegiatan');
           
            $kegiatan = $this->M_kegiatan;
            $validation = $this->form_validation;
            $validation->set_rules($kegiatan->rules());
    
            if ($validation->run()) {
                $kegiatan->update();
                $this->session->set_flashdata('success', 'Kegiatan diperbarui');
            }
    
            $data["kegiatan"] = $kegiatan->getById($id_kegiatan);
            if (!$data["kegiatan"]) show_404();
            
            $this->load->view("admin");
            $this->load->view("admin/kegiatan/edit_form", $data);
        }else{
            show_404();
        }
    }
    
    //fungsi untuk admin dan guru
    function tambah_kegiatan(){
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
            $kegiatan = $this->M_kegiatan;
            $validation = $this->form_validation;
            $validation->set_rules($kegiatan->rules());

            if ($validation->run()) {
                $kegiatan->save();
                $this->session->set_flashdata('success', 'Kegiatan berhasil ditambah');
            }

            $this->load->view("admin");
            $this->load->view("admin/kegiatan/new_form");
        }else{
            show_404();
        }
    }

    //fungsi untuk admin dan guru
    function hapus_kegiatan($id = null){
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
            if (!isset($id)) show_404();
            
            if ($this->M_kegiatan->delete($id)) {
                redirect(site_url('admin/kegiatan'));
            }
        }else{
            show_404();
        }
    }

    //fungsi untuk guru dan admin
    function rapot(){
        if($this->session->userdata('akses')=='2'){
        $this->load->view("admin");
        $data['siswa'] = $this->M_ujian->pilih();
        $data['view_nilai'] = $this->M_ujian->getAll();

        $ujian = $this->M_ujian;
        $validation = $this->form_validation;
        $validation->set_rules($ujian->rules());

        if ($validation->run()) {
            $ujian->save();
            redirect(site_url('admin/nilai_ujian'));
        }

        $this->load->view('guru/tugas/ujian', $data);
    }else if($this->session->userdata('akses')=='1'){
        $this->load->view('admin');
        $data['view_nilai'] = $this->M_ujian->getAll();
        $this->load->view('admin/rapot/list', $data);
    }else if($this->session->userdata('akses')=='3'){
        $this->load->view('admin');
        $data['rapot'] = $this->M_rapot->rapotSiswa();
        $data['ujian'] = $this->M_rapot->ujianSiswa();
        $data['rata'] = $this->M_rapot->rataSiswa();
        $this->load->view('siswa/rapot/uts', $data);
}else{
            show_404();
        }
    }

    //fungsi untuk siswa
    function rapot_uas()
    {
        if($this->session->userdata('akses')=='3'){
            $this->load->view('admin');
            $data['rapot'] = $this->M_rapot->rapotSiswa();
            $data['ujian'] = $this->M_rapot->ujianSiswa();
            $data['rata'] = $this->M_rapot->rataSiswa();
            $this->load->view('siswa/rapot/uas', $data);
    }else{
        show_404();
    }
    }

    //fungsi untuk siswa/guru/admin
    function lihat_rapot($NISN = null){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
            if (!isset($NISN)) redirect(base_url('admin/update_rapot'));
            $this->load->view('admin');
            $data['rapot'] = $this->M_rapot->getRapot($NISN);
            $data['nama'] = $this->M_rapot->pilihSiswa($NISN);
            $data['ujian'] = $this->M_rapot->pilihRapot($NISN);
            $data['rata'] = $this->M_rapot->rata($NISN);
            $this->load->view('guru/rapot/cetak', $data);
        }else if($this->session->userdata('akses')=='1'){
            if (!isset($NISN)) redirect(base_url('admin/rapot'));
            $this->load->view('admin');
            $data['rapot'] = $this->M_rapot->getRapot($NISN);
            $data['nama'] = $this->M_rapot->pilihSiswa($NISN);
            $data['ujian'] = $this->M_rapot->pilihRapot($NISN);
            $data['rata'] = $this->M_rapot->rata($NISN);
            $this->load->view('admin/rapot/cetak', $data);            
        }else{
            show_404();
        }
    }

    //fungsi untuk siswa/guru/admin
    function rapot_akhir($NISN = null){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
            if (!isset($NISN)) redirect(base_url('admin/update_rapot'));
            $this->load->view('admin');
            $data['rapot'] = $this->M_rapot->getRapot($NISN);
            $data['nama'] = $this->M_rapot->pilihSiswa($NISN);
            $data['ujian'] = $this->M_rapot->pilihRapot($NISN);
            $data['rata'] = $this->M_rapot->rata($NISN);
            $this->load->view('guru/rapot/cetak_akhir', $data);
        }else if($this->session->userdata('akses')=='1'){
            if (!isset($NISN)) redirect(base_url('admin/rapot'));
            $this->load->view('admin');
            $data['rapot'] = $this->M_rapot->getRapot($NISN);
            $data['nama'] = $this->M_rapot->pilihSiswa($NISN);
            $data['ujian'] = $this->M_rapot->pilihRapot($NISN);
            $data['rata'] = $this->M_rapot->rata($NISN);
            $this->load->view('admin/rapot/cetak_akhir', $data);
        }else{
            show_404();
        }
    }

    //fungsi untuk guru dan admin
    function cari_rapot(){
        $key = $this->input->post('cari');
        $data['cr_rapot'] = $this->M_siswa->cari($key);
        $this->load->view('admin');
        $this->load->view('sch_rapot',$data);
    }

    //fungsi untuk admin dan guru
    function nilai_ujian(){
        if($this->session->userdata('akses')=='2'){
            $this->load->view('admin');
            $data['siswa'] = $this->M_ujian->pilih();
            $data['view_nilai'] = $this->M_ujian->getAll();

            $ujian = $this->M_ujian;
            $validation = $this->form_validation;
            $validation->set_rules($ujian->rules());

            if ($validation->run()) {
                $ujian->save();
                redirect(site_url('admin/nilai_ujian'));
            }

            // $data['nilai_ujian'] = $this->M_ujian->update();
            $this->load->view('guru/tugas/ujian', $data);
        }else{
            show_404();
        }
    }

    //fungsi untuk guru
    function update_rapot(){
        if($this->session->userdata('akses')=='2'){
            $this->load->view('admin');
            $data['view_nilai'] = $this->M_ujian->getAll();

            $ujian = $this->M_ujian;
            $validation = $this->form_validation;
            $validation->set_rules($ujian->rules());

            if ($validation->run()) {
                $ujian->update();
                redirect(base_url('admin/update_rapot'));
            }
            $this->load->view('guru/tugas/update_ujian', $data);
        }else{
            show_404();
        }
    }

    //fungsi cetak untuk admin dan guru
    function cetak($NISN){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
            $data['rapot'] = $this->M_rapot->getRapot($NISN);
            $data['nama'] = $this->M_rapot->pilihSiswa($NISN);
            $data['ujian'] = $this->M_rapot->pilihRapot($NISN);
            $data['rata'] = $this->M_rapot->rata($NISN);
            $html = $this->load->view('admin/rapot_uts', $data);

            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->filename = $NISN . ".pdf";
            $this->pdf->load_view('admin/rapot_uts', $data);

        }else{
            show_404();
        }
    }

    //fungsi cetak untuk admin dan guru
    function cetak_akhir($NISN){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
            $data['rapot'] = $this->M_rapot->getRapot($NISN);
            $data['nama'] = $this->M_rapot->pilihSiswa($NISN);
            $data['ujian'] = $this->M_rapot->pilihRapot($NISN);
            $data['rata'] = $this->M_rapot->rata($NISN);
            $html = $this->load->view('admin/rapot_uts', $data);

            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->filename = $NISN . ".pdf";
            $this->pdf->load_view('admin/rapot_uas', $data);

        }else{
            show_404();
        }
    }

    //fungsi edit password
    function profil(){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
            $data['propil'] = $this->M_guru->getById(); 
            $this->load->view('admin');
            $this->load->view('admin/profil', $data);        
        }else if($this->session->userdata('akses')=='3'){
            echo 'ini siswa';
        }else{
            show_404();
        }
    }

    //aksi ganti password
    function ganti_pass(){
        if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='1'){
            $user = $this->M_guru;
            $validation = $this->form_validation;
            $validation->set_rules($user->rules());

            if ($validation->run()) {
                $user->gantiPass();
                redirect(base_url('admin/profil'));
            }
            // tulis perintah
        }
    }

    //fungsi khusus admin
    function data_siswa(){
        if($this->session->userdata('akses')=='1'){
            $this->load->view('admin');
            $data['siswa'] = $this->M_siswa->getAll();
            $this->load->view('admin/siswa/list', $data);
        }else{
            show_404();
        }
    }
    function edit_siswa($NISN = null){
        if($this->session->userdata('akses')=='1'){
            if (!isset($NISN)) redirect('admin/data_siswa');
           
            $siswa = $this->M_siswa;
            $validation = $this->form_validation;
            $validation->set_rules($siswa->rules());
    
            if ($validation->run()) {
                $siswa->update();
                $this->session->set_flashdata('success', 'Informasi siswa diperbarui');
            }
    
            $data["siswa"] = $siswa->getById($NISN);
            if (!$data["siswa"]) show_404();
            
            $this->load->view("admin");
            $this->load->view("admin/siswa/edit_form", $data);
        }else{
            show_404();
        }
    }
    function delete_siswa($id_siswa = null){
        if($this->session->userdata('akses')=='1'){
        if (!isset($id_siswa)) show_404();
        
        if ($this->M_siswa->delete($id_siswa)) {
            redirect(base_url('admin/data_siswa'));
        }
    }else{
        show_404();
    }
    }
    function tambah_siswa(){
        if($this->session->userdata('akses')=='1'){
            $siswa = $this->M_siswa;
            $validation = $this->form_validation;
            $validation->set_rules($siswa->rules());

            if ($validation->run()) {
                $siswa->save();
                $this->session->set_flashdata('success', 'Berhasil menambah data siswa');
            }

            $this->load->view("admin");
            $this->load->view("admin/siswa/new_form");
        }else{
            show_404();
        }
    }
    function data_guru(){
        if($this->session->userdata('akses')=='1'){
            $this->load->view('admin');
            $data['guru'] = $this->M_guru->getAll();
            $this->load->view('admin/guru/list', $data);
        }else{
            show_404();
        }
    }
    function edit_guru($nip = null){
        if($this->session->userdata('akses')=='1'){
            if (!isset($nip)) redirect('admin/data_guru');
           
            $guru = $this->M_guru;
            $validation = $this->form_validation;
            $validation->set_rules($guru->rules());
    
            if ($validation->run()) {
                $guru->update();
                $this->session->set_flashdata('success', 'Informasi guru diperbarui');
            }
    
            $data["guru"] = $guru->getId($nip);
            if (!$data["guru"]) show_404();
            
            $this->load->view("admin");
            $this->load->view("admin/guru/edit_form", $data);
        }else{
            show_404();
        }
    }
    function delete_guru($nip = null){
        if($this->session->userdata('akses')=='1'){
        if (!isset($nip)) show_404();
        
        if ($this->M_guru->delete($nip)) {
            redirect(base_url('admin/data_guru'));
        }
    }else{
        show_404();
    }
    }
    function tambah_guru(){
        if($this->session->userdata('akses')=='1'){
            $guru = $this->M_guru;
            $validation = $this->form_validation;
            $validation->set_rules($guru->rules());

            if ($validation->run()) {
                $guru->save();
                $this->session->set_flashdata('success', 'Berhasil menambah data guru');
            }

            $this->load->view("admin");
            $this->load->view("admin/guru/new_form");
        }else{
            show_404();
        }
    }
}