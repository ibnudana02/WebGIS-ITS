<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

  public function getlogin($u,$p){
    $pwd = crypt($p, pwd);
    $this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('admins');
    if($query->num_rows() > 0)
    {
      foreach ($query->result() as $row)
			{
				$sess = array('username'	 => $row->username,
							        'nama'     	 => $row->nama,
							        'email'			 => $row->email
							 );
				$this->session->set_userdata($sess);
				redirect('admin/home');
      }
    }
  }

  public function cek_user($data) {
      $query = $this->db->get_where('admins', $data);
      return $query;
  }

}
// 0.336326, 100.641665