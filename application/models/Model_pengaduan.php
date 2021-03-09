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

}

/* End of file Model_pengaduan.php */
/* Location: ./application/models/Model_pengaduan.php */