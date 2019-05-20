
<section class="full-width header-well">
<style>
.demo-layout-transparent {
  background: url('https://www.diariomotor.com/imagenes/picscache/1920x1600c/tesla-model-3-01_1920x1600c.jpg') center / cover;
  height: 345px;
}
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: white;
}
</style>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="h4">SISTEMA DE ADMINISTRACION  GENERAL </div> 
			<div class="display-4 text-left">GRUPO Q</div>

     
    </div>
  </header>

</div>
</section>
<br>
<br>
<br>

<section class="full-width text-center" style="padding: 40px 0; margin-top: 80px">
	<p></p>

			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						<h1><?= $datos->co ?></h1>
						<small>TOTAL DE SUCURSALES</small>
					</span>
				</div>
				<i class="zmdi zmdi-store tile-icon"> </i>
			</article>
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
					<h1><?= $vende->co ?></h1>
						<small>TOTAL DE VENDEDORES</small>
					</span>
				</div>
				<i class="zmdi zmdi-accounts tile-icon"></i>
			</article>
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
					<h1><?= $auto->co ?></h1>
						<small>GAMA DE CARROS</small>
					</span>
				</div>
				<i class="zmdi zmdi-truck tile-icon"></i>
			</article>
		</section>
