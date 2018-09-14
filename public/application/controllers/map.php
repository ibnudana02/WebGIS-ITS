<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller{
    public function index(){
        $this->load->view('map/leaflet');
    }

    public function dodol($arg="durian",$i=1){
        //$this->load->view('map/index');

		for($j=0;$j<$i;$j++)
		echo "$j dodol $arg<br/>";
    }

	public function db(){
		$this->load->database();
		header('Content-type: text/plain');
    $data['query'] = $this->db->query('SELECT *, ST_AsGeoJSON(geom) as geometry from rutes;')->result();
		$this->load->view('geojson',$data);
	}

  public function trayek()
  {
    $this->load->database();
    header('Content-type: text/plain');
    $data['query'] = $this->db->query('SELECT name, direction, status, ST_AsGeoJSON(geom) as geometry from rutes;')->result();
    $this->load->view('geojson',$data);
  }

	public function leaflet(){
		$this->load->view('map/leaflet');
	}


}
