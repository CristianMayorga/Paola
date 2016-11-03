<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerdos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('calendar');
		$this->calendar->generate();
		$this->load->model('corral_model');
		$this->load->model('cerdo_model');
		$this->load->model('inventario_model');
		$this->load->model('corral_comida_model');
		$this->load->model('muerto_model');
		$this->load->model('corral_vacuna_model');

	}

	
	public function index()
	{
		$data['corrales'] = $this->corral_model->consultarNombreCorrales();

		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('cerdos', $data);
		$this->load->view('templates/footer');

		$data2 = array(
			'fecha' => $this->input->post('fecha'),
			'CantidadCerdos' =>$this->input->post('CantidadCerdos'),
			'precioCerdos' => $this->input->post('precioCerdos'),
			'pesoCerdos' =>$this->input->post('pesoCerdos'),
			'dropdownSexo' => $this->input->post('dropdownSexo'),
			'corral' =>$this->input->post('corral')
			);
		if($data2['fecha'] == null){

		}else{
			$this->cerdo_model->ingresarCerdos($data2);	
		}

		

	}

	public function ingresarComida()
	{
		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('ingresarcerdos/ingresocomida');
		$this->load->view('templates/footer');

		$data2 = array(
			'fecha' => $this->input->post('fecha'),
			'cantidadComida' =>$this->input->post('cantidadComida'),
			'precioComida' => $this->input->post('precioComida'),
			'claseComida' =>$this->input->post('claseComida'),
			
			);

		$this->inventario_model->ingresarStockDeComida($data2);
	}

	public function ingresarVacuna()
	{
		$data['corrales'] = $this->corral_model->consultarNombreCorrales();

		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('ingresarcerdos/vacunas', $data);
		$this->load->view('templates/footer');

		$data2 = array(
			'fecha' => $this->input->post('fecha'),
			'corral' =>$this->input->post('corral'),
			'opcionVacuna' =>$this->input->post('opcionVacuna')
			);
		$this->corral_vacuna_model->ingresarVacuna($data2);
	}

	public function ingresarConsumo()
	{
		$data['corrales'] = $this->corral_model->consultarNombreCorrales();

		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('ingresarcerdos/ingresarconsumo', $data);
		$this->load->view('templates/footer');

		$data2 = array(
			'fecha' => $this->input->post('fecha'),
			'cantidadConsumida' =>$this->input->post('cantidadConsumida'),
			'corral' => $this->input->post('corral'),
			'claseComida' =>$this->input->post('claseComida'),
			);
		$this->corral_comida_model->ingresarComidaCorrales($data2);
	}

	public function ingresarMuertes()
	{
		$data['corrales'] = $this->cerdo_model->consultaGrupoDeCerdos();

		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('ingresarcerdos/ingresomuertes', $data);
		$this->load->view('templates/footer');

		$data2 = array(
			'fecha' => $this->input->post('fecha'),
			'grupoCerdosMuertos' =>$this->input->post('grupoCerdosMuertos'),
			'cantidadCerdosMuertos' => $this->input->post('cantidadCerdosMuertos'),
			'causaDeMuerte' =>$this->input->post('causaDeMuerte'),
			);

		$this->muerto_model->ingresarCerdosMuertos($data2);
	}
}
