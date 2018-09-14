<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shelter extends CI_Controller {
  public function index()
    {
		$isi['judul']		= 'Home';
		$isi['sub_judul']	= 'User';
		$isi['sub']			= 'Shelter';
		$isi['content']	  	= 'user/shelter';
    	$this->load->view('user/map',$isi);
    }

    public function db(){
		$this->load->database();
		header('Content-type: text/plain');
		$data['query'] = $this->db->query('SELECT *, ST_AsGeoJSON(geom) as geometry from shelters;')->result();
		$this->load->view('geojson_shelter',$data);
	}
}

// 0.3357728, 100.6419 -> candi muara takus