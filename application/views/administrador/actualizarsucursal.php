
	<?php foreach ($sucursal as $value) { ?>
		<form id="formsucur" enctype="multipart/form-data">						
			<div class="form-group">
				<input type="hidden" name="id_sucursal" value='<?php echo $value['id_sucursal'];?>'>
				<input type="text" class="form-control"  value='<?php echo $value['nombre'];?>' name="nombre" id="nombre" placeholder="Nombre de la sucursal" >
			</div>				
			<div class="form-group">
				<input type="text" name="direccion" value='<?php echo $value['direccion'];?>' id="direccion" class="form-control" placeholder="Ubicacion de la sucursal" >
			</div>				
			<div class="form-group">
				<select name="id_gerente" value='<?php echo $value['id_gerente'];?>' id="id_gerente" class="form-control"></select>
			</div>

			<div class="form-group">
				<select name="id_estado" id="id_estado" value='<?php echo $value['id_estado'];?>' class="form-control" ></select>
			</div>
			<div class="form-group">
				<input type="file" name="imagen" id="imagen"  class="input-group-text">
			</div>

			<div class="form-group">
				<input type="number"  value='<?php echo $value['telefono'];?>' name="telefono" id="telefono" class="form-control" placeholder="Tel:000-000-000">
			</div>

			<div class="form-group">
				<input type="text" name="correo"  value='<?php echo $value['correo'];?>' id="correo" class="form-control" placeholder="correo@gmail.com">
			</div>
			<div class="form-group text-center">
				<button id="enviar" type="button" class="btn btn-info"   onclick="editar1()">Editar</button>
			</div>

		</form>
	<?php } ?>

<script type="text/javascript">
	$(document).ready(function(){
		llenar_estado();
		llenar_gerente();
		Listbranchoffice();		
	});
	function llenar_estado(){
		var url ='<?php echo base_url();?>SucursalCtr/estado';
		$.ajax({
			type: 'post',
			url:url,
			success: function(data){
				$('#id_estado').html(data);
				$('#id_estado').val('<?php echo $value['id_estado'];?>')
			}
		});
	}
	
	//==============================================================================
	
	function llenar_gerente(){			
		$.ajax({
			url:'<?php echo base_url();?>SucursalCtr/gerente',
			type:'post',				
			success:function(data){
				$('#id_gerente').html(data);
				$('#id_gerente').val('<?php echo $value['id_gerente'];?>')
			}
		});
	}
	//==============================================================================

	function editar1(){
		var url="<?php echo base_url();?>SucursalCtr/editar";
		$.ajax({
			type:'post',	
			url: url,
			data: $('#formsucur').serialize(),
			success: function(data){
				if(data==1){
					Swal.fire({
						text: "Datos Actualizados correctamente!",
						type: "success",
						showConfirmButton: false,
						timer: 2000
					});
					Listbranchoffice();

				}else{

				}
			}
		});
	}
</script>