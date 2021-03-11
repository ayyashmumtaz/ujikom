<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login');
	}

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/Login.php');
		$this->load->view('user/_partials/footer');
	}

	function aksi_login(){
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$where = array(

			'nik' => $nik,
			'password' => $password
			);
		$cek = $this->Model_login->cek_login("masyarakat",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nik' => $nik,
				'status' => "user"
				);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success-login', 'Berhasil!');
			redirect('beranda');

		}else{
		$this->session->set_flashdata('failed', 'Gagal!');
		   redirect('login');
		}
	}

		function logout(){
		
		$this->session->sess_destroy();
		redirect('beranda/abis_logout');

	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */