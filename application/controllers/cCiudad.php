<?php
	/**
	* 
	*/
	class CCIudad extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mCiudad');
		}

		public function getCiudades()
		{
			$verificar = $this->input->post('isActive');
			$resultado = $this->mCiudad->getCiudades($verificar);

			echo json_encode($resultado); 
		}
	}
?>