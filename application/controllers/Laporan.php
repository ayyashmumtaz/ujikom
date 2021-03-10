<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/form_laporan.php');
		$this->load->view('user/_partials/footer');
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */