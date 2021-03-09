<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_register');
	}

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/register');
		$this->load->view('user/_partials/footer');
	}

	public function input_data_register()
	{
		
		$nik      = $this->input->post('nik');
		$nama     = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$telp     = $this->input->post('telp');

		$reg_data = array(
			'nik' => $nik,
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'telp' => $telp,
		);

		$this->Model_register->input_data_reg($reg_data);
		$this->session->set_flashdata('success', 'berhasil!');
		redirect('login');
	}
	

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */