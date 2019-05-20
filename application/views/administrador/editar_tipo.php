<?php foreach ($tipo as $value) { ?>
	<form id="formauto">
		<div class="mdl-cell mdl-cell--12-col">
			<legend class="text-condensedLight text-center"><i class="zmdi zmdi-border-color"></i> &nbsp; EDITAR DATOS</legend><br>
		</div>
		<div class="mdl-cell mdl-cell--9-col mdl-cell--10-col-tablet">
			<input type="hidden" name="id_tipo"  value='<?php echo $value['id_tipo']; ?>'>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tipo" name="tipo" value='<?php echo $value['tipo']; ?>'>

			</div>
		</div>
		<div class="text-center">
			<button class="btn btn-warning" type="button" onclick="editar_t()"> Editar
			</button>
		</div>
	</form>
<?php }?>
<script type="text/javascript">
	$(document).ready(function(){
		tabla_tipo();
	});
	
	function editar_t(){
		var tipo ='<?php echo base_url(); ?>AutoCtr/editar_tipo';
		$.ajax({
			url:tipo,
			type:'post',
			data: $('#formauto').serialize(),
			success: function(data){
				if(data ==1){
					Swal.fire({
						text: "Datos Actualizados correctamente!",
						type: "success",
						showConfirmButton: false,
						timer: 2000

					});
					tabla_tipo();
				}
			}

		});
	}

</script>