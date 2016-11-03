<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('templates/headers');
		$this->load->view('templates/navs');
		$this->load->view('main');
		$this->load->view('templates/footer');
	}
}
