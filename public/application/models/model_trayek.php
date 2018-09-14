<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Model_trayek extends CI_model {

	public function tampil()
	{
		$data = "SELECT
				trayek.id_trayek,
				trayek.no_kendaraan,
				trayek.asal,
				trayek.tujuan,
				trayek.nm_trayek,
				trayek.gid_rute,
				rutes.status
				FROM
				rutes
				INNER JOIN trayek ON rutes.gid_rute = trayek.gid_rute";
		return $this->db->query($data);
	}

	public function auto()
	{
		$this->db->select("MAX(id_trayek)+1 AS id");
		$this->db->from("trayek");
		$query = $this->db->get();
		return $query->row()->id;

	}

	public function getdata($key)
	{
		$this->db->where('id_trayek',$key);
		$hasil = $this->db->get('trayek');
		return $hasil;
	}

	public function getinsert($data)
	{
		$this->db->insert('trayek',$data);
	}

	public function getupdate($key, $data)
	{
		$this->db->where('id_trayek',$key);
		$this->db->update('trayek',$data);
	}

	public function view_by($id_trayek){
    $query = $this->db->query("SELECT * FROM trayek where id_trayek='$id_trayek'");
    return ($query->num_rows() > 0)? $query->result():FALSE;
	}


	function delete($id_trayek) {
	$this->db->where('id_trayek', $id_trayek);
	$this->db->delete('trayek');
	}

	function getIdNama(){
    $query = $this->db->query("SELECT DISTINCT id_jadwal,jam_pergi FROM jadwal ");
    return ($query->num_rows() > 0)? $query->result_array():FALSE;

	}
}

?>
