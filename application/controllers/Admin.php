<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('con') != TRUE){
			redirect(site_url("Logadmin"));
		}
		$this->load->model('Model_admin');
		$this->load->model('Model_pengaduan');
		$this->load->library('pagination');
	}

	public function index()
	{
		$data['jumlah_selesai'] = $this->Model_pengaduan->jumlah_selesai();
		$data['total_semua'] = $this->Model_pengaduan->jumlah_total_pengaduan();
		$data['jumlah_proses'] = $this->Model_pengaduan->jumlah_proses();
		$data['jumlah_belum_diproses'] = $this->Model_pengaduan->jumlah_belum_diproses();
        $data['total_user'] = $this->Model_pengaduan->total_user();
        $data['jumlah_selesai_informasi'] = $this->Model_pengaduan->jumlah_selesai_informasi();
        $data['total_semua_informasi'] = $this->Model_pengaduan->jumlah_total_pengaduan_informasi();
        $data['jumlah_proses_informasi'] = $this->Model_pengaduan->jumlah_proses_informasi();
        $data['jumlah_belum_diproses_informasi'] = $this->Model_pengaduan->jumlah_belum_diproses_informasi();
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

       public function laporan()
	{
         
       
        $config['base_url'] = site_url('admin/laporan'); //site url
        $config['total_rows'] = $this->db->count_all('pengaduan'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // urldecode(str)i parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; 
        $data['data'] = $this->Model_pengaduan->get_laporan_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();

		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/pengaduan.php', $data);
		$this->load->view('admin/include/footer.php');

}

public function aspirasi()
	{
         
       
        $config['base_url'] = site_url('admin/aspirasi'); //site url
        $config['total_rows'] = $this->db->count_all('aspirasi'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // urldecode(str)i parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; 
        $data['data'] = $this->Model_pengaduan->get_aspirasi_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
        
		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/aspirasi.php', $data);
		$this->load->view('admin/include/footer.php');

}

public function informasi()
	{
         
       
        $config['base_url'] = site_url('admin/informasi'); //site url
        $config['total_rows'] = $this->db->count_all('informasi'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // urldecode(str)i parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; 
        $data['data'] = $this->Model_pengaduan->get_informasi_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
        
		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/informasi.php', $data);
		$this->load->view('admin/include/footer.php');

}

public function data_admin()
    {
         
       
        $config['base_url'] = site_url('admin/data_admin'); //site url
        $config['total_rows'] = $this->db->count_all('petugas'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // urldecode(str)i parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; 
        $data['data'] = $this->Model_pengaduan->get_data_admin($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
        
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/data_admin.php', $data);
        $this->load->view('admin/include/footer.php');

}

public function data_user()
    {
         
       
        $config['base_url'] = site_url('admin/data_user'); //site url
        $config['total_rows'] = $this->db->count_all('masyarakat'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // urldecode(str)i parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; 
        $data['data'] = $this->Model_pengaduan->get_data_user($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
        
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/data_user.php', $data);
        $this->load->view('admin/include/footer.php');

}

public function validasi($id)
{
    $data["data"] = $this->Model_admin->get_detail_laporan($id);
    $data["data2"] = $this->Model_admin->get_nama();
    $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/validasi.php', $data);
        $this->load->view('admin/include/footer.php');
}

public function validasi_informasi($id)
{
    $data["data"] = $this->Model_admin->getById($id);
    $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/validasi_informasi.php', $data);
        $this->load->view('admin/include/footer.php');
}


public function add_tanggapan()
    {
        
        $id_tanggapan = uniqid();
        $id_pengaduan = $this->input->post('id_pengaduan');
        $tanggapan = $this->input->post('tanggapan');
        $id_petugas = $this->input->post('id_petugas');

        $tanggapan = array(
            'id_tanggapan' => $id_tanggapan,
            'id_pengaduan' => $id_pengaduan,
            
            'tanggapan' => $tanggapan,
            'id_petugas' => $id_petugas
                );

        $data = array(
        'id_pengaduan' => $this->input->post('id_pengaduan'),
        'status' => $this->input->post('status')
    );
 
        $this->Model_admin->up_status($data);

        $this->Model_admin->input_tanggapan_db($tanggapan);
        $this->session->set_flashdata('success', 'Tanggapan berhasil di input!');
        redirect('admin/laporan');
    }


    public function add_informasi()
    {
        $id_tanggapan = uniqid();
        $id_informasi = $this->input->post('id_informasi');
        $jawaban = $this->input->post('jawaban');
        $id_petugas = $this->input->post('id_petugas');
        $status = $this->input->post('status');


        $informasi = array(
            'id_tanggapan' => $id_tanggapan,
            'id_informasi' => $id_informasi,
            'jawaban' => $jawaban,
            'id_petugas' => $id_petugas
                );

       $data = array(
        'id_informasi' => $this->input->post('id_informasi'),
        'status' => $this->input->post('status')
    );

    
        $this->Model_admin->up_info_status($data);
        $this->Model_admin->input_informasi_db($informasi);
        $this->session->set_flashdata('success', 'Tanggapan berhasil di input!');
        redirect('admin/informasi');
    }

        public function selesai_pengaduan($id)
        {
            
        $data = array(
        'id_pengaduan' => $id,
        'status' => 'selesai'
    );
 
        $this->Model_admin->selesai_status($data);
        $this->session->set_flashdata('success', 'Pengaduan Berhasil Diselesaikan!');
        redirect('admin/laporan');
        }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */