<?php foreach ($sucursal_auto as $value) { ?>
	<form id="form_auto">
		<div class="mdl-grid">
			<input type="hidden" name="id_sau" id="id_sau" value='<?php echo $value['id_sau'];?>'>
			<!----->
	<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

			<select class="mdl-textfield__input"   id="id_auto" name="id_auto" value='<?php echo $value['Modelo']?>'>
						
					</select>

				</div>
			</div>
			<!-- -->
	<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<select class="mdl-textfield__input"   id="id_sucursal" name="id_sucursal" value='<?php echo $value['nombre']?>'>
						
					</select>

				</div>
			</div>
			<!-- -->

			<!----->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text"  id="unidades" name="unidades" value="<?php echo $value['unidades'];?>"  >
				</div>
			</div>
			<!---->

			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<select class="mdl-textfield__input"   id="id_colores" name="id_colores" value='<?php echo $value['color']?>'>
						
					</select>

				</div>
			</div>
			<!-- -->
			<div class="text-center">
			<input type="button" name="actualizar" value="Actualizar" class="btn btn-success">
			</div>
		</div>
</form>
<?php } ?>

<script type="text/javascript">
	
	$(document).ready(function(){
		 auto();
		 Sucursal();
		 Colores();
		 
	});

	function auto() {

		var url="<?php echo base_url();?>confi_sucur/auto";
		$.ajax({
			url:url,
			type:'post',
			success:function(data) {
				$('#id_auto').html(data);
				$('#id_auto').val('<?php echo $value['id_auto']; ?>');
			}
		});
	}

	function Sucursal() {

		var url="<?php echo base_url();?>confi_sucur/sucursal";
		$.ajax({
			url:url,
			type:'post',
			success:function(data) {
				$('#id_sucursal').html(data);
				$('#id_sucursal').val('<?php echo $value['id_sucursal']; ?>');
			}
		});
	}

	function Colores() {

		var url="<?php echo base_url();?>confi_sucur/color";
		$.ajax({
			url:url,
			type:'post',
			success:function(data) {
				$('#id_colores').html(data);
				$('#id_colores').val('<?php echo $value['id_color']; ?>');
			}
		});
	}



</script>