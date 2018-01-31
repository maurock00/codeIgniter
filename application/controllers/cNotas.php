<?php

/**
* 
*/
class CNotas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mNotas');

	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vNotas');
		$this->load->view('layout/footer');
	}

	public function getNotas(){
		echo json_encode($this->mNotas->getNotas());
	}

}

?>