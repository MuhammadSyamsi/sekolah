<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');

	}

	function index(){
		if($this->session->userdata('akses')=='1'){
           	redirect(base_url('admin'));
		}else if($this->session->userdata('akses')=='2'){
			redirect(base_url('admin/guru'));			
		}else if($this->session->userdata('akses')=='3'){
			redirect(base_url('admin/siswa'));			
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function auth(){
        $username = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);

        $cek_guru = $this->M_login->auth_guru($username,$password);

        if($cek_guru->num_rows() > 0){ //jika login sebagai guru
			$data=$cek_guru->row_array();
        	$this->session->set_userdata('masuk',TRUE);
		        if($data['level']=='1'){ //Akses admin
		        	$this->session->set_userdata('akses','1');
		           	$this->session->set_userdata('ses_id',$data['nip']);
		           	$this->session->set_userdata('ses_nama',$data['nama']);
		           	redirect(base_url('admin'));

		        }else{ //akses guru
		    	    $this->session->set_userdata('akses','2');
					$this->session->set_userdata('ses_id',$data['nip']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect(base_url('admin/guru'));
		         }

		        }else{ //jika login sebagai siswa
						$cek_siswa = $this->M_login->auth_siswa($username,$password);
						if($cek_siswa->num_rows() > 0){
						$data=$cek_siswa->row_array();
        				$this->session->set_userdata('masuk',TRUE);
						$this->session->set_userdata('akses','3');
						$this->session->set_userdata('ses_id',$data['id_siswa']);
						$this->session->set_userdata('ses_nama',$data['nama']);
						redirect(base_url('admin/siswa'));
				}else{  // jika username dan password tidak ditemukan atau salah
						echo $this->session->set_flashdata('msg','Username Atau Password Salah');
						redirect(base_url('login'));
				}
        }

    }

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}