	 <div class="modal-body">
	 	<?php foreach ($gerente as $value) { ?>
	 		<form id="fgerente" >
	 			<input type="hidden" name="id_gerente" value="<?php echo $value['id_gerente'];?>">
	 			<div class="form-group">
	 				<input type="text" class="form-control" name="nombreG" id="nombreG"  value="<?php echo $value['nombreG'];?>">
	 			</div>
	 			<div class="form-group">
	 				<input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $value['apellido'];?>">

	 			</div>	
	 			<div class="form-group">
	 				<input type="text" name="codigo" id="codigo"  class="form-control" value="<?php echo $value['codigo'];?>"    >
	 			</div>

	 			<div class="form-group text-center">
	 				<button class="btn btn-success" type="button" onclick="gerente()">Editar</button>
	 			</div>
	 		</form>
	 	<?php } ?>
	 </div>
	 <script type="text/javascript">
	 	$(document).ready(function(){
	 		 tablagerente();

	 	});

	 	function gerente(){
	 		var url="<?php echo base_url();?>gerenteCtr/editar_gerente";
	 		$.ajax({
	 			url:url,
	 			type:'post',
	 			data: $('#fgerente').serialize(),
	 			success:function(data){
	 				if(data==1){
	 				Swal.fire({
						title: "Good job!",
						text: "Datos Actualizados correctamente!",
						type: "success",
						showConfirmButton: false,
						timer: 1500

					});
					 tablagerente();
	 			 }
	 			}
	 		});
	 	}

	 </script>