<style type="text/css">
	#head{
	background-color:#01579B;
}
</style>
<section class="full-width header-well">
	<div class="full-width header-well-icon">
		<i class="zmdi zmdi-label"></i>
	</div>
	<div class="full-width header-well-text">
		<p class="text-condensedLight">
			Mantenimiento de la  informacion de sucursales dentro de la empresa
		</p>
	</div>

</section>
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	<div class="mdl-tabs__tab-bar">
		<a href="#tabListClient" class="mdl-tabs__tab is-active">Listar</a>
		<a href="#crearsucursal" class="mdl-tabs__tab">Crear</a>
	</div>
	<div class="mdl-tabs__panel  is-active" id="tabListClient">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop mdl-cell--0-offset-desktop">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle  text-center tittles" id="head">
						Lista De Sucursales
					</div>
						<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Sucursal</th>
									<th scope="col">Direccion</th>
									<th scope="col">Gerente</th>
									<th scope="col">Estado</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody id="tablaSucursal">
							</tbody>
						</table>
				</div>
			</div>
		</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="modal-body">
    		
    	</div>
    </div>
</div>
</div>
	</div>

	<!---ingresar -->
	<div class="mdl-tabs__panel" id="crearsucursal">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop mdl-cell--0-offset-desktop">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle  text-center tittles" id="head">
						Ingresar Informacion
					</div>
<div class="full-width panel-content">
<div class="row justify-content-md-center">
<div class="col-lg-10">
<div id="form" class="card-body">			
<div class="">
	<form id="formsucur" class="mui-form"  method="post" action="<?php echo base_url();?>SucursalCtr/agregar_sucursal" enctype="multipart/form-data">
<div class="mdl-grid">

	<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input type="text" class="mdl-textfield__input" name="nombre" id="nombre" placeholder="Nombre de la sucursal">
		</div>	
	</div>

		<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<input type="text" name="direccion" id="direccion" class="mdl-textfield__input" placeholder="Ubicacion de la sucursal" >
		</div>	
		</div>
		<!------>
		<div class="mdl-cell mdl-cell--6-col">			
		<div class="mdl-textfield mdl-js-textfield">
		<select name="id_gerente" id="id_gerente" class="mdl-textfield__input"></select>
		</div>
		</div>
		<!---->
		<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-textfield mdl-js-textfield">
		<select name="id_estado" id="id_estado" class="mdl-textfield__input" required></select>
		</div>	
		</div>
	
		<!----->
		<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input type="number" name="telefono" id="telefono" class="mdl-textfield__input" placeholder="Tel:000-000-000">
		</div>
	</div>
		<!---->
		<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-labelp">
			<input type="text" name="correo" id="correo" class="mdl-textfield__input" placeholder="correo@gmail.com">
		</div>
	</div>
		<!---->
			
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<input type="file" name="imagen" id="imagen"  class="mdl-textfield__input"  required>
		</div>
		<!----->

		<div class="form-group text-center">
			<button  id="enviar" class="   btn btn-primary">Enviar</button>
		</div>

	</div>
	</form>
</div>
</div>
</div><!--card-->
</div>
</div>
				</div>
			</div>
		</div>
	</div>
	<!---->
</div>
</div>	
<!---===============================================-->			
</div>		
</section>
<script type="text/javascript">
	//en el documen ready cargamos los metodos al momento que cargan el documento
	$(document).ready(function(){
		llenar_estado();
		llenar_gerente();
		Listbranchoffice();
	});
 //=============================================================================


	//=============================================================================
	function mostrarModal(dir)
     {
          $('.modal-body').load(dir, function () {
            $('#exampleModal').modal({show: true});
           });
     }  

     
	//con este metodo llenamos el selec de estado de las sucursales con ajax
	function llenar_estado(){
		var url ='<?php echo base_url();?>SucursalCtr/estado';
		$.ajax({
			type: 'post',
			url:url,
			success: function(data){
				$('#id_estado').html(data);
			}
		});
	}
	//==============================================================================
	//con este metodo llenamos el selec de gerente por medio de ajax
	function llenar_gerente(){			
		$.ajax({
			url:'<?php echo base_url();?>SucursalCtr/gerente',
			type:'post',				
			success:function(data){
				$('#id_gerente').html(data);
			}
		});
	}
	//==============================================================================
	//con esta mentodo guardamos la informacion contenida en el formulario, de forma serializada
      function guardar(){
		var url ="<?php echo base_url();?>SucursalCtr/agregar";
		$.ajax({
			url:url,
			type:'post',
			data: $('#formulario1').serialize(),
			success:function(data){
				if(data ==1){
					alert('Datos guardados correctamente');
				}else{
					alert('Error al guardar los datos');
				}
			}
		});
	}
	function Listbranchoffice(){
		var url= "<?php echo base_url();?>SucursalCtr/Tablebranchoffice";
		$.ajax({
			url:url,
			type:'post',
			success:function(data){
				$('#tablaSucursal').html(data);
			}
		});
	}

	function eliminar_sucur(id){
    var opcion = confirm('¿Estás seguro de eliminar?');
     if (opcion ==true) {
         var url = '<?php echo base_url();?>SucursalCtr/eliminar_su';
         $.ajax({
                type:'post',
                url:url,
                data:'id='+id,
                success:function(data){
                   if(data==true||data==="true") {
                      alert('Eliminado con exito');
                      Listbranchoffice();
                  }else{
                      alert('Registro no eliminado');
                     }
              }
      });         
    } 
}
//==============================================================

</script>
