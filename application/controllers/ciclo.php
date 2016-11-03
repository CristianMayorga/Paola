<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ciclo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('muerto_model');
		$this->load->model('corral_model');
		$this->load->model('cerdo_model');
		$this->load->helper('form');
	}
	
	public function index()
	{
		$data = array();

		$query = $this->input->get('query', TRUE);
		if($query){
			$result = $this->corral_model->buscarMostrarEstadisticaCorrales(trim($query));
			if($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result' => '');
			}
		}else{
			$data = array('result' => '');
		}

		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('ciclo', $data);
		$this->load->view('templates/footer');
	}

	public function mostrarMuertes()
	{
		$data = array();

		$query = $this->input->get('query', TRUE);
		if($query){
			$result = $this->muerto_model->buscarMostrarMuerte(trim($query));
			if($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result' => '');
			}
		}else{
			$data = array('result' => '');
		}
		

		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('ciclo/mostrarmuertes', $data);
		$this->load->view('templates/footer');
	}


}
