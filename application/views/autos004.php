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

<div class="container-fluid">
	<div id="caja" class="row my-4">
		<!----->	

		
	</div>
</div>

	</section>



<script type="text/javascript">


//recarda galeria de autos
	$(document).ready(function(){
		listarAutos();
	
});


//listamos los autos con ajax
function listarAutos(){
	var url = '<?php echo base_url();?>autosCtr/listarAutos';
		$.ajax({
			type:'post',
			url:url,
			success:function(data) {
				$('#caja').html('');
				$('#caja').html(data);
			}
		});
}

/*
$('#guardar').click(function(e){
	e.preventDefault();
	$.ajax({
		url:"<?php echo base_url('Clientes_controller/Guardar_cliente');?>",
		type:"post",
		datatype:"json",
		data:$('#datos').seria5lize(),
		success:function(data){
			if (data===true || data ==="true") {
				alert("Insertado con exito");
				listarClient();
			}
		}
	});
});

	//ELIMINAR SUCURSAL
function eliminar(id){
    var opcion = confirm("¿Estás seguro de eliminar?");
     if (opcion == true) {
         var url = '<?php echo base_url();?>Clientes_controller/eliminar_clientes';
         $.ajax({
                type:'post',
                url:url,
                data:'id='+id,
                success:function(data){
                   if(data==1) {
                      alert('Eliminado con exito');
                      listarClient();
                  }else{
                      alert('Registro no eliminado');
                     }
              }
      });         
    } 
}	
*/

	</script>