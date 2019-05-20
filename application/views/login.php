<div class="login-wrap cover">
		<div class="container-login">
			<p class="text-center" style="font-size: 80px;">
				<i class="zmdi zmdi-account-circle"></i>
			</p>
			<p class="text-center text-condensedLight">Sistema de ventas <span>CarSale</span> </p>
			<form action="<?php echo base_url();?>loginCtr/validar_session" method="post">

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="userName" name="user_name" required >
				    <label class="mdl-textfield__label" for="userName">Usuario</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
				    <input class="mdl-textfield__input" type="password" id="pass" name="password" required>
				    <label class="mdl-textfield__label" for="pass">Contraseña</label>
				</div>
				<input type="submit" value="Iniciar Sesion" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; margin: 0 auto; display: block;">
				
			</form>
			<h3> <?php if($this->session->flashdata('error')){?></h3>
     		 <div class="alert alert-danger"><?= $this->session->flashdata('error')?></div>
    			<?php }?>
		</div>
	</div>