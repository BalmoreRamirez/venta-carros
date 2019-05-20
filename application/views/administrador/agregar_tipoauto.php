<form id="form_tipo">
	<div class="mdl-cell mdl-cell--12-col">
		<legend class="text-condensedLight text-center"><i class="zmdi zmdi-border-color"></i> &nbsp; AGREGAR DATOS</legend><br>
	</div>
	<div class="mdl-cell mdl-cell--9-col mdl-cell--10-col-tablet">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" id="tipo" name="tipo" placeholder="Nombre Tipo Carro">									
		</div>
	</div>
	<div class="text-center">
		<button class="btn btn-primary" type="button" onclick="agregar_auto()"> Enviar
		</button>
		<div class="mdl-tooltip" for="btn-addCompany">Agregar Carros</div>
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
   tabla_tipo();
	});
	
	function agregar_auto(){
		var tip ='<?php echo base_url() ?>AutoCtr/agregar_tipo'
		$.ajax({
			url:tip,
			type:'post',
			data: $('#form_tipo').serialize(),
			success: function(data){
				if(data ==1){
                   Swal.fire({
						title: "Datos Ingresados Correctamente!",
						type: "success",
						showConfirmButton: false,
						timer: 1500

					});
                   tabla_tipo();
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