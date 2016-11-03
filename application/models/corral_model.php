<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corral_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function ingresarCorrales($data){
		if(!is_null($data['nombreCorral'])){
			$this->db->insert('corral', array('ID'=>$data['nombreCorral'], 'descripcion'=>$data['descripcionCorral']));
		}
		
	}

	function consultarNombreCorrales(){
		$this->db->select('ID');
		$query = $this->db->get('corral');
		if($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
		
	}

	function buscarMostrarEstadisticaCorrales($id){
		$dataResult = array();

		$this->db->select('ID');
		$this->db->where('ID', $id);
		$query = $this->db->get('corral');

		foreach ($query->result() as $row){
			$data["ID_corral"] = $row->ID;

			$this->db->select_sum('cantidad');
			$this->db->from('cerdo');
			$this->db->where('ID_corral', $row->ID);
			$this->db->group_by("cantidad");
			$data['cantidad'] = $this->db->get()->row()->cantidad;
        	
        	$this->db->select_avg('precio_compra');
			$this->db->from('cerdo');
			$this->db->where('ID_corral', $row->ID);
			$data['promedio'] = $this->db->get()->row()->precio_compra;

			$this->db->select_sum('muerte.cantidad');
			$this->db->from('cerdo');
			$this->db->where('ID_corral', $row->ID);
			$this->db->join('muerte', 'muerte.ID_cerdos = cerdo.ID');
			$this->db->group_by("muerte.cantidad");
			$data['muertes'] = $this->db->get()->row()->cantidad;

			$data['diferencia'] = $data['cantidad'] - $data['muertes'];

        	array_push($dataResult, $data);
		}	

		return $dataResult;
	}
}

?>