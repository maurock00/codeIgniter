<?php
	/**
	* 
	*/
	class CLogin extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model('mLogin');
		}

		public function index(){
		$data['mensaje'] = "";
		$this->load->view('persona/vLogin',$data);
		}

		public function loguearse(){
			$usu = $this->input->post('txtUsuario');
			$pass = $this->input->post('txtClave');

			$res = $this->mLogin->loguearse($usu,$pass);

			if($res==1){
				$this->load->view('layout/header');
				$this->load->view('layout/menu');
				$this->load->view('persona/vUpdatePersona');
				$this->load->view('layout/footer');
			}else{
				$data['mensaje'] = "Usuario o contraseña errónea ";
				$this->load->view('persona/vLogin',$data);
			}
			
		}
	}
?>