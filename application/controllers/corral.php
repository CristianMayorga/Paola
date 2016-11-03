<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corral extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('corral_model');

	}

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('corral');
		$this->load->view('templates/footer');
		

		$data = array(
			'nombreCorral' => $this->input->post('nombreCorral'),
			'descripcionCorral' =>$this->input->post('descripcionCorral')
			);

		
		$this->corral_model->ingresarCorrales($data);

	}




}