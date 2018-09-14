<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Model_shelter extends CI_model {

	public function tampil_shelter()
	{
		$data = "SELECT
				shelters.gid_shelter,
				shelters.nm_shelter,
				shelters.kota,
				shelters.lat,
				shelters.long
				FROM shelters";
		return $this->db->query($data);
	}

}

?>
