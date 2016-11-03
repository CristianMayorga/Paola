<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventacerdos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');

	}

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('ventacerdos');
		$this->load->view('templates/footer');

		$data2 = array(
			'fecha' => $this->input->post('corralCalculoCerdos'),
			'CantidadCerdos' =>$this->input->post('CantidadCerdos'),
			'precioCerdos' => $this->input->post('precioCerdos'),
			'pesoCerdos' =>$this->input->post('pesoCerdos'),
			'dropdownSexo' => $this->input->post('dropdownSexo'),
			'corral' =>$this->input->post('corral')
			);
	}

	public function calcularSaldos()
	{
		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('ventacerdos/calcularsaldos');
		$this->load->view('templates/footer');
	}


}