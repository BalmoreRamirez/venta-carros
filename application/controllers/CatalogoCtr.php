<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatalogoCtr extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('catalogo_model');
	}

  public function CataloGene()
  {
    $this->load->view('layouts/header');
    $this->load->view('layouts/menu');
    $this->load->view('administrador/CatalogoGene');
    $this->load->view('layouts/footer');

  }

  public function agregar_auto()
  {
    $this->load->view('administrador/agregar_catalogo');
  }

  public function agregar()
  {
    $config['upload_path'] = './libre/assets/imagenes_autos/';
    $config['allowed_types'] = 'gif|jpeg|jpg|png|JFIF';
    $config['max_size'] = 10000000000;

    $this->load->library('upload', $config);
    if(!$this->upload->do_upload('imagen')){
      $error= $this->upload->display_errors();
      echo $error;
    }
    else{
      $datos=$this->upload->data();
      $uno = array(
        'uno' => strtoupper($this->input->get('uno')), 
        'ruta' => "/libre/assets/imagens_autos"."/". $datos['file_name']       
      );
    }
    $config['upload_path'] = './libre/assets/imgens_autos/';
    $config['allowed_types'] = 'gif|jpeg|jpg|png|JFIF';
    $config['max_size'] = 10000000000;

    $this->load->library('upload', $config);
    if(!$this->upload->do_upload('imagen')){
      $error= $this->upload->display_errors();
      echo $error;
    }
    else{
      $datos=$this->upload->data();
      $dos = array(
        'dos' => strtoupper($this->input->get('dos')), 
        'ruta' => "/libre/assets/imagens_autos"."/". $datos['file_name']       
      );
    }
    $config['upload_path'] = './libre/assets/imgens_autos/';
    $config['allowed_types'] = 'gif|jpeg|jpg|png|JFIF';
    $config['max_size'] = 10000000000;

    $this->load->library('upload', $config);
    if(!$this->upload->do_upload('imagen')){
      $error= $this->upload->display_errors();
      echo $error;
    }
    else{
      $datos=$this->upload->data();
      $tres = array(
        'tres' => strtoupper($this->input->get('tres')), 
        'ruta' => "/libre/assets/imagens_autos"."/". $datos['file_name']       
      );
    }
    $config['upload_path'] = './libre/assets/imgens_autos/';
    $config['allowed_types'] = 'gif|jpeg|jpg|png|JFIF';
    $config['max_size'] = 10000000000;

    $this->load->library('upload', $config);
    if(!$this->upload->do_upload('imagen')){
      $error= $this->upload->display_errors();
      echo $error;
    }
    else{
      $datos=$this->upload->data();
      $cuatro = array(
        'cuatro' => strtoupper($this->input->get('cuatro')), 
        'ruta' => "/libre/assets/imagens_autos"."/". $datos['file_name']       
      );
    }
    $config['upload_path'] = './libre/assets/imgens_autos/';
    $config['allowed_types'] = 'gif|jpeg|jpg|png|JFIF';
    $config['max_size'] = 10000000000;

    $this->load->library('upload', $config);
    if(!$this->upload->do_upload('imagen')){
      $error= $this->upload->display_errors();
      echo $error;
    }
    else{
      $datos=$this->upload->data();
      $cinco = array(
        'cinco' => strtoupper($this->input->get('cinco')), 
        'ruta' => "/libre/assets/imagens_autos"."/". $datos['file_name']       
      );
    }
    $config['upload_path'] = './libre/assets/imgens_autos/';
    $config['allowed_types'] = 'gif|jpeg|jpg|png|JFIF';
    $config['max_size'] = 10000000000;

    $this->load->library('upload', $config);
    if(!$this->upload->do_upload('imagen')){
      $error= $this->upload->display_errors();
      echo $error;
    }
    else{
      $datos=$this->upload->data();
      $seis = array(
        'seis' => strtoupper($this->input->get('seis')), 
        'ruta' => "/libre/assets/imagens_autos"."/". $datos['file_name']       
      );
    }    
    $data['uno'] = $_GET['uno'];
    $data['dos'] = $_GET['dos'];
    $data['tres'] = $_GET['tres'];
    $data['cuatro'] = $_GET['cuatro'];
    $data['cinco'] = $_GET['cinco'];
    $data['seis'] = $_GET['seis'];
    $this->catalogo_model->inser_foto($data);
    $max=$this->catalogo_model->max_id();

    $datos['id_fotos'] = $max->max;

    $datos['marca']=$_GET['id_marca'];
    $datos['modelo']=$_GET['modelo'];
    $datos['año']=$_GET['año'];
    $datos['tipo_cuerpo']=$_GET['tipoauto'];
    $datos['Monto']=$_GET['monto'];
    $datos['tipo_motor']=$_GET['tipo_motor'];
    $datos['cilindros']=$_GET['cilindros'];
    $datos['transmision']=$_GET['transmision'];
    $datos['traccion']=$_GET['traccion'];
    $datos['combustible']=$_GET['combustible'];
    $datos['cantidad']=$_GET['cantidad'];
    $datos['stock']=$_GET['stock'];
    $datos['id_estado']=$_GET['id_estado'];
    $var = $this->catalogo_model->insertar($datos);

    redirect('CatalogoCtr/CataloGene ');
  }

  public function eliminar_auto()
  {
    $id =$this->input->post('id');
   echo  $this->catalogo_model->eliminar_a($id);
  }

  public function extraer()
  {
    $id_auto=$this->input->get('id_auto');
    $data['catalogo']=$this->catalogo_model->obtener($id_auto);
    $data['marca']=$this->catalogo_model->getmarca();
    $data['traccion']=$this->catalogo_model->gettraccion();
    $data['estado']=$this->catalogo_model->getestado();
    $data['tipo_cuerpo']=$this->catalogo_model->tipo_auto();
    $this->load->view('administrador/editar_catalogo',$data);

  }

  public function editar_catalogo()
  {   
    $id_auto=$this->input->post('id_auto');
    $data['Marca']=$this->input->post('id_marca');
    $data['Modelo']=$this->input->post('modelo');
    $data['año']=$this->input->post('año');
    $data['tipo_cuerpo']=$this->input->post('tipoauto');
    $data['Monto']=$this->input->post('monto');
    $data['tipo_motor']=$this->input->post('tipo_motor');
    $data['cilindros']=$this->input->post('cilindros');
    $data['transmision']=$this->input->post('transmision');
    $data['traccion']=$this->input->post('traccion');
    $data['combustible']=$this->input->post('combustible');
    $data['cantidad']=$this->input->post('cantidad');
    $data['stock']=$this->input->post('stock');
    $data['id_estado']=$this->input->post('id_estado');
    echo $this->catalogo_model->update($data,$id_auto);

  }


  public function marca()
  {
    $marca =$this->catalogo_model->getmarca();

    echo "<option>Selecione la marca</option>";
    foreach ($marca as  $value) {
     echo "<option value='".$value['id_marca']."'>".$value['marca']."</option>";
   }

 }

 public function tipo_auto()
 {
  $auto=$this->catalogo_model->tipo_auto();
  echo "<option>Selecione tipo de auto</option> ";
  foreach ($auto as  $value) {
   echo "<option value='".$value['id_tipo']."'>".$value['tipo']."</option>";
 }

}
public function traccion()
{
	$traccion=$this->catalogo_model->gettraccion();
  echo "<option>Selecione la traccion </option>";
  foreach ($traccion as  $value) {
    echo "<option value='".$value['id_traccion']."'>".$value['traccion']."</option>";
  }
}

public function estado()
{
  $estado=$this->catalogo_model->getestado();
  echo '<option value="0">Estado de la sucursal</option>';
  foreach ($estado as $value){
    echo "<option value=".$value['id_estado'].">".$value['Estado']."</option>";
  }
}

public function ListGeneralEmpre()
{
  $listGeneralAutos=$this->catalogo_model->ListAutosGene();  
  foreach ($listGeneralAutos as $value) {
    echo  "<tr>";
    echo "<td>".$value['id_auto']."</td>";
    echo "<td>".$value['marca']."</td>";
    echo "<td>".$value['Modelo']."</td>";
    echo "<td> $".$value['Monto']."</td>";
    echo "<td>".$value['cantidad']."</td>";
    echo "<td>".$value['stock']."</td>";
    echo "<td>".$value['año']."</td>";
    echo "<td>";
    if ($value['id_estado']=='1'){
      echo '<a href="';
      echo base_url("CatalogoCtr/cambiar_e?id_auto=".$value['id_auto']."");
      echo '"class="btn btn-block btn-success btn-sm">';
      echo  $value['Estado'];
      echo "</a>";
      echo "<td>";
    echo '<a data-toggle="modal" data-target="#exampleModal" onclick="modal_auto('."'".base_url()."/CatalogoCtr/extraer?id_auto=".$value['id_auto']."'".')" class="btn btn-info text-white btn-sm" ><i class="zmdi zmdi-edit"></i></a>  ';
    echo '<a onclick="eliminar_a('.$value["id_auto"].')" class="btn btn-danger btn-sm btn text-white" ><i class="zmdi zmdi-delete"></i></a>';
    echo "</td>";
            }else{
      echo '<a href="';
      echo base_url("CatalogoCtr/cambiar_e?id_auto=".$value['id_auto']."");
      echo '"class="btn btn-block btn-danger btn-sm">';
      echo  $value['Estado'];
      echo '</a>';
      echo "<td>";
    echo '<a data-toggle="modal" data-target="#exampleModal" onclick="modal_auto('."'".base_url()."/CatalogoCtr/extraer?id_auto=".$value['id_auto']."'".')" class="btn btn-info text-white btn-sm disabled" ><i class="zmdi zmdi-edit"></i></a>  ';
    echo '<a onclick="eliminar_a('.$value["id_auto"].')" class="btn btn-danger btn-sm btn text-white disabled" ><i class="zmdi zmdi-delete"></i></a>';
    echo "</td>";
              }
    echo  "</tr>";
  }
  
}

public function cambiar_e()
{
  $id_auto=$_GET['id_auto'];
  $estado =$this->catalogo_model->autoestado($id_auto);
  foreach ($estado as $e) {
    if($e['id_estado']=='1'){
      $data=2;

      $this->catalogo_model->estadoA($id_auto,$data);
      redirect('CatalogoCtr/CataloGene');
    }else{
      $data=1;
      $this->catalogo_model->estadoA($id_auto,$data);
      redirect('CatalogoCtr/CataloGene');
    }

  }
}
}



