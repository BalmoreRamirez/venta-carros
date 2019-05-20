 <!--======================================================================================================-->
 <section class="full-width navLateral">
 	<div class="full-width navLateral-bg btn-menu"></div>
 	<div class="full-width navLateral-body">

 		<figure class="full-width navLateral-body-tittle-menu">
 			<div>
 				<img src="<?=base_url();?>libre/assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
 			</div>
 			<figcaption>
 				<span>
 					<?php echo $this->session->userdata('user_name');?>				
 				</span>
 			</figcaption>
 		</figure>
 		<nav class="full-width">
 			<ul class="full-width list-unstyle menu-principal">
 				<li class="full-width">
 					<a href="<?=base_url();?>Inicial" class="full-width">
 						<div class="navLateral-body-cl">
 							<i class="zmdi zmdi-view-dashboard"></i>
 						</div>
 						<div class="navLateral-body-cr">
 							HOME
 						</div>
 					</a>
 				</li>

 				<li class="full-width divider-menu-h"></li>					
 				<li class="full-width">
 					<a href="#" class="full-width btn-subMenu">
 						<div class="navLateral-body-cl">
 							<i class="zmdi zmdi-store"> </i>
 						</div>
 						<div class="navLateral-body-cr">
 							SUCURSALES
 						</div>
 						<span class="zmdi zmdi-chevron-left"></span>
 					</a>
 					<ul class="full-width menu-principal sub-menu-options">
 						<li class="full-width">
 							<a href="<?=base_url();?>SucursalCtr/sucursal" class="full-width">
 								<div class="navLateral-body-cl">
 									<i class="zmdi zmdi-balance"></i>
 								</div>
 								<div class="navLateral-body-cr">
 									Sucursal
 								</div>

 							</a>
 						</li>
 						<li class="full-width">
 							<a href="<?=base_url();?>SucursalCtr/formulario" class="full-width">
 								<div class="navLateral-body-cl">
 									<i class="zmdi zmdi-balance"></i>
 								</div>
 								<div class="navLateral-body-cr">
 									Agregar Sucursal
 								</div>

 							</a>
 						</li>

						<li class="full-width">
 							<a href="<?php echo base_url(); ?>confi_sucur/index" class="full-width">
 								<div class="navLateral-body-cl">
 									<i class="zmdi zmdi-balance"></i>
 								</div>
 								<div class="navLateral-body-cr">
 									configuracion de sucursal
 								</div>

 							</a>
 						</li>	

 					</ul>
 				</li>
 				<li class="full-width divider-menu-h"></li>					
 				<li class="full-width">
 					<a href="#" class="full-width btn-subMenu">
 						<div class="navLateral-body-cl">
 							<i class="zmdi zmdi-case"></i>
 						</div>
 						<div class="navLateral-body-cr">
 							CATALOGO
 						</div>
 						<span class="zmdi zmdi-chevron-left"></span>
 					</a>
 					<ul class="full-width menu-principal sub-menu-options">
 						<li class="full-width">
 							<a href="<?=base_url();?>CatalogoCtr/CataloGene" class="full-width">
 								<div class="navLateral-body-cl">
 									<i class="zmdi zmdi-balance"></i>
 								</div>
 								<div class="navLateral-body-cr">
 									CATALOGO GENERAL
 								</div>

 							</a>
 						</li>														
 					</ul>
 				</li>
 				<li class="full-width divider-menu-h"></li>					
 				<li class="full-width">
 					<a href="#" class="full-width btn-subMenu">
 						<div class="navLateral-body-cl">
 							<i class="zmdi zmdi-account"> </i>
 						</div>
 						<div class="navLateral-body-cr">
 							USUARIOS
 						</div>
 						<span class="zmdi zmdi-chevron-left"></span>
 					</a>
 					<ul class="full-width menu-principal sub-menu-options">
 						<li class="full-width">
 							<a href="<?php echo base_url();?>DireccionCtr/MostrarGerente" class="full-width">
 								<div class="navLateral-body-cl">
 									<i class="zmdi zmdi-balance"></i>
 								</div>
 								<div class="navLateral-body-cr">
 									GERENTE 
 								</div>

 							</a>
 						</li>
 						<li class="full-width">
 							<a href="<?php echo base_url();?>DireccionCtr/MostrarVendedor" class="full-width">
 								<div class="navLateral-body-cl">
 									<i class="zmdi zmdi-balance"></i>
 								</div>
 								<div class="navLateral-body-cr">
 									VENDEDORES
 								</div>

 							</a>
 						</li>															
 					</ul>

 				</li>
 				<li class="full-width divider-menu-h"></li>															
 			</nav>
 		</div>
 	</section>
 	<!--======================================================================================================-->
 	<section class="full-width pageContent">
 		<!-- Notifications area -->
 		<section class="full-width container-notifications">
 			<div class="full-width container-notifications-bg btn-Notification"></div>
 			<section class="NotificationArea">
 				<div class="full-width text-center NotificationArea-title tittles">Usuarios <i class="zmdi zmdi-close btn-Notification"></i></div>
 				<a class="Notification user-form" id="notifation-unread-1">
 					<div class="Notification-icon"><i class="zmdi zmdi-accounts-alt "></i></div>
 					<div class="Notification-text">
 						<p>
 							<i class="zmdi zmdi-circle"></i>
 							<strong>Registrar Usuario</strong> 
 							<br>

 						</p>
 					</div>	        	
 				</a>
 				<script type="text/javascript">
 					$('.user-form').click(function(){
 						$('#exampleModal').modal('show');
 					});
 				</script>
 			</section>
 		</section>
 		<!-- navBar -->
 		<div class="full-width navBar">
 			<div class="full-width navBar-options">
 				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	
 				<div class="mdl-tooltip" for="btn-menu">Deslizar Menu</div>
 				<nav class="navBar-options-list">
 					<ul class="list-unstyle">
 						<li class="btn-Notification" id="notifications">
 							<i class = "zmdi zmdi-settings"> </i>
 							<div class="mdl-tooltip" for="notifications">Configuraciones</div>
 						</li>
 						<li class="btn-exit" id="btn-exit">
 							<i class="zmdi zmdi-power"></i>
 							<div class="mdl-tooltip" for="btn-exit">cerrar session</div>
 						</li>
 						<li class="text-condensedLight noLink" ><small><?php echo $this->session->userdata('user_name');?></small></li>
 						<li class="noLink">
 							<figure>
 								<img src="<?=base_url();?>libre/assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
 							</figure>
 						</li>
 					</ul>
 				</nav>
 			</div>
 		</div>