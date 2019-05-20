
<style type="text/css">
#head{
	background-color: #01579B;
}
</style>

<!---==========================================================================-->
<section class="full-width header-well">
	<div class="full-width header-well-icon">
		<i class="zmdi zmdi-label"></i>
	</div>
	<div class="full-width header-well-text">
		<p class="text-condensedLight">
			Lista de personal, encargada de cada sucursal.
		</p>
	</div>
</section>
<!---==========================================================================-->
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	<div class="mdl-tabs__tab-bar">
		<a href="#tabListClient" class="mdl-tabs__tab is-active">Listar</a>
		<a href="#crearsucursal" class="mdl-tabs__tab">Crear</a>
	</div>
	<!---==========================================================================-->
	<div class="mdl-tabs__panel  is-active" id="tabListClient">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop mdl-cell--0-offset-desktop">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle text-center tittles" id="head">
						Gerentes de la empresa
					</div>
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Codigo</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody id="List_gerente">

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
	<!---==========================================================================-->
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
										<!---formulario de gerente-->
										<form id="form_gerente" >

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input type="text" class="mdl-textfield__input" name="nombreG" id="nombreG" placeholder="Nombre del Gerente">

											</div>	

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input type="text" name="apellido" id="apellido" class="mdl-textfield__input" placeholder="Apellido" >
											</div>				


											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input type="text" name="codigo" id="codigo" class="mdl-textfield__input" placeholder="000-000-000">
											</div>

											<div class="form-group text-center">
												<button  id="enviar" type="button" onclick="agregar_g()" class="btn btn-primary">
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
	<!---====================================================================-->		
</div>
</div>	

</div>		
</section>

<!--cargamos la informacion de -->
<script type="text/javascript">
	$(document).ready(function(){
		tablagerente();
	});


	function mostrarmodal(dir)
	{
		$('.modal-body').load(dir, function () {
			$('#exampleModal').modal({show: true});
		});
	}  

	function tablagerente(){
		var url ="<?php echo base_url();?>GerenteCtr/mostrartabla";
		$.ajax({
			url:url,
			type:'post',
			success: function(data){
				$('#List_gerente').html(data);
			}
		});
	}
	function eliminar(id){
		var opcion = confirm('¿Deseas eliminar este dato realmente?');
		if(opcion ==true){
			var url ='<?php echo base_url(); ?>GerenteCtr/eliminar';
			$.ajax({
				type:'post',
				url:url,
				data:'id='+id,
				success:function (data){
					if(data==true||data==="true"){
						alert('Eliminado correctamente');
						
					}else{
						alert('Error al eliminar');
					}
				}
			});
		}
	}

	function agregar_g(){
		var agregar='<?php echo base_url(); ?>GerenteCtr/agregar_gerente';
		$.ajax({
			url:agregar,
			type:'post',
			data: $('#form_gerente').serialize(),
			success: function(data){
				if(data==1){
					Swal.fire({
						title: "Datos Ingresados Correctamente!",
						type: "success",
						showConfirmButton: false,
						timer: 1500

					});
                      tablagerente();
				}else{
					Swal.fire({
						title: "Error al ingresar!",
						type: "error",
						showConfirmButton: false,
						timer: 1500

					});

				}

			}
		});
	}

</script>