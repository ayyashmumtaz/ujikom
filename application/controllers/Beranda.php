<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Model_pengaduan');

	}

	public function index()
	{
		$data['banner'] = $this->Model_pengaduan->carousel();
		$data['jumlah_selesai'] = $this->Model_pengaduan->jumlah_selesai();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/index.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function akun_saya()
	{
		if($this->session->userdata('status') != "user"){
            redirect(site_url("login"));
        }
        $data['user'] = $this->Model_pengaduan->data_akun();
        $this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/account.php', $data);
		$this->load->view('user/_partials/footer');
	}


public function abis_logout()
	{
		$this->session->set_flashdata('success-logout', 'Berhasil!');
		$data['banner'] = $this->Model_pengaduan->carousel();
		$data['jumlah_selesai'] = $this->Model_pengaduan->jumlah_selesai();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/index_afterlogout.php', $data);
		$this->load->view('user/_partials/footer');
	}


}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */