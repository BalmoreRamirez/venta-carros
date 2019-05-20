<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GraficasCtr extends CI_Controller
{
	 public function __construct()
	{
		parent:: __construct();
		$this->load->model('GraficasMol');
	}

public function GetVentas(){
		$result = $this->GraficasMol->getVenta();
		echo json_encode($result);
	}


}
