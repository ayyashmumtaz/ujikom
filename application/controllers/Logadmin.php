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

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(

			'username' => $username,
			'password' => $password
			);
		 $cek_us_guru = $this->Model_login->auth_admin($username, $password);
        if ($cek_us_guru->num_rows() > 0) { 
            $data = $cek_us_guru->row_array();
            if ($data['level'] == 'admin') {
                $this->session->set_userdata('status', 'admin');
                $this->session->set_userdata('nama', $username);
                redirect('admin');
            } else { 
                $this->session->set_userdata('status', 'petugas');
                $this->session->set_userdata('nama', $username);
                redirect('petugas');
            }
        }
    
	}

		function logout(){
		
		$this->session->sess_destroy();
		redirect('Logadmin');

	}

}

/* End of file Bof.php */
/* Location: ./application/controllers/Bof.php */