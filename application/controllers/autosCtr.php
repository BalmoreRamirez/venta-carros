<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class autosCtr extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('GaleriaAutoMmodel');
    }

    public function listarAutos()
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
} 