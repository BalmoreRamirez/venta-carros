<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class loginCtr extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('validar_login');
	}
	public function index()
	{
		if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
			if ($this->session->userdata('id_rol') == '1') {
					

					redirect('Inicial/index');

			}else{
					redirect('');
			}
		}else{
		$this->load->view('layouts/header');
		$this->load->view('login');
		$this->load->view('layouts/footer');
		}	
	}
       
   public function validar_session(){
   		$user = $_POST['user_name'];
   		$pass = $_POST['password'];

   			$valido = $this->validar_login->validar($user,$pass);

   					if($valido != 'fail'){

   							$this->session->set_userdata('user_name',$user);
   							$this->session->set_userdata('id_rol',$valido);

   								if ($valido == '1') {
   										redirect('Inicial/index');
   								}else{
   										redirect('');
   								}
   					}else{
   						$this->session->set_flashdata('error', 'usuario o contraseña invalidos');
    						redirect('loginCtr/index');
   					}
   }
   public function cerrar_sesion(){
   		 $this->session->sess_destroy();
   		 redirect('loginCtr/index');
   }
}
