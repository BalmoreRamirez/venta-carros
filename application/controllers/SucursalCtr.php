<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SucursalCtr extends CI_Controller{
  //====================================================================================================
  public function __construct()
  {
    parent:: __construct();
    $this->load->model('sucursal_model');
    $this->load->model('validar_login');
  }
//====================================================================================================
  public function agregar()
  {
    $data['nombre']= $_POST['nombre'];
    $data['direccion']= $_POST['direccion'];
    $data['id_gerente']= $_POST['geren'];
    $data['id_estado']= $_POST['estado'];
    echo $this->sucursal_model->insertar($data);
  }

  //====================================================================================================
  public function estado()
  {
    $estado=$this->sucursal_model->getestado();
    echo '<option value="0">Estado de la sucursal</option>';
    foreach ($estado as $value){
      echo "<option value=".$value['id_estado'].">".$value['Estado']."</option>";
    }
  }
  //====================================================================================================
  public function gerente()
  {
    $estado=$this->sucursal_model->getgerente();
    echo '<option value="0">Nombre del Gerente</option>';
    foreach ($estado as $valu) {
      echo "<option value=".$valu['id_gerente'].">".$valu['nombreG']."</option>";
    }
  }
  //====================================================================================================
  public function accion(){
    $id_sucursal=$this->input->get('id_sucursal');
    $data['sucursal']=$this->sucursal_model->obtener($id_sucursal);
    $this->load->view('administrador/actualizarsucursal',$data);

  } 
  //====================================================================================================
  public function eliminarsu()
  {
    $id=$this->input->post('id');
    echo $this->sucursal_model->eliminar_sucursal($id);
  }
  //====================================================================================================
  public function editar()
  { 
    $id_sucursal= $this->input->post('id_sucursal');
    $data['nombre']=$this->input->post('nombre');
    $data['direccion']= $this->input->post('direccion');
    $data['id_gerente']= $this->input->post('id_gerente');
    $data['id_estado']=  $this->input->post('id_estado');
    $data['telefono']=$this->input->post('telefono');
    $data['correo']=$this->input->post('correo');
    echo $this->sucursal_model->update($data,$id_sucursal);
  }
  //====================================================================================================
  public function sucursal()
  {

    if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
      if ($this->session->userdata('id_rol') == '1') {


        $id_user = $this->session->userdata('user_name');
        $data['user'] = $this->validar_login->extraer_user($id_user);
        
        $this->load->view('layouts/header');
        $this->load->view('layouts/menu',$data);
        //------------------------------------------------------------------------
        $data['sucursal'] = $this->sucursal_model->getsucursal();
        $this->load->view('administrador/sucursal',$data);
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
  //============================================================
  public function formulario(){
   if ($this->session->userdata('user_name') !=NULL|| $this->session->userdata('user_name')!='') {
    if ($this->session->userdata('id_rol') == '1') {
      $id_user = $this->session->userdata('user_name');
      $data['user'] = $this->validar_login->extraer_user($id_user);
      $this->load->view('layouts/header');
      $this->load->view('layouts/menu',$data);
      $this->load->view('administrador/Sucursal001');
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
//====================================================================================================
public function agregar_sucursal()
{    
       //En este config esta almacenada la dirección la carpeta donde se guardara la img
  $config['upload_path'] = './libre/assets/img';
  $config['upload_path'] = './libre/assets/img/';
            //En este config estan los formatos de las img que guardara      
  $config['allowed_types'] = 'gif|jpeg|jpg|png|JFIF';
            //En este config esta almacenado el tamaño de la img        
  $config['max_size'] = 10000000000;

  $this->load->library('upload', $config);
                //Aqui se carga el nombre del campo del formulario
  if(!$this->upload->do_upload('imagen')){
                    //Si al subirse hay algún error lo pongo en un array para pasárselo a la vista/
    $error= $this->upload->display_errors();
    echo $error;
  }
  else{
    $datos=$this->upload->data();
   //En este array se almacena la carpeta de la imagen y el nombre para ingresarlo a la DB
  //====================================================================================================
    $data2 = array(
      'nombre' => strtoupper($this->input->post('imagen')), 
      'ruta' => "/libre/assets/img"."/". $datos['file_name']       
    );
  }
  $data['nombre'] = $this->input->post('nombre');
  $data['direccion'] = $this->input->post('direccion');
  $data['id_gerente'] = $this->input->post('id_gerente');
  $data['id_estado'] = $this->input->post('id_estado');
  $data['telefono'] = $this->input->post('telefono');
  $data['correo'] = $this->input->post('correo');

  $this->sucursal_model->insertar_uno($data, $data2);
  redirect('SucursalCtr/formulario');


}
public function Tablebranchoffice()
{
  $listTablebranchoffice=$this->sucursal_model->ListbranchOffice();    
  foreach ($listTablebranchoffice as $value) {
    echo  "<tr>";
    echo "<td>".$value['id_sucursal']."</td>";
    echo "<td>".$value['nombre']."</td>";
    echo "<td>".$value['direccion']."</td>";
    echo "<td>".$value['nombreG']." ".$value['apellido']."</td>";
    echo "<td>";
    if ($value['id_estado']=='1'){
      echo '<a href="';
      echo base_url("SucursalCtr/cambiar_estado?id_sucursal=".$value['id_sucursal']."");
      echo '"class="btn btn-block btn-success btn-sm">';
      echo  $value['Estado'];
      echo "</a>";
      echo "<td>";
      echo '<a data-toggle="modal" data-target="#exampleModal" onclick="mostrarModal('."'".base_url()."/SucursalCtr/accion?id_sucursal=".$value['id_sucursal']."'".')" class="btn btn-info text-white btn-sm" ><i class="zmdi zmdi-edit"></i></a>  ';
      echo '<a onclick="eliminar_sucur('.$value["id_sucursal"].')" class="btn btn-danger btn-sm btn text-white" ><i class="zmdi zmdi-delete"></i></a>';
      echo "</td>";
    }else{
      echo '<a href="';
      echo base_url("SucursalCtr/cambiar_estado?id_sucursal=".$value['id_sucursal']."");
      echo '"class="btn btn-block btn-danger btn-sm">';
      echo  $value['Estado'];
      echo '</a>';
      echo "<td>";
      echo '<a data-toggle="modal" data-target="#exampleModal" onclick="mostrarModal('."'".base_url()."/SucursalCtr/accion?id_sucursal=".$value['id_sucursal']."'".')" class="btn btn-info text-white btn-sm disabled" ><i class="zmdi zmdi-edit"></i></a>  ';
      echo '<a onclick="eliminar_sucur('.$value["id_sucursal"].')" class="btn btn-danger btn-sm btn text-white disabled" ><i class="zmdi zmdi-delete"></i></a>';
      echo "</td>";
    }
    echo  "</tr>";
  }
}

public function cambiar_estado()
{
  $id_sucursal=$_GET['id_sucursal'];
  $estad=$this->sucursal_model->estadoS($id_sucursal);
  foreach ($estad as $es) {
   if($es['id_estado']=='1'){
    $data=2;
    $this->sucursal_model->sucursal_es($id_sucursal,$data);
    redirect('SucursalCtr/formulario');

  }else{
    $data=1;
    $this->sucursal_model->sucursal_es($id_sucursal,$data);
    redirect('SucursalCtr/formulario');
  }
}
}


}

