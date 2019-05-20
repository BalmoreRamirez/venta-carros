<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GraficasMol extends CI_Model
{

	public function getVenta()
	{
	$query = $this->db->query('select ven.nombre, sum(fa.monto) as fa from tab_factura  fa
								inner join tab_vendedor ven
								on fa.id_vendedor =  ven.id_vendedor
								GROUP by fa.id_vendedor');						
		return $query->result();
	}

}