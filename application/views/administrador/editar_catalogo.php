<?php foreach ($catalogo as $value) { ?>
	<form id="form_auto">
		<div class="mdl-grid">
			<input type="hidden" name="id_auto" id="id_auto" value='<?php echo $value['id_auto'];?>'>
			<!----->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label for="">Marca:</label>
					<select class="mdl-textfield__input" type="text"  id="id_marca" name="id_marca"  >
						
					</select>

				</div>
			</div>
			<!----->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="modelo" name="modelo" value='<?php echo $value['Modelo'];?>'>									
				</div>
			</div>
			<!----->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text"  id="año" name="año" value="<?php echo $value['año'];?>"  >
				</div>
			</div>
			<!---->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<select class="mdl-textfield__input" type="text" id="tipoauto"  name="tipoauto" value='<?php echo $value['tipo_cuerpo'];?>'>
					</select>

				</div>
			</div>

			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="monto" name="monto" value='<?php echo $value['Monto'];?>' >

				</div>
			</div>
			<!---->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text"  id="tipo_motor" value='<?php echo $value['tipo_motor'];?>' name="tipo_motor">

				</div>
			</div>
			<!----->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="tel"  id="cilindros" value='<?php echo $value['cilindros'];?>' name="cilindros">

				</div>
			</div>
			<!----->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="transmision" value='<?php echo $value['transmision'];?>' name="transmision">
				</div>
			</div>
			<!----->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<select class="mdl-textfield__input" type="text" id="traccion" name="traccion" >

					</select>
				</div>
			</div>
			<!----->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="combustible"  value='<?php echo $value['combustible'];?>' name="combustible">

				</div>
			</div>
			<!----->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="nota" value='<?php echo $value['nota'];?>' >

				</div>
			</div>
			<!---->
			<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="number" id="cantidad" value='<?php echo $value['cantidad'];?>' name="cantidad" >

				</div>
			</div>
			<!----->
			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="stock" value='<?php echo $value['stock'];?>' name="stock">

				</div>
			</div>
			<!----->
			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<select class="mdl-textfield__input" type="file" id="id_estado" name="id_estado" value='<?php echo $value['id_estado'];?>' >


					</select>
				</div>
			</div>
			<div>
				<button class="btn btn-warning" type="button" onclick="editar_auto()">EDITAR</button>
			</div>
		</div>
	</form>
<?php } ?>
<script type="text/javascript">
	$(document).ready(function(){
		llenar_esta();
		select();
		tra();
		auto1();
		listaAutosGene();
	});

	function llenar_esta(){
		var url="<?php echo base_url();?>CatalogoCtr/estado";
		$.ajax({
			url:url,
			type:'post',
			success: function(data) {
				$('#id_estado').html(data);
				$('#id_estado').val('<?php echo $value['id_estado'];?>');
			}
		});
	}

	function select() {

		var mar="<?php echo base_url();?>CatalogoCtr/marca";
		$.ajax({
			url:mar,
			type:'post',
			success:function(data) {
				$('#id_marca').html(data);
				$('#id_marca').val('<?php echo $value['Marca']; ?>')
			}
		});
	}
	function tra(){
		var url="<?php echo base_url();?>CatalogoCtr/traccion";
		$.ajax({
			url:url,
			type:'post',
			success: function (data) {
				$('#traccion').html(data);
				$('#traccion').val('<?php echo $value['traccion'];  ?>');
			}
		});
	}
	function auto1(){
		var url="<?php echo base_url();?>CatalogoCtr/tipo_auto";
		$.ajax({
			url:url,
			type:'post',
			success: function (data) {
				$('#tipoauto').html(data);
				$('#tipoauto').val('<?php echo $value['tipo_cuerpo']; ?>');
			}
		});
	}

	function editar_auto(){
		var auto ='<?php echo base_url();?>CatalogoCtr/editar_catalogo';
		$.ajax({
			url:auto,
			type:'post',
			data: $('#form_auto').serialize(),
			success:function(data){
				if(data==1){
					Swal.fire({
						text: "Datos Actualizados correctamente!",
						type: "success",
						showConfirmButton: false,
						timer: 2000
					});
					listaAutosGene();

				}
			}
		});
	}

</script>
