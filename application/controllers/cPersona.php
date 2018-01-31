<?php
/**
* 
*/
class CPersona extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mPersona');
		$this->load->model('mUsuario');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('persona/vRegPersona');
		$this->load->view('layout/footer');
	}

	public function guardar(){
		//Persona
		$parametros['dni'] = $this->input->post('txtDNI');
		$parametros['nombre'] = $this->input->post('txtNombre');
		$parametros['appaterno'] = $this->input->post('txtApPaterno');
		$parametros['apmaterno'] = $this->input->post('txtApMaterno');
		$parametros['email'] = $this->input->post('txtEmail');
		$parametros['fecnac'] = $this->input->post('datFechaNacimiento');
		$parametros['idCiudad'] = $this->input->post('comboCiudad');
		//Usuario
		$parametros['nombreUsuario'] = $this->input->post('txtUsuario');
		$parametros['clave'] = password_hash($this->input->post('txtClave'),PASSWORD_DEFAULT);

		$lastId = $this->mPersona->guardar($parametros);

		if($lastId>0){
			$parametros['idPersona'] = $lastId;
			$this->mUsuario->guardar($parametros);
			echo 'Datos ingresados correctamente';
		}

	}

	public function actualizar(){
		$parametros['nombre'] = $this->input->post('txtNombre');
		$parametros['appaterno'] = $this->input->post('txtApPaterno');
		$parametros['apmaterno'] = $this->input->post('txtApMaterno');
		$parametros['email'] = $this->input->post('txtEmail');

		$this->mPersona->actualizar($parametros);
		$this->load->view('persona/vRegPersona');
	}

	public function eliminar(){
		$idP = $this->input->post('txtIdPersona');
		$this->mUsuario->eliminarUsuario($idP);
		$this->mPersona->eliminar($idP);
	}

	public function getPersonas(){
		echo json_encode($this->mPersona->getPersonas());
	}
}
