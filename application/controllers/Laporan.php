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

	public function detail_laporan($id = null)
	{
		$data["adu"] = $this->Model_pengaduan->join_adu_tanggap($id);
		$data["tanggap"] = $this->Model_pengaduan->join_tanggap($id);
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/detail_pengaduan.php', $data);
		$this->load->view('user/_partials/footer');
	}

public function detail_informasi($id = null)
	{
		$data["adu"] = $this->Model_pengaduan->join_info_tanggap($id);
		$data["tanggap"] = $this->Model_pengaduan->join_jawaban($id);
		
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/detail_informasi.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function input_laporan()
	{
		$id_pengaduan     = $this->input->post('id_pengaduan');
		$judul_pengaduan		= $this->input->post('judul_pengaduan');
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
			'judul_pengaduan' => $judul_pengaduan,
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

	public function input_aspirasi()
	{

		$id_aspirasi = uniqid();
		$judul_aspirasi = $this->input->post('judul_aspirasi');
		$aspirasi = $this->input->post('aspirasi');
		$nik = $this->input->post('nik');
		$aspirasi_data = array(
			'id_aspirasi' => $id_aspirasi,
			'aspirasi' => $aspirasi,
			'judul_aspirasi' => $judul_aspirasi,
			'nik' => $nik
				);
		$this->Model_pengaduan->input_aspirasi_db($aspirasi_data);
		$this->session->set_flashdata('berhasil-input', 'berhasil!');
		redirect('laporan/aspirasi');
	}

	public function input_informasi()
	{
		
		$id_informasi = uniqid();
		$nik = $this->input->post('nik');
		$informasi = $this->input->post('informasi');

		$informasi_data = array(
			'id_informasi' => $id_informasi,
			'informasi' => $informasi,
			'nik' => $nik
				);

		$this->Model_pengaduan->input_informasi_db($informasi_data);
		$this->session->set_flashdata('berhasil-input', 'berhasil!');
		redirect('laporan/informasi');
	}

public function addCarl()
    {
    	$id = uniqid();

    $config['upload_path']          = './assets/img/laporan/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = $id;
    $config['overwrite']			= true;
   // $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('img')) {
        $upload = $this->upload->data();
        $carousel_data = array(
			'id' => $id,
		);

		$this->Model_pengaduan->input_laporan_db($carousel_data);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        redirect('admin/addCarousel');
    
    }
}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */