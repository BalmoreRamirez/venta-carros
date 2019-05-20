<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class auto_model extends CI_Model{


	public function insertar($data)
	{
		 return $this->db->insert('tab_marca',$data);


	}
	
	public function getmar()
	{
		$data=$this->db->get('tab_marca');
		return $data->result_array();
	}

	public function obtenerid($id_marca)
	{
		$this->db->where('id_marca',$id_marca);
		$marca=$this->db->get('tab_marca');
		return $marca->result_array();

	}

	public function eliminar_marca($id)
	{
		$this->db->where('id_marca',$id);
		return $this->db->delete('tab_marca');
	}

	public function update($data,$id_marca)
	{
		$this->db->where('id_marca',$id_marca);
		return $this->db->update('tab_marca',$data);
	}
	public function get_tipo()
	{
		$datos=$this->db->get('tab_tipoauto');
		return $datos->result_array();
	}

	public function insert_tipo($data)
	{
		$var=$this->db->insert('tab_tipoauto',$data);
		return $var;
	}

	public function update_auto($data,$id_tipo)
	{
		$this->db->where('id_tipo',$id_tipo);
		return $this->db->update('tab_tipoauto',$data);
	}

	public function eliminar($id)
	{
      $this->db->where('id_tipo',$id);
      return $this->db->delete('tab_tipoauto');

	}
	public function obtener($id_tipo)
	{   
		$id_tipo=$this->db->where('id_tipo',$id_tipo);
		$tipo=$this->db->get('tab_tipoauto');
		return $tipo->result_array();
	}

}