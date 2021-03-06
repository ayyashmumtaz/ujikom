<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function carousel(){
          $hasil = $this->db->select('*')
                            ->get('carousel');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    
}

public function get_detail_laporan($id){

     $q = $this->db->select('*')
                  ->from('pengaduan')
                  ->where('id_pengaduan',$id)
                  ->get(); 
return $q->result(); 
}

public function get_nama()
{
  $this->db->select('masyarakat.nik, pengaduan.nik')
             ->from('masyarakat')
            ->join('pengaduan', 'masyarakat.nik = pengaduan.nik');
  $result = $this->db->get();
}

public function input_tanggapan_db($tanggapan)
  {
    $this->db->insert('tanggapan',$tanggapan); 
  }

public function input_informasi_db($informasi)
  {
    $this->db->insert('jawaban',$informasi); 
  }
  
  public function up_status($data) {

     $this->db->set('status',$data['status'])
         ->where('id_pengaduan',$data['id_pengaduan'])
        ->update('pengaduan');
}

public function selesai_status($data) {

     $this->db->set('status',$data['status'])
         ->where('id_pengaduan',$data['id_pengaduan'])
        ->update('pengaduan');
}

public function up_info_status($data) {

     $this->db->set('status',$data['status'])
         ->where('id_informasi',$data['id_informasi'])
        ->update('informasi');
}



private $_table = "informasi";
    public function getById($id)
    {
    

        return $this->db->get_where($this->_table, ["id_informasi" => $id])->row();
    }

}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */