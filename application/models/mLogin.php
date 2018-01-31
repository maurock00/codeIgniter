<?php 
/**
* 
*/
class MLogin extends CI_Model
{
	
	public function loguearse($usu,$pass){
		$this->db->select('u.idUsuario, u.clave , p.idPersona, p.nombre , p.appaterno , p.apmaterno');
		$this->db->from('usuario u');
		$this->db->join('persona p','p.idpersona = u.idpersona');
		$this->db->where('u.nombreUsuario',$usu);
		//$this->db->where('u.clave',$pass);


		$resultado = $this->db->get();
		$r = $resultado->row();

		if($resultado->num_rows() == 1 and password_verify($pass,$r->clave))
		{
			$sesionUsuario = array(
				'sessionIdPersona' => $r->idPersona,
				'sessionIdUsuario' => $r->idUsuario,
				'sessionDatosUsuario' => $r->nombre." ".$r->appaterno." ".$r->apmaterno
				);
			$this->session->set_userdata($sesionUsuario);

			return 1;
		}else{
			return 0;
		}
	} 
}
?>