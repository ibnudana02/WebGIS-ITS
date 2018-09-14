<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Auth extends CI_Controller {

  public function index(){
    $this->load->view('login');
  }

  public function cek_login(){
    $data = array('username' => $this->input->post('username', TRUE),
                  'password' => $this->input->post('password', TRUE)
      );

    $this->load->model('model_login');
    $hasil = $this->model_login->cek_user($data);
    if ($hasil->num_rows() == 1){
      foreach ($hasil->result() as $sess) {
        $session_data['logged_in']  = 'Sudah login';
        $session_data['username'] = $sess->username;
        $session_data['email'] = $sess->email;
        $session_data['nama'] = $sess->nama;
        $this->session->set_userdata($session_data);

        redirect('admin/home');
      }
    }
    else {
      echo "<script>alert('Gagal Login: Silahkan Cek username dan password anda!');history.go(-1);</script>";
      }
    }

}

?>
