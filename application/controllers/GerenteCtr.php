<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gerenteCtr extends CI_Controller
{
	
	 public function __construct()
	{
		parent:: __construct();
		$this->load->model('gerente_model');
	}

	public function agregar_gerente ()
	{
		$data['nombreG']=$this->input->post('nombreG');
		$data['apellido']=$this->input->post('apellido');
		$data['codigo']=$this->input->post('codigo');
		 echo $this->gerente_model->insertar($data);
	}

	public function mostrartabla()
	{
		$contador=0;
	 $data =$this->gerente_model->get_gerente();
	 foreach ($data as $value) { $contador++;
	 	 echo "<tr>";
	 	 echo "<td>".$contador."</td>";
	 	 //echo "<td>".$value['nombre']."</td>";
	 	 echo "<td>".$value['nombreG']."</td>";
	 	 echo "<td>".$value['apellido']."</td>";
	 	 echo "<td>".$value['codigo']."</td>";
	 	 echo "<td>";
	 	 echo '<a data-toggle="modal" data-target="#exampleModal" onclick="mostrarmodal('."'".base_url()."/gerenteCtr/extraer?id_gerente=".$value['id_gerente']."'".')" class="btn btn-info text-white btn-sm" ><i class="zmdi zmdi-edit"></i></a>  ';
         echo '<a onclick="eliminar('.$value["id_gerente"].')" class="btn btn-danger btn-sm btn text-white" ><i class="zmdi zmdi-delete"></i></a>';
         echo "</td>";
         echo  "</tr>";
	 }
	}
	
	public function eliminar()
	{
	$id =$this->input->post('id');
    echo $this->gerente_model->eliminargere($id);

	}

	public function extraer()
	{
     $id_gerente=$this->input->get('id_gerente');
	 $data['gerente']=$this->gerente_model->obtener($id_gerente);
	 $this->load->view('administrador/editar_gerente',$data);
	}
  

    public function editar_gerente()
    {
  	
  	$id_gerente=$this->input->post('id_gerente');
	$data['nombreG']=$this->input->post('nombreG');
	$data['apellido']=$this->input->post('apellido');
	$data['codigo']=$this->input->post('codigo');
	echo $this->gerente_model->update($data,$id_gerente);

   }
}