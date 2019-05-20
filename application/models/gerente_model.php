<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class gerente_model extends CI_Model
 {
 	
 	public function get_gerente()
 	{
 		$data =$this->db->get('tab_gerente');
 		return $data->result_array();
 	}

 	public function insertar($data)
 	{
 		$var=$this->db->insert('tab_gerente',$data);
 		return $var;
 	}

 	public function eliminargere($id)
 	{
 	 $this->db->where('id_gerente',$id);
 	 return $this->db->delete('tab_gerente');
 	} 

    public function obtener($id_gerente)
 	{
     $this->db->where('id_gerente',$id_gerente);
 	 $gerente=$this->db->get('tab_gerente');
 	 return $gerente->result_array();

 	}

 	public function update($data, $id_gerente)
 	{
 	 $this->db->where('id_gerente',$id_gerente);
 	 return $this->db->update('tab_gerente',$data);

 	}

 }