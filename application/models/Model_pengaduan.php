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

public function get_laporan_list($limit, $start){
        $query = $this->db->get('pengaduan', $limit, $start);
        return $query;
    }

public function get_aspirasi_list($limit, $start){
        $query = $this->db->get('aspirasi', $limit, $start);
        return $query;
    }

public function get_informasi_list($limit, $start){
        $query = $this->db->get('informasi', $limit, $start);
        return $query;
    }

public function get_data_admin($limit, $start){
        $query = $this->db->get('petugas', $limit, $start);
        return $query;
    }

public function get_data_user($limit, $start){
        $query = $this->db->get('masyarakat', $limit, $start);
        return $query;
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


public function jumlah_total_pengaduan()
{   
    $query = $this->db->get('pengaduan');
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
    $query = $this->db->where('status', '0')
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

public function jumlah_selesai_informasi()
{   
    $query = $this->db->where('status', 'selesai')
                        ->get('informasi');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}


public function jumlah_total_pengaduan_informasi()
{   
    $query = $this->db->get('informasi');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlah_proses_informasi()
{   
    $query = $this->db->where('status', 'proses')
                        ->get('informasi');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlah_belum_diproses_informasi()
{   
    $query = $this->db->where('status', '0')
                        ->get('informasi');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}


public function total_user()
{   
    $query = $this->db->get('masyarakat');
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
                            ->get('informasi');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

public function join_adu_tanggap($id){

     $q = $this->db->select('*')
                  ->from('pengaduan')
                  ->where('pengaduan.id_pengaduan',$id)
                  ->get(); 
return $q->result(); 
}

public function join_tanggap($id){

     $q = $this->db->select('*')
                  ->from('tanggapan')
                  ->where('tanggapan.id_pengaduan',$id)
                  ->get(); 
return $q->result(); 
}

public function join_info_tanggap($id){

     $q = $this->db->select('*')
                  ->from('informasi')
                  ->where('informasi.id_informasi',$id)
                  ->get(); 
return $q->result(); 
}

public function join_jawaban($id){

     $q = $this->db->select('*')
                  ->from('jawaban')
                  ->where('jawaban.id_informasi',$id)
                  ->get(); 
return $q->result(); 
}


public function search($keyword){
    $this->db->like('judul_aspirasi', $keyword);
    $this->db->or_like('aspirasi', $keyword);
    
    $result = $this->db->get('aspirasi')->result(); // Tampilkan data siswa berdasarkan keyword
    
    return $result;

}

public function aspirasi_all()
{
   return $this->db->get('aspirasi')->result();
}

}
/* End of file Model_pengaduan.php */
/* Location: ./application/models/Model_pengaduan.php */