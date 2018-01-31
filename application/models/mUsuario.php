<?php
/**
* 
*/
class MUsuario extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	public function guardar($parametros){
		$camposPersona = array(
			'idPersona' => $parametros['idPersona'], 
			'nombreUsuario' => $parametros['nombreUsuario'], 
			'clave' => $parametros['clave'], 
		);

		$this->db->insert('usuario',$camposPersona);
	}

	public function eliminarUsuario($idP){
		$camposUsuario = array(
			'idPersona' => $idP
			);

		$this->db->delete('usuario',$camposUsuario);
	}
}
?>