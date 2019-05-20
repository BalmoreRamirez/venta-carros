
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
			Lista de vendedores dentro de la empresa
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
						Lista De Vendedores
					</div>
					
					
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Codigo</th>
								<th scope="col">Direccion</th>
								<th scope="col">Dui</th>
                                <th scope="">Estado</th>
                           
								<th scope="col">acciones</th>
							</tr>
						</thead>
						<tbody id="tablavendedor">

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
					<div class="full-width panel-tittle text-center tittles" id="head">
						Ingresar Informacion
					</div>
					<div class="full-width panel-content">
						<div class="row justify-content-md-center">
							<div class="col-lg-10">
								<div id="form" class="card-body">			
									<div class="">
										<!---formulario de gerente-->

										<form id="form_vendedor">

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input type="text" class="mdl-textfield__input" name="nombre" id="nombre" placeholder="Nombre del Vendedor">
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input type="text" class="mdl-textfield__input" name="apellido" id="apellido" placeholder="apellido">

											</div>	
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input type="text" name="codigo" id="codigo"  class="mdl-textfield__input" placeholder="codigo" >
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input type="text" name="direccion" id="direccion" class="mdl-textfield__input" placeholder="direccion" >
											</div>				

		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-labelp">
			<input type="text" name="dui" id="dui" class="mdl-textfield__input" placeholder="000-000-00">
		</div>
		<div class="mdl-textfield mdl-js-textfield">
			<select name="id_estado" id="id_estado" class="mdl-textfield__input" required></select>
		</div>
		<div class="form-group text-center">
			<button class="btn btn-primary" id="enviar" onclick="agregar_v()">
				Enviar
			</button>
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
	$(document).ready(function(){
		llenartabla();
		llenar_estado();
	});

	function mostrar(dir)
	{
		$('.modal-body').load(dir, function () {
			$('#exampleModal').modal({show: true});
		});
	} 

	function agregar_v(){
		var ven='<?php echo base_url(); ?>VendedorCtr/agregar_ven';
		$.ajax({
			url: ven,
			type:'post',
			data: $('#form_vendedor').serialize(),
			success:function(data){
				if(data==1){
					Swal.fire({
						title: "Datos Ingresados Correctamente!",
						type: "success",
						showConfirmButton: false,
						timer: 1500
					});
					llenartabla();
				}else{
					Swal.fire({
						title: "Error al ingresar!",
						type: "error",
						showConfirmButton: false,
						timer: 1500

					});
					llenartabla();
				}
			}
		});

	} 

	function llenartabla(){
		var url = "<?php echo base_url();?>VendedorCtr/tablavendedor";
		$.ajax({
			url:url,
			type:'post',
			success:function(data){
				$('#tablavendedor').html(data);
			}
		});
	}

	function llenar_estado(){
		var url ='<?php echo base_url();?>VendedorCtr/estado';
		$.ajax({
			type: 'post',
			url:url,
			success: function(data){
				$('#id_estado').html(data);
			}
		});
	}

	function eliminar(id){
		var opcion = confirm('¿Deseas eliminar este dato realmente?');
		if(opcion ==true){
			var url ='<?php echo base_url(); ?>VendedorCtr/eliminar';
			$.ajax({
				type:'post',
				url:url,
				data:'id='+id,
				success:function (data){
					if(data==true||data==="true"){
						alert('eliminado correctamente');
						llenartabla();
					}else{
						alert('error al eliminar');
					}
				}
			});
		}
	}
</script>
