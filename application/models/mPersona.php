<?php
/**
* 
*/
class MPersona extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	public function guardar($parametros){
		$camposPersona = array(
			'dni' => $parametros['dni'], 
			'nombre' => $parametros['nombre'], 
			'appaterno' => $parametros['appaterno'], 
			'apmaterno' => $parametros['apmaterno'], 
			'email' => $parametros['email'], 
			'fecnac' => date('Y-m-d',strtotime(str_replace('/','-',$parametros['fecnac']))),
			'idCiudad' => $parametros['idCiudad']
		);

		$this->db->insert('persona',$camposPersona);
		return $this->db->insert_id();
	}

	public function actualizar($parametros){
		$camposPersona = array(
			'nombre' => $parametros['nombre'], 
			'appaterno' => $parametros['appaterno'], 
			'apmaterno' => $parametros['apmaterno'], 
			'email' => $parametros['email'], 
		);

		$this->db->where('idPersona',$_SESSION['sessionIdPersona']);
		$this->db->update('persona',$camposPersona);

		return 1;

	}

	public function eliminar($idP){
		$camposPersona = array(
			'idPersona' => $idP
			);

		$this->db->delete('persona',$camposPersona);
	}


	public function getPersonas(){
		$this->db->select('p.nombre, p.appaterno, p.apmaterno, p.dni, c.nombreCiudad');
		$this->db->from('persona p');
		$this->db->join('ciudades c','c.idCiudad = p.idCiudad');

		$resultado = $this->db->get();

		return $resultado->result();
	}
}

?>