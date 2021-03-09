<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/index.php');
		$this->load->view('user/_partials/footer');
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */