<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Model_jadwal extends CI_model {

	public function tampil_jadwal()
	{
		$data = "SELECT
				jadwal.id_jadwal,
				jadwal.no_kendaraan,
				jadwal.jam_pergi,
				jadwal.ket,
				trayek.asal,
				trayek.tujuan,
				trayek.nm_trayek
				FROM
				trayek INNER JOIN jadwal ON jadwal.id_trayek = trayek.id_trayek";
		return $this->db->query($data);
	}

	public function getdata($key)
	{
		$this->db->where('id_jadwal',$key);
		$hasil = $this->db->get('jadwal');
		return $hasil;
	}

	public function getinsert($data1)
	{
		$this->db->insert('jadwal',$data1);
		// $this->db->insert('trayek',$data2);
	}

	public function getupdate($key, $data)
	{
		$this->db->where('id_jadwal',$key);
		$this->db->update('jadwal',$data);
	}

	public function view_by($id_jadwal){
	    $query = $this->db->query("SELECT * FROM trayek INNER JOIN jadwal ON jadwal.id_trayek = trayek.id_trayek where id_jadwal='$id_jadwal'");
	    return ($query->num_rows() > 0)? $query->result():FALSE;
	}


	public function delete($id_jadwal) {
		$this->db->where('id_jadwal', $id_jadwal);
		$this->db->delete('jadwal');
	}

	public function getIdNama(){
	    $query = $this->db->query("SELECT DISTINCT id_jadwal,jam_pergi FROM jadwal ");
	    return ($query->num_rows() > 0)? $query->result_array():FALSE;
	}
}

?>
