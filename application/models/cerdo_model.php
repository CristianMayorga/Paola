<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerdo_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function ingresarCerdos($data){
		$this->db->insert('cerdo', array(
			'fecha_entrada'=>$data['fecha'], 
			'precio_compra'=>$data['precioCerdos'],
			'cantidad'=>$data['CantidadCerdos'], 
			'peso'=>$data['pesoCerdos'],
			'sexo'=>$data['dropdownSexo'], 
			'ID_corral'=>$data['corral']
			));
		
	}

	function consultaGrupoDeCerdos(){
		$this->db->select('ID');
		$query = $this->db->get('cerdo');
		if($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}
}

?>