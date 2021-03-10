<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

}

/* End of file Model_login.php */
/* Location: ./application/models/Model_login.php */