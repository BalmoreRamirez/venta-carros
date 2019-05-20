<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model{

	public function Guardar_cliente($nombre,$apellido,$nit,$telefono,$correo,$direccion){
		$data = array(
				'nombre'   => $nombre,
				'apellido'   => $apellido,
				'nit'   => $nit,
				'telefono'   => $telefono,
				'correo'   => $correo,
				'direccion'   =>$direccion 
		);
		$this->db->insert('tab_cliente',$data);
		if ($this->db->affected_rows()){
			return true;
		}else{
			return false;
		}
	}

	public function listarCliente()
	{
		$data = $this->db->get('tab_cliente');
	return $data->result_array();
	}


	public function eliminar_cliente($id)
	{
			$this->db->where('id_cliente',$id);
			return $this->db->delete('tab_cliente');
	}
}