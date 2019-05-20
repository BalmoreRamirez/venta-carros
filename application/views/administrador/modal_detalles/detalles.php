<style type="text/css">
img{
	border-radius: 20px;		
}
img{
	width: 250px;
	height: 300px;
}
.color{
	background-color:#2E9AFE;
}

</style>

		<div class="mdl-cell mdl-cell--12-col">
			

				<div class="full-width panel-content">

					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--12-col">
							<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"> <?=$detalle->marca?> <?=$detalle->Modelo?> <?=$detalle->año?></i></legend>
						</div>
						
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								
								<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class=" img-rounded mdl-cell--12-col d-block w-100" src="<?= base_url($detalle->uno);?>"  alt="First slide">
										</div>
										<div class="carousel-item">
											<img class=" img-rounded mdl-cell--12-col d-block w-100" src="<?= base_url($detalle->dos);?>"  alt="Second slide">
										</div>
										<div class="carousel-item">
											<img class=" img-rounded mdl-cell--12-col d-block w-100" src="<?= base_url($detalle->tres);?>"  alt="Third slide">
										</div>
										<div class="carousel-item">
											<img class=" img-rounded mdl-cell--12-col d-block w-100" src="<?= base_url($detalle->cuatro);?>"  alt="Third slide">
										</div>
										<div class="carousel-item">
											<img class=" img-rounded mdl-cell--12-col d-block w-100" src="<?= base_url($detalle->cinco);?>"  alt="Third slide">
										</div>
										<div class="carousel-item">
											<img class=" img-rounded mdl-cell--12-col d-block w-100" src="<?= base_url($detalle->seis);?>"  alt="Third slide">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						
						
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th colspan="4" class="color"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Tipo de cuerpo</td>
											<td><?=$detalle->tipo?></td>
											<td>Color</td>
											<td><?=$detalle->color?></td>
										</tr>
										<tr>
											<td>Consumo</td>
											<td><?=$detalle->tipo_motor?></td>
											<td>Cilindros</td>
											<td><?=$detalle->cilindros?></td>
										</tr>
										<tr>
											<td>Transmisión</td>
											<td><?=$detalle->transmision?></td>
											<td>Tracción</td>
											<td><?=$detalle->traccion?></td>
										</tr>
										<tr>
											<td>Combustible</td>
											<td><?=$detalle->combustible?></td>
											<td>Nota</td>
											<td><?=$detalle->nota?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
	
		
