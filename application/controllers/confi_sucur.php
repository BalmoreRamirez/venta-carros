<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class confi_sucur extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('confi_model');
	}

	public function index()
	{
		$this->load->view('layouts/header');
     	$this->load->view('layouts/menu');
		$this->load->view('administrador/confi');
		 $this->load->view('layouts/footer');
	}

	public function auto()
	{
		$auto = $this->confi_model->get_auto();
		echo '<option value="0">Seleccione auto</option>';
		foreach($auto as $a){
		echo "<option value=".$a['id_auto'].">".$a['Modelo']."</option>";	
		}
	}

	public function sucursal()
	{
		$sucursal = $this->confi_model->get_sucursal();
		echo '<option value="0">Seleccione la sucursal</option>';
		foreach($sucursal as $s){
		echo "<option value=".$s['id_sucursal'].">".$s['nombre']."</option>";	
		}
	}

	public function color()
	{
		$color = $this->confi_model->get_color();
		echo '<option value="0">Seleccione el color</option>';
		foreach($color as $c){
			echo "<option value=".$c['id_colores'].">".$c['color']."</option>";
		}
	}

	public function guardar()
	{
		$data['id_auto'] = $this->input->post('id_auto');
		$data['id_sucursal'] = $this->input->post('id_sucursal');
		$data['unidades'] = $this->input->post('unidades');
		$data['id_color'] = $this->input->post('id_color');
		echo $this->confi_model->insertar($data);
		redirect('confi_sucur/index','refresh');

	}

	public function accion()
	{
		$id_sau = $this->input->get('id_sau');
		$data['sucursal_auto'] = $this->confi_model->obtener($id_sau);
		$this->load->view('administrador/actualizar_confi_sucur',$data);
	}

	public function listar()
	{
		$sucursales = $this->confi_model->mostrar();
		$contador=0;
		foreach($sucursales as $value){ $contador++;
			echo "<tr>";
			echo "<td>".$contador;"</td>";
			echo "<td>".$value['Modelo']."</td>";
			echo "<td>".$value['nombre']."</td>";
			echo "<td>".$value['unidades']."</td>";
			echo "<td>".$value['color']."</td>";
			echo "<td>";
			echo '<a data-toggle="modal" onclick="MostrarModal('."'".base_url()."/confi_sucur/accion?id_sau=".$value['id_sau']."'".')" class="btn btn-info text-white btn-sm" ><i class="zmdi zmdi-edit"></i></a>';
			echo "</tr>";
		}
	}

}

