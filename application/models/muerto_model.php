<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muerto_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function ingresarCerdosMuertos($data){
		if(!is_null($data['fecha']) and !is_null($data['cantidadCerdosMuertos']) and !is_null($data['causaDeMuerte']) and !is_null($data['grupoCerdosMuertos'])){
			$this->db->insert('muerte', array(
				'fecha_muerte'=>$data['fecha'], 
				'cantidad'=>$data['cantidadCerdosMuertos'],
				'causa'=>$data['causaDeMuerte'],
				'ID_cerdos'=>$data['grupoCerdosMuertos']
				));
		}
	}

	function buscarMostrarMuerte($query){
		$query = $this->db->query("SELECT corral.ID as ID_corral, muerte.ID, muerte.fecha_muerte, muerte.cantidad, muerte.causa, cerdo.ID as ID_cerdo FROM `muerte`, `cerdo`, `corral` WHERE corral.id = cerdo.ID_corral and cerdo.ID = muerte.ID_cerdos and corral.ID like '$query'");
		if($query->num_rows() > 0){
			return $query;
		}else{
			return False;
		}
	}



}

?>