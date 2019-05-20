<style type="text/css">
#head{
	background-color: #01579B;

}
</style>

<!---==========================================================================-->
<section class="full-width header-well">
	<div class="full-width header-well-icon">
		<i class="zmdi zmdi-car"></i>
	</div>
	<div class="full-width header-well-text">
		<p class="text-condensedLight">
			Lista de autos
		</p>
	</div>
</section>
<div class="container">
<div class="row">
	<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--6-col-tablet mdl-cell--5-col-desktop mdl-cell--2-offset-desktop" >
		<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" onclick="MostrarModal('<?php echo base_url(); ?>AutoCtr/marca')">
			<i class="zmdi zmdi-plus"></i>
		</button>     

	</div>
	<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--6-col-tablet mdl-cell--2-col-desktop mdl-cell--2-offset-desktop" >
		<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" onclick="MostrarModal('<?php echo base_url(); ?>AutoCtr/auto')" >
			<i class="zmdi zmdi-plus"></i>
		</button>     

	</div>  
<!---==========================================================================-->
	<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop mdl-cell--0-offset-desktop">
		<div class="full-width panel mdl-shadow--2dp">
			<div class="full-width panel-tittle text-center tittles" id="head">
				MARCAS
			</div>
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">MARCA</th>
						
						<th scope="col">Acciones</th>

					</tr>
				</thead>
				<tbody id="listamarca">

				</tbody>
			</table>
		</div>
	</div>
	
	<div class="modal fade" id="modal_auto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					
				</div>
			</div>
		</div>
	</div>
	<!---==========================================================================-->
	<!---ingresar -->
	<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop mdl-cell--0-offset-desktop">
		<div class="full-width panel mdl-shadow--2dp">
			<div class="full-width panel-tittle text-center tittles" id="head">
				TIPO DE AUTOS
			</div>
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">TIPO DE AUTO</th>
						
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody id="Listauto">

				</tbody>
			</table>
		</div>
	</div>
		<div class="modal fade" id="modal_auto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		tabla_marca();
		tabla_tipo();
	});

	function tabla_marca(){
		var url ='<?php echo base_url(); ?>AutoCtr/mostrarmarca';
		$.ajax({
			url:url,
			type:'post',
			success:function(data){
				$('#listamarca').html(data);

			}
		});
	}
	function tabla_tipo() {
		var url ='<?php echo base_url(); ?>AutoCtr/mostrar_tipo';
		$.ajax({
			url:url,
			type:'post',
			success:function(data){
				$('#Listauto').html(data);

			}
		});
	}

	function MostrarModal(dir)
	{
		$('.modal-body').load(dir, function () {
			$('#modal_auto').modal({show: true});
		});
	}

	function eliminar_m(id){
		var opcion = confirm('¿ Deseas eliminar realmente los datos?');
		if(opcion== true){
			var url ='<?php echo base_url(); ?>AutoCtr/eliminar';
			$.ajax({
				url :url,
				type:'post',
				data:'id='+id,
				success:function(data){
					if(data == true|| data==="true"){
						alert('Datos eliminado correctamente');
						tabla_marca();
					}else{
						alert('Error al eliminar');
					}
				}
			});

		}

	}

	function eliminar_auto(id){
		var opcion= confirm('¿Deseas eliminar realmente este dato?');
		if(opcion == true){
			var eliminar=' <?php echo base_url(); ?>AutoCtr/eliminar_tipo?>'
			$.ajax({
				url:eliminar,
				type:'post',
				data:'id='+id,
				success:function(data){
					if(data == true ||data ==='true'){
						alert('Datos eliminados correctamente');
						tabla_tipo();

					}else{
						alert('Error al eliminar');
					}
				}
			});
		}
	}

</script>