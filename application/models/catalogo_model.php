<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class catalogo_model extends CI_Model
{
    public function insertar($datos)
 	{
 		$var=$this->db->insert('tab_auto',$datos);
 	}	
	
	public function inser_foto($data){
		$this->db->insert('tab_img_autos',$data);
	}
	public function eliminar_a($id)
	{
	$this->db->where('id_auto',$id);
	return $this->db->delete('tab_auto');
	}

	public function obtener($id_auto)
	{

    $this->db->where('id_auto',$id_auto);
	$catalogo=$this->db->get('tab_auto');
     return $catalogo->result_array();
	}

	public function update($data,$id_auto)
	{
	$this->db->where('id_auto',$id_auto);
	return $this->db->update('tab_auto',$data);

	}

	public function getestado(){
		$estado=$this->db->get('tab_estado');
		 return $estado->result_array();
	}

	public function getmarca()
	{
	$marca=$this->db->get('tab_marca');
	return $marca->result_array();

	}

	public function gettraccion()
	{
	$traccion=$this->db->get('tab_traccion');
	return $traccion->result_array();

	}
    
    public function tipo_auto()
	{
	$auto=$this->db->get('tab_tipoauto');
	return $auto->result_array();

	}
	public function max_id()
	{
		$maxi=$this->db->query('SELECT MAX(id_img) as max FROM tab_img_autos');
		return $maxi->row();
	}

	
	public function ListAutosGene()
	{
		$data = $this->db->query('call ListaGeneralAuto();');
		return $data->result_array();
	}

	public function autoestado ($id_auto)
	{
		$this->db->select('id_estado');
		$this->db->from('tab_auto');
		$this->db->where('id_auto',$id_auto);
		$es=$this->db->get();
		return $es->row();
	}

	public function estadoA($id_auto,$data)
	{
		$this->db->set('id_estado',$data);
		$this->db->where('id_auto',$id_auto);
		$this->db->update('tab_auto');
	}
}