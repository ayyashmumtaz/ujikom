<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengaduan extends CI_Model {

	public function carousel(){
          $hasil = $this->db->select('*')
                            ->get('carousel');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    
}

public function input_register()
{
		$nik   	  = $this->input->post('nik');
		$nama     = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$telp     = $this->input->post('telp');

		$reg_data = array(
			'nik' => $nik,
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'telp' => $telp,
		);

		$this->model_register->input_data_reg($reg_data);
		$this->session->set_flashdata('success', 'value');
		redirect('login');
}

}

/* End of file Model_pengaduan.php */
/* Location: ./application/models/Model_pengaduan.php */