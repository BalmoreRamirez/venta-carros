<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class VendedorCTR extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('vendedor_model');
	}

	public function MostrarVendedor()
	{
		if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
			if ($this->session->userdata('id_rol') == '1') {

				//valida la sesion de
				$id_user = $this->session->userdata('user_name');
				$data['user'] = $this->validar_login->extraer_user($id_user);

				//carga la vista
				$this->load->view('layouts/header');
				$this->load->view('layouts/menu',$data);
				$this->load->view('administrador/ListVendedorView');
				$this->load->view('layouts/footer');
			}else{
				redirect('');
			}
		}else{
			$this->load->view('layouts/header');
			$this->load->view('login');
			$this->load->view('layouts/footer');
		}	
	}


	public function agregar_ven()
	{
		$data['nombre']=$this->input->post('nombre');
		$data['apellido']=$this->input->post('apellido');
		$data['codigo']=$this->input->post('codigo');
		$data['direccion']=$this->input->post('direccion');
		$data['dui']=$this->input->post('dui');
		$data['id_estado']=$this->input->post('id_estado');
		echo $this->vendedor_model->insert($data);
		
	}
	
	public function estado(){
		$estado=$this->vendedor_model->getestado();
		echo '<option value="0">Estado</option>';
		foreach ($estado as $value){
			echo "<option value=".$value['id_estado'].">".$value['Estado']."</option>";
		}
	}
	public function tablavendedor()
	{
		$data=$this->vendedor_model->getvendedor();
		foreach ($data as $value) {
			echo "<tr>";
			echo "<td>".$value['id_vendedor']."</td>";
			echo "<td>".$value['nombre']."</td>";
			echo "<td>".$value['apellido']."</td>";
			echo "<td>".$value['codigo']."</td>";
			echo "<td>".$value['direccion']."</td>";
			echo "<td>".$value['dui']."</td>";
			echo "<td>";
			if ($value['id_estado']=='1'){
			echo '<a href="';
			echo base_url("VendedorCtr/estado_vendedor?id_vendedor=".$value['id_vendedor']."");
			echo '"class="btn btn-block btn-success btn-sm">';
			echo  $value['Estado'];
			echo "</a>";
			echo "<td>";
			echo '<a data-toggle="modal" data-target="#exampleModal" onclick="mostrar('."'".base_url()."/VendedorCtr/extraer?id_vendedor=".$value['id_vendedor']."'".')" class="btn btn-info text-white btn-sm" ><i class="zmdi zmdi-edit"></i></a>  ';
			echo '<a onclick="eliminar('.$value["id_vendedor"].')" class="btn btn-danger btn-sm btn text-white" ><i class="zmdi zmdi-delete"></i></a>';
			echo "</td>";
            }else{
			echo '<a href="';
			echo base_url("VendedorCtr/estado_vendedor?id_vendedor=".$value['id_vendedor']."");
			echo '"class="btn btn-block btn-danger btn-sm">';
			echo  $value['Estado'];
			echo '</a>';
		    echo "<td>";
			echo '<a data-toggle="modal" data-target="#exampleModal" onclick="mostrar('."'".base_url()."/VendedorCtr/extraer?id_vendedor=".$value['id_vendedor']."'".')" class="btn btn-info text-white btn-sm disabled" ><i class="zmdi zmdi-edit"></i></a>  ';
			echo '<a onclick="eliminar('.$value["id_vendedor"].')" class="btn btn-danger btn-sm btn text-white disabled" ><i class="zmdi zmdi-delete"></i></a>';
			echo "</td>";
              }
          
			echo  "</tr>";
		}
	}
	public function eliminar()
	{
		$id =$this->input->post('id');
		echo $this->vendedor_model->eliminarvende($id);
	}

	public function extraer()
	{
		$id_vendedor=$this->input->get('id_vendedor');
		$data['vendedor']=$this->vendedor_model->obtener($id_vendedor);
		$this->load->view('administrador/editar_vendedor',$data);
	}

	public function editar_vendedor()
	{
		$id_vendedor= $this->input->post('id_vendedor');
		$data['nombre']=$this->input->post('nombre');
		$data['apellido']=$this->input->post('apellido');
		$data['codigo']=$this->input->post('codigo');
		$data['direccion']=$this->input->post('direccion');
		$data['dui']=$this->input->post('dui');
		$data['id_estado']=$this->input->post('id_estado');
		echo $this->vendedor_model->update($data,$id_vendedor);
	}

	public function estado_vendedor(){
		$id_vendedor=$_GET['id_vendedor'];
		$esta=$this->vendedor_model->estadov($id_vendedor);
             foreach ($esta as $e) {
			if($e['id_estado']=='1'){
				$data=2;
				$this->vendedor_model->Evendedor($id_vendedor,$data);
				redirect('DireccionCtr/MostrarVendedor');
			}else{
				$data=1;
				$this->vendedor_model->Evendedor($id_vendedor,$data);
				redirect('DireccionCtr/MostrarVendedor');
			}
		}
	}
}