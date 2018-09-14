<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
		$isi['content']		= 'user/content';
		$isi['judul']		= 'Home';
		$isi['sub_judul']	= 'User';
		$isi['sub']			= '';
		$this->load->view('user/home',$isi);
  }
}
