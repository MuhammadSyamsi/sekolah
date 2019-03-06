<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('admin/v_login');

		// $username = $this->input->post('username');
		// $password = $this->input->post('password');
		// $where = array(
		// 	'username' => $username,
		// 	'password' => md5($password)
		// 	);
		// $cek = $this->m_login->cek_login("admin",$where)->num_rows();
		// if($cek > 0){

		// 	$data_session = array(
		// 		'nama' => $username,
		// 		'status' => "login"
		// 		);

		// 	$this->session->set_userdata($data_session);

		// 	redirect(base_url("admin"));

		// } else{
		// 	$this->session->set_flashdata('success', 'Nama dan Passwordmu salah');
		// }
	}

	function auth(){
        $username = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);

        $cek_guru = $this->M_login->auth_dosen($username,$password);

        if($cek_dosen->num_rows() > 0){ //jika login sebagai dosen
						$data=$cek_dosen->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['nip']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect(base_url('admin'));

		         }else{ //akses dosen
		            $this->session->set_userdata('akses','2');
								$this->session->set_userdata('ses_id',$data['nip']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');
		         }

        }else{ //jika login sebagai mahasiswa
					$cek_mahasiswa=$this->login_model->auth_mahasiswa($username,$password);
					if($cek_mahasiswa->num_rows() > 0){
							$data=$cek_mahasiswa->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['nim']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('page');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }

    }

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}