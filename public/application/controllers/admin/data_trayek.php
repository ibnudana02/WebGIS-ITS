<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_trayek extends CI_Controller {

  public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
 		$this->load->helper('text');
		$this->load->helper(array('form','url','file'));
	}

  public function index()
	{
    	$cek = $this->session->userdata('logged_in');
    	if (!empty($cek))
    	{
    		$this->load->model('model_trayek');
			$data['nama']       = $this->session->userdata('nama');
			$data['content']    = 'admin/view_trayek';
		    $data['judul']		= 'Home';
		    $data['sub_judul']	= 'Site Admin';
		    $data['sub']	    = 'Trayek Bus DAMRI';
		    $data['isi']        = $this->model_trayek->tampil();
		    // $data['isi']        = $this->model_trayek->tampil_trayek();
			$this->load->view('admin/home',$data);
    	}
	}

	public function tambah()
  {
    $cek = $this->session->userdata('logged_in');
    if (!empty($cek))
    {
    	$this->load->model('model_trayek');
      	$data['nama']       = $this->session->userdata('nama');
      	$data['content']    = 'admin/add_trayek';
      	$data['judul']      = 'Home';
      	$data['sub_judul']  = 'Site Admin';
      	$data['sub']        = 'Tambah Trayek';
      	$data['isi']        = $this->db->get('trayek');
      	$data['auto']        = $this->model_trayek->auto();
      	$this->load->view('admin/home',$data);
    }
  }

  public function simpan()
	{
		$key = $this->input->post('id_trayek');
		$data['id_trayek']  	=$this->input->post('id_trayek');
		$data['asal']			=$this->input->post('asal');
		$data['tujuan']			=$this->input->post('tujuan');
		$data['no_kendaraan']	=$this->input->post('no_kendaraan');
		$data['gid_rute']      	=$this->input->post('gid_rute');
		$data['gid_shelter']    =$this->input->post('gid_shelter');
		$data['id_admin']	    =$this->input->post('id_admin');
		$data['nm_trayek']	    =$this->input->post('nm_trayek');

		$this->load->model('model_trayek');
		$query = $this->model_trayek->getdata($key);

		$this->model_trayek->getinsert($data);
		$this->session->set_flashdata("info", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Success to Update!!</div></div>");

		redirect('admin/data_trayek');
	}

  public function edit($id_trayek)
	{
		$data['nama']       = $this->session->userdata('nama');
	    $data['judul']      = 'Home';
	    $data['sub_judul']  = 'Site Admin';
	    $data['sub']        = 'Edit Jadwal';
		$data['content']    = 'admin/edit_trayek';
    	$this->load->model('model_trayek');
		$data['edit']       = $this->model_trayek->view_by($id_trayek);
		$this->load->view('admin/home',$data);
	}

	public function update()
	{
		$key = $this->input->post('id_trayek');
		$data = array(
				'id_trayek'		=> $this->input->post('id_trayek'),
				'asal'			=> $this->input->post('asal'),
				'tujuan'		=> $this->input->post('tujuan'),
				'no_kendaraan'	=> $this->input->post('no_kendaraan'),
				'gid_rute'		=> $this->input->post('gid_rute'),
				'gid_shelter'	=> $this->input->post('gid_shelter'),
				'id_admin'		=> $this->input->post('id_admin'),
				'nm_trayek'		=> $this->input->post('nm_trayek')
				);

		$this->load->model('model_trayek');
		$this->model_trayek->getupdate($key, $data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Success to Update!!</div></div>");
		redirect('admin/data_trayek');
	}

	public function delete($id_trayek) {
    	$this->load->model('model_trayek');
    	$this->model_trayek->delete($id_trayek);
    	redirect('admin/data_trayek');
    }
}

?>
