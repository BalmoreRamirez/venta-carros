<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendedor_model extends CI_Model
{
   
   public function getvendedor()
 	{
 		$this->db->select('*');
 		$this->db->from('tab_vendedor as v');
 		$this->db->join('tab_estado as e','e.id_estado = v.id_estado');
 		$data=$this->db->get();
 		return $data->result_array();
 	}	
 	public function insert($data)
 	{
 	 return $this->db->insert('tab_vendedor',$data);

 	}

 	public function getestado(){
    $estado=$this->db->get('tab_estado');
    return $estado->result_array();
	}

	public function eliminarvende($id)
	{
		$this->db->where('id_vendedor',$id);
		return $this->db->delete('tab_vendedor');
	}

	public function update($data,$id_vendedor)
	{
		$this->db->where('id_vendedor',$id_vendedor);
		return $this->db->update('tab_vendedor',$data);
	}

	public function obtener($id_vendedor)
	{
		$this->db->where('id_vendedor',$id_vendedor);
		$vendedor=$this->db->get('tab_vendedor');
		return $vendedor->result_array();
	}

	public function estadov($id_vendedor){
 		$this->db->select('id_estado');
 		$this->db->from('tab_vendedor');
 		$this->db->where('id_vendedor',$id_vendedor);
 		$esta=$this->db->get();
 		return $esta->row();
 	}

 	public function Evendedor($id_vendedor,$data)
 	{
 		$this->db->set('id_estado',$data);
 		$this->db->where('id_vendedor',$id_vendedor);
 		$this->db->update('tab_vendedor');
 	}
	
}