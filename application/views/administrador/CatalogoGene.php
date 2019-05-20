<style type="text/css">
#head{
	background-color:#01579B;
}
</style>
<section class="full-width header-well">
	<div class="text-center">	<a href="<?=base_url();?>AutoCtr/Mostrartipoauto" class="full-width header-well-icon" ><i class="zmdi zmdi-settings-square "></i></a></div> 
	<div class="full-width header-well-text">
		<p class="text-condensedLight">
			Lista General de Carros en la empresa
		</p>
		
	</div> 
</section>


<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">

	<div class="mdl-tabs__panel  is-active" id="tabListClient">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop mdl-cell--0-offset-desktop">
				<p class="text-center">
					<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="agregar">
						<i class="zmdi zmdi-plus"></i>
					</button>     
					
				</p>
				<div class="mdl-tooltip" for="btn-addCompany">Agregar Carro</div> 
				
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle  text-center tittles" id="head">
						Catalogo General 
					</div>
					
					<table id="cataGene" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width text-center">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Marca</th>
								<th scope="col">Modelo</th>
								<th scope="col">Monto</th>
								<th scope="col">Cantidad Carros</th>
								<th scope="col">stock Minimo</th>
								<th scope="col">Año</th>
								<th scope="col">Estado</th>
								<th scope="col">Acciones</th>																	
							</tr>
						</thead>
						<tbody id="LisGeneral" >

						</tbody>

					</table>

				</div>
<script type="text/javascript">
	$(document).ready(function() {
    $('#cataGene').DataTable();
} );
	
</script>
			</div>
		</div>

	</div>
	<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					
				</div>
			</div>
		</div>
	</div>
</div>
<!--Agregar-->

<!---->
</div>
</div>	
<!---===============================================-->			
</div>		
</section>


<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!--form-->
			<div class="full-width panel-content">
				<form id="CatalogoG" method="get" action="<?php echo base_url();?>CatalogoCtr/agregar">
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--12-col">
							<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS DEL CARRO</legend><br>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<select class="mdl-textfield__input" type="text"  id="id_marca" name="id_marca"></select>
								
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="modelo" name="modelo">
								<label class="mdl-textfield__label" for="NameCompany">Modelo</label>										
							</div>
						</div>
						<!----->
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text"  id="año" name="año">
								<label class="mdl-textfield__label" for="NameComapny">0000</label>
							</div>
						</div>
						<!---->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<select class="mdl-textfield__input" type="text" id="tipoauto" name="tipoauto"></select>
								
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="monto" name="monto" class="monto">
								<label class="mdl-textfield__label" for="urlCompany">Monto</label>
							</div>
						</div>
						<!---->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text"  id="tipo_motor" name="tipo_motor">
								<label class="mdl-textfield__label" for="phoneCompany">Motor</label>
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="tel"  id="cilindros" name="cilindros">
								<label class="mdl-textfield__label" for="faxCompany">Cilindro</label>
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="transmision" name="transmision">
								<label class="mdl-textfield__label" for="coinCompany">Trasmision</label>
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<select class="mdl-textfield__input" type="text" id="traccion" name="traccion" class="traccion"></select>
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="combustible" name="combustible" class="traccion">
								<label class="mdl-textfield__label" for="coinCompany">Combustible</label>
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="nota" class="nota">
								<label class="mdl-textfield__label" for="coinCompany">Nota</label>
							</div>
						</div>
						<!---->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="number" id="cantidad" name="cantidad" class="traccion">
								<label class="mdl-textfield__label" for="coinCompany">Cantidad</label>
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="stock" name="stock" class="traccion">
								<label class="mdl-textfield__label" for="coinCompany">Stock</label>
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<select class="mdl-textfield__input" type="file" id="id_estado" name="id_estado" class="id_estado"></select>
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="file" id="uno" name="uno" class="foto">
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="file"  id="dos" name="dos">
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="file"  id="tres" name="tres">
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="file" id="cuatro" name="cuatro" class="foto">
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="file"  id="cinco" name="cinco">
							</div>
						</div>
						<!----->
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="file"  id="seis" name="seis">
							</div>
						</div>

						<p class="text-center">
							<button class="btn btn-primary" id="enviarcata"> Enviar
							</button>
							<div class="mdl-tooltip" for="btn-addCompany">Agregar Carros</div>
						</p>
					</form>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						listaAutosGene();
						llenar_estado();
						select_marca();
						traccion1();
						tipo();
					});
					
					function modal_auto(dir)
					{
						$('.modal-body').load(dir, function () {
							$('#exampleModal').modal({show: true});
						});
					}  

					function listaAutosGene(){	
						var url = "<?php echo base_url();?>CatalogoCtr/ListGeneralEmpre";
						$.ajax({
							url:url,
							type:"post",
							success:function(data){
								$('#LisGeneral').html(data);
							}

						});
					}

					function llenar_estado(){
						var url="<?php echo base_url();?>CatalogoCtr/estado";
						$.ajax({
							url:url,
							type:'post',
							success: function(data) {
								$('#id_estado').html(data);
							}
						});
					}

					function select_marca() {
						
						var mar="<?php echo base_url();?>CatalogoCtr/marca";
						$.ajax({
							url:mar,
							type:'post',
							success:function(data) {
								$('#id_marca').html(data);
							}
						});
					}
					function traccion1(){
						var url="<?php echo base_url();?>CatalogoCtr/traccion";
						$.ajax({
							url:url,
							type:'post',
							success: function (data) {
								$('#traccion').html(data);
							}
						});
					}
					function tipo(){
						var url="<?php echo base_url();?>CatalogoCtr/tipo_auto";
						$.ajax({
							url:url,
							type:'post',
							success: function (data) {
								$('#tipoauto').html(data);
							}
						});
					}

					function eliminar_a(id){
						var opcion = confirm('¿Deseas eliminar estos datos?');
						if(opcion  ==true){
							var eli="<?php echo base_url();?>CatalogoCtr/eliminar_auto";
							$.ajax({
								url:eli,
								type:'post',
								data:'id='+id,
								success:function(data){
									if(data==true){
										alert('Datos eliminados Correctamente');
										listaAutosGene();
									}else{

									}
								}

							});
						}


					}



					$('#agregar').click(function(){
						$('#modal').modal('show');

					});
				</script>
