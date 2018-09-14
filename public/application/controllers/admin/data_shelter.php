<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_shelter extends CI_Controller {

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
   	 		$this->load->model('model_shelter');
			$data['nama']       = $this->session->userdata('nama');
			$data['content']    = 'admin/view_shelter';
		    $data['judul']		= 'Home';
		    $data['sub_judul']	= 'Site Admin';
		    $data['sub']	    = 'Shelter Bus DAMRI';
		    $data['isi']        = $this->model_shelter->tampil_shelter();
			$this->load->view('admin/home',$data);
    	}
	}

	public function tambah()
  {
    	$cek = $this->session->userdata('logged_in');
    	if (!empty($cek))
   	 	{
   	 		$data['isi']        = $this->db->get('shelters');
    	  	$data['nama']       = $this->session->userdata('nama');
    	  	$data['content']    = 'admin/add_shelter';
    	 	$data['judul']      = 'Home';
    	  	$data['sub_judul']  = 'Site Admin';
    	  	$data['sub']        = 'Tambah Shelter';
    	  	$this->load->view('admin/home',$data);
    	}
  }

  public function simpan()
	{
		$key = $this->input->post('gid_shelter');
		$data['gid_shelter'] 	=$this->input->post('gid_shelter');
		$data['nm_shelter']		=$this->input->post('nm_shelter');
		$data['kota']			=$this->input->post('kota');
		$data['lat']			=$this->input->post('lat');
		$data['long']     		=$this->input->post('long');

		$this->load->model('model_shelter');
		$query = $this->model_trayek->getdata($key);

		$this->model_shelter->getinsert($data);
		$this->session->set_flashdata("info", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Success to Update!!</div></div>");

		redirect('admin/data_shelter');
	}

  public function edit($gid_shelter)
	{
		$this->load->model('model_shelter');
		$data['nama']       = $this->session->userdata('nama');
	    $data['judul']      = 'Home';
	    $data['sub_judul']  = 'Site Admin';
	    $data['sub']        = 'Edit Jadwal';
		$data['content']    = 'admin/edit_shelter';
		$data['edit']       = $this->model_shelter->view_by($gid_shelter);
		$this->load->view('admin/home',$data);
	}

	public function update()
	{
		$this->load->model('model_shelter');
		$key = $this->input->post('gid_shelter');
		$data['gid_shelter']=$this->input->post('gid_shelter');
		$data['nm_shelter']	=$this->input->post('nm_shelter');
		$data['kota']		=$this->input->post('kota');
		$data['lat']		=$this->input->post('asal');
		$data['long']		=$this->input->post('long');

		$this->model_shelter->getupdate($key, $data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Data Success to Update!!</div></div>");

		redirect('admin/data_shelter');

	}

	public function delete($gid_shelter) 
	{
    	$this->load->model('model_shelter');
    	$this->model_shelter->delete($gid_shelter);
    	redirect('admin/data_shelter');
    }

    public function view_shelter()
    {

    }
}

?>
