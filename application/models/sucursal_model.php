<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class sucursal_model extends CI_Model {

	public function getsucursal(){
     	$this->db->select('*');
		$this->db->from('tab_sucursal as s');
		$this->db->join('tab_estado  as e','e.id_estado = s.id_estado');
		$this->db->join('tab_gerente as g','g.id_gerente = s.id_gerente');
		$data = $this->db->get();
		return $data->result_array();
	}

	public function insertar($data){
	 return $this->db->insert('tab_sucursal',$data);
	
	}
	
	public function getestado(){
    $estado=$this->db->get('tab_estado');
    return $estado->result_array();
	}
	
	public function getgerente(){
		$gerente=$this->db->get('tab_gerente');
		return $gerente->result_array();
	}

	public function update($data,$id_sucursal){
		$this->db->where('id_sucursal',$id_sucursal);
		return $this->db->update('tab_sucursal',$data);
	}
	public function obtener($id_sucursal)
	{
		$this->db->where('id_sucursal',$id_sucursal);
		$sucursal=$this->db->get('tab_sucursal');
		return $sucursal->result_array();
	}

	public function insertar_uno($data, $data2)
	{

		$this->db->set('nombre',$data['nombre']);
		$this->db->set('direccion',$data['direccion']);
		$this->db->set('id_gerente',$data['id_gerente']);
		$this->db->set('id_estado',$data['id_estado']);
		$this->db->set('imagen',$data2['ruta']);
		$this->db->set('telefono',$data['telefono']);
		$this->db->set('correo',$data['correo']);

		$this->db->insert('tab_sucursal');
	}

	public function ListbranchOffice()
	{
		$this->db->select('*');
		$this->db->from('tab_sucursal as s');
		$this->db->join('tab_estado  as e','e.id_estado = s.id_estado');
		$this->db->join('tab_gerente as g','g.id_gerente = s.id_gerente');
		$data = $this->db->get();
		return $data->result_array();
	}

	public function eliminar_sucursal($id)
	{
			$this->db->where('id_sucursal',$id);
			$this->db->delete('tab_sucursal');
	}

	public function cantsucur()
	{
		$query = $this->db->query('select count(id_sucursal) as co from tab_sucursal');
		return $query->row();
	}
	public function cantVende()
	{
		$query = $this->db->query('select count(id_vendedor) as co from tab_vendedor');
		return $query->row();
	}
	public function cantAuto()
	{
		$query = $this->db->query('select count(id_auto) as co from tab_auto');
		return $query->row();
	}
	public function estadoS($id_sucursal)
	{
		$this->db->select('id_estado');
		$this->db->from('tab_sucursal');
		$this->db->where('id_sucursal',$id_sucursal);
		$estad=$this->db->get();
		return $estad->row();

	}

	public function sucursal_es($id_sucursal,$data)
	{
		$this->db->set('id_estado',$data);
		$this->db->where('id_sucursal',$id_sucursal);
		$this->db->update('tab_sucursal');
	}
}


