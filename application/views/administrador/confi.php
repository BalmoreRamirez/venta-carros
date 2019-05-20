
<style type="text/css">
	#head{
	background-color:#01579B;
}
</style>
<section class="full-width header-well">
	<div class="full-width header-well-icon">
		<i class="zmdi zmdi-label"></i>
	</div>
	<div class="full-width header-well-text">
		<p class="text-condensedLight">
			Configuracion de Sucursal
		</p>
	</div>
</section>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	<div class="mdl-tabs__tab-bar">
		<a href="#tabListClient" class="mdl-tabs__tab is-active">Listar</a>
		<a href="#crearsucursal" class="mdl-tabs__tab">Crear</a>
	</div>
	<div class="mdl-tabs__panel  is-active" id="tabListClient">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop mdl-cell--0-offset-desktop">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle  text-center tittles" id="head">
						Lista De Vendedores
					</div>
					
					
						<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Auto</th>
									<th scope="col">Sucursal</th>
									<th scope="col">Unidades</th>
									<th scope="col">Color</th>
									<th scope="col">Accion</th>
									
									
									
								</tr>
							</thead>
							<tbody id="tablasucursal">

							</tbody>

						</table>

				
				</div>

			</div>
		</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
      <div class="modal-content">
    	<div class="modal-body">
    		
    	</div>
    </div>
</div>
</div>
	</div>

	<!---ingresar -->
	<div class="mdl-tabs__panel" id="crearsucursal">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop mdl-cell--0-offset-desktop">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle text-center tittles" id="head">
						Ingresar Informacion
					</div>
<div class="full-width panel-content">
<div class="row justify-content-md-center">
<div class="col-lg-10">
<div id="form" class="card-body">			
	<div class="">
		<!---formulario de gerente-->

	<form  id="form_gerente"  method="post" id="formulario" action="<?php echo base_url(); ?>confi_sucur/guardar">
		<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<select class="mdl-textfield__input" name="id_auto" id="id_auto">

			</select>
        </div>
    </div>
    	<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<select class="mdl-textfield__input" name="id_sucursal" id="id_sucursal">
				
			</select>
			</div>
		</div>	
		<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input type="number" name="unidades" id="unidades"  class="mdl-textfield__input" placeholder="unidades" >
		</div>
	</div>
	<div class="mdl-cell mdl-cell--6-col">
	   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<select class="mdl-textfield__input" name="id_color" id="id_color">
				
			</select>
		</div>	
		</div>
		<div class="mdl-cell mdl-cell--6-col">			
		<div class="form-group text-center">
			<button id="enviar" class="btn btn-primary">
				Enviar
			</button>
		</div>
	</div>
	</div>
	</form>
	</div>
</div>
</div><!--card-->
</div>
</div>
				</div>
			</div>
		</div>
	</div>
	<!---->
</div>
</div>	
<!---===============================================-->			
</div>		
</section>
<script type="text/javascript">
	
	$(document).ready(function(){
		llenar_auto();
		llenar_sucursal();
		llenar_color();
		llenar_tabla();
	});

	/*function llenar_auto()
	{
		var url = '<?php //echo base_url();?>confi_sucur/auto';
		$.ajax({
			type:'post',
			url:url,
			success:function(data){
				$('#id_auto').html(data);
			}
		});
	}*/

	function llenar_auto(){
		var url ='<?php echo base_url();?>confi_sucur/auto';
		$.ajax({
			type: 'post',
			url:url,
			success: function(data){
				$('#id_auto').html(data);
			}
		});
	}

	function llenar_sucursal()
	{
		var url = '<?php echo base_url(); ?>confi_sucur/sucursal';
		$.ajax({
			type:'post',
			url:url,
			success:function(data){
				$('#id_sucursal').html(data);
			}
		});
	}

	function llenar_color()
	{
		var url = '<?php echo base_url(); ?>confi_sucur/color';
		$.ajax({
			type:'post',
			url:url,
			success:function(data){
				$('#id_color').html(data);
			}
		});
	}

	function guardar()
	{
		url='<?php echo base_url(); ?>confi_sucur/guardar';
		$.ajax({
			type:'post',
			url:url,
			data:$('#formulario').serialize(),
			success:function(data){
				if(data==true){
					alert("Guardado con exito");
				}else{
					alert("Algo anda mal")
				}
			}
		});
	}

	function llenar_tabla()
	{
		url='<?php echo base_url(); ?>confi_sucur/listar';
		$.ajax({
			type:'post',
			url:url,
			success:function(data){
				$('#tablasucursal').html(data);
			}
		});
	}

	function MostrarModal(dir)
	{
		$('.modal-body').load(dir, function () {
			$('#exampleModal').modal({show: true});
		});
	}


</script>