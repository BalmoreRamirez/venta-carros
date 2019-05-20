<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AutoCtr extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('auto_model');
	}

	public function Mostrartipoauto()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/menu');
		$this->load->view('administrador/TipoAutoView');
		$this->load->view('layouts/footer');
	}

	public function agregar()
	{
		$data['marca']=$this->input->post('marca');
		echo $this->auto_model->insertar($data);
		
	}

	public function marca()
	{
		$this->load->view('administrador/agregar_marca');
	}


	public function mostrarmarca()
	{
		$marc= $this->auto_model->getmar();
		$contador=0;
		foreach ($marc as $value) { $contador++;
			echo "<tr>";
			echo "<td>".$contador."</td>";
			echo "<td>".$value['marca']."</td>";
			echo "<td>";
			echo '<a data-toggle="modal"  onclick="MostrarModal('."'".base_url()."/AutoCtr/accion?id_marca=".$value['id_marca']."'".')" class="btn btn-info text-white btn-sm" ><i class="zmdi zmdi-edit"></i></a>';
			echo  "";
			echo '<a onclick="eliminar_m('.$value['id_marca'].')" class="btn btn-danger btn-sm btn text-white "><i class="zmdi zmdi-delete"></i></a>';
			echo "</td>";
			echo "</tr>";
		}
	}

	public function eliminar()
	{
		$id=$this->input->post('id');
		echo $this->auto_model->eliminar_marca($id);
	}

	public function accion()
	{
		$id_marca=$this->input->get('id_marca');
		$data['marca']=$this->auto_model->obtenerid($id_marca);
		$this->load->view('administrador/editar_marca',$data);
	}

	public function editar_marca()
	{
		$id_marca=$this->input->post('id_marca');
		$data['marca']=$this->input->post('marca');
		echo $this->auto_model->update($data,$id_marca);

	}

	public function auto()
	{
		$this->load->view('administrador/agregar_tipoauto');
	}

	public function mostrar_tipo()
	{
		$tipo= $this->auto_model->get_tipo();
		$contador =0;
		foreach ($tipo as $value)  { $contador++;
			echo "<tr>";
			echo "<td>".$contador."</td>";
			echo "<td>".$value['tipo']."</td>";
			echo "<td>";
			echo '<a data-toggle="modal" onclick="MostrarModal('."'".base_url()."/AutoCtr/extraer?id_tipo=".$value['id_tipo']."'".')" class="btn btn-info text-white btn-sm" ><i class="zmdi zmdi-edit"></i></a>';
			echo '<a onclick="eliminar_auto('.$value['id_tipo'].')" class="btn btn-danger btn-sm btn text-white "><i class="zmdi zmdi-delete"></i></a>';
			echo "</td>";
			echo "</tr>";
		}
	}
	public function agregar_tipo()
	{
		$data['tipo']=$this->input->post('tipo');
		echo $this->auto_model->insert_tipo($data);
	}

	public function extraer()
	{
		$id_tipo=$this->input->get('id_tipo');
		$data['tipo']=$this->auto_model->obtener($id_tipo);
		$this->load->view('administrador/editar_tipo',$data);

	}

	public function eliminar_tipo()
	{
		$id=$this->input->post('id');
		echo $this->auto_model->eliminar($id);
	}

	public function editar_tipo()
	{
		$id_tipo=$this->input->post('id_tipo');
		$data['tipo']=$this->input->post('tipo');
		echo $this->auto_model->update_auto($data,$id_tipo);
		
	}


}