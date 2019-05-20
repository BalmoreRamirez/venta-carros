<section class="full-width pageContent">
	<!--=====================================================================================-->
	<!-- Area de notificacion  -->
	<section class="full-width container-notifications">
		<div class="full-width container-notifications-bg btn-Notification"></div>
	    <section class="NotificationArea">
	        <div class="full-width text-center NotificationArea-title tittles">Usuarios <i class="zmdi zmdi-close btn-Notification"></i></div>
	        <a class="Notification user-form" id="notifation-unread-1">
	            <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt "></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle"></i>
	                    <strong>Registrar Usuario</strong> 
	                    <br>
	                   
	                </p>
	            </div>	        	
	        </a>
	        <script type="text/javascript">
	        	$('.user-form').click(function(){
	        		$('#exampleModal').modal('show');
	        	});
	        </script>
	    </section>
	</section>
	<!--=======================================================================================================-->


		

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabListClient" id="listar" class="mdl-tabs__tab">Listar</a>
				<a href="#tabNewClient" class="mdl-tabs__tab is-active">Crear</a>
				
			</div>
			<!--========================================================================================-->
			<div class="mdl-tabs__panel is-active" id="tabNewClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--1-col-phone mdl-cell--9-col-tablet mdl-cell--9-col-desktop mdl-cell--1-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							Crear Clientes
							</div>
						<div class="full-width panel-content">
							<form id="datos">
							  <div class="form-group">
							    <label >Nombre de Cliente</label>
							    <input type="text" class="form-control" id="nombre"  name="nombre">
							  </div>
							  <div class="form-group">
							    <label >Apellido de Cliente</label>
							    <input type="text" class="form-control" id="apellido" name="apellido">
							  </div>
							  <div class="form-group">
							    <label >Número de Identificación Tribunametaria</label>
							    <input type="text" class="form-control" id="nit"  name="nit">
							  </div>
							  <div class="form-group">
							    <label >Número Telefonico</label>
							    <input type="text" class="form-control" id="telefono"  name="telefono">
							  </div>
							    <div class="form-group">
							    <label >Correo Electronico</label>
							    <input type="email" class="form-control" id="correo"  name="correo">
							  </div>								  
							  <div class="form-group">
							    <label>Direccion del Cliente</label>
							    <textarea class="form-control" id="direccion" name="direccion"></textarea>
							  </div>
							 <button  class="btn btn-primary" id="guardar">Enviar</button>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
			<!--========================================================================================-->
			<div class="mdl-tabs__panel" id="tabListClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--0-col-phone mdl-cell--12-col-tablet mdl-cell--12-col-desktop mdl-cell--0-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Listado Clientes
							</div>
							<div class="full-width panel-content">
								<form action="#">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchClient">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchClient">
											<label class="mdl-textfield__label"></label>
										</div>
									</div>
								</form>
						
							</div>

				<table class="table">
				<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">NOMBRE</th>
				<th scope="col">APELLIDO</th>
				<th scope="col">NIT</th>
				<th scope="col">TELEFONO</th>
				<th scope="col">CORREO</th>
				<th scope="col">DIRECCION</th>
				<th scope="col">EDITAR</th>
				<th scope="col">ELIMINAR</th>
				</tr>
				</thead>
				<tbody id="clientes"></tbody>
				</table>
				</div>
						
					</div>
				</div>
			</div>
			<!--========================================================================================-->
		</div>

		
	</section>
<script type="text/javascript">
$(document).ready(function(){	
	listarClient();	
});


//esta funcion lista los clientes activos
function listarClient(){
	var url = '<?php echo base_url();?>Clientes_controller/listarClientes';
		$.ajax({
			type:'post',
			url:url,
			success:function(data) {
				$('#clientes').html('');
				$('#clientes').html(data);
			}
		});
}

//====================================================================================
//por medio del evento click, se manda la informacion al controlador para guardarla
$('#guardar').click(function(e){
	e.preventDefault();
	$.ajax({
		url:"<?php echo base_url('Clientes_controller/Guardar_cliente');?>",
		type:"post",
		datatype:"json",
		data:$('#datos').seria5lize(),
		success:function(data){
			if (data===true || data ==="true") {
				alert("Insertado con exito");
				listarClient();
			}
		}
	});
});
//====================================================================================
//ELIMINAR SUCURSAL por medio del id, del registro la cual se captura con una funcion del evento click
function eliminar(id){
    var opcion = confirm("¿Estás seguro de eliminar?");
     if (opcion == true) {
         var url = '<?php echo base_url();?>Clientes_controller/eliminar_clientes';
         $.ajax({
                type:'post',
                url:url,
                data:'id='+id,
                success:function(data){
                   if(data==1) {
                      alert('Eliminado con exito');
                      listarClient();
                  }else{
                      alert('Registro no eliminado');
                     }
              }
      });         
    } 
}
//====================================================================================
</script>