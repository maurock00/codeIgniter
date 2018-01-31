<?php

/**
* 
*/
class MNotas extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getNotas(){

		$this->db->select("p.idPersona, CONCAT(p.nombre, ' ', p.appaterno, ' ', p.apmaterno) Alumno,
			IFNULL(n.primerB,'') a, IFNULL(n.segundoB,'') b, IFNULL(n.tercerB,'') c, IFNULL(n.notaFinal,'') d", false);
		$this->db->from('notas n','right');
		$this->db->join('persona p', 'p.idPersona = n.idPersona', 'right');

		$resultado = $this->db->get();

		return $resultado->result();
	}
	
	
}

?>