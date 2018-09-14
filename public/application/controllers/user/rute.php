<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rute extends CI_Controller {
  public function index()
    {
  		$isi['judul']		  = 'Home';
  		$isi['sub_judul']	= 'User';
  		$isi['sub']			  = 'Rute';
      $isi['content']   = 'user/rute';
      $this->load->view('user/map',$isi);
    }

  public function db()
  {
    $this->load->database();
    header('Content-type: text/plain');
    $data['query'] = $this->db->query('SELECT *, ST_AsGeoJSON(geom) as geometry from rutes;')->result();
    $this->load->view('geojson_rute',$data);
  }
}
