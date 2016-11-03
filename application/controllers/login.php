<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		//falta ponerle el model

	}

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}

	public function validaciom()
	{
		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}
}