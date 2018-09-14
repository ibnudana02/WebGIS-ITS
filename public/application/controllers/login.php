<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index()
  {
    $this->load->view('login');
  }

  public function getlogin()
  {
    $u = $this->input->post('username');
    $p = $this->input->post('password');
    $this->load->model('model_login');
    $this->model_login->cek_user($u,$p);
    // $this->model_login->getlogin($u,$p);
  }

}
