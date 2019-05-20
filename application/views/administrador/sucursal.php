<section>
	<div class="container-fluid">
		<div class="row my-3">
			<style>
			.demo-card-square.mdl-card {
				width: 320px;
				height: 350px;
			}
			.demo-card-square > .mdl-card__title {
				color: #fff;
			}
			img{
				height:150px;
			}
		</style>
		<?php foreach ($sucursal as $suc): $img = $suc['imagen'];?> 

			<div class="col-lg-4">
				<div class="demo-card-square mdl-card mdl-shadow--2dp my-4">
					<img src="<?php echo base_url($img)?>" alt="">
					<div class="mdl-card__title mdl-card--expand">

					</div>
					<div class="mdl-card__supporting-text">
						<h6 class="mdl-card__title-text"><?php echo $suc['nombre'];?></h6>
						<p>Bievenidos a la sucursal. <?php echo $suc['nombre'];?> entra para ver su catalogo de autos</p>
					</div>
					<div class="mdl-card__actions mdl-card--border">           
						<a href="<?=base_url();?>loadSucursal/cargarDataSucur/<?php echo $suc['id_sucursal'];?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Entrar</a>
					</div>
				</div>
			</div>
		<?php endforeach;?>
		<hr>
	</div>
</div>
</section>
