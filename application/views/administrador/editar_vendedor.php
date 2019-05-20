	<?php foreach ($vendedor as $value) { ?>
		<form id="formulariove" >
			<input type="hidden" name="id_vendedor" value="<?php echo $value['id_vendedor'];?>">
			<div class="form-group">
				<input type="text" class="form-control" name="nombre" id="nombre"  value="<?php echo $value['nombre'];?>">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $value['apellido'];?>">

			</div>	
			<div class="form-group">
				<input type="text" name="codigo" id="codigo"  class="form-control" value="<?php echo $value['codigo'];?>"    >
			</div>
			<div class="form-group">
				<input type="text" name="direccion" id="direccion" class="form-control"  value="<?php echo $value['direccion'];?>" >
			</div>				

			<div class="form-group">
				<input type="text" name="dui" id="dui" class="form-control" value="<?php echo $value['dui'];?>" >
			</div>
			<div class="form-group">
				<select name="id_estado" id="id_estado" class="form-control" value='<?php echo $value['id_estado'];?>' >

				</select>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-success" type="button" onclick="Vendedor()">Editar</button>
			</div>
		</form>
	<?php } ?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		llenar_estado();
		llenartabla();
	});


	function llenar_estado(){
		var url ='<?php echo base_url();?>VendedorCtr/estado';
		$.ajax({
			type:'post',
			url:url,
			success:function(data){
				$('#id_estado').html(data);
				$('#id_estado').val('<?php echo $value['id_estado'];?>');
			}
		});
	}

	function Vendedor() {
		var url= '<?php echo base_url(); ?>VendedorCtr/editar_vendedor';
		$.ajax({
			type:'post',
			url:url,
			data: $('#formulariove').serialize(),
			success:function(data){
				if(data==1){
					Swal.fire({
						title: "Good job!",
						text: "Datos Actualizados correctamente!",
						type: "success",
						showConfirmButton: false,
						timer: 1500

					});
					llenartabla();

				}
			}
		});
	}

</script>
