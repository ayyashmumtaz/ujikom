<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_export extends CI_Model {

	public function getAll()
     {
          $this->db->select('*');
          $this->db->from('pengaduan');

          return $this->db->get();
     }

}

/* End of file Model_export.php */
/* Location: ./application/models/Model_export.php */