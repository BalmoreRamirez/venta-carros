<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inicial extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('validar_login');
		$this->load->model('sucursal_model');
	}
	public function index()

	{
		if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
			if ($this->session->userdata('id_rol') == '1') {
				$id_user = $this->session->userdata('user_name');
				$data['user'] = $this->validar_login->extraer_user($id_user);

//=======================================================================
				//---sucursal
				$data['datos'] = $this->sucursal_model->cantsucur();
				//---vendedor
				$data['vende'] = $this->sucursal_model->cantVende();
				//---auto
				$data['auto'] = $this->sucursal_model->cantAuto();


				
				$this->load->view('layouts/header');
				$this->load->view('layouts/menu',$data);
				$this->load->view('administrador/Home',$data);
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
	//============================================================
	public function sucursal()
	{
		if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
			if ($this->session->userdata('id_rol') == '1') {
				$id_user = $this->session->userdata('user_name');
				$data['user'] = $this->validar_login->extraer_user($id_user);
				$this->load->view('layouts/header');
				$this->load->view('layouts/menu',$data);
				$this->load->view('administrador/sucursal');
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
	//============================================================

	public function autos()
	{
		if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
			if ($this->session->userdata('id_rol') == '1') {
				$id_user = $this->session->userdata('user_name');
				$data['user'] = $this->validar_login->extraer_user($id_user);
				$this->load->view('layouts/header');
				$this->load->view('layouts/menu',$data);

				$this->load->view('autos004');
				$this->load->view('layouts/footer');
			}else{
				redirect('');
			}
		}else{
			$this->load->view('layouts/header');
			$this->load->view('login');
		}
	}


	public function clientes()
	{
		if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
			if ($this->session->userdata('id_rol') == '1') {
				$id_user = $this->session->userdata('user_name');
				$data['user'] = $this->validar_login->extraer_user($id_user);
				$this->load->view('layouts/header');
				$this->load->view('layouts/menu',$data);
				$this->load->view('Clientes002');
				$this->load->view('layouts/footer');
			}else{
				redirect('');
			}
		}else{
			$this->load->view('layouts/header');
			$this->load->view('login');
		}
	}

	//============================================================
	public function venddor()
	{
		if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
			if ($this->session->userdata('id_rol') == '1') {
				$id_user = $this->session->userdata('user_name');
				$data['user'] = $this->validar_login->extraer_user($id_user);
				$this->load->view('layouts/header');
				$this->load->view('layouts/menu',$data);
				$this->load->view('Vendedor003');
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
	//=================solucionando errores===========================================

}

?>