<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class validar_login extends CI_Model{

	public function validar($user,$pass){
		$this->db->where('user_name',$user);
		$this->db->where('password',$pass);
		$valido = $this->db->get('usuarios');

		$Rol = $valido->row()->id_rol;

		if($valido->row() > 0){
			return $Rol;
		}else{
			return 'fail';
		}
	}

//se extraen los datos del usuario de la basde de datos
	public function extraer_user($id_user){
			$this->db->where('user_name =',$id_user);
			$row = $this->db->get('usuarios');
			return $row->row();
	}
}

