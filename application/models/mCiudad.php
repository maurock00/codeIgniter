<?php
/**
* 
*/
class MCiudad extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getCiudades($verificar){
		$resultado = $this->db->get_where('ciudades', array('isActive' => $verificar));
		return $resultado->result();
	}
}

?>