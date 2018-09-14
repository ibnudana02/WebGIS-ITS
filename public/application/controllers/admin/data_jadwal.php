<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_jadwal extends CI_Controller {

  public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
 		$this->load->helper('text');
		$this->load->helper(array('form','url','file'));
		$this->load->model('model_jadwal');
	}

  public function index(){
    $cek = $this->session->userdata('logged_in');
    if (!empty($cek))
    {
		$data['nama']       = $this->session->userdata('nama');
		$data['content']    = 'admin/view_jadwal';
	    $data['judul']		= 'Home';
	    $data['sub_judul']	= 'Site Admin';
	    $data['sub']	    = 'Jadwal Keberangkatan Bus DAMRI';
	    $data['isi']        = $this->model_jadwal->tampil_jadwal();
		$this->load->view('admin/home',$data);
    }
}

  public function tambah()
  {
    $cek = $this->session->userdata('logged_in');
    if (!empty($cek))
    {
      $data['nama']       = $this->session->userdata('nama');
      $data['content']    = 'admin/add_jadwal';
      $data['judul']      = 'Home';
      $data['sub_judul']  = 'Site Admin';
      $data['sub']        = 'Tambah Jadwal';
      $data['isi']        = $this->db->get('jadwal');
      $this->load->view('admin/home',$data);
    }
  }

  public function simpan()
	{
		$key = $this->input->post('id_jadwal');
		$data1 = array(   
      		'id_jadwal'     => $this->input->post('id_jadwal'),
		    'no_kendaraan'  => $this->input->post('no_kendaraan'),
		    'jam_pergi'     => $this->input->post('jam_pergi'),
		    'id_trayek'		=> $this->input->post('id_trayek'),
		    'id_locations'	=> $this->input->post('id_locations'),
		    'ket'		    => $this->input->post('ket')
		);
		// $data2 = array(
		// 	'id_trayek'		=> $this->input->post('id_trayek'),
		// 	'asal'			=> $this->input->post('asal'),
		//     'tujuan'      	=> $this->input->post('tujuan'),
		//     'no_kendaraan'  => $this->input->post('no_kendaraan'),
		//     'gid_rute'		=> $this->input->post('gid_rute'),
		// 	'gid_shelter'	=> $this->input->post('gid_shelter'),
		// 	'id_admin'		=> $this->input->post('id_admin'),
		// 	'nm_trayek'		=> $this->input->post('nm_trayek')
		// );
		
		$query = $this->model_jadwal->getdata($key);

		// $this->model_jadwal->getinsert($data1, $data2);
		$this->model_jadwal->getinsert($data1);
		$this->session->set_flashdata("info", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Berhasil di Simpan!!</div></div>");

		redirect('admin/data_jadwal');
	}

  	public function edit($id_jadwal)
	{
		$data['nama']       = $this->session->userdata('nama');
	    $data['judul']      = 'Home';
	    $data['sub_judul']  = 'Site Admin';
	    $data['sub']        = 'Edit Jadwal';
		$data['content']    = 'admin/edit_jadwal';
		$data['edit']       = $this->model_jadwal->view_by($id_jadwal);
		$this->load->view('admin/home',$data);
	}

	public function update()
	{
		$key = $this->input->post('id_jadwal');
		$data = array(
			'id_jadwal'     => $this->input->post('id_jadwal'),
		    'no_kendaraan'  => $this->input->post('no_kendaraan'),
		    'id_locations'  => $this->input->post('id_locations'),
		    'jam_pergi'     => $this->input->post('jam_pergi'),
		    'id_trayek'		=> $this->input->post('id_trayek'),
		    'ket'		    => $this->input->post('ket')
		);
	
		$this->model_jadwal->getupdate($key, $data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Success to Update!!</div></div>");

		redirect('admin/data_jadwal');

	}

	public function delete($id_jadwal) {
    
    $this->model_jadwal->delete($id_jadwal);
    redirect('admin/data_jadwal');
    }
}

?>

