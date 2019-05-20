<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class confi_model extends CI_Model
{
	public function get_auto()
	{
		$auto = $this->db->query('SELECT * FROM tab_auto');
		return $auto->result_array();
	}

	public function get_sucursal()
	{
		$sucursal = $this->db->query('SELECT * FROM tab_sucursal');
		return $sucursal->result_array();
	}

	public function get_color()
	{
		$color = $this->db->query('SELECT * FROM tab_colores');
		return $color->result_array();
	}

	public function insertar($data)
	{
		$var= $this->db->insert('tab_sucursal_auto',$data);
	}

	public function mostrar()
	{
		$sucursal = $this->db->query('SELECT tsa.id_sau,ta.Modelo,ts.nombre,tsa.unidades,tc.color FROM tab_sucursal_auto tsa INNER JOIN tab_auto ta ON tsa.id_auto = ta.id_auto INNER JOIN tab_sucursal ts ON tsa.id_sucursal = ts.id_sucursal INNER JOIN tab_colores tc ON tsa.id_color = tc.id_colores ');
		return $sucursal->result_array();
	}

	public function obtener($id_sau)
	{
		$this->db->where('id_sau',$id_sau);
		$sucursal_auto = $this->db->get('tab_sucursal_auto');
		return $sucursal_auto->result_array();
	}
}