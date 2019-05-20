<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DireccionCtr extends CI_Controller{
  //====================================================================================================
  public function __construct()
	{
		parent:: __construct();
		$this->load->model('validar_login');
	}

  //Direccionar vista de gerente
	public function MostrarGerente()
	{
		if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
			if ($this->session->userdata('id_rol') == '1') {

				//valida la sesion de
				$id_user = $this->session->userdata('user_name');
				$data['user'] = $this->validar_login->extraer_user($id_user);

				//carga la vista
				$this->load->view('layouts/header');
				$this->load->view('layouts/menu',$data);
				$this->load->view('administrador/ListGerentesView');
				$this->load->view('layouts/footer');
			}else{
				redirect('');
			}
		}else{
			$this->load->view('layouts/header');
			$this->load->view('login');
			$this->load->view('layouts/footer');
		}	
	}

	  //Direccionar vista de gerente
	public function MostrarVendedor()
	{
		if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
			if ($this->session->userdata('id_rol') == '1') {

				//valida la sesion de
				$id_user = $this->session->userdata('user_name');
				$data['user'] = $this->validar_login->extraer_user($id_user);

				//carga la vista
				$this->load->view('layouts/header');
				$this->load->view('layouts/menu',$data);
				$this->load->view('administrador/ListVendedorView');
				$this->load->view('layouts/footer');
			}else{
				redirect('');
			}
		}else{
			$this->load->view('layouts/header');
			$this->load->view('login');
			$this->load->view('layouts/footer');
		}	
	}

}