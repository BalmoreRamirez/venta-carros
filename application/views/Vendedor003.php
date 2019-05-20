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
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Uusuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Numero de DUI</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telefono</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

			<div class="form-group">
			<label for="exampleFormControlFile1">Imagen de perfil</label>
			<input type="file" class="form-control-file" id="perfil">
			</div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
		

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewClient" class="mdl-tabs__tab is-active">Crear</a>
				<a href="#tabListClient" class="mdl-tabs__tab">Listar</a>
			</div>
			<!--========================================================================================-->
			<div class="mdl-tabs__panel is-active" id="tabNewClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Crear 
							</div>
							<div class="full-width panel-content">
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre del vendedor">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Apellido del vendedor">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Cogigo del Vendedor">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="DUI">
                            </div>
                            <div class="col">
                            <select class="form-control" id="estado"></select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">                    
                            <div class="col">                           
                           <input type="text" class="form-control" placeholder="Direccion del vendedor">
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                        <button id="enviar" class="btn btn-info">Enviar</button>
               
                        </div>
                    </form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--========================================================================================-->
			<div class="mdl-tabs__panel" id="tabListClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop mdl-cell--0-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Listar vendedor
							</div>
							<div class="full-width panel-content">
								<form action="#">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchClient">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchClient">
											<label class="mdl-textfield__label"></label>
										</div>
									</div>
								</form>
                                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Codigo</th>
      <th scope="col">Direccion</th>
      <th scope="col">DUI</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<!--este es un cambio de prueba-->
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!--========================================================================================-->
		</div>

		
	</section>
