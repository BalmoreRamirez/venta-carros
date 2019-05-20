<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientes_controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Cliente_model');
	}

	public function Guardar_cliente(){
		$nombre  = $this->input->post('nombre');
		$apellido  = $this->input->post('apellido');
		$nit  = $this->input->post('nit');
		$telefono  = $this->input->post('telefono');
		$correo  = $this->input->post('correo');
		$direccion  = $this->input->post('direccion');
		$data = $this->Cliente_model->Guardar_cliente($nombre,$apellido,$nit,$telefono,$correo,$direccion);
		echo json_encode($data);
	}
	public function listarClientes()
	{   
		$data = $this->Cliente_model->listarCliente();
		foreach ($data as $key) {
			echo "<tr>";
			echo "<td>".$key['id_cliente']."</td>";
			echo "<td>".$key['nombre']."</td>";
			echo "<td>".$key['apellido']."</td>";
			echo "<td>".$key['nit']."</td>";
			echo "<td>".$key['telefono']."</td>";
			echo "<td>".$key['correo']."</td>";
			echo "<td>".$key['direccion']."</td>";
			echo "<td>";
			echo '<a onclick="editar('.$key["id_cliente"].')" href=""><i class="fa fa-edit fa-2x"></i></a>';
			echo "</td>";			
			echo "<td>";
			echo '<a onclick="eliminar('.$key["id_cliente"].')" href=""><i class="fa fa-eraser fa-2x"></i></a>';
			echo "</td>";
			echo "</tr>";
		}	
		
	}


	public function eliminar_clientes()
	{
		$id = $this->input->post('id');
		
		echo $this->Cliente_model->eliminar_cliente($id);  
	}
}
?>
