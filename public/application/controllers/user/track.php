<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Track extends CI_Controller {
  public function index()
    {
		$isi['judul']		= 'Home';
		$isi['sub_judul']	= 'User';
		$isi['sub']			= 'Track Bus';
		$isi['content']		= 'user/track';
    	$this->load->view('user/map',$isi);
    }
}