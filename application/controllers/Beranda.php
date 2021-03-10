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
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */