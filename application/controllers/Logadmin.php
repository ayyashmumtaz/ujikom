	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Logadmin extends CI_Controller {

		function __construct(){
			parent::__construct();		
			$this->load->model('Model_login');
	 
		}

		public function index()
		{
			if($this->session->userdata('status') == "login"){
				redirect(site_url("admin"));
			}

			$this->load->view('admin/include/headlog.php');
	        $this->load->view('admin/login.php');
	        $this->load->view('admin/include/footlog.php');
		}

		public function aksi_login() {
	$data = array('username' => $this->input->post('username', TRUE),
	'password' => $this->input->post('password', TRUE)
	);
	$hasil = $this->Model_login->cek_user($data);
	if ($hasil->num_rows() == 1) {

	foreach ($hasil->result() as $sess) {
	$sess_data['con'] = TRUE;
	$sess_data['nama'] = $sess->nama_petugas;
	$sess_data['id_petugas'] = $sess->id_petugas;
	$sess_data['username'] = $sess->username;
	$sess_data['level'] = $sess->level;
	$this->session->set_userdata($sess_data);
	}
	if ($this->session->userdata('level')=='admin') {
		$this->session->set_flashdata('berhasil', 'value');
			redirect('admin');
	}
	elseif ($this->session->userdata('level')=='petugas') {
		$this->session->set_flashdata('berhasil', 'value');
	redirect('admin');
	}
	}
	else {
	$this->session->set_flashdata('failed', 'value');
	redirect('Logadmin');
	}
	}

			function logout(){
			
			$this->session->sess_destroy();
			redirect('Logadmin');

		}

	}

	/* End of file Bof.php */
	/* Location: ./application/controllers/Bof.php */