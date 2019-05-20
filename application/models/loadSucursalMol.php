<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoadSucursalMol extends CI_Model{

//===============================================================
	public function consultaSucursal($id)
	{
		$this->db->where("s.id_gerente = g.id_gerente AND s.id_sucursal ='".$id."'");
		$query = $this->db->get('tab_sucursal s,tab_gerente g');
		return $query->row();
	}
//===============================================================
	public function cargarCarros($id)
	{
		$this->db->set('au.*, m.marca,img.uno');
		$this->db->where('sa.id_auto = au.id_auto AND au.Marca = m.id_marca AND au.id_fotos = img.id_img AND id_sucursal=',$id);
		$data = $this->db->get('tab_sucursal_auto sa,tab_auto au,tab_marca m,tab_img_autos img');
		return $data->result_array();
	}
//===============================================================
	public function detalles_auto($id,$id_suc){
		$query = $this->db->query("SELECT sau.id_sucursal,car.id_auto,color.color,mar.marca,car.Modelo,car.año,tip.tipo,car.Monto,img.*,car.tipo_motor,car.cilindros,car.transmision,tracc.traccion,car.combustible,car.nota,estado.Estado FROM tab_sucursal_auto sau INNER JOIN tab_colores color ON sau.id_color = color.id_colores INNER JOIN tab_auto car ON sau.id_auto = car.id_auto INNER JOIN tab_marca mar  ON car.Marca = mar.id_marca INNER JOIN tab_tipoauto tip ON car.tipo_cuerpo = tip.id_tipo INNER JOIN tab_img_autos img ON car.id_fotos = img.id_img INNER JOIN tab_traccion tracc ON car.traccion = tracc.id_traccion INNER JOIN tab_estado estado ON car.id_estado = estado.id_estado WHERE sau.id_sucursal = '".$id_suc."' AND sau.id_auto ='".$id."'");
		return $query->row();
	}
		

}
