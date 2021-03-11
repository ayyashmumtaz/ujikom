<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "user"){
			$this->session->set_flashdata('not-login', 'Gagal!');
            redirect(site_url("Beranda"));
        }
        $this->load->model('Model_pengaduan');
	}

	public function index()
	{

		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/form_laporan.php');
		$this->load->view('user/_partials/footer');
	}

	public function aspirasi()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/form_aspirasi.php');
		$this->load->view('user/_partials/footer');
	}

	public function informasi()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/form_informasi.php');
		$this->load->view('user/_partials/footer');
	}


	public function input_laporan()
	{
		$id_pengaduan     = $this->input->post('id_pengaduan');
		$nik	   				= $this->input->post('nik');
		$isi_laporan			= $this->input->post('isi_laporan');
		$status    	        	= '0';


	$config['upload_path']          = './assets/img/laporan/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = $this->input->post('id_pengaduan');
    $config['overwrite']			= true;
   // $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
        $upload = $this->upload->data();
        $laporan_data = array(
			'id_pengaduan' => $id_pengaduan,
			'nik' => $nik,
			'isi_laporan' => $isi_laporan,
			'foto' => $upload['file_name'],
			'status' => $status,
		);

		$this->Model_pengaduan->input_laporan_db($laporan_data);
		$this->session->set_flashdata('berhasil-input', 'berhasil!');
		redirect('Laporan');
    }else{
            echo $this->upload->display_errors();
    } 
   

		
	}


}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */