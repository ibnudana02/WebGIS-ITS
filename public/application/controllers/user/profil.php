<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {

  public function index()
  {
		$isi['content']		= 'user/profil';
		$isi['judul']		= 'Home';
		$isi['sub_judul']	= 'User';
		$isi['sub']			= 'Profil';
		$this->load->view('user/home',$isi);
  }
}
