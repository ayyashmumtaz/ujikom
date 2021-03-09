<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model {

	public function input_data_reg($reg_data)
	{
		$this->db->insert('masyarakat',$reg_data);	
	}

}

/* End of file Model_register.php */
/* Location: ./application/models/Model_register.php */