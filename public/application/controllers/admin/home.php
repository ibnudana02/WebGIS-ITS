<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {
      parent::__construct();
      if ($this->session->userdata('username') == "") {
          redirect('auth');
      }
      $this->load->helper('text','download');
  }

  public function index()
  {
    $cek = $this->session->userdata('logged_in');
    if (!empty($cek))
    {
    $isi['nama']			= $this->session->userdata('nama');
	  $isi['content']		= 'admin/content_admin';
		$isi['judul']			= 'Home';
		$isi['sub_judul']	= 'Site Admin';
    $isi['sub']	      = 'Welcome';
		$this->load->view('admin/home',$isi);
    }
  }

  public function logout()
	{
		$this->session->sess_destroy();
		redirect('user/home');
	}
}
