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

public function input_laporan_db($laporan_data)
	{
		$this->db->insert('pengaduan',$laporan_data);	
	}

  public function input_aspirasi_db($laporan_data)
  {
    $this->db->insert('aspirasi',$laporan_data); 
  }

  public function input_informasi_db($laporan_data)
  {
    $this->db->insert('informasi',$laporan_data); 
  }

	public function data_akun(){
        $data = $this->session->userdata('nik');
  		$this->db->select('*');
 		$this->db->where('nik', $data);//
  		$this->db->from('masyarakat');
  		$query = $this->db->get();
  		return $query->result();
}

public function jumlah_selesai()
{   
    $query = $this->db->where('status', 'selesai')
                        ->get('pengaduan');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlah_proses()
{   
    $query = $this->db->where('status', 'proses')
                        ->get('pengaduan');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlah_belum_diproses()
{   
    $query = $this->db->where('status', 0)
                        ->get('pengaduan');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function laporan_saya(){
        $nik = $this->session->userdata('nik');
          $hasil = $this->db->select('*')
                            ->where('nik', $nik)
                            ->get('pengaduan');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }


    public function aspirasi_saya(){
         $nik = $this->session->userdata('nik');
          $hasil = $this->db->select('*')
                            ->where('nik', $nik)
                            ->get('aspirasi');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function informasi_saya(){
        $nik = $this->session->userdata('nik');
          $hasil = $this->db->select('*')
                            ->where('nik', $nik)
                            ->get('aspirasi');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

}

/* End of file Model_pengaduan.php */
/* Location: ./application/models/Model_pengaduan.php */