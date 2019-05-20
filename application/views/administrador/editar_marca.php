
<?php foreach ($marca as $value)  {?>
	<form id="form_marca">
		<div class="mdl-cell mdl-cell--12-col">
			<legend class="text-condensedLight text-center"><i class="zmdi zmdi-border-color"></i> &nbsp; EDITAR DATOS</legend><br>
		</div>
		<input type="hidden" name="id_marca" id="marca" value='<?php echo $value['id_marca'] ?>'>
		<div class="mdl-cell mdl-cell--9-col mdl-cell--10-col-tablet">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="marca" value='<?php echo $value['marca']; ?>'' name="marca">								
			</div>
		</div>
		<div class="text-center">
			<button class="btn btn-warning" type="button" onclick="editar_mar()"> Editar
			</button>
		</div>
		
	</form>
<?php }?>
<script type="text/javascript">
	$(document).ready(function(){
   
   tabla_marca();
	});
	
	function editar_mar(){
		var url='<?php echo base_url(); ?>AutoCtr/editar_marca';
		$.ajax({
			url:url,
			type:'post',
			data: $('#form_marca').serialize(),
			success: function(data){
				if(data==1){
					Swal.fire({
						text: "Datos Actualizados correctamente!",
						type: "success",
						showConfirmButton: false,
						timer: 2000

					});
					tabla_marca();

				}
			}
		});
	} 

</script>