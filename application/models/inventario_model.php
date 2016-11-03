<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function ingresarStockDeComida($data){
		if(!is_null($data['fecha']) and !is_null($data['cantidadComida']) and !is_null($data['precioComida']) and !is_null($data['claseComida'])){
			$this->db->insert('inventario', array(
			'fecha_compra'=>$data['fecha'], 
			'cantidad'=>$data['cantidadComida'],
			'precio_compra'=>$data['precioComida'],
			'ID_comida'=>$data['claseComida']
			));
		} 
		
		
	}
}

?>