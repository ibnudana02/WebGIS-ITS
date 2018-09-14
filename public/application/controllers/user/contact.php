<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

  public function index()
  {
		$isi['content']		= 'user/contact';
		$isi['judul']		= 'Home';
		$isi['sub_judul']	= 'User';
		$isi['sub']			= 'Contact Us';
		$this->load->view('user/home',$isi);
  }
}
