<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corral_vacuna_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function ingresarVacuna($data){
		if(!is_null($data['corral']) and !is_null($data['corral']) and $data['fecha']){
			$this->db->insert('corral_vacuna', array(
			'ID_corral'=>$data['corral'], 
			'ID_vacuna'=>$data['opcionVacuna'],
			'fecha_aplicacion'=>$data['fecha']
			));
		}
		
		
	}
}

?>