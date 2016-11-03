<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corral_comida_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function ingresarComidaCorrales($data){
		if(!is_null($data['corral']) and !is_null($data['claseComida']) and !is_null($data['fecha']) and !is_null($data['cantidadConsumida'])){
			$this->db->insert('corral_comida', array(
			'ID_corral'=>$data['corral'], 
			'ID_comida'=>$data['claseComida'],
			'fecha_reparto'=>$data['fecha'],
			'cantidad'=>$data['cantidadConsumida']
			));
		}
		
	}
}

?>