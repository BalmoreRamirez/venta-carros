<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loadSucursal extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('loadSucursalMol');
		$this->load->model('validar_login');

	}
	public function cargarDataSucur(){

	 if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
      if ($this->session->userdata('id_rol') == '1') {

      //carga la imgen de perfil del usuario
      	$id_user = $this->session->userdata('user_name');
		$data['user'] = $this->validar_login->extraer_user($id_user);
	
		//capturamos el id con la funcion segment
		$id = $this->uri->segment(3);
		$data['sucursal'] = $this->loadSucursalMol->consultaSucursal($id);
		$data['carros'] = $this->loadSucursalMol->cargarCarros($id);
		//==================================================================================
		$this->load->view('layouts/header');
		$this->load->view('layouts/menu',$data);
		$this->load->view('administrador/cargaSucursal',$data);
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
	public function AusDetallesAuto(){

		 if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
      if ($this->session->userdata('id_rol') == '1') {
        	$id = $this->uri->segment(3);
		$id_suc = $this->uri->segment(4);
		$data['detalle'] = $this->loadSucursalMol->detalles_auto($id,$id_suc);
		$this->load->view('administrador/modal_detalles/detalles',$data);
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