<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "admin"){
			redirect(site_url("Logadmin"));
		}
		$this->load->model('Model_admin');
		$this->load->model('Model_pengaduan');
	}

	public function index()
	{
		$data['jumlah_selesai'] = $this->Model_pengaduan->jumlah_selesai();
		$data['total_semua'] = $this->Model_pengaduan->jumlah_total_pengaduan();
		$data['jumlah_proses'] = $this->Model_pengaduan->jumlah_proses();
		$data['jumlah_belum_diproses'] = $this->Model_pengaduan->jumlah_belum_diproses();
		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/include/footer.php');
	}

	public function carousel()
    {
        $data['banner'] = $this->Model_admin->carousel();

        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/carousel.php', $data);
        $this->load->view('admin/include/footer.php');
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */